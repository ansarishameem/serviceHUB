<?php
ob_start();
require_once __DIR__ . '/../config/bootstrap.php';
require_admin();
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if (!$id) { http_response_code(400); exit('Invalid contact ID.'); }
$stmt = mysqli_prepare($con, 'SELECT id,name,email,subject,message,response FROM contact WHERE id = ?');
mysqli_stmt_bind_param($stmt, 'i', $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$data = $result ? mysqli_fetch_assoc($result) : null;
mysqli_stmt_close($stmt);
if (!$data) { http_response_code(404); exit('Contact message not found.'); }
$editError = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!csrf_valid($_POST['csrf_token'] ?? null)) { http_response_code(400); exit('Invalid form token. Reload and try again.'); }
    $response = trim($_POST['response'] ?? '');
    if ($response === '') $editError = 'Please enter a response.';
    else {
        $update = mysqli_prepare($con, 'UPDATE contact SET response = ? WHERE id = ?');
        mysqli_stmt_bind_param($update, 'si', $response, $id);
        if (mysqli_stmt_execute($update)) { mysqli_stmt_close($update); header('Location: contact.php?updated=1'); exit; }
        $editError = 'Could not update the response.';
        mysqli_stmt_close($update);
    }
}
include __DIR__ . '/layout/header.php';
?>
    <!-- ============================================
    MAIN CONTENT
    ============================================ -->
    <main>
        <?php if ($editError !== '') { ?><div class="container"><div class="alert alert-danger"><?= htmlspecialchars($editError, ENT_QUOTES, 'UTF-8') ?></div></div><?php } ?>
        <div class="container">
            <div class="dashboard-wrapper">

                <!-- ===== SIDEBAR ===== -->
                <?php include 'layout/sidebar.php'?>

                <!-- ===== MAIN CONTENT AREA ===== -->
                <div class="main-content">

                    <!-- Page Header -->
                    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap">
                        <div>
                            <h4 styl   e="font-weight:800;color:var(--secondary);margin:0;font-size:28px;">Contact</h4>
                        </div>
                        <div class="mt-2 mt-sm-0">
                            <button class="btn" style="background:var(--primary);color:var(--white);border-radius:50px;padding:10px 28px;font-weight:600;border:none;transition:0.3s;box-shadow:0 4px 15px rgba(233,30,99,0.3);">
                                <a href="add-users.php"><i class="fas fa-plus-circle mr-2"></i> Update Contact</a>
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
                                    <h6><i class="fas fa-clock mr-2" style="color:var(--primary);"></i> Contact</h6>
                                </div>
                                <div class="table-responsive">
                                  <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                                    <input type="text" name="name" readonly value="<?= htmlspecialchars($data['name'], ENT_QUOTES, 'UTF-8') ?>" class="form-control" id="exampleFormControlInput1" placeholder="name">
                                  </div>
                                  <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                    <input type="text" name="email" readonly value="<?= htmlspecialchars($data['email'], ENT_QUOTES, 'UTF-8') ?>" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                  </div>
                                  <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Subject</label>
                                    <input type="text" name="subject" readonly value="<?= htmlspecialchars($data['subject'], ENT_QUOTES, 'UTF-8') ?>" class="form-control" id="exampleFormControlInput1" placeholder="mobile">
                                  </div>
                                  <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Message</label>
                                    <textarea name="message" id="" readonly class="form-control"><?= htmlspecialchars($data['message'], ENT_QUOTES, 'UTF-8') ?></textarea>
                                  </div>
                                  <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Response</label>
                                    <textarea name="response" id="" class="form-control"><?= htmlspecialchars($data['response'] ?? '', ENT_QUOTES, 'UTF-8') ?></textarea>
                                  </div>
                                    <div class="text-end mt-4">
                                      <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-plus-circle"></i> Update Contact
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