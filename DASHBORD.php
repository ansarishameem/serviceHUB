<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - ServiceHub</title>
    <!-- Bootstrap 4 + Font Awesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="css/dashbord_.css">
</head>

<body>

    <!-- ============================================
                       HEADER
    ============================================ -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <div class="logo-wrapper">
                        <div class="logo-icon">
                            <i class="fa-solid fa-hands"></i>
                        </div>
                    </div>
                    <div class="brand-text">
                        <span class="service">SERVICE</span>
                        <span class="hub">HUB</span>
                        <span class="tagline">One Platform. Every Service.</span>
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar">
                    <span class="navbar-toggler-icon"><i class="fa-solid fa-bars"
                    style="color:var(--secondary);"></i></span>
                </button>

                <div class="collapse navbar-collapse" id="mainNavbar">
                    <ul class="navbar-nav ml-auto align-items-lg-center">
                        <li class="nav-item active">
                            <a class="nav-link" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="abouts.php">About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" data-toggle="dropdown">
                                Services
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="carservice.php"><i class="fa-solid fa-car"></i> Car
                                    Service</a>
                                <a class="dropdown-item" href="foodservice.php"><i class="fa-solid fa-utensils"></i>
                                    Food Service</a>
                                <a class="dropdown-item" href="beautyservice.php"><i class="fa-solid fa-spa"></i>
                                    Beauty Service</a>
                                <a class="dropdown-item" href="petservice.php"><i class="fa-solid fa-paw"></i> Pets
                                    Service</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pricing.php">Pricing</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="authDropdown" data-toggle="dropdown">
                                <i class="fa-regular fa-user-circle"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="signin.php"><i
                                        class="fa-regular fa-right-to-bracket"></i>
                                    Login</a>
                                <a class="dropdown-item" href="register.php"><i class="fa-regular fa-user-plus"></i>
                                    Sign Up</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- ============================================
                     MAIN CONTENT
    ============================================ -->
    <main>
        <div class="container">
            <div class="dashboard-wrapper">

                <!-- ===== SIDEBAR ===== -->
                <aside class="sidebar">
                    <div class="sidebar-header">
                        <div class="avatar">JD</div>
                        <h5>John Doe</h5>
                        <p>john.doe@email.com</p>
                    </div>

                    <nav>
                        <a href="DASHBORD.php" class="nav-link active">
                            <span class="nav-icon-wrapper"><i class="fas fa-th-large"></i></span>
                            <span class="nav-text">Dashboard</span>
                        </a>
                        <a href="#" class="nav-link">
                            <span class="nav-icon-wrapper"><i class="fas fa-calendar-check"></i></span>
                            <span class="nav-text">Bookings</span>
                            <span class="nav-badge">12</span>
                        </a>
                        <a href="service.php" class="nav-link">
                            <span class="nav-icon-wrapper"><i class="fas fa-cogs"></i></span>
                            <span class="nav-text">Services</span>
                            <span class="nav-badge">4</span>
                        </a>
                        <a href="#" class="nav-link">
                            <span class="nav-icon-wrapper"><i class="fas fa-users"></i></span>
                            <span class="nav-text">Clients</span>
                            <span class="nav-badge">8</span>
                        </a>
                        <a href="#" class="nav-link">
                            <span class="nav-icon-wrapper"><i class="fas fa-credit-card"></i></span>
                            <span class="nav-text">Payments</span>
                        </a>
                        <a href="setting.php" class="nav-link">
                            <span class="nav-icon-wrapper"><i class="fas fa-sliders-h"></i></span>
                            <span class="nav-text">Settings</span>
                        </a>
                        <a href="#" class="nav-link logout">
                            <span class="nav-icon-wrapper" style="background:rgba(239,68,68,0.08);color:#ef4444;"><i
                                    class="fas fa-sign-out-alt"></i></span>
                            <span class="nav-text">Logout</span>
                        </a>
                    </nav>
                </aside>

                <!-- ===== MAIN CONTENT AREA ===== -->
                <div class="main-content">

                    <!-- Page Header -->
                    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap">
                        <div>
                            <h4 style="font-weight:800;color:var(--secondary);margin:0;font-size:28px;">Dashboard</h4>
                            <p style="color:var(--gray-500);margin:0;font-size:14px;">Welcome back, John! Here's your
                                service overview</p>
                        </div>
                        <div class="mt-2 mt-sm-0">
                            <button class="btn"
                                style="background:var(--primary);color:var(--white);border-radius:50px;padding:10px 28px;font-weight:600;border:none;transition:0.3s;box-shadow:0 4px 15px rgba(233,30,99,0.3);">
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
                                <div class="stat-change up"><i class="fas fa-arrow-up mr-1"></i> 12% from last month
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="stat-card card-green">
                                <div class="stat-icon green"><i class="fas fa-check-circle"></i></div>
                                <div class="stat-number">98</div>
                                <div class="stat-label">Completed Services</div>
                                <div class="stat-change up"><i class="fas fa-arrow-up mr-1"></i> 8% from last month
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="stat-card card-orange">
                                <div class="stat-icon orange"><i class="fas fa-clock"></i></div>
                                <div class="stat-number">28</div>
                                <div class="stat-label">Pending Bookings</div>
                                <div class="stat-change down"><i class="fas fa-arrow-down mr-1"></i> 5% from last month
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="stat-card card-purple">
                                <div class="stat-icon purple"><i class="fas fa-star"></i></div>
                                <div class="stat-number">4.8</div>
                                <div class="stat-label">Average Rating</div>
                                <div class="stat-change up"><i class="fas fa-arrow-up mr-1"></i> 0.3 from last month
                                </div>
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
                                    <h6><i class="fas fa-clock mr-2" style="color:var(--primary);"></i> Recent Bookings
                                    </h6>
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
                                                <td><i class="fas fa-car mr-2" style="color:var(--primary);"></i> Car
                                                    Detailing</td>
                                                <td>Sarah Wilson</td>
                                                <td>Jan 20, 2025</td>
                                                <td>$79</td>
                                                <td><span class="status-badge completed">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fas fa-utensils mr-2" style="color:var(--accent);"></i>
                                                    Gourmet Delivery</td>
                                                <td>Mike Johnson</td>
                                                <td>Jan 19, 2025</td>
                                                <td>$45</td>
                                                <td><span class="status-badge inprogress">In Progress</span></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fas fa-spa mr-2" style="color:#22c55e;"></i> Spa Package
                                                </td>
                                                <td>Emma Davis</td>
                                                <td>Jan 18, 2025</td>
                                                <td>$120</td>
                                                <td><span class="status-badge pending">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fas fa-paw mr-2" style="color:#f59e0b;"></i> Pet Grooming
                                                </td>
                                                <td>James Brown</td>
                                                <td>Jan 17, 2025</td>
                                                <td>$55</td>
                                                <td><span class="status-badge cancelled">Cancelled</span></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fas fa-car mr-2" style="color:var(--primary);"></i> Oil
                                                    Change</td>
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

    <!-- ============================================
    FOOTER
    ============================================ -->
    <footer class="footer-custom">
        <div class="container">
            <div class="row">

                <!-- About -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="footer-brand">
                        <div class="logo-icon">
                            <i class="fa-solid fa-hands"></i>
                        </div>
                        <div class="brand-text">
                            <span class="service">SERVICE</span>
                            <span class="hub">HUB</span>
                            <span class="tagline">One Platform. Every Service.</span>
                        </div>
                    </div>
                    <p style="font-size:14px; line-height:1.8; opacity:0.8;">
                        Find, buy, and own your dream services. We connect buyers and sellers in a trusted marketplace.
                    </p>
                    <div class="social-icons mt-3">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="abouts.php">About</a></li>
                        <li><a href="service.php">Services</a></li>
                        <li><a href="pricing.php">Pricing</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Our Services</h5>
                    <ul class="list-unstyled">
                        <li><a href="carservice.php">Car Service</a></li>
                        <li><a href="foodservice.php">Food Service</a></li>
                        <li><a href="beautyservice.php">Beauty Service</a></li>
                        <li><a href="petservice.php">Pets Service</a></li>
                    </ul>
                </div>

                <!-- Support -->
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Support</h5>
                    <ul class="list-unstyled">
                        <li><a href="helpsenter.php">Help Center</a></li>
                        <li><a href="privacypolicy.php">Privacy Policy</a></li>
                        <li><a href="term&condition.php">Terms &amp; Conditions</a></li>
                        <li><a href="FAQ.php">FAQ</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Get in Touch</h5>
                    <ul class="list-unstyled" style="font-size:14px; opacity:0.8;">
                        <li><i class="fa-regular fa-location-dot" style="color:var(--primary); width:20px;"></i> 123
                            Main St, NY</li>
                        <li><i class="fa-regular fa-envelope" style="color:var(--primary); width:20px;"></i>
                            hello@servicehub.com</li>
                        <li><i class="fa-regular fa-phone" style="color:var(--primary); width:20px;"></i> +1 234 567 890
                        </li>
                    </ul>
                </div>

            </div>

            <!-- Bottom Bar -->
            <div class="footer-bottom d-flex flex-wrap justify-content-between align-items-center">
                <span>&copy; 2025 Service Hub. All rights reserved.</span>
                <span>
                    <a href="#">Privacy</a> <span class="mx-2">|</span>
                    <a href="#">Terms</a> <span class="mx-2">|</span>
                    <a href="#">Sitemap</a>
                </span>
            </div>
        </div>
    </footer>

    <!-- ============================================
    SCRIPTS
    ============================================ -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>