-- Back up your existing servicehub database before running this migration.
-- This migration preserves existing rows and only widens the password column.
ALTER TABLE users MODIFY password VARCHAR(255) NOT NULL;

-- Before adding the unique email index, check for duplicate email addresses:
-- SELECT email, COUNT(*) AS total FROM users GROUP BY email HAVING COUNT(*) > 1;
-- Resolve any duplicates manually, then run:
-- ALTER TABLE users ADD UNIQUE KEY uq_users_email (email);
