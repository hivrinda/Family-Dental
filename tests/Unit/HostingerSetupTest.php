<?php

namespace Tests\Unit;

use Dotenv\Dotenv;
use PHPUnit\Framework\TestCase;

require_once __DIR__.'/../../scripts/setup-hostinger.php';

class HostingerSetupTest extends TestCase
{
    public function test_env_updates_preserve_key_and_round_trip_secret_characters(): void
    {
        $secret = 'spaces $dollars #hash "quotes" \\ slashes and apostrophe\'';
        $source = "# keep this comment\nAPP_KEY=base64:existing\nAPP_DEBUG=true\nOTHER=value\n";
        $updated = hostingerUpdateEnv($source, ['APP_DEBUG' => 'false', 'ADMIN_PASSWORD' => $secret]);
        $parsed = Dotenv::parse($updated);
        $this->assertSame($secret, $parsed['ADMIN_PASSWORD']);
        $this->assertSame('base64:existing', $parsed['APP_KEY']);
        $this->assertSame('value', $parsed['OTHER']);
        $this->assertStringContainsString('# keep this comment', $updated);
        $this->assertSame($updated, hostingerUpdateEnv($updated, ['APP_DEBUG' => 'false', 'ADMIN_PASSWORD' => $secret]));
    }

    public function test_multiline_settings_are_rejected(): void
    {
        $this->expectException(\RuntimeException::class);
        hostingerEnvValue("secret\nAPP_DEBUG=true");
    }

    public function test_windows_template_lines_update_without_duplicate_keys(): void
    {
        $updated = hostingerUpdateEnv("APP_ENV=local\r\nAPP_DEBUG=true\r\n", ['APP_ENV' => 'production', 'APP_DEBUG' => 'false']);
        $this->assertSame('production', Dotenv::parse($updated)['APP_ENV']);
        $this->assertSame(1, substr_count($updated, 'APP_ENV='));
        $this->assertSame(1, substr_count($updated, 'APP_DEBUG='));
    }

    public function test_nested_webroot_is_rejected_without_touching_files(): void
    {
        $this->expectException(\RuntimeException::class);
        hostingerPublicTarget('/home/account/domains/example.com/public_html/app', '/home/account/domains/example.com/public_html');
    }

    public function test_existing_site_files_are_never_removed(): void
    {
        $parent = sys_get_temp_dir().'/hostinger-check-'.bin2hex(random_bytes(6));
        mkdir($parent);
        mkdir($parent.'/public_html');
        file_put_contents($parent.'/public_html/existing.txt', 'existing website');
        try {
            try {
                hostingerPublicTarget($parent.'/app', $parent.'/public_html');
                $this->fail('An occupied public_html must be refused.');
            } catch (\RuntimeException $error) {
                $this->assertStringContainsString('not empty', $error->getMessage());
                $this->assertSame('existing website', file_get_contents($parent.'/public_html/existing.txt'));
            }
        } finally {
            unlink($parent.'/public_html/existing.txt');
            rmdir($parent.'/public_html');
            rmdir($parent);
        }
    }
}
