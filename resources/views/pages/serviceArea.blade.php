@extends('layouts.app')

@section('content')

<section id="ceo-message" class="section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Service Area</h2>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium nemo a quos, adipisci voluptate maiores ut dignissimos neque doloribus quam dolor vel officiis culpa sit perferendis ad animi, distinctio non.</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="pdf-viewer text-center">
          <embed src="{{ asset('assets/pdfs/TAWASCO_Customer_Service_Charter.pdf') }}" type="application/pdf" width="100%" height="800px" />
          {{-- Alternatively use iframe --}}
          {{-- <iframe src="{{ asset('pdfs/ceo-message.pdf') }}" width="100%" height="800px" style="border:none;"></iframe> --}}
        </div>
      </div>
    </div>
  </div>

</section>

@endsection
