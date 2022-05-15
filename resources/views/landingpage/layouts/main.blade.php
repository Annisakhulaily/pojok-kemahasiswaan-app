<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pojok Kemahasiswaan | Politeknik Negeri Indramayu</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('Selecao')}}/assets/img/polindra.png" rel="icon">
  <link href="{{ asset('Selecao')}}/assets/img/polindra.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('Selecao')}}/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="{{ asset('Selecao')}}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset('Selecao')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('Selecao')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('Selecao')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('Selecao')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('Selecao')}}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{ asset('Selecao')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('Selecao')}}/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Selecao - v4.7.0
  * Template URL: https://bootstrapmade.com/selecao-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

@include('landingpage.layouts.navbar')

<!-- ======= Beranda Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <div class="row mt-5" >
        <div class="col-md-6 mt-5">
          <h2 class="animate__animated animate__fadeInDown">Pojok Kemahasiswaan Politeknik Negeri Indramayu</h2>
          <p class="animate__animated animate__fadeInDown">Pojok Kemahasiswaan Politeknik Negeri Indramayu merupakan sebuah aplikasi mengenai kegiatan Program Kreativitas Mahasiswa (PKM). PKM merupakan salah satu program yang dijalankan oleh Direktorat Penelitian dan Pengabdian kepada Masyarakat (Ditlitabmas) Direktorat Jenderal Pendidikan Tinggi (Ditjen DIKTI) Kemdikbud untuk meningkatkan mutu peserta didik (mahasiswa) di perguruan tinggi.</p>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('Selecao')}}/assets/img/gedung.png" alt="" class="animate__animated animate__fadeInDown">
        </div>

      </div>

      {{-- <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown" style="text-align:left">Pojok Kemahasiswaan <br><span>Politeknik Negeri Indramayu</span></h2>
          <p class="animate__animated animate__fadeInDown" style="text-align:left">Pojok Kemahasiswaan Politeknik Negeri Indramayu merupakan sebuah aplikasi mengenai kegiatan Program Kreativitas Mahasiswa (PKM). PKM merupakan salah satu program yang dijalankan oleh Direktorat Penelitian dan Pengabdian kepada Masyarakat (Ditlitabmas) Direktorat Jenderal Pendidikan Tinggi (Ditjen DIKTI) Kemdikbud untuk meningkatkan mutu peserta didik (mahasiswa) di perguruan tinggi.</p>
        </div>
      </div> --}}

      {{-- <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
      </a>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg> --}}
    <br><br>
  </section><!-- End Hero -->


  <main id="main">

  @yield('content')

  @include('landingpage.layouts.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('Selecao')}}/assets/vendor/aos/aos.js"></script>
  <script src="{{ asset('Selecao')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('Selecao')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset('Selecao')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ asset('Selecao')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('Selecao')}}/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('Selecao')}}/assets/js/main.js"></script>

</body>

</html>
