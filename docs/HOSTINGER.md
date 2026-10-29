# Hostinger SSH setup

Requires a hosting plan with SSH, PHP 8.2+ with Laravel extensions, and Composer 2. Match the website PHP version in hPanel to the SSH CLI version. Configure domain DNS and SSL in hPanel first.

Clone **beside** `public_html`, not inside it:

```bash
cd ~/domains/familydentalcare.in
git clone YOUR_REPOSITORY_URL dental-v3
cd dental-v3
php scripts/setup-hostinger.php
```

No `sudo` is needed. Answer the prompts for the absolute `public_html` path, HTTPS URL, admin email/password and database driver. Passwords are entered without echoing to the terminal. This script changes only files on the account where you run it; it does not connect to Hostinger from your local machine.

SQLite is the default and automatically creates a private database file. For MySQL, create the database/user in hPanel first and enter its hostname, database, username and password when prompted. The script installs production Composer dependencies, creates production `.env`, generates APP_KEY only when missing, runs forward migrations, links storage and caches configuration/routes/views. Current templates serve checked-in CSS/JS directly, so Node/npm is not required. If Vite is introduced later, add a build step before deployment.

The script publishes a symlink from the domain's `public_html` to this checkout's `public`. It refuses a nonempty directory, a link to another website, or a clone inside `public_html`. Back up and relocate existing Hostinger default files or another website yourself before running. It never clears an existing public_html for you. If the hosting account disallows this symlink, point the domain document root to the checkout's `public` directory using the hosting configuration/support; do not expose the repository root or `.env`.

On reruns, existing APP_KEY, database contents, non-default admin password and unrelated `.env` settings are retained. Production/debug/session/cache/queue settings are enforced, and DB_URL is cleared so the selected DB settings take effect. The setup uses the synchronous queue driver; no background worker is necessary for the current site. Mail remains on the project's configured mail driver; configure SMTP separately if email delivery is added. Back up `.env`, the database and uploaded files before future deployments. Migrations can change database structure; this is initial setup, not an atomic deployment/rollback system.

If setup stops, fix the error and rerun the same command. It never runs `migrate:fresh`, seeds fake patients or rotates an existing key. Runtime folders must be writable by the account executing PHP; the script creates missing folders but never uses `chmod 777`. Composer/extension/network problems must be resolved on the hosting account. Existing `public/storage` must be the expected Laravel symlink; it is not overwritten.

After completion, visit `/up`, the homepage, services/blog and `/login`, then verify HTTPS, images and a test booking request. A CLI success does not verify DNS, SSL or the web server's PHP configuration. The script does not automatically submit a booking or send any messages.

Help without changing files:

```bash
php scripts/setup-hostinger.php --help
```

References: [Laravel deployment](https://laravel.com/docs/12.x/deployment), [Hostinger SSH](https://www.hostinger.com/support/1583245-how-to-connect-to-a-hosting-plan-via-ssh-in-hostinger/), [Hostinger Composer](https://www.hostinger.com/support/8727597-how-to-install-composer-locally-at-hostinger/).
