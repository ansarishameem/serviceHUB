<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Delivery Service - ServiceHub</title>

    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        /* ==========================
           Google Font
        ========================== */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #f8f9fa;
            color: #555;
            overflow-x: hidden;
        }

        /* =========================
           Banner
        ========================== */
        .page-banner {
            background: linear-gradient(135deg, #0b2d63, #1a3f7e);
            height: 420px;
            position: relative;
        }

        .page-banner::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(0, 0, 0, .75), rgba(0, 0, 0, .65));
        }

        .overlay {
            position: absolute;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .overlay h1 {
            font-size: 60px;
            font-weight: 700;
            letter-spacing: 2px;
            margin-bottom: 15px;
        }

        .overlay p {
            font-size: 20px;
            letter-spacing: 1px;
        }

        /* =========================
           Section Title
        ========================== */
        .section-title {
            text-align: center;
            font-weight: 700;
            margin-bottom: 30px;
            color: #222;
            position: relative;
        }

        .section-title::after {
            content: "";
            width: 90px;
            height: 4px;
            background: #e91e63;
            display: block;
            margin: 15px auto;
            border-radius: 10px;
        }

        /* =========================
           Service Box
        ========================== */
        .service-box {
            background: #fff;
            padding: 45px;
            border-radius: 15px;
            box-shadow: 0 10px 35px rgba(0, 0, 0, .08);
            transition: .4s;
        }

        .service-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 45px rgba(0, 0, 0, .18);
        }

        .service-box p {
            line-height: 30px;
            text-align: justify;
            margin-bottom: 20px;
        }

        /* =========================
           Quote
        ========================== */
        .quote-box {
            background: #fff;
            padding: 45px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 12px 35px rgba(0, 0, 0, .12);
            transition: .4s;
        }

        .quote-box:hover {
            transform: scale(1.02);
        }

        .quote-box i {
            font-size: 55px;
            color: #e91e63;
            margin-bottom: 20px;
        }

        .quote-box h3 {
            font-weight: 600;
            color: #222;
            margin-bottom: 15px;
        }

        .quote-box p {
            color: #777;
            font-size: 18px;
            margin: 0;
        }

        /* =========================
           Feature Cards
        ========================== */
        .feature-card {
            background: #fff;
            text-align: center;
            padding: 35px 25px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, .10);
            transition: .4s;
            height: 100%;
        }

        .feature-card:hover {
            transform: translateY(-12px);
            background: #e91e63;
            color: #fff;
        }

        .feature-card i {
            font-size: 45px;
            color: #e91e63;
            margin-bottom: 20px;
            transition: .4s;
        }

        .feature-card:hover i {
            color: #fff;
        }

        .feature-card h4 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .feature-card p {
            margin: 0;
        }

        /* =========================
           Review Form
        ========================== */
        .review-card {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 10px 35px rgba(0, 0, 0, .12);
            padding: 40px;
            transition: .4s;
        }

        .review-card:hover {
            transform: translateY(-8px);
        }

        .review-header {
            background: #212529;
            color: #fff;
            text-align: center;
            padding: 18px;
            border-radius: 10px;
            margin-bottom: 30px;
        }

        .review-header h3 {
            margin: 0;
            font-weight: 600;
        }

        .form-control {
            height: 50px;
            border-radius: 30px;
            border: 1px solid #ddd;
            box-shadow: none;
        }

        textarea.form-control {
            height: auto;
            border-radius: 15px;
        }

        .form-control:focus {
            border-color: #e91e63;
            box-shadow: 0 0 10px rgba(233, 30, 99, .25);
        }

        /* =========================
           Button
        ========================== */
        .btn-review {
            background: #e91e63;
            color: #fff;
            padding: 12px;
            border-radius: 30px;
            font-size: 18px;
            transition: .4s;
            border: none;
        }

        .btn-review:hover {
            background: #000;
            color: #fff;
            transform: scale(1.03);
        }

        /* =========================
           Scroll Animation
        ========================== */
        .service-box,
        .feature-card,
        .review-card,
        .quote-box {
            animation: fadeUp .9s ease;
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* =========================
           Responsive
        ========================== */
        @media (max-width: 992px) {
            .page-banner {
                height: 320px;
            }
            .overlay h1 {
                font-size: 42px;
            }
            .service-box {
                padding: 30px;
            }
            .review-card {
                padding: 25px;
            }
        }

        @media (max-width: 768px) {
            .overlay h1 {
                font-size: 34px;
            }
            .overlay p {
                font-size: 16px;
            }
            .section-title {
                font-size: 28px;
            }
            .service-box {
                padding: 20px;
            }
            .quote-box {
                padding: 25px;
            }
            .review-card {
                padding: 20px;
            }
            .feature-card {
                padding: 25px 20px;
            }
        }
    </style>
</head>

<body>

    <!-- ==================== BANNER ==================== -->
    <section class="page-banner">
        <div class="overlay">
            <div>
                <h1 class="text-white">Food Delivery Service</h1>
                <p class="text-white">Fresh & Delicious Food Delivered To Your Doorstep</p>
            </div>
        </div>
    </section>

    <!-- ==================== ABOUT / SERVICE BOX ==================== -->
    <section class="py-5">
        <div class="container">
            <div class="service-box">
                <h2 class="section-title">Professional Food Delivery Service</h2>
                <p>
                    We provide premium food delivery services to bring the best culinary experiences right to your doorstep. Our team works with top restaurants and professional chefs to ensure you get fresh, hot, and delicious meals every time you order.
                </p>
                <p>
                    From quick bites to gourmet dining, we handle every order with care and precision. Our delivery partners are trained to maintain food quality and temperature during transit. We focus on speed, reliability, and customer satisfaction with every delivery.
                </p>
            </div>
        </div>
    </section>

    <!-- ==================== QUOTE SECTION ==================== -->
    <section class="pb-5">
        <div class="container">
            <div class="quote-box text-center">
                <i class="fas fa-quote-left"></i>
                <h3>Good Food, Good Mood – Delivered Fresh!</h3>
                <p>
                    Food Delivery Experts
                    <br>
                    Your Trusted Food Partner
                </p>
            </div>
        </div>
    </section>

    <!-- ==================== FEATURES ==================== -->
    <section class="pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="feature-card">
                        <i class="fas fa-utensils"></i>
                        <h4>Fresh Meals</h4>
                        <p>Freshly prepared meals with quality ingredients and authentic taste.</p>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="feature-card">
                        <i class="fas fa-truck-fast"></i>
                        <h4>Fast Delivery</h4>
                        <p>Quick and reliable delivery with real-time order tracking.</p>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="feature-card">
                        <i class="fas fa-star"></i>
                        <h4>Top Quality</h4>
                        <p>Quality checked food with premium packaging and service.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== MORE DETAILS ==================== -->
    <section class="pb-5">
        <div class="container">
            <div class="service-box">
                <h2 class="section-title">Complete Food Delivery Solution</h2>
                <p>
                    We are dedicated to providing a seamless food delivery experience that brings delicious meals to your table. Our platform connects you with the best restaurants and chefs in your area, ensuring a wide variety of cuisines and dishes to choose from.
                </p>
                <p>
                    Our services include restaurant partnerships, real-time order tracking, secure payment options, and responsive customer support. We prioritize food safety, timely delivery, and customer satisfaction to make every meal a delightful experience.
                </p>
            </div>
        </div>
    </section>

    <!-- ==================== REVIEW FORM ==================== -->
    <section class="pb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="review-card">
                        <div class="review-header">
                            <h3>
                                <i class="fas fa-comments"></i>
                                Leave Feedback
                            </h3>
                        </div>

                        <form>
                            <div class="form-group">
                                <label>Your Name</label>
                                <input type="text" class="form-control" placeholder="Enter your name">
                            </div>

                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Enter your email">
                            </div>

                            <div class="form-group">
                                <label>Write Review</label>
                                <textarea class="form-control" rows="5" placeholder="Write your feedback">type here</textarea>
                            </div>

                            <button class="btn btn-review btn-block">
                                Submit Review
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>