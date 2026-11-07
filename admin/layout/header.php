<?php
require_once __DIR__ . '/../../config/bootstrap.php';
require_admin();
?>
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
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="authDropdown" data-toggle="dropdown">
                                <i class="fa-regular fa-user-circle"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="logout.php"><i class="fa-regular fa-right-to-bracket"></i>
                                    Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
