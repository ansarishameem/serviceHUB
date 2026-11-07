<?php
/** Database connection. Set these environment variables on your hosting provider. */
mysqli_report(MYSQLI_REPORT_OFF);
// Optional local .env file (ignored by Git); hosting environment variables take priority.
$envFile = dirname(__DIR__) . '/.env';
if (is_file($envFile) && is_readable($envFile)) {
    foreach (file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
        $line = trim($line);
        if ($line === '' || str_starts_with($line, '#') || !str_contains($line, '=')) continue;
        [$key, $value] = explode('=', $line, 2);
        $key = trim($key); $value = trim($value);
        if (preg_match('/^[A-Z_][A-Z0-9_]*$/', $key) && getenv($key) === false) {
            $value = trim($value, "\\\"'");
            putenv($key . '=' . $value);
        }
    }
}
$dbHost = getenv('DB_HOST') ?: '127.0.0.1';
$dbUser = getenv('DB_USER') ?: 'root';
$dbPass = getenv('DB_PASS') !== false ? getenv('DB_PASS') : '';
$dbName = getenv('DB_NAME') ?: 'servicehub';
$con = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
if (!$con) {
    error_log('ServiceHub database connection failed: ' . mysqli_connect_error());
    http_response_code(503);
    exit('The service is temporarily unavailable. Please try again later.');
}
mysqli_set_charset($con, 'utf8mb4');
