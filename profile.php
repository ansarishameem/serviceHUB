<?php
require_once __DIR__ . '/config/bootstrap.php';
require_login();
include 'layout/header.php';
?>

    <!-- ============================================
    MAIN CONTENT
    ============================================ -->
    <main>
        <div class="container">
            <div class="profile-wrapper">

                <!-- Breadcrumb -->
                <nav class="breadcrumb-custom" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="home.php"><i class="fas fa-home mr-1"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">My Profile</li>
                    </ol>
                </nav>

                <!-- Profile Header -->
                <div class="profile-header">
                    <div class="user-info">
                        <div class="avatar">
                            <?= htmlspecialchars(strtoupper(substr($_SESSION['login_data']['name'] ?? 'U', 0, 1)), ENT_QUOTES, 'UTF-8') ?>
                            <span class="online-dot"></span>
                        </div>
                        <div class="details">
                            <h3><?= htmlspecialchars($_SESSION['login_data']['name'] ?? 'User', ENT_QUOTES, 'UTF-8') ?></h3>
                            <p class="email"><?= htmlspecialchars($_SESSION['login_data']['email'] ?? '', ENT_QUOTES, 'UTF-8') ?></p>
                            <span class="badge-role"><i class="fas fa-shield-alt mr-1"></i> <?= htmlspecialchars(ucfirst($_SESSION['login_data']['role'] ?? 'user'), ENT_QUOTES, 'UTF-8') ?></span>
                        </div>
                    </div>
                    <div class="header-actions">
                        <button class="btn-outline-custom"><i class="fas fa-share-alt mr-2"></i> Share</button>
                        <button class="btn-primary-custom"><i class="fas fa-edit mr-2"></i> Edit Profile</button>
                    </div>
                </div>

                <!-- Stats Row -->
                <div class="stats-row">
                    <div class="stat-card">
                        <div class="stat-icon pink"><i class="fas fa-calendar-check"></i></div>
                        <div class="stat-number">142</div>
                        <div class="stat-label">Total Bookings</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon green"><i class="fas fa-check-circle"></i></div>
                        <div class="stat-number">98</div>
                        <div class="stat-label">Completed</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon orange"><i class="fas fa-star"></i></div>
                        <div class="stat-number">4.8</div>
                        <div class="stat-label">Average Rating</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon blue"><i class="fas fa-users"></i></div>
                        <div class="stat-number">24</div>
                        <div class="stat-label">Clients</div>
                    </div>
                </div>

                <!-- Profile Grid -->
                <div class="profile-grid">

                    <!-- Left Column - Main Info -->
                    <div class="profile-main-card">
                        <h6 class="section-title"><i class="fas fa-user mr-2" style="color:var(--primary);"></i> About Me</h6>
                        <p class="section-subtitle">Personal information and details</p>

                        <div class="info-grid">
                            <div class="info-item">
                                <div class="label"><i class="fas fa-user mr-1"></i> Full Name</div>
                                <div class="value">John Doe</div>
                            </div>
                            <div class="info-item">
                                <div class="label"><i class="fas fa-envelope mr-1"></i> Email</div>
                                <div class="value">john.doe@servicehub.com</div>
                            </div>
                            <div class="info-item">
                                <div class="label"><i class="fas fa-phone mr-1"></i> Phone</div>
                                <div class="value">+1 234 567 890</div>
                            </div>
                            <div class="info-item">
                                <div class="label"><i class="fas fa-map-marker-alt mr-1"></i> Location</div>
                                <div class="value">New York, USA</div>
                            </div>
                            <div class="info-item">
                                <div class="label"><i class="fas fa-calendar-alt mr-1"></i> Joined</div>
                                <div class="value">January 15, 2025</div>
                            </div>
                            <div class="info-item">
                                <div class="label"><i class="fas fa-shield-alt mr-1"></i> Role</div>
                                <div class="value"><span class="role-tag">Administrator</span></div>
                            </div>
                            <div class="info-item full-width">
                                <div class="label"><i class="fas fa-info-circle mr-1"></i> Bio</div>
                                <div class="value"><span class="bio-text">Experienced service professional with over 5 years in the industry. Passionate about providing quality services and building strong customer relationships. Committed to excellence and customer satisfaction.</span></div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column - Sidebar -->
                    <div class="profile-sidebar">

                        <!-- Recent Activity -->
                        <div class="sidebar-card">
                            <h6 class="card-title"><i class="fas fa-clock mr-2" style="color:var(--primary);"></i> Recent Activity</h6>

                            <div class="activity-item">
                                <div class="act-icon pink"><i class="fas fa-car"></i></div>
                                <div class="act-content">
                                    <h6>Car Service Completed</h6>
                                    <p>Sarah Wilson</p>
                                </div>
                                <span class="act-time">2h ago</span>
                            </div>

                            <div class="activity-item">
                                <div class="act-icon blue"><i class="fas fa-utensils"></i></div>
                                <div class="act-content">
                                    <h6>Food Delivery Order</h6>
                                    <p>Mike Johnson</p>
                                </div>
                                <span class="act-time">5h ago</span>
                            </div>

                            <div class="activity-item">
                                <div class="act-icon green"><i class="fas fa-spa"></i></div>
                                <div class="act-content">
                                    <h6>Beauty Service Booked</h6>
                                    <p>Emma Davis</p>
                                </div>
                                <span class="act-time">1d ago</span>
                            </div>

                            <div class="activity-item" style="border-bottom:none;">
                                <div class="act-icon orange"><i class="fas fa-paw"></i></div>
                                <div class="act-content">
                                    <h6>Pets Service Scheduled</h6>
                                    <p>James Brown</p>
                                </div>
                                <span class="act-time">2d ago</span>
                            </div>
                        </div>

                        <!-- Quick Links -->
                        <div class="sidebar-card">
                            <h6 class="card-title"><i class="fas fa-link mr-2" style="color:var(--primary);"></i> Quick Links</h6>

                            <a href="#" class="quick-link-item">
                                <i class="fas fa-cog"></i> Settings
                                <span class="arrow"><i class="fas fa-chevron-right"></i></span>
                            </a>
                            <a href="#" class="quick-link-item">
                                <i class="fas fa-calendar-check"></i> My Bookings
                                <span class="arrow"><i class="fas fa-chevron-right"></i></span>
                            </a>
                            <a href="#" class="quick-link-item">
                                <i class="fas fa-star"></i> Reviews
                                <span class="arrow"><i class="fas fa-chevron-right"></i></span>
                            </a>
                            <a href="#" class="quick-link-item">
                                <i class="fas fa-credit-card"></i> Payments
                                <span class="arrow"><i class="fas fa-chevron-right"></i></span>
                            </a>
                            <a href="#" class="quick-link-item" style="border-bottom:none;">
                                <i class="fas fa-question-circle"></i> Help Center
                                <span class="arrow"><i class="fas fa-chevron-right"></i></span>
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </main>

   <?php
include 'layout/footer.php';
?>