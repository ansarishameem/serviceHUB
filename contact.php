<?php
include 'layout/header.php';
$contactMessage = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!csrf_valid($_POST['csrf_token'] ?? null)) { http_response_code(400); exit('Invalid form token. Please reload the page and try again.'); }
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');
    if ($name === '' || !filter_var($email, FILTER_VALIDATE_EMAIL) || $subject === '' || $message === '') {
        $contactMessage = 'Please complete all fields with a valid email address.';
    } else {
        $stmt = mysqli_prepare($con, 'INSERT INTO contact (name,email,subject,message) VALUES (?,?,?,?)');
        mysqli_stmt_bind_param($stmt, 'ssss', $name, $email, $subject, $message);
        if (mysqli_stmt_execute($stmt)) $contactMessage = 'Your message was sent successfully.';
        else { error_log('Contact form failed: ' . mysqli_stmt_error($stmt)); $contactMessage = 'Your message could not be sent. Please try again.'; }
        mysqli_stmt_close($stmt);
    }
}
?>
    <!-- ============================================
    MAIN CONTENT
    ============================================ -->
    <main>
        <?php if ($contactMessage !== '') { ?><div class="container mt-4"><div class="alert alert-info" role="status"><?= htmlspecialchars($contactMessage, ENT_QUOTES, 'UTF-8') ?></div></div><?php } ?>
        <!-- Breadcrumb -->
        <section class="breadcrumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="breadcrumb-title">Contact <span>Us</span></h1>
                        <nav class="breadcrumb-nav">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="home.php"><i class="fas fa-home mr-1"></i> Home</a></li>
                                <li class="breadcrumb-item active">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <!-- Map Section -->
        <section class="map-section">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3557.44622725756!2d80.9427267!3d26.921064700000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399957f6b5f1fa83%3A0x9d06aea16ba57354!2sTechsima%20Solution%20Private%20Limited%20%7C%20Best%20IT%20Training%20Institute%20%26%20Top%20Software%20Company%20in%20Lucknow!5e0!3m2!1sen!2sin!4v1784357369037!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin">
                width="100%" 
                height="400" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
        </section>

        <!-- Contact Section -->
        <section class="contact-section">
            <div class="contact-container">

                <!-- Left Side -->
                <div class="contact-left">
                    <span class="contact-tag">
                        <i class="fas fa-headset mr-1"></i> Contact Us
                    </span>
                    <h1>Let's Get <span>In Touch</span></h1>
                    <p>
                        Have any questions or need assistance? Our team is always
                        ready to help you. Fill out the form and we'll get back to
                        you as soon as possible.
                    </p>

                    <!-- Contact Info -->
                    <div class="contact-info">
                        <div class="info-box">
                            <div class="icon"><i class="fa-solid fa-phone"></i></div>
                            <div>
                                <h3>Phone</h3>
                                <p>+91 98765 43210</p>
                            </div>
                        </div>

                        <div class="info-box">
                            <div class="icon"><i class="fa-solid fa-envelope"></i></div>
                            <div>
                                <h3>Email</h3>
                                <p>support@servicehub.com</p>
                            </div>
                        </div>

                        <div class="info-box">
                            <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
                            <div>
                                <h3>Address</h3>
                                <p>Lucknow, Uttar Pradesh, India</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Side - Form -->
                <div class="contact-right">
                    <h2>Send <span>Message</span></h2>
                    <p class="form-subtitle">Fill in your details and send us a message.</p>

                    <form id="contactForm" method="post">
                        <input type="hidden" name="csrf_token" value="<?= htmlspecialchars(csrf_token(), ENT_QUOTES, 'UTF-8') ?>">
                        <div class="input-box">
                            <label>Full Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter your full name" id="fullName" required>
                        </div>

                        <div class="input-box">
                            <label>Email Address</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter your email" id="emailAddress" required>
                        </div>

                        <div class="input-box">
                            <label>Subject</label>
                            <input type="text" class="form-control" name="subject" placeholder="Enter subject" id="subject" required>
                        </div>

                        <div class="input-box">
                            <label>Your Message</label>
                            <textarea class="form-control" rows="5" name="message" placeholder="Write your message..." id="message" required></textarea>
                        </div>

                        <button type="submit" class="contact-btn">
                            <i class="fas fa-paper-plane mr-2"></i> Send Message
                        </button>
                    </form>
                </div>

            </div>
        </section>

    </main>

<?php
include 'layout/footer.php';
?>