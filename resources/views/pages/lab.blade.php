@extends('layouts.app')

@section('content')

<!-- Lab Tests Section -->
<section id="departments" class="departments section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Lab Tests</h2>
    <p>Explore the range of laboratory tests conducted to ensure the quality and safety of water at Takaba Water and Sewerage Company.</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row">
      <div class="col-lg-3">
        <ul class="nav nav-tabs flex-column">
          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" href="#departments-tab-1">Physical Tests</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-2">Chemical Tests</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-3">Microbiological Tests</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-4">Heavy Metals</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-5">Wastewater Analysis</a>
          </li>
        </ul>
      </div>
      <div class="col-lg-9 mt-4 mt-lg-0">
        <div class="tab-content">
          <div class="tab-pane active show" id="departments-tab-1">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Physical Tests</h3>
                <p class="fst-italic">We analyze basic physical characteristics of water such as color, odor, turbidity, and temperature.</p>
                <p>These indicators help determine the aesthetic and preliminary quality of the water supplied to our customers. Any anomaly prompts further chemical or biological testing.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/lab-physical.jpg" alt="Physical Tests" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="departments-tab-2">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Chemical Tests</h3>
                <p class="fst-italic">Our team checks chemical constituents like pH, chlorine, nitrates, fluoride, and hardness levels.</p>
                <p>These are essential for ensuring compliance with national and WHO water safety standards, protecting public health and infrastructure longevity.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/lab-chemical.jpg" alt="Chemical Tests" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="departments-tab-3">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Microbiological Tests</h3>
                <p class="fst-italic">We assess for harmful microorganisms like E. coli, total coliforms, and other pathogens.</p>
                <p>This ensures the microbial safety of water, especially in potable supplies. Regular monitoring prevents potential outbreaks of waterborne diseases.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/lab-microbiology.jpg" alt="Microbiological Tests" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="departments-tab-4">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Heavy Metals</h3>
                <p class="fst-italic">We screen for traces of metals such as lead, mercury, arsenic, and cadmium in water samples.</p>
                <p>Early detection helps safeguard public health and guides necessary interventions in water treatment or infrastructure replacement.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/lab-metals.jpg" alt="Heavy Metals" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="departments-tab-5">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Wastewater Analysis</h3>
                <p class="fst-italic">We examine wastewater for compliance with environmental discharge standards.</p>
                <p>Tests include biochemical oxygen demand (BOD), chemical oxygen demand (COD), suspended solids, and nutrient loads. This is critical for protecting the environment and meeting regulatory requirements.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/lab-wastewater.jpg" alt="Wastewater Analysis" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- /Lab Tests Section -->

@endsection
