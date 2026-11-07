<?php
include 'layout/header.php';
?>

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

   <?php
include 'layout/footer.php';
?>