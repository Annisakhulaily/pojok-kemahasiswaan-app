@extends('landingpage.layouts.main')

@section('content')

 <!-- ======= Galeri Section ======= -->
  <section id="gallery" class="gallery">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Galeri</h2>
        <p>Dokumentasi kegiatan Program Kreativitas Mahasiswa (PKM) di Politeknik Negeri Indramayu</p>
      </div>

      <div class="gallery-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><a class="gallery-lightbox" href=""><img src="{{ asset('Selecao')}}/assets/img/galeri/galeri-1.png" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href=""><img src="{{ asset('Selecao')}}/assets/img/galeri/galeri-2.png" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href=""><img src="{{ asset('Selecao')}}/assets/img/galeri/galeri-3.png" class="img-fluid" alt=""></a></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Galeri Section -->

  @endsection
