@extends('layouts.app')

@section('content')

<!-- Sewer Services Section -->
<section id="sewer-services" class="departments section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Sewer Services</h2>
    <p>Takaba Water and Sewerage Company offers comprehensive sewerage services to ensure environmental health and sustainable urban living.</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row">
      <div class="col-lg-3">
        <ul class="nav nav-tabs flex-column">
          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" href="#sewer-tab-1">Sewer Network Management</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#sewer-tab-2">Wastewater Treatment</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#sewer-tab-3">Septic Tank Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#sewer-tab-4">Effluent Monitoring</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#sewer-tab-5">Sanitation Campaigns</a>
          </li>
        </ul>
      </div>
      <div class="col-lg-9 mt-4 mt-lg-0">
        <div class="tab-content">
          <div class="tab-pane active show" id="sewer-tab-1">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Sewer Network Management</h3>
                <p class="fst-italic">Overseeing the installation, repair, and routine maintenance of the town’s sewer lines.</p>
                <p>Our technical team ensures that blockages and overflows are promptly handled to minimize health risks and property damage. Regular inspections keep the system efficient and reliable.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/sewer-1.jpg" alt="Sewer Network" class="img-fluid">
              </div>
            </div>
          </div>

          <div class="tab-pane" id="sewer-tab-2">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Wastewater Treatment</h3>
                <p class="fst-italic">Treating wastewater to meet environmental standards before discharge.</p>
                <p>Takaba’s treatment processes include sedimentation, biological filtration, and disinfection. This ensures that wastewater released into the environment is safe and compliant with regulatory requirements.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/sewer-2.jpg" alt="Wastewater Treatment" class="img-fluid">
              </div>
            </div>
          </div>

          <div class="tab-pane" id="sewer-tab-3">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Septic Tank Services</h3>
                <p class="fst-italic">Providing desludging and maintenance for households not connected to the main sewer.</p>
                <p>We offer scheduled and on-demand septic tank emptying services, ensuring hygienic waste disposal for homes and institutions outside the sewer grid.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/sewer-3.jpg" alt="Septic Tank" class="img-fluid">
              </div>
            </div>
          </div>

          <div class="tab-pane" id="sewer-tab-4">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Effluent Monitoring</h3>
                <p class="fst-italic">Ensuring that industrial and domestic effluent meets quality standards.</p>
                <p>Through lab analysis and field testing, we monitor the chemical and biological composition of effluent to prevent environmental degradation and comply with NEMA guidelines.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/sewer-4.jpg" alt="Effluent Monitoring" class="img-fluid">
              </div>
            </div>
          </div>

          <div class="tab-pane" id="sewer-tab-5">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Sanitation Campaigns</h3>
                <p class="fst-italic">Creating awareness on best sanitation practices in the community.</p>
                <p>We organize public sensitization programs on hygiene, safe waste disposal, and sanitation infrastructure usage to promote health and reduce disease outbreaks.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/sewer-5.jpg" alt="Sanitation Campaigns" class="img-fluid">
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>

</section><!-- /Sewer Services Section -->

@endsection
