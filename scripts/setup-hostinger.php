<?php

/** Interactive SSH bootstrap. Run: php scripts/setup-hostinger.php */
declare(strict_types=1);

function hostingerEnvValue(string $value): string
{
    if (str_contains($value, "\n") || str_contains($value, "\r") || str_contains($value, "\0")) {
        throw new RuntimeException('Environment values must be a single line.');
    }
    return '"'.str_replace(['\\', '"', '$'], ['\\\\', '\\"', '\\$'], $value).'"';
}

function hostingerUpdateEnv(string $source, array $values): string
{
    $source = str_replace(["\r\n", "\r"], "\n", $source);
    foreach ($values as $key => $value) {
        $line = $key.'='.hostingerEnvValue((string) $value);
        $pattern = '/^'.preg_quote($key, '/').'=[^\r\n]*$/m';
        $source = preg_match($pattern, $source)
            ? preg_replace_callback($pattern, fn () => $line, $source)
            : rtrim($source)."\n".$line."\n";
    }
    return $source;
}

function hostingerCapture(array $command): string
{
    $process = proc_open($command, [STDIN, ['pipe', 'w'], STDERR], $pipes);
    if (!is_resource($process)) throw new RuntimeException('Could not start setup command.');
    $output = stream_get_contents($pipes[1]);
    fclose($pipes[1]);
    if (proc_close($process) !== 0) throw new RuntimeException('Setup command failed. Check the SSH runtime and terminal.');
    return $output;
}

function hostingerPrompt(string $label, string $default = '', bool $secret = false): string
{
    if ($secret) {
        fwrite(STDOUT, $label.': ');
        $state = hostingerCapture(['stty', '-g']);
        if (!$state) throw new RuntimeException('A private SSH terminal is required for password input.');
        hostingerCapture(['stty', '-echo']);
        try { $answer = fgets(STDIN); }
        finally { hostingerCapture(['stty', trim($state)]); fwrite(STDOUT, "\n"); }
    } else {
        fwrite(STDOUT, $label.($default !== '' ? " [$default]" : '').': ');
        $answer = fgets(STDIN);
    }
    if ($answer === false) throw new RuntimeException('Input ended. Run this script interactively over SSH.');
    $answer = rtrim($answer, "\r\n");
    return $answer === '' ? $default : $answer;
}

function hostingerRun(array $command): void
{
    $process = proc_open($command, [STDIN, STDOUT, STDERR], $pipes);
    if (!is_resource($process) || proc_close($process) !== 0) {
        throw new RuntimeException('Setup command failed. Fix the reported error and rerun; existing data and APP_KEY are preserved.');
    }
}

function hostingerPublicTarget(string $root, string $target): string
{
    $root = str_replace('\\', '/', $root);
    $target = str_replace('\\', '/', $target);
    if (!preg_match('~^(?:/|[A-Za-z]:/)~', $target) || basename($target) !== 'public_html') {
        throw new RuntimeException('Web root must be an absolute path ending in public_html.');
    }
    $parent = realpath(dirname($target));
    if (!$parent) throw new RuntimeException('The public_html parent directory must already exist.');
    $target = str_replace('\\', '/', $parent).'/public_html';
    if ($root === $target || str_starts_with($root.'/', $target.'/') || str_starts_with($target.'/', $root.'/')) {
        throw new RuntimeException('Clone the repository outside public_html, as a sibling folder.');
    }
    if (is_link($target)) {
        if (str_replace('\\', '/', (string) realpath($target)) !== $root.'/public') throw new RuntimeException('public_html links to another site; nothing was replaced.');
    } elseif (file_exists($target) && (!is_dir($target) || count(scandir($target)) > 2)) {
        throw new RuntimeException('public_html is not empty. Back up and move its existing contents yourself, then rerun. Nothing was deleted.');
    }
    return $target;
}

function hostingerSetup(): void
{
    if (in_array('--help', $_SERVER['argv'], true)) {
        echo "Hostinger initial setup\n\nRun from an SSH terminal: php scripts/setup-hostinger.php\nClone outside public_html. Prompts for URL, admin credentials, database and public_html path.\nUse PHP 8.2+ (and matching hPanel PHP version), Composer 2, SQLite or MySQL.\nExisting .env values and APP_KEY are preserved; migrations never reset data.\nPublic files are published using a public_html symlink; existing nonempty directories are refused.\nSee docs/HOSTINGER.md.\n";
        return;
    }
    if (PHP_OS_FAMILY === 'Windows') throw new RuntimeException('Run this setup on the Linux Hostinger SSH terminal, not the local Windows project.');
    if (PHP_VERSION_ID < 80200) throw new RuntimeException('PHP 8.2+ required. Set the CLI and hPanel PHP version first.');
    foreach (['proc_open'] as $function) {
        if (!function_exists($function)) throw new RuntimeException("Enable $function for the SSH PHP runtime before setup.");
    }
    foreach (['ctype', 'curl', 'dom', 'fileinfo', 'filter', 'hash', 'mbstring', 'openssl', 'pcre', 'pdo', 'session', 'tokenizer', 'xml'] as $extension) {
        if (!extension_loaded($extension)) throw new RuntimeException("Missing PHP extension: $extension. Enable it in hPanel and the CLI runtime.");
    }
    $root = realpath(__DIR__.'/..');
    chdir($root);
    umask(0027);
    echo "FamilyDentalCare — Hostinger setup\nNo database resets or existing website deletion.\n";
    $publicTarget = hostingerPrompt('Absolute public_html path', dirname($root).'/public_html');
    $publicTarget = hostingerPublicTarget($root, $publicTarget);
    $composer = '';
    foreach (['composer2', 'composer'] as $name) {
        foreach (explode(PATH_SEPARATOR, getenv('PATH') ?: '') as $directory) {
            $candidate = rtrim($directory, '/').'/'.$name;
            if ($directory !== '' && is_file($candidate) && is_readable($candidate)) { $composer = $candidate; break 2; }
        }
    }
    if (!$composer) throw new RuntimeException('Composer 2 is required. Install/enable it on your Hostinger account first.');
    hostingerRun([PHP_BINARY, $composer, '--version']);
    $composerVersion = hostingerCapture([PHP_BINARY, $composer, '--version']);
    if (!preg_match('/Composer (?:version )?2\./i', $composerVersion ?? '')) throw new RuntimeException('Composer 2 is required; this account currently resolves another version.');
    if (!is_file($root.'/composer.lock')) throw new RuntimeException('composer.lock missing; use a complete Git clone.');
    foreach (['storage/framework/cache/data', 'storage/framework/sessions', 'storage/framework/views', 'storage/logs', 'storage/app/public', 'bootstrap/cache'] as $directory) {
        if (!is_dir($directory) && !mkdir($directory, 0755, true)) throw new RuntimeException("Cannot create $directory");
        if (!is_writable($directory)) throw new RuntimeException("Directory not writable: $directory. Fix ownership; do not use chmod 777.");
    }
    // Avoid package scripts booting the app before production environment setup.
    hostingerRun([PHP_BINARY, $composer, 'install', '--no-dev', '--prefer-dist', '--optimize-autoloader', '--no-interaction', '--no-scripts']);
    require_once $root.'/vendor/autoload.php';
    $envPath = $root.'/.env';
    $source = file_exists($envPath) ? file_get_contents($envPath) : file_get_contents($root.'/.env.example');
    $existing = file_exists($envPath) ? Dotenv\Dotenv::parse($source) : [];
    $url = hostingerPrompt('HTTPS website URL', $existing['APP_URL'] ?? 'https://familydentalcare.in');
    if (!filter_var($url, FILTER_VALIDATE_URL) || parse_url($url, PHP_URL_SCHEME) !== 'https' || parse_url($url, PHP_URL_USER) || parse_url($url, PHP_URL_QUERY) || parse_url($url, PHP_URL_FRAGMENT)) {
        throw new RuntimeException('Enter a valid HTTPS website URL without credentials, query or fragment.');
    }
    $adminEmail = hostingerPrompt('Admin email', $existing['ADMIN_EMAIL'] ?? '');
    if (!filter_var($adminEmail, FILTER_VALIDATE_EMAIL)) throw new RuntimeException('A valid admin email is required.');
    $password = $existing['ADMIN_PASSWORD'] ?? '';
    if ($password === '' || $password === 'admin123' || strlen($password) < 12) {
        $password = hostingerPrompt('New admin password (minimum 12 characters)', '', true);
        if (strlen($password) < 12) throw new RuntimeException('Admin password must have at least 12 characters.');
        if ($password !== hostingerPrompt('Repeat admin password', '', true)) throw new RuntimeException('Passwords do not match.');
    }
    $database = hostingerPrompt('Database driver: sqlite or mysql', $existing['DB_CONNECTION'] ?? 'sqlite');
    if (!in_array($database, ['sqlite', 'mysql'], true)) throw new RuntimeException('Supported drivers: sqlite, mysql.');
    if (!extension_loaded('pdo_'.$database)) throw new RuntimeException("Enable pdo_$database before setup.");
    $values = [
        'APP_NAME' => 'FamilyDentalCare', 'APP_ENV' => 'production', 'APP_DEBUG' => 'false',
        'APP_URL' => rtrim($url, '/'), 'LOG_LEVEL' => 'warning',
        'ADMIN_EMAIL' => $adminEmail, 'ADMIN_PASSWORD' => $password,
        'DB_CONNECTION' => $database, 'DB_URL' => '',
        'SESSION_DRIVER' => 'database', 'SESSION_SECURE_COOKIE' => 'true',
        'CACHE_STORE' => 'database', 'QUEUE_CONNECTION' => 'sync',
    ];
    if ($database === 'sqlite') {
        $dbPath = ($existing['DB_CONNECTION'] ?? '') === 'sqlite' ? ($existing['DB_DATABASE'] ?? $root.'/database/database.sqlite') : $root.'/database/database.sqlite';
        if (!str_starts_with($dbPath, '/')) $dbPath = $root.'/'.$dbPath;
        if (!is_dir(dirname($dbPath))) throw new RuntimeException('SQLite parent directory does not exist.');
        if (!file_exists($dbPath) && !touch($dbPath)) throw new RuntimeException('Could not create SQLite database.');
        chmod($dbPath, 0600);
        $values['DB_DATABASE'] = $dbPath;
    } else {
        echo "Create the MySQL database/user in hPanel first; this script creates tables, not hosting accounts.\n";
        $values['DB_HOST'] = hostingerPrompt('MySQL hostname', $existing['DB_HOST'] ?? 'localhost');
        $values['DB_PORT'] = hostingerPrompt('MySQL port', $existing['DB_PORT'] ?? '3306');
        $values['DB_DATABASE'] = hostingerPrompt('MySQL database name', $existing['DB_DATABASE'] ?? '');
        $values['DB_USERNAME'] = hostingerPrompt('MySQL username', $existing['DB_USERNAME'] ?? '');
        $values['DB_PASSWORD'] = $existing['DB_PASSWORD'] ?? hostingerPrompt('MySQL password', '', true);
        if ($values['DB_DATABASE'] === '' || $values['DB_USERNAME'] === '') throw new RuntimeException('MySQL database and username are required.');
    }
    if (empty($existing['APP_KEY'])) $values['APP_KEY'] = 'base64:'.base64_encode(random_bytes(32));
    // Keep unrelated settings/comments and never rotate an existing application key.
    $updated = hostingerUpdateEnv($source, $values);
    $parsed = Dotenv\Dotenv::parse($updated);
    foreach ($values as $key => $value) {
        if (($parsed[$key] ?? null) !== $value) throw new RuntimeException("Could not safely encode environment setting $key.");
    }
    $temporary = tempnam($root, '.hostinger-env-');
    if (!$temporary || file_put_contents($temporary, $updated) === false) throw new RuntimeException('Could not write environment file.');
    chmod($temporary, 0600);
    if (!rename($temporary, $envPath)) throw new RuntimeException('Could not install environment file.');
    chmod($envPath, 0600);
    hostingerRun([PHP_BINARY, 'artisan', 'config:clear']);
    hostingerRun([PHP_BINARY, 'artisan', 'package:discover', '--ansi']);
    hostingerRun([PHP_BINARY, 'artisan', 'migrate', '--force', '--no-interaction']);
    $storageTarget = $root.'/public/storage';
    if (is_link($storageTarget) && realpath($storageTarget) === realpath($root.'/storage/app/public')) {
        echo "Storage link already configured.\n";
    } elseif (file_exists($storageTarget) || is_link($storageTarget)) {
        throw new RuntimeException('public/storage already exists and is not the expected link. Review it manually; nothing was replaced.');
    } else {
        hostingerRun([PHP_BINARY, 'artisan', 'storage:link']);
    }
    // Current Blade templates load public/css and public/js directly: no Node build needed.
    hostingerRun([PHP_BINARY, 'artisan', 'config:cache']);
    hostingerRun([PHP_BINARY, 'artisan', 'route:cache']);
    hostingerRun([PHP_BINARY, 'artisan', 'view:cache']);
    // Re-check immediately before publishing. Never replace another website.
    hostingerPublicTarget($root, $publicTarget);
    if (!is_link($publicTarget)) {
        $hadEmptyDirectory = is_dir($publicTarget);
        if ($hadEmptyDirectory && !rmdir($publicTarget)) throw new RuntimeException('Cannot replace empty public_html directory.');
        if (!symlink($root.'/public', $publicTarget)) {
            if ($hadEmptyDirectory) mkdir($publicTarget, 0755);
            throw new RuntimeException('Hosting denied public_html symlink. Set the domain document root to '.$root.'/public in your hosting configuration.');
        }
    }
    echo "\nSetup complete.\nWebsite: $url\nAdmin: ".rtrim($url, '/')."/login\nHealth check: ".rtrim($url, '/')."/up\nWeb root: $publicTarget -> $root/public\nConfirm matching PHP version, SSL and domain DNS in hPanel. No admin password was printed.\n";
}

if (realpath($_SERVER['SCRIPT_FILENAME'] ?? '') === __FILE__) {
    try { hostingerSetup(); }
    catch (Throwable $error) { fwrite(STDERR, "\nSetup stopped: ".$error->getMessage()."\n"); exit(1); }
}
