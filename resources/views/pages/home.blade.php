@extends('layouts.app')

@section('content')

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

      <img src="{{ asset('assets/img/hero_bg.jpg') }}" alt="" data-aos="fade-in">

      <div class="container position-relative">

        <div class="welcome position-relative" data-aos="fade-down" data-aos-delay="100">
          <h2>WELCOME TO TAKABA WATER & SEWERAGE COMPANY</h2>
          <p>Providing clean, safe, and reliable water and sanitation solutions for our community.</p>
        </div><!-- End Welcome -->

        <div class="content row gy-4">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="why-box" data-aos="zoom-out" data-aos-delay="200">
              <h3>Why Choose Takaba Water?</h3>
              <p>
                We are committed to delivering high-quality water services with integrity, innovation, and sustainability. Our dedicated team works around the clock to ensure access to clean water and effective sanitation solutions for all.
              </p>
              <div class="text-center">
                <a href="#about" class="more-btn"><span>Learn More</span> <i class="bi bi-chevron-right"></i></a>
              </div>
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="d-flex flex-column justify-content-center">
              <div class="row gy-4">

                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box" data-aos="zoom-out" data-aos-delay="300">
                    <i class="bi bi-droplet-half"></i>
                    <h4>Clean Water Supply</h4>
                    <p>Reliable and safe water distribution services for homes and businesses in Takaba and surrounding regions.</p>
                  </div>
                </div><!-- End Icon Box -->

                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box" data-aos="zoom-out" data-aos-delay="400">
                    <i class="bi bi-recycle"></i>
                    <h4>Sustainable Practices</h4>
                    <p>Committed to environmentally responsible water sourcing and sewerage treatment systems.</p>
                  </div>
                </div><!-- End Icon Box -->

                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box" data-aos="zoom-out" data-aos-delay="500">
                    <i class="bi bi-people"></i>
                    <h4>Community Focus</h4>
                    <p>Engaging with our community through education, support services, and inclusive development plans.</p>
                  </div>
                </div><!-- End Icon Box -->

              </div>
            </div>
          </div>
        </div><!-- End  Content-->

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4 gx-5">

          <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="200">
            <img src="{{ asset('assets/img/about.jpg') }}" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=4SjxqoIlRJA" class="glightbox pulsating-play-btn"></a>
          </div>

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <h3>About Us</h3>
            <p>
              Takaba Water and Sewerage Company (TAWASCO) is dedicated to delivering safe and affordable water and sanitation services. Our mission is to enhance public health, promote economic development, and protect the environment by providing high-standard utilities to the community.
            </p>
            <ul>
              <li>
                <i class="fa-solid fa-faucet"></i>
                <div>
                  <h5>Efficient Water Distribution</h5>
                  <p>Our network delivers treated water directly to homes and businesses across Takaba.</p>
                </div>
              </li>
              <li>
                <i class="fa-solid fa-toilet-paper"></i>
                <div>
                  <h5>Modern Sewerage Infrastructure</h5>
                  <p>Maintaining and expanding sewerage systems for cleaner, healthier living conditions.</p>
                </div>
              </li>
              <li>
                <i class="fa-solid fa-hand-holding-water"></i>
                <div>
                  <h5>Customer-Centered Services</h5>
                  <p>Our clients are at the core of our operations — we prioritize prompt support and transparency.</p>
                </div>
              </li>
            </ul>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="fa-solid fa-users"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="15000" data-purecounter-duration="1" class="purecounter"></span>
              <p>Customers Served</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="fa-solid fa-water"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="500000" data-purecounter-duration="1" class="purecounter"></span>
              <p>Litres Supplied Daily</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="fa-solid fa-network-wired"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="250" data-purecounter-duration="1" class="purecounter"></span>
              <p>Km of Pipeline</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="fa-solid fa-award"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
              <p>Awards & Certifications</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

  </main>

@endsection
