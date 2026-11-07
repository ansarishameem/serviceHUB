<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Settings - ServiceHub</title>
    <!-- Bootstrap 4 + Font Awesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="css/setting.css">
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

    <!-- ============================================
    MAIN CONTENT
 ============================================ -->
    <main>
        <div class="container">
            <div class="settings-wrapper">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="left">
                        <h4><i class="fas fa-cog mr-2" style="color:var(--primary);"></i> Profile Settings</h4>
                        <p>Manage your profile information and preferences</p>
                    </div>
                    <button class="btn-save"><i class="fas fa-save mr-2"></i> Save Changes</button>
                </div>

                <!-- Settings Grid -->
                <div class="settings-grid">

                    <!-- Sidebar -->
                    <aside class="settings-sidebar">
                        <h6 class="sidebar-title"><i class="fas fa-sliders-h mr-2"></i> Settings</h6>
                        <nav>
                            <a href="profile.php" class="nav-link active">
                                <i class="fas fa-user"></i> Profile
                            </a>
                            <a href="#" class="nav-link">
                                <i class="fas fa-lock"></i> Security
                            </a>
                            <a href="#" class="nav-link">
                                <i class="fas fa-bell"></i> Notifications
                            </a>
                            <a href="#" class="nav-link">
                                <i class="fas fa-palette"></i> Appearance
                            </a>
                            <a href="#" class="nav-link">
                                <i class="fas fa-credit-card"></i> Billing
                            </a>
                            <a href="#" class="nav-link" style="color:#ef4444;border-bottom:1px solid var(--gray-200);padding-bottom:16px;">
                                <i class="fas fa-trash-alt"></i> Delete Account
                            </a>
                        </nav>
                    </aside>

                    <!-- Main Content -->
                    <div class="settings-content">

                        <!-- Profile Information -->
                        <div class="settings-card">
                            <h6 class="card-title">Profile Information</h6>
                            <p class="card-subtitle">Update your personal information</p>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group-custom">
                                        <label>Full Name</label>
                                        <div class="input-icon-wrapper">
                                            <i class="fas fa-user"></i>
                                            <input type="text" class="form-control" value="John Doe">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-custom">
                                        <label>Username</label>
                                        <div class="input-icon-wrapper">
                                            <i class="fas fa-at"></i>
                                            <input type="text" class="form-control" value="johndoe">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group-custom">
                                        <label>Email Address</label>
                                        <div class="input-icon-wrapper">
                                            <i class="fas fa-envelope"></i>
                                            <input type="email" class="form-control" value="john.doe@servicehub.com">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-custom">
                                        <label>Phone Number</label>
                                        <div class="input-icon-wrapper">
                                            <i class="fas fa-phone"></i>
                                            <input type="text" class="form-control" value="+1 234 567 890">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-custom">
                                <label>Bio</label>
                                <div class="input-icon-wrapper">
                                    <i class="fas fa-info-circle" style="top:18px;transform:none;"></i>
                                    <textarea class="form-control" rows="3" style="padding-left:42px;resize:vertical;">Experienced service professional with over 5 years in the industry. Passionate about providing quality services and building strong customer relationships.</textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Avatar Upload -->
                        <div class="settings-card">
                            <h6 class="card-title">Profile Picture</h6>
                            <p class="card-subtitle">Upload a new profile picture</p>

                            <div class="avatar-upload">
                                <div class="avatar-preview">JD</div>
                                <div class="upload-info">
                                    <h6>John Doe</h6>
                                    <p>JPG, PNG or GIF. Max 2MB.</p>
                                    <div>
                                        <button class="btn-upload"><i class="fas fa-upload mr-1"></i> Upload</button>
                                        <button class="btn-remove"><i class="fas fa-times mr-1"></i> Remove</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Preferences -->
                        <div class="settings-card">
                            <h6 class="card-title">Preferences</h6>
                            <p class="card-subtitle">Customize your experience</p>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group-custom">
                                        <label>Language</label>
                                        <select class="form-control">
                                            <option>English</option>
                                            <option>Spanish</option>
                                            <option>French</option>
                                            <option>German</option>
                                            <option>Hindi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-custom">
                                        <label>Currency</label>
                                        <select class="form-control">
                                            <option>USD ($)</option>
                                            <option>EUR (€)</option>
                                            <option>GBP (£)</option>
                                            <option>INR (₹)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-custom">
                                <label>Time Zone</label>
                                <select class="form-control">
                                    <option>UTC-05:00 Eastern Time (US & Canada)</option>
                                    <option>UTC-08:00 Pacific Time (US & Canada)</option>
                                    <option>UTC+00:00 London</option>
                                    <option>UTC+05:30 India</option>
                                    <option>UTC+08:00 Singapore</option>
                                </select>
                            </div>
                        </div>

                        <!-- Notifications -->
                        <div class="settings-card">
                            <h6 class="card-title">Notifications</h6>
                            <p class="card-subtitle">Manage your notification preferences</p>

                            <div class="toggle-item">
                                <div class="toggle-info">
                                    <h6>Email Notifications</h6>
                                    <p>Receive email updates about your bookings</p>
                                </div>
                                <div class="toggle-switch active" onclick="toggleSwitch(this)">
                                    <div class="toggle-dot"></div>
                                </div>
                            </div>

                            <div class="toggle-item">
                                <div class="toggle-info">
                                    <h6>Push Notifications</h6>
                                    <p>Receive push notifications on your device</p>
                                </div>
                                <div class="toggle-switch active" onclick="toggleSwitch(this)">
                                    <div class="toggle-dot"></div>
                                </div>
                            </div>

                            <div class="toggle-item">
                                <div class="toggle-info">
                                    <h6>SMS Alerts</h6>
                                    <p>Receive SMS alerts for booking updates</p>
                                </div>
                                <div class="toggle-switch" onclick="toggleSwitch(this)">
                                    <div class="toggle-dot"></div>
                                </div>
                            </div>

                            <div class="toggle-item" style="border-bottom:none;">
                                <div class="toggle-info">
                                    <h6>Marketing Emails</h6>
                                    <p>Receive promotional offers and newsletters</p>
                                </div>
                                <div class="toggle-switch" onclick="toggleSwitch(this)">
                                    <div class="toggle-dot"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Danger Zone -->
                        <div class="danger-zone">
                            <h6 class="danger-title"><i class="fas fa-exclamation-triangle mr-2"></i> Danger Zone</h6>
                            <p class="danger-subtitle">Once you delete your account, there is no going back. Please be certain.</p>
                            <button class="btn-danger-custom"><i class="fas fa-trash-alt mr-2"></i> Delete Account</button>
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
                        <li><i class="fa-regular fa-location-dot" style="color:var(--primary); width:20px;"></i> 123 Main St, NY</li>
                        <li><i class="fa-regular fa-envelope" style="color:var(--primary); width:20px;"></i> hello@servicehub.com</li>
                        <li><i class="fa-regular fa-phone" style="color:var(--primary); width:20px;"></i> +1 234 567 890</li>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Toggle Switch Function
        function toggleSwitch(element) {
            element.classList.toggle('active');
        }
    </script>

</body>

</html>