
<?php
include 'layout/header.php';
?>
    <!-- ===== PRICING CONTENT (between header and footer) ===== -->
    <main>
        <!-- BREADCRUMB -->
        <section class="breadcrumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="breadcrumb-title">Our <span>Pricing</span></h1>
                        <p class="breadcrumb-subtitle">Choose the perfect plan for your business needs</p>
                        <nav class="breadcrumb-nav">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="home.php"><i class="fas fa-home mr-1"></i> Home</a></li>
                                <li class="breadcrumb-item active">Pricing</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <!-- PRICING PLANS -->
        <section class="pricing-section">
            <div class="container">
                <div class="section-header text-center">
                    <span class="section-badge"><i class="fas fa-tag mr-2"></i> PRICING PLANS</span>
                    <h2 class="section-title">Choose Your <span>Plan</span></h2>
                    <p class="section-subtitle">Select the perfect plan that fits your business requirements</p>
                </div>

                <div class="row">
                    <!-- Basic -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="pricing-card">
                            <div class="pricing-plan-icon"><i class="fas fa-seedling"></i></div>
                            <h5 class="pricing-plan-name">Basic</h5>
                            <p class="pricing-plan-desc">For startups</p>
                            <div class="pricing-amount">$19 <small>/mo</small></div>
                            <p class="pricing-duration">Billed monthly</p>
                            <ul class="pricing-features">
                                <li><i class="fas fa-check-circle"></i> 5 Service Listings</li>
                                <li><i class="fas fa-check-circle"></i> Basic Support</li>
                                <li><i class="fas fa-check-circle"></i> 30 Days Availability</li>
                                <li><i class="fas fa-times"></i> Featured Listings</li>
                            </ul>
                            <a href="#" class="btn-pricing">Get Started <i class="fas fa-arrow-right ml-2"></i></a>
                        </div>
                    </div>

                    <!-- Standard (Popular) -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="pricing-card popular">
                            <div class="popular-badge"><i class="fas fa-star mr-1"></i> Most Popular</div>
                            <div class="pricing-plan-icon"><i class="fas fa-rocket"></i></div>
                            <h5 class="pricing-plan-name">Standard</h5>
                            <p class="pricing-plan-desc">For growing businesses</p>
                            <div class="pricing-amount">$49 <small>/mo</small></div>
                            <p class="pricing-duration">Billed monthly</p>
                            <ul class="pricing-features">
                                <li><i class="fas fa-check-circle"></i> 25 Service Listings</li>
                                <li><i class="fas fa-check-circle"></i> Priority Support</li>
                                <li><i class="fas fa-check-circle"></i> 60 Days Availability</li>
                                <li><i class="fas fa-check-circle"></i> 5 Featured Listings</li>
                            </ul>
                            <a href="#" class="btn-pricing-primary">Get Started <i
                                    class="fas fa-arrow-right ml-2"></i></a>
                        </div>
                    </div>

                    <!-- Premium -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="pricing-card">
                            <div class="pricing-plan-icon"><i class="fas fa-crown"></i></div>
                            <h5 class="pricing-plan-name">Premium</h5>
                            <p class="pricing-plan-desc">For established businesses</p>
                            <div class="pricing-amount">$99 <small>/mo</small></div>
                            <p class="pricing-duration">Billed monthly</p>
                            <ul class="pricing-features">
                                <li><i class="fas fa-check-circle"></i> Unlimited Listings</li>
                                <li><i class="fas fa-check-circle"></i> 24/7 Priority Support</li>
                                <li><i class="fas fa-check-circle"></i> 90 Days Availability</li>
                                <li><i class="fas fa-check-circle"></i> 20 Featured Listings</li>
                            </ul>
                            <a href="#" class="btn-pricing">Get Started <i class="fas fa-arrow-right ml-2"></i></a>
                        </div>
                    </div>

                    <!-- Enterprise -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="pricing-card">
                            <div class="pricing-plan-icon"><i class="fas fa-building"></i></div>
                            <h5 class="pricing-plan-name">Enterprise</h5>
                            <p class="pricing-plan-desc">For large organizations</p>
                            <div class="pricing-amount">$199 <small>/mo</small></div>
                            <p class="pricing-duration">Billed monthly</p>
                            <ul class="pricing-features">
                                <li><i class="fas fa-check-circle"></i> Unlimited Listings</li>
                                <li><i class="fas fa-check-circle"></i> Dedicated Manager</li>
                                <li><i class="fas fa-check-circle"></i> Unlimited Availability</li>
                                <li><i class="fas fa-check-circle"></i> Unlimited Featured</li>
                            </ul>
                            <a href="#" class="btn-pricing">Contact Sales <i class="fas fa-arrow-right ml-2"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Trust badge -->
                <div class="trust-badge mt-4">
                    <span><i class="fas fa-shield-alt"></i> Secure Payment</span>
                    <span><i class="fas fa-lock"></i> 30-Day Guarantee</span>
                    <span><i class="fas fa-credit-card"></i> Cancel Anytime</span>
                    <span><i class="fas fa-headset"></i> 24/7 Support</span>
                </div>
            </div>
        </section>

        <!-- CTA SECTION (from second page) -->
        <section class="cta-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h3 style="font-weight:800;color:var(--secondary);">Ready to Get Started?</h3>
                        <p style="color:var(--gray-500);margin:0;">Join thousands of businesses already using
                            ServiceHub.</p>
                    </div>
                    <div class="col-lg-4 text-lg-right mt-3 mt-lg-0">
                        <a href="#" class="btn"
                            style="background:var(--primary);color:#fff;border-radius:50px;padding:12px 35px;font-weight:700;transition:0.3s;display:inline-block;text-decoration:none;">
                            Start Free Trial <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php
include 'layout/footer.php';
?>
   