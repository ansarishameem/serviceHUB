<?php
require_once __DIR__ . '/config/bootstrap.php';
$errors = [];
$success = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!csrf_valid($_POST['csrf_token'] ?? null)) { http_response_code(400); exit('Invalid form token. Please reload the page and try again.'); }
    $name = trim($_POST['name'] ?? '');
    $email = strtolower(trim($_POST['email'] ?? ''));
    $phone = trim($_POST['phone'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm = $_POST['c_password'] ?? '';
    if ($name === '' || mb_strlen($name) > 200) $errors[] = 'Please enter a valid name (maximum 200 characters).';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) > 200) $errors[] = 'Please enter a valid email address.';
    if (!preg_match('/^[0-9+() .-]{7,20}$/', $phone)) $errors[] = 'Please enter a valid phone number.';
    if (strlen($password) < 8) $errors[] = 'Password must be at least 8 characters long.';
    if ($password !== $confirm) $errors[] = 'Passwords do not match.';
    if (!$errors) {
        $check = mysqli_prepare($con, 'SELECT id FROM users WHERE email = ? LIMIT 1');
        mysqli_stmt_bind_param($check, 's', $email);
        mysqli_stmt_execute($check);
        mysqli_stmt_store_result($check);
        if (mysqli_stmt_num_rows($check) > 0) $errors[] = 'An account with this email already exists.';
        mysqli_stmt_close($check);
    }
    if (!$errors) {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $stmt = mysqli_prepare($con, "INSERT INTO users (name,email,phone,password,role) VALUES (?,?,?,?,'user')");
        mysqli_stmt_bind_param($stmt, 'ssss', $name, $email, $phone, $hash);
        if (mysqli_stmt_execute($stmt)) {
            $success = 'Registration successful. You can now sign in.';
        } else {
            error_log('Registration failed: ' . mysqli_stmt_error($stmt));
            $errors[] = 'Registration could not be completed. Please try again.';
        }
        mysqli_stmt_close($stmt);
    }
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register · Service Management</title>
  <!-- Bootstrap 4 + Font Awesome -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="css/register.css">
 
</head>
<body>

<div class="register-card">

  <!-- HEADER -->
  <div class="register-header">
    <div class="icon-box">
      <i class="fas fa-user-plus"></i>
    </div>
    <h2>Service <span>Management</span></h2>
    <p>Create your account to get started</p>
  </div>

  <!-- REGISTER FORM -->

  <?php if (!empty($errors)) { ?>
  <div class="alert alert-danger" role="alert"><ul class="mb-0"><?php foreach ($errors as $error) { ?><li><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></li><?php } ?></ul></div>
  <?php } ?>
  <?php
  if(isset($success) && $success !== ''){
  ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <?= htmlspecialchars($success, ENT_QUOTES, 'UTF-8') ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <?php }?>
  <form action="" method="post">
    <input type="hidden" name="csrf_token" value="<?= htmlspecialchars(csrf_token(), ENT_QUOTES, 'UTF-8') ?>">
    <!-- Full Name -->
    <div class="form-group">
      <label>Full Name <span class="required">*</span></label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-user"></i></span>
        </div>
        <input type="text" class="form-control" name="name" placeholder="Enter your full name" required>
      </div>
    </div>

    <!-- Email -->
    <div class="form-group">
      <label>Email Address <span class="required">*</span></label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-envelope"></i></span>
        </div>
        <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
      </div>
    </div>

    <!-- Mobile Number -->
    <div class="form-group">
      <label>Mobile Number <span class="required">*</span></label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-phone"></i></span>
        </div>
        <input type="tel" name="phone" class="form-control" placeholder="Enter mobile number" required>
      </div>
    </div>

    <!-- Password -->
    <div class="form-group">
      <label>Password <span class="required">*</span></label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-lock"></i></span>
        </div>
        <input type="password" name="password" class="form-control" placeholder="Create a password" required>
      </div>
    </div>

    <!-- Confirm Password -->
    <div class="form-group">
      <label>Confirm Password <span class="required">*</span></label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-check-circle"></i></span>
        </div>
        <input type="password" name="c_password" class="form-control" placeholder="Confirm your password" required>
      </div>
    </div>

    <!-- Submit Button -->
    <button type="submit" class="btn-register">
      <i class="fas fa-user-plus"></i> Register Now
    </button>
  </form>

  <!-- Login Link -->
  <div class="login-link">
    Already have an account? <a href="signin.php">Login here</a>
  </div>

  <!-- Footer -->
  <div class="register-footer">
    <span><i class="far fa-copyright mr-1"></i>2026 Service Management</span>
    <span>
      <a href="#"><i class="fas fa-shield-alt mr-1"></i>Privacy</a>
      <span class="mx-1">·</span>
      <a href="#"><i class="fas fa-question-circle mr-1"></i>Help</a>
    </span>
  </div>

</div>

<!-- Bootstrap 4 JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>