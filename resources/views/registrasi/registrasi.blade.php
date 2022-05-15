<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login Pojok Kemahasiswaan | Politeknik Negeri Indramayu</title>
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

<div class="card-body">
<div class="container mt-4">
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registrasi">
            <h1 class="h3 mb-3 fw-normal text-center">REGISTRASI</h1>
            <center>
            <img class="mb-4" src="img/polindra.png" alt="" width="70" height="70">
            </center>
            <form>
              <div class="form-floating">
                <input type="text" name="name" class="form-control rounded-top" id="name" placeholder="Name">
                <label for="name">Nama</label>
              </div>
              <div class="form-floating">
                <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                <label for="username">Username</label>
              </div>
              <div class="form-floating">
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                <label for="email">Email</label>
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control rounded-bottom " id="password" placeholder="Password">
                <label for="password">Password</label>
              </div>
              <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Registrasi</button>
            </form>
            <small class="d-block text-center mt-3">Sudah punya akun? <a href="{{url('login')}}">Login</a></small>
          </main>
    </div>
</div>
</div>
</div>

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
