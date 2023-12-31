<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Details - Personal Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/img/paw-solid.svg" rel="icon">
  <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/vendor/aos/aos.css" rel="stylesheet">
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MyResume
  * Updated: Nov 17 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body style="background-image: url('/img/bg.jpg');">

<form method="post" action="<?=base_url('login')?>">
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
      <div class="card text-white bg-secondary mb-3">
            <div align="center" class="card-header">LOGIN</div>
            <div class="card-body">

                <input type="hidden" name="id" value="<?=$data['id']?? ''?>" >

            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" name="email" class="form-control" id="form" placeholder=""required value="<?=$data['email']?? ''?>">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="katasandi" class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-6">
                    <input type="password" name="katasandi" class="form-control" id="form" placeholder="" required value="<?=$data['katasandi']?? ''?>">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="tingkat" class="col-sm-3 col-form-label">Tingkat</label>
                <div class="col-sm-4">
                    <select name="tingkat" class="form-control" id="form" value="<?=$data['tingkat']?? ''?>">
                        <option value="" disabled selected>-</option>
                        <option value="ADM">Admin</option>
                        <option value="PGN">Pengguna</option>
                    </select>
                </div>
            </div>
            <br>
                
        <div align="center" class="card-footer">
            <button  class="btn btn-primary">
                Login
            </button>
            <br>
            <br>
            <p>New around here? Sign UP First</p>
            <div class="social-auth-links text-center mt-2 mb-3">
            <a href="/signup/form" class="btn btn-primary">
                SignUp
            </a>
        </div>
        
        </div>
      </div>
    </div>
  </div>
</div>
</form>

<!-- Vendor JS Files -->
<script src="/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/vendor/aos/aos.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/vendor/typed.js/typed.umd.js"></script>
  <script src="/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/js/main.js"></script>
</body>
</html>
