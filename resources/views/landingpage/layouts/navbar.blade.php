 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo d-flex justify-content-center align-items-center">
        <img src="{{ asset('Selecao')}}/assets/img/polindra.png" alt="">
        <h1 class="ms-2"><a>PKM | POLINDRA</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto {{ Request::is('beranda') ? 'active' : 'collapsed' }} " href="{{url('beranda')}}">Beranda</a></li>
          <li><a class="nav-link scrollto {{ Request::is('informasi') ? 'active' : 'collapsed' }}" href="{{url('informasi')}}">Informasi Kegiatan</a></li>
          <li><a class="nav-link scrollto {{ Request::is('dokumen') ? 'active' : 'collapsed' }}" href="{{url('dokumen')}}">Dokumen PKM</a></li>
          <li><a class="nav-link scrollto {{ Request::is('galeri') ? 'active' : 'collapsed' }}" href="{{url('galeri')}}">Galeri</a></li>
          <li><a class="nav-link scrollto {{ Request::is('tentang') ? 'active' : 'collapsed' }}" href="{{url('tentang')}}">Tentang Kami</a></li>
          <li><a class="nav-link scrollto {{ Request::is('login') ? 'active' : 'collapsed' }}" href="{{url('login')}}">Masuk</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


