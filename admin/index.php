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
                            <h4 style="font-weight:800;color:var(--secondary);margin:0;font-size:28px;">Dashboard</h4>
                            <p style="color:var(--gray-500);margin:0;font-size:14px;">Welcome back, John! Here's your service overview</p>
                        </div>
                        <div class="mt-2 mt-sm-0">
                            <button class="btn" style="background:var(--primary);color:var(--white);border-radius:50px;padding:10px 28px;font-weight:600;border:none;transition:0.3s;box-shadow:0 4px 15px rgba(233,30,99,0.3);">
                                <i class="fas fa-plus-circle mr-2"></i> Add Service
                            </button>
                        </div>
                    </div>

                    <!-- Stats Row -->
                    <div class="row">
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="stat-card card-pink">
                                <div class="stat-icon pink"><i class="fas fa-calendar-check"></i></div>
                                <div class="stat-number">142</div>
                                <div class="stat-label">Total Bookings</div>
                                <div class="stat-change up"><i class="fas fa-arrow-up mr-1"></i> 12% from last month</div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="stat-card card-green">
                                <div class="stat-icon green"><i class="fas fa-check-circle"></i></div>
                                <div class="stat-number">98</div>
                                <div class="stat-label">Completed Services</div>
                                <div class="stat-change up"><i class="fas fa-arrow-up mr-1"></i> 8% from last month</div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="stat-card card-orange">
                                <div class="stat-icon orange"><i class="fas fa-clock"></i></div>
                                <div class="stat-number">28</div>
                                <div class="stat-label">Pending Bookings</div>
                                <div class="stat-change down"><i class="fas fa-arrow-down mr-1"></i> 5% from last month</div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="stat-card card-purple">
                                <div class="stat-icon purple"><i class="fas fa-star"></i></div>
                                <div class="stat-number">4.8</div>
                                <div class="stat-label">Average Rating</div>
                                <div class="stat-change up"><i class="fas fa-arrow-up mr-1"></i> 0.3 from last month</div>
                            </div>
                        </div>
                    </div>

                    <!-- Services Quick View -->
                    <div class="row mb-4">
                        <div class="col-12">
                            <h6 style="font-weight:700;color:var(--secondary);margin-bottom:14px;font-size:17px;">
                                <i class="fas fa-cogs mr-2" style="color:var(--primary);"></i> Our Services
                            </h6>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-3">
                            <div class="service-mini-card">
                                <div class="service-icon pink"><i class="fas fa-car"></i></div>
                                <div class="service-info">
                                    <h6>Car Service</h6>
                                    <p>12 bookings <span class="service-count">this month</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-3">
                            <div class="service-mini-card">
                                <div class="service-icon blue"><i class="fas fa-utensils"></i></div>
                                <div class="service-info">
                                    <h6>Food Service</h6>
                                    <p>8 bookings <span class="service-count">this month</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-3">
                            <div class="service-mini-card">
                                <div class="service-icon green"><i class="fas fa-spa"></i></div>
                                <div class="service-info">
                                    <h6>Beauty Service</h6>
                                    <p>6 bookings <span class="service-count">this month</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-3">
                            <div class="service-mini-card">
                                <div class="service-icon orange"><i class="fas fa-paw"></i></div>
                                <div class="service-info">
                                    <h6>Pets Service</h6>
                                    <p>4 bookings <span class="service-count">this month</span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Bookings -->
                    <div class="row">
                        <div class="col-12">
                            <div class="recent-card">
                                <div class="card-header-custom">
                                    <h6><i class="fas fa-clock mr-2" style="color:var(--primary);"></i> Recent Bookings</h6>
                                    <a href="#">View All <i class="fas fa-arrow-right ml-1"></i></a>
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