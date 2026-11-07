# ServiceHub / Service Up – code review report

## Completed in this working copy
- Centralized MySQL connection in `config/database.php`; credentials are read from environment variables.
- Added shared bootstrap, session helpers, role checks, HTML escaping helper, and CSRF token helpers.
- Registration uses prepared statements, input validation, duplicate-email checks, and `password_hash()`.
- Sign-in uses a prepared statement, verifies modern password hashes, upgrades legacy plaintext passwords after a successful sign-in, regenerates the session ID, and does not store the password in the session.
- Admin layout and admin write/delete endpoints enforce the `admin` role.
- Admin user creation hashes passwords and validates the role.
- Contact submission uses a prepared statement.
- Admin contact edits and delete actions use prepared statements; deletes require POST and CSRF tokens.
- Added output escaping for admin table content and profile identity fields.
- Improved logout/session cleanup.
- Updated a number of stale `.html` links to `.php` and corrected the admin dashboard link.
- Removed demo user/contact rows and plaintext sample passwords from `servicehub.sql`; changed password column to 255 characters and collation to a more portable utf8mb4 collation.
- Added `.gitignore`, Apache access restrictions, `.env.example`, and deployment instructions.

## Validation performed
- PHP syntax lint passed for all 42 PHP files in this working copy.
- Searched for hard-coded database connection credentials; only the centralized environment-based connection remains.
- Confirmed the SQL dump no longer contains the demo names, email addresses, or plaintext demo passwords previously present.

## Not yet verified / remaining before production
- This runtime does not have the `mysqli` PHP extension or a MySQL server available, so database import, login, registration, admin actions, and contact submission could not be integration-tested here.
- The project has no booking/service-request database workflow in the supplied SQL schema; several service pages contain presentation-only forms. Those cannot be considered working booking features yet.
- Legacy standalone pages (`dashboard.php`, `DASHBORD.php`, `setting.php`, `user.php`, `new.php`) still contain demo/static UI and should be reconciled with the main authenticated profile/admin flows before public launch.
- Some legacy navigation targets may still need a browser click-through test; the project contains multiple overlapping dashboard/header implementations.
- Add email verification, password reset, login rate limiting, account lockout/throttling, stronger CSP/security headers, and full CSRF coverage for any remaining POST forms before a real public launch.
- Review privacy/terms text, contact details, map embed, pricing and service claims for accuracy.

## Hosting setup
See `DEPLOYMENT-README.md`. Do not upload real `.env` values or database dumps containing user data to a public GitHub repository. GitHub Pages cannot run PHP; deploy this project to a PHP/MySQL host.
