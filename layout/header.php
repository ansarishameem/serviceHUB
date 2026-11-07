<?php
require_once __DIR__ . '/../config/bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
    <title>Service Hub - Find, Buy & Own Dreams</title>
    <!-- Bootstrap 4 + Font Awesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/beautyservice.css">
    <link rel="stylesheet" href="css/carservice.css">
    <link rel="stylesheet" href="css/pricing.css">
    <link rel="stylesheet" href="css/faq.css">
    <link rel="stylesheet" href="css/foodservice.css"> 
    <link rel="stylesheet" href="css/profile.css"> 
    <link rel="stylesheet" href="css/setting.css">
    <link rel="stylesheet" href="css/helpcenter.css">
    <link rel="stylesheet" href="css/term&condition.css">
  
    <link rel="stylesheet" href="css/petservice.css">
    <link rel="stylesheet" href="css/privacypolicy.css">
  




</head>

<body>
    <header>
        <!-- ===== HEADER / NAVBAR ===== -->
        <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
            <div class="container">
                <a class="navbar-brand" href="index.php">
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
                        <!-- Home -->
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>

                        <!-- About Us -->
                        <li class="nav-item">
                            <a class="nav-link" href="abouts.php">About Us</a>
                        </li>

                        <!-- Services with Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="service.php" id="servicesDropdown" data-toggle="dropdown">
                                Services
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="carservice.php"><i class="fa-solid fa-car"></i> Car Service</a>
                                <a class="dropdown-item" href="foodservice.php"><i class="fa-solid fa-utensils"></i> Food Service</a>
                                <a class="dropdown-item" href="beautyservice.php"><i class="fa-solid fa-spa"></i> Beauty Service</a>
                                <a class="dropdown-item" href="petservice.php"><i class="fa-solid fa-paw"></i> Pets Service</a>
                            </div>
                        </li>

                        <!-- Contact -->
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>

                        <!-- Pricing -->
                        <li class="nav-item">
                            <a class="nav-link" href="pricing.php">Pricing</a>
                        </li>

                        <!-- Login / Sign Up -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="signin.php" id="authDropdown" data-toggle="dropdown">
                                <i class="fa-regular fa-user-circle"></i>
                            </a>
                           <div class="dropdown-menu dropdown-menu-right">
                            <?php 
                            if(isset($_SESSION['login_data'])){
                            ?>
                                <a class="dropdown-item" href="logout.php"><i
                                        class="fa-regular fa-right-to-bracket"></i>Logout</a>
                            <?php }else{?>
                                <a class="dropdown-item" href="signin.php"><i
                                        class="fa-regular fa-right-to-bracket"></i> Sign In</a>
                                <a class="dropdown-item" href="register.php"><i class="fa-regular fa-user-plus"></i>
                                    Register</a>
                            <?php }?>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
