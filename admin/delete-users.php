<?php
require_once __DIR__ . '/../config/bootstrap.php';
require_admin();
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Method not allowed.');
}
if (!csrf_valid($_POST['csrf_token'] ?? null)) { http_response_code(400); exit('Invalid form token.'); }
$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
if (!$id) { http_response_code(400); exit('Invalid record ID.'); }
$stmt = mysqli_prepare($con, 'DELETE FROM users WHERE id = ?');
mysqli_stmt_bind_param($stmt, 'i', $id);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
header('Location: users.php');
exit;
?>