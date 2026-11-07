# ServiceHub deployment notes

## Requirements
- PHP 8.1+ (8.2/8.3 recommended)
- MySQL 8+ or a compatible MariaDB release
- PHP extensions: mysqli, mbstring
- HTTPS enabled on the live site

## Local setup
1. Create a MySQL database named `servicehub`.
2. Import `servicehub.sql` using phpMyAdmin or the MySQL command line.
3. Copy `.env.example` to `.env` for local development and set `DB_HOST`, `DB_NAME`, `DB_USER`, and `DB_PASS`; on hosting, configure the same environment variables in the hosting dashboard. Do not commit real credentials.
4. Run the project through Apache/Nginx with PHP; GitHub Pages cannot execute PHP.

## First administrator account
The SQL dump intentionally contains no demo users or plaintext passwords. After importing it, create the first administrator account using a one-time PHP CLI command from the project root:

```bash
php -r 'require "config/database.php"; $name="Site Administrator"; $email="admin@example.com"; $phone="9999999999"; $hash=password_hash("REPLACE_WITH_A_LONG_UNIQUE_PASSWORD", PASSWORD_DEFAULT); $role="admin"; $q=mysqli_prepare($con,"INSERT INTO users(name,email,phone,password,role) VALUES(?,?,?,?,?)"); mysqli_stmt_bind_param($q,"sssss",$name,$email,$phone,$hash,$role); if(!mysqli_stmt_execute($q)){fwrite(STDERR,mysqli_stmt_error($q).PHP_EOL); exit(1);} echo "Admin created. Delete this command from shell history if it contained a real password.\n";'
```

Replace all sample values before running. Prefer entering the command through a secure shell and never publish the password.

## Important security notes
- Existing legacy plaintext passwords are upgraded to `password_hash()` hashes the first time a user successfully signs in. Reset old accounts if you suspect their passwords were exposed.
- Admin routes now require an authenticated `admin` role.
- Keep `.env` and database dumps out of GitHub. The `.htaccess` files block direct access on Apache, but do not rely on them as a substitute for excluding secrets from deployment.
- This is an initial hardening pass, not a full production security audit. CSRF protection, rate limiting, email verification, password reset, and end-to-end feature testing remain to be completed.

## Existing database (preserve current data)
- Back up the database first.
- `servicehub.sql` no longer drops existing tables; it is intended for a fresh database/schema creation. It does not overwrite existing rows.
- For an existing `servicehub` database, run `MIGRATION-existing-db.sql` after reviewing it. The unique email index is intentionally commented out until you check and resolve duplicate emails.
- Existing plain-text passwords are not converted in bulk. A successful sign-in upgrades that account's password automatically; for any account you cannot safely verify, reset its password instead.
