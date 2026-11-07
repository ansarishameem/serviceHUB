   <?php
include 'layout/header.php';
?>
    <!-- ============================================
    MAIN CONTENT
    ============================================ -->
    <main>
        <div class="container">
            <div class="dashboard-wrapper">

                <!-- ===== SIDEBAR ===== -->
                <?php include 'layout/sidebar.php'?>

                <!-- ===== MAIN CONTENT AREA ===== -->
                <div class="main-content">

                    <!-- Page Header -->
                    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap">
                        <div>
                            <h4 style="font-weight:800;color:var(--secondary);margin:0;font-size:28px;">Contact</h4>
                        </div>
                    </div>

                    <!-- Recent Bookings -->
                    <div class="row">
                        <div class="col-12">
                            <div class="recent-card">
                                <div class="card-header-custom">
                                    <h6><i class="fas fa-clock mr-2" style="color:var(--primary);"></i> Contact</h6>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-custom">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Subject</th>
                                                <th>Message</th>
                                                <th>Response</th>
                                                <th>Created At</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = "Select * from contact";
                                            $rec = mysqli_query($con,$sql);
                                            while($data = mysqli_fetch_assoc($rec)){
                                            ?>
                                            <tr>
                                                <td><?= htmlspecialchars((string)($data['name'] ?? ''), ENT_QUOTES, 'UTF-8') ?></td>
                                                <td><?= htmlspecialchars((string)($data['email'] ?? ''), ENT_QUOTES, 'UTF-8') ?></td>
                                                <td><?= htmlspecialchars((string)($data['subject'] ?? ''), ENT_QUOTES, 'UTF-8') ?></td>
                                                <td><?= htmlspecialchars((string)($data['message'] ?? ''), ENT_QUOTES, 'UTF-8') ?></td>
                                                <td><?= htmlspecialchars((string)($data['response'] ?? ''), ENT_QUOTES, 'UTF-8') ?></td>
                                                <td><?= htmlspecialchars((string)($data['created_at'] ?? ''), ENT_QUOTES, 'UTF-8') ?></td>
                                                <td>
                                                    <form method="post" action="delete-contact.php" onsubmit="return confirm('Delete this message?');" class="d-inline"><input type="hidden" name="id" value="<?= (int)$data['id'] ?>"><input type="hidden" name="csrf_token" value="<?= htmlspecialchars(csrf_token(), ENT_QUOTES, 'UTF-8') ?>"><button type="submit" class="btn btn-danger">DELETE</button></form>
                                                    <a href="edit-contact.php?id=<?= (int)$data['id'] ?>" class="btn btn-danger">EDIT</a>
                                                </td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
<?php
include 'layout/footer.php';
?>