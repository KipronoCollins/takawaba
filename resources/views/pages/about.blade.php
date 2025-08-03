@extends('layouts.app')

@section('content')

<section id="departments" class="departments section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About Us</h2>
        <p>We are dedicated to providing clean, safe, and reliable water services to our communities</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#departments-tab-1">Water Supply</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-2">Sanitation</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-3">Water Quality</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-4">Customer Service</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-5">Infrastructure</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="departments-tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Water Supply</h3>
                    <p class="fst-italic">We ensure uninterrupted access to clean and safe water for all residential, commercial, and industrial clients.</p>
                    <p>Our team manages water sources, treatment facilities, and distribution systems efficiently. We monitor consumption trends and invest in technologies to improve coverage and reduce wastage, ensuring sustainability and reliability.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{ asset('assets/img/departments-1.jpg') }}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="departments-tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Sanitation</h3>
                    <p class="fst-italic">Promoting hygiene through proper wastewater management and sanitation services.</p>
                    <p>We provide safe and environmentally friendly sanitation solutions. Our sanitation department works with public health agencies to reduce waterborne diseases and maintain clean surroundings through proper sewer systems and treatment facilities.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{ asset('assets/img/departments-2.jpg') }}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="departments-tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Water Quality</h3>
                    <p class="fst-italic">We are committed to maintaining the highest standards of water quality for your safety and well-being.</p>
                    <p>Regular testing, compliance with national guidelines, and the use of advanced purification technologies ensure that the water you receive meets or exceeds health standards. Transparency and accountability are central to our quality assurance processes.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{ asset('assets/img/departments-3.jpg') }}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="departments-tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Customer Service</h3>
                    <p class="fst-italic">We value our customers and strive to provide prompt and helpful support.</p>
                    <p>Whether it’s billing queries, new connections, or reporting issues, our customer support team is ready to help. We’ve enhanced accessibility through digital platforms, call centers, and on-site service desks to serve you better.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{ asset('assets/img/departments-4.jpg') }}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="departments-tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Infrastructure</h3>
                    <p class="fst-italic">Building and maintaining resilient infrastructure to support water service delivery.</p>
                    <p>We invest in pipelines, tanks, treatment plants, and pumping stations to meet growing demand. Our engineering team ensures systems are well maintained and expanded in line with urban and rural development plans.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{ asset('assets/img/departments-5.jpg') }}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

</section><!-- /Departments Section -->

@endsection
