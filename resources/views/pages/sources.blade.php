@extends('layouts.app')

@section('content')

<!-- Water Sources Section -->
<section id="departments" class="departments section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Water Sources</h2>
    <p>Explore the key water sources that supply Takaba Water and Sewerage Company, ensuring clean and reliable water to our community.</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row">
      <div class="col-lg-3">
        <ul class="nav nav-tabs flex-column">
          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" href="#departments-tab-1">Boreholes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-2">Surface Water</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-3">Rainwater Harvesting</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-4">Water Trucking</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-5">Community Wells</a>
          </li>
        </ul>
      </div>
      <div class="col-lg-9 mt-4 mt-lg-0">
        <div class="tab-content">

          <div class="tab-pane active show" id="departments-tab-1">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Boreholes</h3>
                <p class="fst-italic">Reliable deep groundwater extraction points for year-round supply.</p>
                <p>Takaba Water and Sewerage Company maintains several boreholes that tap into underground aquifers. These boreholes are strategically located and fitted with solar-powered pumps to ensure sustainable and eco-friendly water supply to the community.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/borehole.jpg" alt="Borehole" class="img-fluid">
              </div>
            </div>
          </div>

          <div class="tab-pane" id="departments-tab-2">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Surface Water</h3>
                <p class="fst-italic">Utilizing rivers, dams, and seasonal streams as supplementary water sources.</p>
                <p>During rainy seasons, surface water from rivers and seasonal catchments is collected and treated to meet safety standards. This helps ease the pressure on groundwater sources and ensures continuity of service in wetter months.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/surface-water.jpg" alt="Surface Water" class="img-fluid">
              </div>
            </div>
          </div>

          <div class="tab-pane" id="departments-tab-3">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Rainwater Harvesting</h3>
                <p class="fst-italic">Capturing and storing rainwater for domestic and operational use.</p>
                <p>Rainwater is harvested from building rooftops and other structures and stored in tanks for later treatment and use. This environmentally friendly approach reduces reliance on traditional sources during the rainy season.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/rainwater.jpg" alt="Rainwater Harvesting" class="img-fluid">
              </div>
            </div>
          </div>

          <div class="tab-pane" id="departments-tab-4">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Water Trucking</h3>
                <p class="fst-italic">Mobile delivery to areas without direct connection to the grid.</p>
                <p>In remote or underserved areas, water is delivered via trucks. The water is sourced from approved boreholes and surface reservoirs, and it undergoes quality testing before distribution.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/trucking.jpg" alt="Water Trucking" class="img-fluid">
              </div>
            </div>
          </div>

          <div class="tab-pane" id="departments-tab-5">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Community Wells</h3>
                <p class="fst-italic">Shallow wells developed in partnership with local communities.</p>
                <p>These wells are often located in strategic villages and are maintained collaboratively. They are important in providing daily water access and serve as backup during borehole downtime.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/community-well.jpg" alt="Community Wells" class="img-fluid">
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>

</section><!-- /Water Sources Section -->

@endsection
