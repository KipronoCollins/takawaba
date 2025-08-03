@extends('layouts.app')

@section('content')

<!-- Company Policy Section -->
<section id="company-policy" class="departments section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Our Company Policy</h2>
    <p>At Takaba Water and Sewerage Company, our policies guide our operations, ensuring transparency, sustainability, and accountability in all our services.</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row">
      <div class="col-lg-3">
        <ul class="nav nav-tabs flex-column">
          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" href="#policy-tab-1">Customer Service Policy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#policy-tab-2">Environmental Policy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#policy-tab-3">Water Quality Assurance</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#policy-tab-4">Health & Safety Policy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#policy-tab-5">Governance & Compliance</a>
          </li>
        </ul>
      </div>
      <div class="col-lg-9 mt-4 mt-lg-0">
        <div class="tab-content">
          <div class="tab-pane active show" id="policy-tab-1">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Customer Service Policy</h3>
                <p class="fst-italic">Our commitment to serving customers with integrity, timeliness, and professionalism.</p>
                <p>We aim to offer responsive and respectful service, resolve customer complaints efficiently, and ensure access to accurate billing and service information.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/policy-1.jpg" alt="Customer Service" class="img-fluid">
              </div>
            </div>
          </div>

          <div class="tab-pane" id="policy-tab-2">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Environmental Policy</h3>
                <p class="fst-italic">Protecting and conserving natural resources through sustainable water and sewerage practices.</p>
                <p>We adhere to national environmental regulations, minimize pollution, promote conservation, and educate the community on sustainability.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/policy-2.jpg" alt="Environmental Policy" class="img-fluid">
              </div>
            </div>
          </div>

          <div class="tab-pane" id="policy-tab-3">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Water Quality Assurance</h3>
                <p class="fst-italic">Guaranteeing clean and safe water to all our customers.</p>
                <p>Routine lab testing, real-time monitoring, and adherence to WHO and KEBS standards help us deliver high-quality potable water.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/policy-3.jpg" alt="Water Quality" class="img-fluid">
              </div>
            </div>
          </div>

          <div class="tab-pane" id="policy-tab-4">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Health & Safety Policy</h3>
                <p class="fst-italic">Ensuring safety for staff, contractors, and the public in all operations.</p>
                <p>We provide regular safety training, enforce protective measures, and maintain emergency response protocols for all working environments.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/policy-4.jpg" alt="Health and Safety" class="img-fluid">
              </div>
            </div>
          </div>

          <div class="tab-pane" id="policy-tab-5">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Governance & Compliance</h3>
                <p class="fst-italic">Operating transparently and lawfully in line with national standards and corporate ethics.</p>
                <p>We uphold good governance, implement procurement best practices, and report financial and operational performance as required by regulatory bodies.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/policy-5.jpg" alt="Governance" class="img-fluid">
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>

</section><!-- /Company Policy Section -->

@endsection
