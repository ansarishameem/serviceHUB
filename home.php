<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Hub - Find, Buy & Own Dreams</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="css/home.css">

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
                        <!-- Home -->
                        <li class="nav-item active">
                            <a class="nav-link" href="home.php">Home</a>
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
                            <a class="nav-link dropdown-toggle" href="#" id="authDropdown" data-toggle="dropdown">
                                <i class="fa-regular fa-user-circle"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="signin.php"><i
                                        class="fa-regular fa-right-to-bracket"></i> Sign In</a>
                                <a class="dropdown-item" href="register.php"><i class="fa-regular fa-user-plus"></i>
                                    Register</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- ==================== BANNER SECTION ==================== -->
    <section class="banner-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 banner-content" data-aos="fade-right">
                    <span class="banner-badge">
                        <i class="fas fa-star mr-2"></i> Explore top-rated attractions
                    </span>
                    <h1 class="banner-title">
                        Let us help you<br>
                        <span>Find, Buy</span> & Own Dreams
                    </h1>
                    <p class="banner-desc">
                        Country's most loved and trusted classified ad listing website.
                        Browse thousands of items near you.
                    </p>

                    <!-- Search Box -->
                    <div class="search-box-wrapper">
                        <div class="search-field">
                            <i class="fas fa-th-large"></i>
                            <select>
                                <option>Choose Category</option>
                                <option>Computer</option>
                                <option>Automobile</option>
                                <option>Car Wash</option>
                                <option>Cleaning</option>
                                <option>Electrical</option>
                                <option>Construction</option>
                            </select>
                        </div>
                        <div class="search-divider"></div>
                        <div class="search-field">
                            <i class="fas fa-map-marker-alt"></i>
                            <select>
                                <option>Choose Location</option>
                                <option>New York</option>
                                <option>Los Angeles</option>
                                <option>Chicago</option>
                                <option>Houston</option>
                            </select>
                        </div>
                        <button class="btn-search">
                            <i class="fas fa-search"></i> Search
                        </button>
                    </div>
                </div>
                <div class="col-lg-5 text-center mt-4 mt-lg-0" data-aos="fade-left">
                    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=500" alt="Banner"
                        class="img-fluid rounded-2xl shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== CATEGORY SECTION ==================== -->
    <section class="category-section">
        <div class="container">
            <div class="category-header">
                <div>
                    <span class="section-badge"><i class="fas fa-th mr-2"></i> CATEGORIES</span>
                    <h2 class="section-title mb-0">Our <span>Category</span></h2>
                </div>
                <a href="service.php" class="btn-view-all">
                    View All <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>
            <p class="section-subtitle mb-4">Buy and Sell Everything from Used Our Top Category</p>

            <!-- Row 1 -->
            <div class="row">
                <div class="col-6 col-md-2 mb-3" data-aos="fade-up" data-aos-delay="50">
                    <a href="#" class="category-card">
                        <img src="https://cdn-icons-png.flaticon.com/512/3097/3097180.png" alt="Automotive">
                        <h5>Automotive</h5>
                        <p>09 Ads</p>
                    </a>
                </div>
                <div class="col-6 col-md-2 mb-3" data-aos="fade-up" data-aos-delay="100">
                    <a href="#" class="category-card">
                        <img src="https://cdn-icons-png.flaticon.com/512/3659/3659899.png" alt="Electronics">
                        <h5>Electronics</h5>
                        <p>09 Ads</p>
                    </a>
                </div>
                <div class="col-6 col-md-2 mb-3" data-aos="fade-up" data-aos-delay="150">
                    <a href="#" class="category-card">
                        <img src="https://cdn-icons-png.flaticon.com/512/2331/2331970.png" alt="Fashion">
                        <h5>Fashion Style</h5>
                        <p>09 Ads</p>
                    </a>
                </div>
                <div class="col-6 col-md-2 mb-3" data-aos="fade-up" data-aos-delay="200">
                    <a href="#" class="category-card">
                        <img src="https://cdn-icons-png.flaticon.com/512/2966/2966327.png" alt="Health">
                        <h5>Health Care</h5>
                        <p>09 Ads</p>
                    </a>
                </div>
                <div class="col-6 col-md-2 mb-3" data-aos="fade-up" data-aos-delay="250">
                    <a href="#" class="category-card">
                        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Job">
                        <h5>Job Board</h5>
                        <p>09 Ads</p>
                    </a>
                </div>
                <div class="col-6 col-md-2 mb-3" data-aos="fade-up" data-aos-delay="300">
                    <a href="#" class="category-card">
                        <img src="https://cdn-icons-png.flaticon.com/512/2232/2232688.png" alt="Education">
                        <h5>Education</h5>
                        <p>09 Ads</p>
                    </a>
                </div>
            </div>

            <!-- Row 2 -->
            <div class="row">
                <div class="col-6 col-md-2 mb-3" data-aos="fade-up" data-aos-delay="100">
                    <a href="#" class="category-card">
                        <img src="https://cdn-icons-png.flaticon.com/512/619/619034.png" alt="Real Estate">
                        <h5>Real Estate</h5>
                        <p>09 Ads</p>
                    </a>
                </div>
                <div class="col-6 col-md-2 mb-3" data-aos="fade-up" data-aos-delay="150">
                    <a href="#" class="category-card">
                        <img src="https://cdn-icons-png.flaticon.com/512/201/201623.png" alt="Travel">
                        <h5>Travel</h5>
                        <p>09 Ads</p>
                    </a>
                </div>
                <div class="col-6 col-md-2 mb-3" data-aos="fade-up" data-aos-delay="200">
                    <a href="#" class="category-card">
                        <img src="https://cdn-icons-png.flaticon.com/512/857/857418.png" alt="Sports">
                        <h5>Sports & Game</h5>
                        <p>09 Ads</p>
                    </a>
                </div>
                <div class="col-6 col-md-2 mb-3" data-aos="fade-up" data-aos-delay="250">
                    <a href="#" class="category-card">
                        <img src="https://cdn-icons-png.flaticon.com/512/3143/3143840.png" alt="Magazines">
                        <h5>Magazines</h5>
                        <p>09 Ads</p>
                    </a>
                </div>
                <div class="col-6 col-md-2 mb-3" data-aos="fade-up" data-aos-delay="300">
                    <a href="#" class="category-card">
                        <img src="https://cdn-icons-png.flaticon.com/512/616/616408.png" alt="Pet">
                        <h5>Pet & Animal</h5>
                        <p>09 Ads</p>
                    </a>
                </div>
                <div class="col-6 col-md-2 mb-3" data-aos="fade-up" data-aos-delay="350">
                    <a href="#" class="category-card">
                        <img src="https://cdn-icons-png.flaticon.com/512/2353/2353611.png" alt="Furniture">
                        <h5>Furniture</h5>
                        <p>09 Ads</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== LOCATIONS SECTION ==================== -->
    <section class="locations-section">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <span class="section-badge"><i class="fas fa-map-marker-alt mr-2"></i> COVERAGE</span>
                <h2 class="section-title">Popular <span>Locations</span></h2>
                <p class="section-subtitle">We are available in multiple cities across the globe</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="location-card">
                        <div class="location-img-wrap">
                            <img src="images/united state.jpg" alt="USA">
                            <div class="location-overlay"><i class="fas fa-search-plus"></i></div>
                        </div>
                        <div class="location-body">
                            <h5>United States</h5>
                            <p><i class="fas fa-map-marker-alt mr-1"></i> 20+ Cities</p>
                            <a href="#" class="btn-location">View Details <i class="fas fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="location-card">
                        <div class="location-img-wrap">
                            <img src="images/canada.jpg" alt="Canada">
                            <div class="location-overlay"><i class="fas fa-search-plus"></i></div>
                        </div>
                        <div class="location-body">
                            <h5>Canada</h5>
                            <p><i class="fas fa-map-marker-alt mr-1"></i> 15+ Cities</p>
                            <a href="#" class="btn-location">View Details <i class="fas fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="location-card">
                        <div class="location-img-wrap">
                            <img src="images/london.jpg" alt="UK">
                            <div class="location-overlay"><i class="fas fa-search-plus"></i></div>
                        </div>
                        <div class="location-body">
                            <h5>United Kingdom</h5>
                            <p><i class="fas fa-map-marker-alt mr-1"></i> 25+ Cities</p>
                            <a href="#" class="btn-location">View Details <i class="fas fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="location-card">
                        <div class="location-img-wrap">
                            <img src="images/austrailiya.jpg"
                                alt="Australia">
                            <div class="location-overlay"><i class="fas fa-search-plus"></i></div>
                        </div>
                        <div class="location-body">
                            <h5>Australia</h5>
                            <p><i class="fas fa-map-marker-alt mr-1"></i> 10+ Cities</p>
                            <a href="#" class="btn-location">View Details <i class="fas fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="location-card">
                        <div class="location-img-wrap">
                            <img src="images/france.jpg" alt="France">
                            <div class="location-overlay"><i class="fas fa-search-plus"></i></div>
                        </div>
                        <div class="location-body">
                            <h5>France</h5>
                            <p><i class="fas fa-map-marker-alt mr-1"></i> 12+ Cities</p>
                            <a href="#" class="btn-location">View Details <i class="fas fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="location-card">
                        <div class="location-img-wrap">
                            <img src="images/china.jpg" alt="China">
                            <div class="location-overlay"><i class="fas fa-search-plus"></i></div>
                        </div>
                        <div class="location-body">
                            <h5>China</h5>
                            <p><i class="fas fa-map-marker-alt mr-1"></i> 30+ Cities</p>
                            <a href="#" class="btn-location">View Details <i class="fas fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== CTA SECTION ==================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-wrapper" data-aos="fade-up">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <h2 class="cta-title">Earn Cash by Selling Or<br>Find Anything You Desire</h2>
                        <p class="cta-desc">There are many variations of passages of Lorem Ipsum available but the
                            majority have suffered alteration.</p>
                        <div class="d-flex flex-wrap gap-3">
                            <a href="#" class="btn-cta-primary mr-3 mb-2"><i class="fas fa-plus-circle mr-2"></i> Post
                                Your Ads</a>
                            <a href="#" class="btn-cta-outline mb-2"><i class="fas fa-search mr-2"></i> Browse Ads</a>
                        </div>
                    </div>
                    <div class="col-lg-5 text-center mt-4 mt-lg-0">
                        <div class="cta-image-wrap">
                            <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=350"
                                class="cta-image img-fluid" alt="Offer">
                            <div class="cta-float-badge"><span>50% OFF</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== PRICING SECTION ==================== -->
    <section class="pricing-section">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <span class="section-badge"><i class="fas fa-tag mr-2"></i> PRICING</span>
                <h2 class="section-title">Our Pricing <span>Plan</span></h2>
                <p class="section-subtitle">Checkout these latest cool ads from our members</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="pricing-card">
                        <div class="pricing-card-header">
                            <h5 class="pricing-plan-name">Intro</h5>
                        </div>
                        <div class="pricing-card-body">
                            <h2 class="pricing-amount">$10 <small>/month</small></h2>
                            <p class="pricing-desc">For most business that want to optimize web queries.</p>
                            <ul class="pricing-features">
                                <li><i class="fas fa-check-circle"></i> Basic Listing Submission</li>
                                <li><i class="fas fa-check-circle"></i> One Listing</li>
                                <li><i class="fas fa-check-circle"></i> 30 Days Availability</li>
                                <li><i class="fas fa-check-circle"></i> Limited Support</li>
                                <li><i class="fas fa-check-circle"></i> Edit Your Listing</li>
                            </ul>
                            <a href="#" class="btn-pricing">View Details <i class="fas fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="pricing-card popular">
                        <div class="popular-badge">Most Popular</div>
                        <div class="pricing-card-header">
                            <h5 class="pricing-plan-name">Basic</h5>
                        </div>
                        <div class="pricing-card-body">
                            <h2 class="pricing-amount">$25 <small>/month</small></h2>
                            <p class="pricing-desc">For most business that want to optimize web queries.</p>
                            <ul class="pricing-features">
                                <li><i class="fas fa-check-circle"></i> Basic Listing Submission</li>
                                <li><i class="fas fa-check-circle"></i> One Listing</li>
                                <li><i class="fas fa-check-circle"></i> 30 Days Availability</li>
                                <li><i class="fas fa-check-circle"></i> Limited Support</li>
                                <li><i class="fas fa-check-circle"></i> Edit Your Listing</li>
                            </ul>
                            <a href="#" class="btn-pricing-primary">View Details <i
                                    class="fas fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="pricing-card">
                        <div class="pricing-card-header">
                            <h5 class="pricing-plan-name">Popular</h5>
                        </div>
                        <div class="pricing-card-body">
                            <h2 class="pricing-amount">$50 <small>/month</small></h2>
                            <p class="pricing-desc">For most business that want to optimize web queries.</p>
                            <ul class="pricing-features">
                                <li><i class="fas fa-check-circle"></i> Basic Listing Submission</li>
                                <li><i class="fas fa-check-circle"></i> One Listing</li>
                                <li><i class="fas fa-check-circle"></i> 30 Days Availability</li>
                                <li><i class="fas fa-check-circle"></i> Limited Support</li>
                                <li><i class="fas fa-check-circle"></i> Edit Your Listing</li>
                            </ul>
                            <a href="#" class="btn-pricing">View Details <i class="fas fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== TESTIMONIALS SECTION ==================== -->
    <section class="testimonials-section">
        <div class="testimonial-top-row">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="testimonial-heading-wrapper" data-aos="fade-right">
                            <h4 class="testimonial-main-heading">Client <br><span>Testimonials</span></h4>
                            <img src="https://cdn-icons-png.flaticon.com/512/566/566295.png" alt="quotes"
                                class="quotes-icon">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="testimonial-right-image" data-aos="fade-left">
                            <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=400" alt="Team"
                                class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial-slider-wrapper">
            <div class="container">
                <div class="testimonials-grid">
                    <div class="testimonial-card-inner" data-aos="fade-up" data-aos-delay="100">
                        <div class="testimonial-profile">
                            <div class="testi-avatar"><img
                                    src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=80&h=80&fit=crop&crop=face"
                                    alt="Dev" class="testi-img"></div>
                            <div class="testi-info">
                                <h6 class="testi-name">Dev</h6>
                                <p class="testi-role">Lead Intranet Technician</p>
                            </div>
                            <div class="testi-quote-icon"><i class="fas fa-quote-right"></i></div>
                        </div>
                        <div class="testimonial-content">
                            <div class="testi-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <p>Omnis totam molestiae delectus nemo alias nesciunt harum et. Nobis dolorum excepturi quod
                                vel. Sunt est qui ab non dolores repellat rem impedit dolores.</p>
                        </div>
                    </div>
                    <div class="testimonial-card-inner" data-aos="fade-up" data-aos-delay="200">
                        <div class="testimonial-profile">
                            <div class="testi-avatar"><img
                                    src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=80&h=80&fit=crop&crop=face"
                                    alt="Esther Hills" class="testi-img"></div>
                            <div class="testi-info">
                                <h6 class="testi-name">Esther Hills</h6>
                                <p class="testi-role">Lead Intranet Technician</p>
                            </div>
                            <div class="testi-quote-icon"><i class="fas fa-quote-right"></i></div>
                        </div>
                        <div class="testimonial-content">
                            <div class="testi-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star-half-alt"></i></div>
                            <p>Omnis totam molestiae delectus nemo alias nesciunt harum et. Nobis dolorum excepturi quod
                                vel. Sunt est qui ab non dolores repellat rem impedit dolores.</p>
                        </div>
                    </div>
                    <div class="testimonial-card-inner" data-aos="fade-up" data-aos-delay="300">
                        <div class="testimonial-profile">
                            <div class="testi-avatar"><img
                                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=80&h=80&fit=crop&crop=face"
                                    alt="John Smith" class="testi-img"></div>
                            <div class="testi-info">
                                <h6 class="testi-name">John Smith</h6>
                                <p class="testi-role">Senior Developer</p>
                            </div>
                            <div class="testi-quote-icon"><i class="fas fa-quote-right"></i></div>
                        </div>
                        <div class="testimonial-content">
                            <div class="testi-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <p>Excellent service! The team was professional and completed the work on time. Highly
                                recommended for anyone looking for quality service.</p>
                        </div>
                    </div>
                    <div class="testimonial-card-inner" data-aos="fade-up" data-aos-delay="400">
                        <div class="testimonial-profile">
                            <div class="testi-avatar"><img
                                    src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=80&h=80&fit=crop&crop=face"
                                    alt="Sarah Wilson" class="testi-img"></div>
                            <div class="testi-info">
                                <h6 class="testi-name">Sarah Wilson</h6>
                                <p class="testi-role">Product Manager</p>
                            </div>
                            <div class="testi-quote-icon"><i class="fas fa-quote-right"></i></div>
                        </div>
                        <div class="testimonial-content">
                            <div class="testi-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                            <p>Very satisfied with the service. The professionals were knowledgeable and courteous. Will
                                definitely use ServiceHub again for future needs.</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-dots text-center mt-4">
                    <span class="dot active"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
            </div>
        </div>
    </section>


    <!-- ===== FOOTER ===== -->
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
                        <li><a href="term&condition.php">Terms & Conditions</a></li>
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
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/script.js"></script>
    <!-- ==================== SCRIPTS ==================== -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 800, easing: 'ease-in-out', once: true });
    </script>
</body>

</html>