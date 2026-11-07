<?php
ob_start();
require_once __DIR__ . '/../config/bootstrap.php';
require_admin();
$adminErrors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!csrf_valid($_POST['csrf_token'] ?? null)) { http_response_code(400); exit('Invalid form token. Reload and try again.'); }
    $name = trim($_POST['name'] ?? '');
    $email = strtolower(trim($_POST['email'] ?? ''));
    $mobile = trim($_POST['phone'] ?? '');
    $password = $_POST['password'] ?? '';
    $role = $_POST['role'] ?? 'user';
    if ($name === '' || strlen($name) > 200) $adminErrors[] = 'Enter a valid name.';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $adminErrors[] = 'Enter a valid email.';
    if (!preg_match('/^[0-9+() .-]{7,20}$/', $mobile)) $adminErrors[] = 'Enter a valid phone number.';
    if (strlen($password) < 8) $adminErrors[] = 'Password must be at least 8 characters.';
    if (!in_array($role, ['user', 'admin'], true)) $adminErrors[] = 'Invalid role selected.';
    if (!$adminErrors) {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $stmt = mysqli_prepare($con, 'INSERT INTO users (name,email,phone,password,role) VALUES (?,?,?,?,?)');
        mysqli_stmt_bind_param($stmt, 'sssss', $name, $email, $mobile, $hash, $role);
        if (mysqli_stmt_execute($stmt)) { header('Location: users.php?created=1'); exit; }
        error_log('Admin user creation failed: ' . mysqli_stmt_error($stmt));
        $adminErrors[] = 'Could not create user. Check whether the email already exists.';
        mysqli_stmt_close($stmt);
    }
}
include __DIR__ . '/layout/header.php';
?>
    <!-- ============================================
    MAIN CONTENT
    ============================================ -->
    <main>
        <?php if ($adminErrors) { ?><div class="container"><div class="alert alert-danger"><ul class="mb-0"><?php foreach ($adminErrors as $msg) { ?><li><?= htmlspecialchars($msg, ENT_QUOTES, 'UTF-8') ?></li><?php } ?></ul></div></div><?php } ?>
        <div class="container">
            <div class="dashboard-wrapper">

                <!-- ===== SIDEBAR ===== -->
                <?php include 'layout/sidebar.php'?>

                <!-- ===== MAIN CONTENT AREA ===== -->
                <div class="main-content">

                    <!-- Page Header -->
                    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap">
                        <div>
                            <h4 styl   e="font-weight:800;color:var(--secondary);margin:0;font-size:28px;">Users</h4>
                        </div>
                        <div class="mt-2 mt-sm-0">
                            <button class="btn" style="background:var(--primary);color:var(--white);border-radius:50px;padding:10px 28px;font-weight:600;border:none;transition:0.3s;box-shadow:0 4px 15px rgba(233,30,99,0.3);">
                                <a href="add-users.php"><i class="fas fa-plus-circle mr-2"></i> Add Users</a>
                            </button>
                        </div>
                    </div>

                    <!-- Recent Bookings -->
                     <form method="POST" action="">
                        <input type="hidden" name="csrf_token" value="<?= htmlspecialchars(csrf_token(), ENT_QUOTES, 'UTF-8') ?>">
                    <div class="row">
                        <div class="col-12">
                            <div class="recent-card">
                                <div class="card-header-custom">
                                    <h6><i class="fas fa-clock mr-2" style="color:var(--primary);"></i> Users</h6>
                                </div>
                                <div class="table-responsive">
                                  <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="name">
                                    <small><?= isset($nameerr)?$nameerr:''?></small>
                                  </div>
                                  <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                    <input type="text" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                    <small><?= isset($emailerr)?$emailerr:''?></small>
                                  </div>
                                  <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Mobile</label>
                                    <input type="text" name="phone" class="form-control" id="exampleFormControlInput1" placeholder="mobile">
                                    <small><?= isset($phoneerr)?$phoneerr:''?></small>
                                  </div>
                                  <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="name@example">
                                    <small><?= isset($passerr)?$passerr:''?></small>
                                  </div>
                                  <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                                    <select name="role" id="role" class="form-control">
                                      <option value="">--Select Role--</option>
                                      <option value="user">User</option>
                                      <option value="admin">Admin</option>
                                    </select>
                                    <small><?= isset($roleerr)?$roleerr:''?></small>
                                  </div>
                                    <div class="text-end mt-4">
                                      <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-plus-circle"></i> Add User
                                                  </button>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
</div>


    </main>
<?php
include 'layout/footer.php';
?>