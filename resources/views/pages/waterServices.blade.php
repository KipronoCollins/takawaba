@extends('layouts.app')

@section('content')

<!-- Water Services Section -->
<section id="water-services" class="departments section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Water Services</h2>
    <p>Takaba Water and Sewerage Company ensures reliable, clean, and safe water supply for domestic, institutional, and commercial use across its service area.</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row">
      <div class="col-lg-3">
        <ul class="nav nav-tabs flex-column">
          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" href="#water-tab-1">Water Supply & Distribution</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#water-tab-2">Borehole Management</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#water-tab-3">Water Treatment</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#water-tab-4">Metering & Billing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#water-tab-5">Customer Support Services</a>
          </li>
        </ul>
      </div>
      <div class="col-lg-9 mt-4 mt-lg-0">
        <div class="tab-content">
          <div class="tab-pane active show" id="water-tab-1">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Water Supply & Distribution</h3>
                <p class="fst-italic">Ensuring 24/7 access to clean and safe water for all customers.</p>
                <p>Our company operates a robust water network that supplies homes, businesses, and institutions. Routine maintenance ensures high-pressure, uninterrupted flow across all zones.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/water-1.jpg" alt="Water Distribution" class="img-fluid">
              </div>
            </div>
          </div>

          <div class="tab-pane" id="water-tab-2">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Borehole Management</h3>
                <p class="fst-italic">Developing, monitoring, and maintaining boreholes to supplement supply.</p>
                <p>Takaba Water and Sewerage Company oversees several boreholes to ensure continuous supply during dry seasons. We test water quality regularly and maintain pumping systems to optimal standards.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/water-2.jpg" alt="Borehole Management" class="img-fluid">
              </div>
            </div>
          </div>

          <div class="tab-pane" id="water-tab-3">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Water Treatment</h3>
                <p class="fst-italic">Treating water from all sources to meet WHO and KEBS standards.</p>
                <p>We use advanced filtration and disinfection methods to eliminate impurities and pathogens. Water quality is routinely monitored to guarantee safety and health compliance.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/water-3.jpg" alt="Water Treatment" class="img-fluid">
              </div>
            </div>
          </div>

          <div class="tab-pane" id="water-tab-4">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Metering & Billing</h3>
                <p class="fst-italic">Accurate billing based on actual usage for transparency and accountability.</p>
                <p>Our metering system is upgraded to ensure fair billing practices. Customers are encouraged to monitor their consumption and report anomalies through our support desk.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/water-4.jpg" alt="Metering & Billing" class="img-fluid">
              </div>
            </div>
          </div>

          <div class="tab-pane" id="water-tab-5">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Customer Support Services</h3>
                <p class="fst-italic">Dedicated support team to assist with inquiries, complaints, and service requests.</p>
                <p>We provide hotline, walk-in, and online support to ensure customer satisfaction. Feedback is acted upon promptly to enhance service delivery and build trust.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/water-5.jpg" alt="Customer Support" class="img-fluid">
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>

</section><!-- /Water Services Section -->

@endsection