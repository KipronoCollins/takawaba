@extends('layouts.app')

@section('content')

<section id="departments" class="departments section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Message From CEO</h2>
        <p>Committed to delivering safe, reliable and affordable water services to our communities</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-12 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="departments-tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>CEO’s Message</h3>
                    <p class="fst-italic">"Water is life — and our mission is to ensure every household, institution, and business has access to this vital resource."</p>
                    <p>
                      As the Chief Executive Officer, I am proud to lead a dedicated team that works tirelessly to deliver clean, safe, and sustainable water services. Our mandate goes beyond infrastructure — we are shaping healthier communities and driving local development through reliable water access.
                    </p>
                    <p>
                      We continue to invest in modern technologies, enhance customer service, and improve efficiency across our operations. Our commitment to environmental stewardship and community engagement remains at the heart of everything we do.
                    </p>
                    <p>
                      I thank all our stakeholders — from customers and staff to partners and regulators — for your unwavering support. Together, we are building a future where water flows for everyone, every day.
                    </p>
                    <p><strong>— Mohamed Hassan Mohamed<br>Chief Executive Officer</strong></p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{ asset('assets/img/departments-1.jpg') }}" alt="CEO Portrait" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

</section><!-- /Departments Section -->

@endsection
