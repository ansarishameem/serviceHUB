<?php
require_once __DIR__ . '/config/bootstrap.php';
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!csrf_valid($_POST['csrf_token'] ?? null)) { http_response_code(400); exit('Invalid form token. Please reload the page and try again.'); }
    $email = strtolower(trim($_POST['email'] ?? ''));
    $password = $_POST['password'] ?? '';
    if ($email === '' || $password === '') {
        $error = 'Please enter your email or phone number and password.';
    } else {
        $stmt = mysqli_prepare($con, 'SELECT id,name,email,phone,password,role FROM users WHERE email = ? OR phone = ? LIMIT 1');
        mysqli_stmt_bind_param($stmt, 'ss', $email, $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $data = $result ? mysqli_fetch_assoc($result) : null;
        mysqli_stmt_close($stmt);
        $valid = false;
        if ($data) {
            $stored = (string)$data['password'];
            if (password_verify($password, $stored)) {
                $valid = true;
            } elseif (hash_equals($stored, $password)) {
                // Legacy compatibility: upgrade a matching old plain-text password immediately.
                $newHash = password_hash($password, PASSWORD_DEFAULT);
                $upgrade = mysqli_prepare($con, 'UPDATE users SET password = ? WHERE id = ?');
                mysqli_stmt_bind_param($upgrade, 'si', $newHash, $data['id']);
                mysqli_stmt_execute($upgrade);
                mysqli_stmt_close($upgrade);
                $valid = true;
            }
        }
        if ($valid) {
            session_regenerate_id(true);
            unset($data['password']);
            $_SESSION['login_data'] = $data;
            if (($data['role'] ?? '') === 'admin') {
                header('Location: admin/index.php');
            } else {
                header('Location: profile.php');
            }
            exit;
        }
        $error = 'Invalid email or password.';
    }
}
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - ServiceHub</title>

    <!-- Bootstrap 4 -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/login.css">
</head>

<body>

<div class="login-wrapper">

    <div class="login-card">

        <!-- ================= LEFT SIDE ================= -->

        <div class="login-left">

            <!-- Logo -->

            <div class="brand-logo">

                <div class="logo-icon">
                    <i class="fas fa-hands-helping"></i>
                </div>

                <h2>Service<span>Hub</span></h2>

                <p>Sign in to your account</p>

            </div>

            <!-- Login Form -->
            <?php if ($error !== '') { ?><div class="alert alert-danger" role="alert"><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></div><?php } ?>
            <form action="" method="POST">
                <input type="hidden" name="csrf_token" value="<?= htmlspecialchars(csrf_token(), ENT_QUOTES, 'UTF-8') ?>">

                <!-- Email OR Phone -->

                <div class="form-group">

                    <label>Email</label>

                    <div class="input-group">

                        <div class="input-group-prepend">

                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>

                        </div>

                        <input
                            type="text"
                            class="form-control"
                            name="email"
                            placeholder="Enter Email or Phone"
                            required>

                    </div>

                </div>

                <!-- Password -->

                <div class="form-group">

                    <label>Password</label>

                    <div class="input-group">

                        <div class="input-group-prepend">

                            <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </span>

                        </div>

                        <input
                            type="password"
                            class="form-control"
                            id="password"
                            name="password"
                            placeholder="Enter Password"
                            required>

                        <button
                            type="button"
                            class="password-toggle"
                            id="togglePassword">

                            <i class="fas fa-eye"></i>

                        </button>

                    </div>

                </div>

                <!-- Remember Me & Forgot Password -->

                <div class="form-options">

                    <div class="custom-checkbox">

                        <input type="checkbox" id="remember">

                        <label for="remember">Remember Me</label>

                    </div>

                    <a href="#" class="forgot-link">
                        Forgot Password?
                    </a>

                </div>

                <!-- Login Button -->

                <button type="submit" class="btn-login">

                    <i class="fas fa-sign-in-alt"></i>

                    Sign In

                </button>

            </form>

            <!-- Divider -->

            <div class="divider">

                <span>OR CONTINUE WITH</span>

            </div>

            <!-- Social Login -->

            <div class="social-login">

                <a href="#" class="btn-social google">

                    <i class="fab fa-google"></i>

                    Google

                </a>

                <a href="#" class="btn-social facebook">

                    <i class="fab fa-facebook-f"></i>

                    Facebook

                </a>

            </div>

            <!-- Register -->

            <div class="signup-link">

                Don't have an account?

                <a href="register.php">Create Account</a>

            </div>

        </div>

        <!-- ================= RIGHT SIDE ================= -->

        <div class="login-right">

            <div class="brand-icon">

                <i class="fas fa-hands-helping"></i>

            </div>

            <h2>

                Welcome to <br>

                <span>ServiceHub</span>

            </h2>

            <p>

                Login to access your account and manage
                your services securely.

            </p>

            <ul class="features-list">

                <li>

                    <i class="fas fa-check-circle"></i>

                    Fast & Secure Login

                </li>

                <li>

                    <i class="fas fa-check-circle"></i>

                    Trusted Service Providers

                </li>

                <li>

                    <i class="fas fa-check-circle"></i>

                    Easy Booking System

                </li>

                <li>

                    <i class="fas fa-check-circle"></i>

                    24×7 Customer Support

                </li>

            </ul>

        </div>

    </div>

</div>

<!-- Bootstrap JS -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="js/signin.js"></script>

</body>
</html>