<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - ServiceHub</title>
    <!-- Bootstrap 4 + Font Awesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="css/dashbord.css">
</head>

<body>
    <header>
        <!-- ===== HEADER / NAVBAR ===== -->
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
                                <a class="dropdown-item" href="carservice.php"><i class="fa-solid fa-car"></i> Car Service</a>
                                <a class="dropdown-item" href="foodservice.php"><i class="fa-solid fa-utensils"></i> Food Service</a>
                                <a class="dropdown-item" href="beautyservice.php"><i class="fa-solid fa-spa"></i> Beauty Service</a>
                                <a class="dropdown-item" href="petservice.php"><i class="fa-solid fa-paw"></i> Pets Service</a>
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
                                <a class="dropdown-item" href="signin.php"><i class="fa-regular fa-right-to-bracket"></i>
                                    Login</a>
                                <a class="dropdown-item" href="register.php"><i class="fa-regular fa-user-plus"></i> Sign Up</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- ==================== MAIN CONTENT ==================== -->
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
                        <a href="profile.php" class="nav-link">
                            <span class="nav-icon-wrapper"><i class="fas fa-user"></i></span>
                            <span class="nav-text">Profile</span>
                        </a>
                        <a href="service.php" class="nav-link">
                            <span class="nav-icon-wrapper"><i class="fas fa-cogs"></i></span>
                            <span class="nav-text">Services</span>
                        </a>
                        <a href="setting.php" class="nav-link">
                            <span class="nav-icon-wrapper"><i class="fas fa-sliders-h"></i></span>
                            <span class="nav-text">Settings</span>
                        </a>
                        <a href="#" class="nav-link logout">
                            <span class="nav-icon-wrapper" style="background:rgba(239,68,68,0.08);color:#ef4444;"><i class="fas fa-sign-out-alt"></i></span>
                            <span class="nav-text">Logout</span>
                        </a>
                    </nav>
                </aside>

              
            </div>
        </div>
    </main>

    <!-- ===== FOOTER ===== -->
    <footer class="footer-custom">
        <div class="container">
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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Sidebar Navigation - Active state only
        document.querySelectorAll('.sidebar .nav-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();

                // Remove active class from all links
                document.querySelectorAll('.sidebar .nav-link').forEach(l => {
                    l.classList.remove('active');
                });

                // Add active class to clicked link
                this.classList.add('active');
            });
        });
    </script>
</body>

</html>