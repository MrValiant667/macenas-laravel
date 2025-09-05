<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - eBusiness Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="../../../landing-page/assets/img/favicon.png" rel="icon">
  <link href="../../../landing-page/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../../landing-page/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../../landing-page/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../../landing-page/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../../../landing-page/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../../../landing-page/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="../../../landing-page/assets/css/main.css" rel="stylesheet">

<meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate, max-age=0">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Expires" content="0">

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="../../../landing-page/assets/img/logo.webp" alt=""> -->
        <h1 class="sitename"><span>eye</span>SIGHT</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Dashboard</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#contact">Contact</a></li>
          <li>
              <form action="{{ route('logout') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-danger ms-2">Logout</button>
              </form>
          </li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
              <h2>Wear Stylish Glasses</h2>
              <p>We have stylish glasses and prescrioption glass available in out store</p>
              <div class="hero-btns">
                <a href="#contact" class="btn btn-primary">Get a Free Consultation</a>
                <a href="#services" class="btn btn-outline">Our Services</a>
              </div>
              <div class="hero-stats">
                <div class="stat-item">
                  <h3><span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>+</h3>
                  <p>Years Experienced Doctors</p>
                </div>
                <div class="stat-item">
                  <h3><span data-purecounter-start="0" data-purecounter-end="500" data-purecounter-duration="1" class="purecounter"></span>+</h3>
                  <p>Clients Worldwide</p>
                </div>
                <div class="stat-item">
                  <h3><span data-purecounter-start="0" data-purecounter-end="98" data-purecounter-duration="1" class="purecounter"></span>%</h3>
                  <p>Satisfaction Rate</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
              <img height=300px src="../../../landing-page/assets/img/about/about-8.jpg" alt="Consulting Services" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
        <p>We are a licensed retailer and producers of prescription and desingner glasses</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 align-items-center justify-content-between">

          <div class="col-xl-5" data-aos="fade-up" data-aos-delay="200">
            <span class="about-meta">MORE ABOUT US</span>
            <h2 class="about-title">Us and our Company</h2>
            <p class="about-description">We have certified expert optimologist under us and we also have top notch production on prescription and designer glasses.</p>

            <div class="row feature-list-wrapper">
              <div class="col-md-6">
                <ul class="feature-list">
                  <li><i class="bi bi-check-circle-fill"></i> Trusted</li>
                  <li><i class="bi bi-check-circle-fill"></i> Highly Rated</li>
                  <li><i class="bi bi-check-circle-fill"></i> Affordable</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="feature-list">
                  <li><i class="bi bi-check-circle-fill"></i> Same day finish order</li>
                  <li><i class="bi bi-check-circle-fill"></i> Many available glasses</li>
                  <li><i class="bi bi-check-circle-fill"></i> Free Check-Up for Senior Citizens</li>
                </ul>
              </div>
            </div>

            <div class="info-wrapper">
              <div class="row gy-4">
                <div class="col-lg-5">
                  <div class="profile d-flex align-items-center gap-3">
                    <img src="../../../landing-page/assets/img/person/Karol.jpg" alt="CEO Profile" class="profile-image">
                    <div>
                      <h4 class="profile-name">Karol Macenas</h4>
                      <p class="profile-position">CEO &amp; Founder</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-7">
                  <div class="contact-info d-flex align-items-center gap-2">
                    <i class="bi bi-telephone-fill"></i>
                    <div>
                      <p class="contact-label">Call us anytime</p>
                      <p class="contact-number">09560932915</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-6" data-aos="fade-up" data-aos-delay="300">
            <div class="image-wrapper">
              <div class="images position-relative" data-aos="zoom-out" data-aos-delay="400">
                <img src="../../../landing-page/assets/img/about/Jeilah.jpg" alt="Business Meeting" class="img-fluid main-image rounded-4">
                <img src="../../../landing-page/assets/img/person/Karol.jpg" alt="Team Discussion" class="img-fluid small-image rounded-4">
              </div>
              <div class="experience-badge floating">
                <h3>15+ <span>Years</span></h3>
                <p>Of Serving The People</p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="stats-hero row align-items-center mb-5">
          <div class="col-lg-7 mb-4 mb-lg-0" data-aos="fade-right" data-aos-delay="200">
            <h3 class="headline mb-3">Impactful Insights</h3>
            <p class="lead">Glasses were of very high quality and the service given was top notch.</p>
          </div>
          <div class="col-lg-5 text-lg-end text-center" data-aos="zoom-in" data-aos-delay="300">
            <div class="stats-rating d-inline-flex align-items-center py-3 px-4 shadow-sm">
              <img src="../../../landing-page/assets/img/person/Bajas.jpg" class="img-fluid stats-rating-img me-3" alt="User Group" width="64" height="48">
              <div>
                <div class="rating-score d-flex align-items-center mb-1">
                  <span class="fs-5 fw-semibold me-2">4.8/5</span>
                  <span class="stars">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                  </span>
                </div>
                <div class="user-feedback small">Based on 70+ unique customer reviews</div>
              </div>
            </div>
          </div>
        </div>

        <div class="stats-counters row gy-4 justify-content-center">
          <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="100">
            <article class="stats-counter-card">
              <div class="counter-value mb-1">
                <span data-purecounter-start="0" data-purecounter-end="1.2" data-purecounter-duration="1.5" class="purecounter"></span>M+
              </div>
              <small class="label"> Satisfied Customers</small>
            </article>
          </div>
          <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="200">
            <article class="stats-counter-card">
              <div class="counter-value mb-1">
                <span data-purecounter-start="0" data-purecounter-end="1.2" data-purecounter-duration="1.5" class="purecounter"></span>M+
              </div>
              <small class="label">Products Sold</small>
            </article>
          </div>
          <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="300">
            <article class="stats-counter-card">
              <div class="counter-value mb-1">
                <span data-purecounter-start="0" data-purecounter-end="97" data-purecounter-duration="1.5" class="purecounter"></span>%
              </div>
              <small class="label">Very Satisfied</small>
            </article>
          </div>
          <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="400">
            <article class="stats-counter-card">
              <div class="counter-value mb-1">
                <span data-purecounter-start="0" data-purecounter-end="0" data-purecounter-duration="1.5" class="purecounter"></span>%
              </div>
              <small class="label">Disatisfied</small>
            </article>
          </div>
        </div><!-- End stats counters -->
      </div>
    </section><!-- /Stats Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <article class="service-item">
              <h3>
                <a href="service-details.html">
                  Glasses of <span>High Quality</span>
                </a>
              </h3>
              <p>
               Glasses are all made from quality materials ling titanium, hard plastic and also from high quality wood.
              </p>
            </article>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
            <article class="service-item">
              <h3>
                <a href="service-details.html">
                  Very unique <span>Designs</span>
                </a>
              </h3>
              <p>
                Our glasses are made to look good on the person wearing it and the customer have the free will as what design they want for the frame of their glasses.
              </p>
            </article>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <article class="service-item">
              <h3>
                <a href="service-details.html">
                  Many <span>Discounts</span>
                </a>
              </h3>
              <p>
                We have many discounts especially for student, PWD, and Senior Citizens. We also have many promos.
              </p>
            </article>
          </div>
        </div>
      </div>
    </section><!-- /Services Section -->

    <!-- Why Us Section -->
    <section id="why-us" class="why-us section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Why Us</h2>
        <p>We are the most trusted and recomendded shop for prescrioption glasses by multiple doctors.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 align-items-center">
          <div class="col-lg-7 mb-4 mb-lg-0">
            <div class="row gy-4">

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card-item">
                  <div class="card-number">01</div>
                  <h3>Precision Perfected</h3>
                  <p>See the world with unmatched clarity. Precision lenses, expertly fitted.</p>
                </div>
              </div><!-- End Card Item -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card-item">
                  <div class="card-number">02</div>
                  <h3>Style That Sees You</h3>
                  <p>Elevate your look. Discover frames that truly fit your unique style.</p>
                </div>
              </div><!-- End Card Item -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="card-item">
                  <div class="card-number">03</div>
                  <h3>Clear Vision, Clear Value</h3>
                  <p> Premium eyewear shouldn't cost a fortune. Exceptional quality, affordable prices.</p>
                </div>
              </div><!-- End Card Item -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="card-item">
                  <div class="card-number">04</div>
                  <h3>Your Eyes, Our Expertise</h3>
                  <p>Dedicated care, lifelong vision. We're here for your eyes, every step of the way.</p>
                </div>
              </div><!-- End Card Item -->

            </div>
          </div>

          <div class="col-lg-5" data-aos="zoom-out" data-aos-delay="300">
            <div class="image-wrapper">
              <img src="../../../landing-page/assets/img/about/about-portrait-3.jpg" alt="" class="img-fluid rounded-4">
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Why Us Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>View our products that are used by many renowned people.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-glasses">Glasses</li>
            <li data-filter=".filter-sunglasses">Sunglasses</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-glasses">
              <div class="portfolio-content h-100">
                <a href="../../../landing-page/assets/img/portfolio/glasses-1 (1).jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="../../../landing-page/assets/img/portfolio/glasses-1 (1).jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Apex Lite</a></h4>
                  <p>Experience comfort and a sleek, minimalist design that elevates your everyday style without effort.</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-sunglasses">
              <div class="portfolio-content h-100">
                <a href="../../../landing-page/assets/img/portfolio/Sunglasses-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="../../../landing-page/assets/img/portfolio/Sunglasses-3.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Azure Aviator</a></h4>
                  <p>Soar in style. Classic comfort meets vibrant blue hues for an iconic look with a cool, modern twist.</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-glasses">
              <div class="portfolio-content h-100">
                <a href="../../../landing-page/assets/img/portfolio/glasses-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="../../../landing-page/assets/img/portfolio/glasses-3.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">The Scholar</a></h4>
                  <p>Intelligent design meets timeless charm, offering a distinguished look perfect for the discerning mind.</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-sunglasses">
              <div class="portfolio-content h-100">
                <a href="../../../landing-page/assets/img/portfolio/Sunglasses-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="../../../landing-page/assets/img/portfolio/sunglasses-1.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Mystic Mauve</a></h4>
                  <p>Embrace enigmatic elegance with unique frames, casting a captivating allure wherever you go.</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-glasses">
              <div class="portfolio-content h-100">
                <a href="../../../landing-page/assets/img/portfolio/glasses-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="../../../landing-page/assets/img/portfolio/glasses-2.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Onyx Edge</a></h4>
                  <p>Sharp, decisive, and undeniably bold. These frames make a powerful statement for the modern leader.</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-sunglasses">
              <div class="portfolio-content h-100">
                <a href="../../../landing-page/assets/img/portfolio/Sunglasses-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="../../../landing-page/assets/img/portfolio/Sunglasses-2.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Midnight Glide</a></h4>
                  <p>Effortlessly sophisticated, these shades offer a sleek, seamless look for a truly polished style.</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="content px-xl-5">
              <h3><span>Frequently Asked </span><strong>Questions</strong></h3>
            </div>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

            <div class="faq-container">
              <div class="faq-item faq-active">
                <h3><span class="num">1.</span> <span>Do you accept insurance?</span></h3>
                <div class="faq-content">
                  <p>Yes, we work with a wide range of insurance providers. Please contact us or visit our store to confirm if your specific plan is covered.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span class="num">2.</span> <span>How long does it take to get my new glasses?</span></h3>
                <div class="faq-content">
                  <p>Typically, custom-made prescription glasses are ready for pick-up within 7-10 business days. For stock lenses or simple reading glasses, it can be much quicker, sometimes even the same day. We'll give you a more precise estimate when you place your order.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span class="num">3.</span> <span>Can I use my old prescription?</span></h3>
                <div class="faq-content">
                  <p>Yes, you can! As long as your prescription is still current and valid (usually within 1-2 years, depending on local regulations), we can use it to craft your new glasses.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span class="num">4.</span> <span>What is your return policy?</span></h3>
                <div class="faq-content">
                  <p>We want you to be completely satisfied with your new glasses. We offer a [e.g., 30-day] satisfaction guarantee. If you're not happy, you can return them for an exchange or full refund within [number] days of purchase. (Note: Specific terms may apply, please ask for full details.)</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span class="num">5.</span> <span>Do you offer eye exams?</span></h3>
                <div class="faq-content">
                  <p>Yes, we do! We have licensed optometrists on staff who can perform comprehensive eye exams to determine your prescription and check your overall eye health. You can book an appointment online or by calling us.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div>
        </div>

      </div>

    </section><!-- /Faq Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>The people that made everything of the company possible.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-card">
              <div class="profile-image">
                <img src="../../../landing-page/assets/img/person/Karol.jpg" class="img-fluid" alt="" loading="lazy">
                <div class="role-badge">Cheif Executive Officer</div>
                <div class="social-icons">
                  <a href="#"><i class="bi bi-twitter-x"></i></a>
                  <a href="#"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Macenas, Karol Josef A.</h4>
                <p>Owner and founder of the company</p>
              </div>
            </div><!-- End Team Card -->
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
            <div class="team-card">
              <div class="profile-image">
                <img src="../../../landing-page/assets/img/person/MJ.jpg" class="img-fluid" alt="" loading="lazy">
                <div class="role-badge">Director of Operations</div>
                <div class="social-icons">
                  <a href="#"><i class="bi bi-twitter-x"></i></a>
                  <a href="#"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Alfeche, Mary Jane E.</h4>
                <p>Co.Founder of the company</p>
              </div>
            </div><!-- End Team Card -->
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="team-card">
              <div class="profile-image">
                <img src="../../../landing-page/assets/img/person/JM.jpg" class="img-fluid" alt="" loading="lazy">
                <div class="role-badge">Store Manager</div>
                <div class="social-icons">
                  <a href="#"><i class="bi bi-twitter-x"></i></a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2Fjmcb041%2Fprofilecard%2F%3Figsh%3DMTR4ZmNrNWNmN3cyOQ%253D%253D%26fbclid%3DIwZXh0bgNhZW0CMTAAYnJpZBExRjRvREdZQkVrczgzcjlYQQEearQu9AEliZvxwLn-fORD7qfrSuDr8Mf824vEvroJh0XZ2fPcAOYqywv1ZbM_aem_UXU-DPqM5nhCxS7WNKjCWw&h=AT0yxluam0YiWW1sd8YQ8uxpuk_vwO4tHwBFi5EfoLBA-f9a27iGg7mHAnwQSfuQj3kgPMrfCU8_AgIBhLSAMbePDOIFlRytxgCthsKR2bfmsueldZfjdNKsCopxG58Nksrn6A"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Bacarro, Joseph Macbill C.</h4>
                <p>Person incharge of the stores worldwide.</p>
              </div>
            </div><!-- End Team Card -->
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="350">
            <div class="team-card">
              <div class="profile-image">
                <img src="../../../landing-page/assets/img/person/Rinel.jpg" class="img-fluid" alt="" loading="lazy">
                <div class="role-badge">Licensed Optician</div>
                <div class="social-icons">
                  <a href="#"><i class="bi bi-twitter-x"></i></a>
                  <a href="#"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Urot, Rinel L.</h4>
                <p>Chief Optician of the company.</p>
              </div>
            </div><!-- End Team Card -->
          </div>

        </div>

      </div>

    </section><!-- /Team Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4 g-lg-5">
          <div class="col-lg-5">
            <div class="info-box" data-aos="fade-up" data-aos-delay="200">
              <h3>Contact Info</h3>

              <div class="info-item" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <i class="bi bi-geo-alt"></i>
                </div>
                <div class="content">
                  <h4>Our Location</h4>
                  <p>So.Poblacion Street</p>
                  <p>City of Naga, Cebu</p>
                </div>
              </div>

              <div class="info-item" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box">
                  <i class="bi bi-telephone"></i>
                </div>
                <div class="content">
                  <h4>Phone Number</h4>
                  <p>09560932915</p>
                  <p>09978911970</p>
                </div>
              </div>

              <div class="info-item" data-aos="fade-up" data-aos-delay="500">
                <div class="icon-box">
                  <i class="bi bi-envelope"></i>
                </div>
                <div class="content">
                  <h4>Email Address</h4>
                  <p>eyeSight@gmail.com</p>
                  <p>Sight@gmail.com</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-7">
            <div class="contact-form" data-aos="fade-up" data-aos-delay="300">
              <h3>Get In Touch</h3>
              <p>For any concerns and questions.</p>

              <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                <div class="row gy-4">

                  <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                  </div>

                  <div class="col-md-6 ">
                    <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                  </div>

                  <div class="col-12">
                    <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                  </div>

                  <div class="col-12">
                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                  </div>

                  <div class="col-12 text-center">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>

                    <button type="submit" class="btn">Send Message</button>
                  </div>

                </div>
              </form>

            </div>
          </div>

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-6">
            <h4>Follow Our Group</h4>
            <p>Follow to our group page and receive the latest news about our products and services!</p>
            <form action="forms/newsletter.php" method="post" class="php-email-form">
              <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Follow"></div>
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your subscription request has been sent. Thank you!</div>
            </form>
          </div>
        </div>
      </div>
    </div>
  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../../../landing-page/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../../landing-page/assets/vendor/php-email-form/validate.js"></script>
  <script src="../../../landing-page/assets/vendor/aos/aos.js"></script>
  <script src="../../../landing-page/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../../../landing-page/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../../../landing-page/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../../../landing-page/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="../../../landing-page/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="../../../landing-page/assets/js/main.js"></script>

</body>

</html>
