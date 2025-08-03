@extends('layouts.app')

@section('content')

<section id="doctors" class="doctors section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Board of Directors</h2>
        <p>Meet the dedicated leadership team steering our commitment to clean and reliable water services</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('assets/img/doctors/b1.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Adan Mohamed Issack</h4>
                <span>Board Member</span>
                {{-- <p>Provides strategic oversight to ensure the company delivers sustainable water solutions to the community.</p> --}}
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('assets/img/doctors/b2.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Mohamed Abdirahman</h4>
                <span>Board Member</span>
                {{-- <p>Oversees financial planning, budgeting, and ensures funds are used effectively to support operations and expansion.</p> --}}
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('assets/img/doctors/b3.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Habiba Adan Mohamed</h4>
                <span>Board Member</span>
                {{-- <p>Leads infrastructure development, water treatment technologies, and pipeline expansion initiatives.</p> --}}
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('assets/img/doctors/b4.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Zeinab Mohamed Adan</h4>
                <span>Board Member</span>
                {{-- <p>Focuses on community engagement, customer service excellence, and access to safe water in underserved areas.</p> --}}
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

</section><!-- /Doctors Section -->

@endsection
