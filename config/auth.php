<?php
function servicehub_start_session(): void {
    if (session_status() !== PHP_SESSION_ACTIVE) {
        $https = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off');
        session_set_cookie_params([
            'lifetime' => 0, 'path' => '/', 'secure' => $https,
            'httponly' => true, 'samesite' => 'Lax'
        ]);
        session_start();
    }
}
function require_login(): void {
    servicehub_start_session();
    if (empty($_SESSION['login_data']['id'])) {
        header('Location: /signin.php');
        exit;
    }
}
function require_admin(): void {
    servicehub_start_session();
    if (empty($_SESSION['login_data']['id']) || ($_SESSION['login_data']['role'] ?? '') !== 'admin') {
        http_response_code(403);
        exit('403 Forbidden: Admin access required.');
    }
}
function h($value): string {
    return htmlspecialchars((string)$value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function csrf_token(): string {
    servicehub_start_session();
    if (empty($_SESSION['csrf_token'])) $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    return $_SESSION['csrf_token'];
}
function csrf_valid($token): bool {
    servicehub_start_session();
    return is_string($token) && !empty($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}
