@extends('landingpage.layouts.main')

@section('content')

<!-- ======= Informasi Kegiatan ======= -->
<section class="about-lists">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Informasi Kegiatan</h2>
        <p>Timeline Kegiatan</p>
      </div>

      <div class="row no-gutters">

        <div class="col-lg-4 col-md-6 content-item" data-aos="zoom-in">
          <h4>Pendaftaran PKM</h4>
          <p>20 Januari 2021 - 31 Januari 2021</p>
        </div>

        <div class="col-lg-4 col-md-6 content-item" data-aos="zoom-in" data-aos-delay="100">
          <h4>Pengumpulan Proposal</h4>
          <p>16 Februari 2021 - 23 Februari 2021</p>
        </div>

        <div class="col-lg-4 col-md-6 content-item" data-aos="zoom-in" data-aos-delay="200">
          <h4>Review Internal</h4>
          <p>15 Maret 2021 - 18 Maret 2021</p>
        </div>

        <div class="col-lg-4 col-md-6 content-item mt-3" data-aos="zoom-in" data-aos-delay="300">
          <h4>Pengumuman Hasil Review</h4>
          <p>18 Maret 2021 - 19 Maret 2021</p>
        </div>

        <div class="col-lg-4 col-md-6 content-item mt-3" data-aos="zoom-in" data-aos-delay="400">
          <h4>Perbaikan Proposal</h4>
          <p>19 Maret 2021 - 22 Maret 2021</p>
        </div>

        <div class="col-lg-4 col-md-6 content-item mt-3" data-aos="zoom-in" data-aos-delay="500">
          <h4>Upload Ke Simbelmawa</h4>
          <p>20 Maret 2021 - 23 Maret 2021</p>
        </div>
      </div>
  </div>
  </section><!-- End Informasi Kegiatan Section -->

  <!-- ======= Dokumen PKM Section ======= -->
  <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Dokumen PKM</h2>
          <p>Berkas Proposal</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="zoom-in-left">
              <div class="icon"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="#">PKM - P</a></h4>
              <p class="description">PKM - P atau PKM Penelitian merupakan suatu bentuk program penelitian yang dimaksudkan untuk mampu menjawab berbagai macam permasalahan yang berkaitan dengan masalah yang sedang gencar disuarakan</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="100">
              <div class="icon"><i class="bi bi-book" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href="#">PKM - K</a></h4>
              <p class="description">PKM - K atau PKM Kewirausahaan ialah suatu bentuk program pengembangan ketrampilan yang dilakukan oleh mahasiswa dalam berwirausaha</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-5 mt-lg-0 ">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="200">
              <div class="icon"><i class="bi bi-card-checklist" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="#">PKM - T</a></h4>
              <p class="description">PKM - T atau PKM Teknologi ialah suatu bentuk program bantuan teknologi bagi industri berskala mikro atau kecil dari hasil karya mahasiswa yang menyangkut atau dapat kepentingan masyarakat secara luas</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="300">
              <div class="icon"><i class="bi bi-binoculars" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="#">PKM - AI</a></h4>
              <p class="description">PKM - AI atau PKM Artikel Ilmiah ialah suatu bentuk program penulisan artikel ilmiah yang bersumber dari suatu kegiatan kelompok dalam bidangkeimuan yang dilakukan atas dasar penelitian atau pengabdian kepada masyarakat</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="400">
              <div class="icon"><i class="bi bi-globe" style="color: #d6ff22;"></i></div>
              <h4 class="title"><a href="#">PKM - KC</a></h4>
              <p class="description">PKM - KC atau PKM Karya Cipta ialah suatu bentuk program penciptaan mahasiswa yang biasanya didasari atas karsa dan nalar mahasiswa yang bersifat konstruktif serta menghasilkan suatu sistem atau desain</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="500">
              <div class="icon"><i class="bi bi-clock" style="color: #4680ff;"></i></div>
              <h4 class="title"><a href="#">PKM - GT</a></h4>
              <p class="description">PKM - GT atau PKM Gagasan Tertulis ialah suatu bentuk program penulisan artikel ilmiah yang didasari dari suatu ide atau gagasan kelompok mahasiswa</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Dokumen PKM Section -->

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

    <!-- ======= Tentang Kami Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Tentang Kami</h2>
          <p>Politeknik Negeri Indramayu</p>
        </div>

        <div class="row content" data-aos="fade-up">
          <div class="col-lg-15 pt-4 pt-lg-0">
            <p>
            Politeknik Negeri Indramayu merupakan salah satu perguruan tinggi negeri yang ikut serta dalam kegiatan Program Kreativitas Mahasiswa (PKM). Terdapat beberapa jenis Program Kreativitas Mahasiswa (PKM) yang ditawarkan yaitu PKM–Penelitian (PKM-P), PKM–Kewirausahaan (PKM-K), PKM–Teknologi (PKM-T), PKM-Artikel Ilmiah (PKM-AI), PKM-Karya Cipta (PKM-KC), dan PKM-Gagasan Tertulis (PKM-GT). Seluruh bidang Program Kreativitas Mahasiswa (PKM) akan bermuara di Pekan Ilmiah Mahasiswa Nasional (PIMNAS).
            </p>
            <a href="tentang" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End Tentang Kami Section -->

  </main><!-- End #main -->

@endsection
