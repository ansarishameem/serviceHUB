

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
                            <h4 style="font-weight:800;color:var(--secondary);margin:0;font-size:28px;">Users</h4>
                        </div>
                        <div class="mt-2 mt-sm-0">
                            <button class="btn" style="background:var(--primary);color:var(--white);border-radius:50px;padding:10px 28px;font-weight:600;border:none;transition:0.3s;box-shadow:0 4px 15px rgba(233,30,99,0.3);">
                                <a href="add-users.php"><i class="fas fa-plus-circle mr-2"></i> Add Users</a>
                            </button>
                        </div>
                    </div>

                    <!-- Recent Bookings -->
                    <div class="row">
                        <div class="col-12">
                            <div class="recent-card">
                                <div class="card-header-custom">
                                    <h6><i class="fas fa-clock mr-2" style="color:var(--primary);"></i> Users</h6>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-custom">
                                        <thead>
                                            <tr>
                                                <th>Service</th>
                                                <th>Client</th>
                                                <th>Date</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><i class="fas fa-car mr-2" style="color:var(--primary);"></i> Car Detailing</td>
                                                <td>Sarah Wilson</td>
                                                <td>Jan 20, 2025</td>
                                                <td>$79</td>
                                                <td><span class="status-badge completed">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fas fa-utensils mr-2" style="color:var(--accent);"></i> Gourmet Delivery</td>
                                                <td>Mike Johnson</td>
                                                <td>Jan 19, 2025</td>
                                                <td>$45</td>
                                                <td><span class="status-badge inprogress">In Progress</span></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fas fa-spa mr-2" style="color:#22c55e;"></i> Spa Package</td>
                                                <td>Emma Davis</td>
                                                <td>Jan 18, 2025</td>
                                                <td>$120</td>
                                                <td><span class="status-badge pending">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fas fa-paw mr-2" style="color:#f59e0b;"></i> Pet Grooming</td>
                                                <td>James Brown</td>
                                                <td>Jan 17, 2025</td>
                                                <td>$55</td>
                                                <td><span class="status-badge cancelled">Cancelled</span></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fas fa-car mr-2" style="color:var(--primary);"></i> Oil Change</td>
                                                <td>Lisa Anderson</td>
                                                <td>Jan 16, 2025</td>
                                                <td>$35</td>
                                                <td><span class="status-badge completed">Completed</span></td>
                                            </tr>
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