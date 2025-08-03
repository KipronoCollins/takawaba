@extends('layouts.app')

@section('content')

<!-- Gallery Section -->
<section id="gallery" class="gallery section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Company Gallery</h2>
    <p>Explore highlights of our infrastructure, community engagement, and operational milestones at Takaba Water and Sewerage Company.</p>
  </div><!-- End Section Title -->

  <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
    <div class="row g-0">
      @php
        $galleryImages = [
          ['file' => 'gallery-1.jpg', 'alt' => 'Water intake point construction'],
          ['file' => 'gallery-2.jpg', 'alt' => 'Pipeline installation in progress'],
          ['file' => 'gallery-3.jpg', 'alt' => 'Reservoir maintenance team'],
          ['file' => 'gallery-4.jpg', 'alt' => 'Community sensitization event'],
          ['file' => 'gallery-5.jpg', 'alt' => 'Water testing and quality control'],
          ['file' => 'gallery-6.jpg', 'alt' => 'New sewer system setup'],
          ['file' => 'gallery-7.jpg', 'alt' => 'Company staff at training workshop'],
          ['file' => 'gallery-8.jpg', 'alt' => 'Solar-powered pump station'],
        ];
      @endphp

      @foreach ($galleryImages as $image)
        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="{{ asset('assets/img/gallery/' . $image['file']) }}" class="glightbox" data-gallery="images-gallery">
              <img src="{{ asset('assets/img/gallery/' . $image['file']) }}" alt="{{ $image['alt'] }}" class="img-fluid">
            </a>
          </div>
        </div>
      @endforeach

    </div>
  </div>

</section><!-- /Gallery Section -->

@endsection
