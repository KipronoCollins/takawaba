@extends('layouts.app')

@section('content')

<section id="management" class="management section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Management Team</h2>
        <p>Meet the dedicated professionals overseeing the operations of Takaba Water and Sewerage Company</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('assets/img/team/ceo.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Ahmed Noor</h4>
                <span>Chief Executive Officer</span>
                <p>Oversees overall company strategy, performance, and stakeholder engagement.</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('assets/img/team/operations.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Fatuma Ibrahim</h4>
                <span>Head of Operations</span>
                <p>Leads the management of water and sewer services ensuring smooth daily operations.</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('assets/img/team/finance.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Joseph Kiptoo</h4>
                <span>Chief Financial Officer</span>
                <p>Responsible for budgeting, financial planning, and resource allocation for the company.</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('assets/img/team/engineering.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Naima Mohamed</h4>
                <span>Technical Manager</span>
                <p>Leads engineering teams in maintaining and expanding the water and sewerage infrastructure.</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Management Section -->

@endsection
