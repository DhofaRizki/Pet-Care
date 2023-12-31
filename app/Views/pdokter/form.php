<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pet Care</title>
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
  <form method="post" action="<?=base_url('/pdokter/Save')?>">
    <div class="container mt-5">
      <div class="row justify-content-center">
          <div class="col-md-6">
              <div class="card">
                <div class="card text-white bg-secondary mb-3">
        <h2 align="center" class="text">Pemesanan Dokter</h2>
    </div>

    <div align="center" class="card text-white bg-success mb-3">
        <div class="card-header"></div>
        <div class="card-body">
                <input type="hidden" name="id" value="<?=$data['id']?? ''?>" >

        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Jenis Hewan</label>
            <div class="col-sm-6">
                <input type="text" name="nama" value="<?=$data['nama']?? ''?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="namahewan" class="col-sm-2 col-form-label">Nama Hewan</label>
            <div class="col-sm-6">
                <input type="text" name="namahewan" value="<?=$data['namahewan']?? ''?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="jenishewan" class="col-sm-2 col-form-label">Jenis Hewan</label>
            <div class="col-sm-6">
                <input type="text" name="jenishewan" value="<?=$data['jenishewan']?? ''?>"> 
            </div>
        </div>

        <div class="form-group row">
            <label for="tgl_dtg" class="col-sm-2 col-form-label">Tgl. Datang</label>
            <div class="col-sm-6">
                <input type="text" name="tgl_dtg" value="<?=$data['tgl_dtg']?? ''?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="jam" class="col-sm-2 col-form-label">JAM</label>
            <div class="col-sm-6">
                <input type="text" name="jam" value="<?=$data['jam']?? ''?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="notlp" class="col-sm-2 col-form-label">No Telp.</label>
            <div class="col-sm-6">
                <input type="text" name="notlp" value="<?=$data['notlp']?? ''?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="keluhan" class="col-sm-2 col-form-label">Keluhan</label>
            <div class="col-sm-6">
                <input type="text" name="keluhan" value="<?=$data['keluhan']?? ''?>">
            </div>
        </div>
        <br>

        <button>Save</button>

                
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