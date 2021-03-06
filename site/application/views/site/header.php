<!DOCTYPE html>
<html>

<head><meta charset="gb18030">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Marmenino">
  <meta name="author" content="Marmenino">
  <title>Marmenino</title>
  <!-- Favicon -->
  <!-- <link rel="icon" href="<?php echo base_url(); ?>assets/img/theme/perfil_X.png" type="image/png"> -->
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css"> -->
  <script src="<?php echo base_url(); ?>assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://use.fontawesome.com/a7573f95f4.js"></script>
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/argon.css?v=1.1.0" type="text/css">
  <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>

  <style>
    .navbar-brand-img {
      width: 40%;
      padding: 6rem 2rem 2rem 2rem;
    }
    .googlemap {
      height: 300px;
      width: 80%;
    }
    @media only screen and (max-width: 480px) {
      .navbar-brand-img {
          width: 80%;
          padding: 10rem 2rem 2rem 2rem;
      }
      .googlemap {
        height: auto;
        width: 100%;    
      }
    }
  </style>
  <style>
    body, html {
      height: 100%;
      margin: 0;
    }

    .bg {
      /* The image used */
      background-image: url(<?php echo base_url(); ?>assets/img/theme/fundo.png);

      /* Full height */
      height: 100%; 

      /* Center and scale the image nicely */
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
  </style>
</head>

<body class="bg">
  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header py-5 py-lg-5 pt-lg-6"></div>
    <!-- Page content -->
    <div class="container mt--8">

      <section class="">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="justify-content-center text-center">
              <img src="<?php echo base_url(); ?>assets/img/theme/marmenino.png" class="navbar-brand-img" alt="">
            </div>
          </div>
        </div>
      </section>

      <section class="">
        <div class="row justify-content-center text-center">
          <div class="col-md-10">
            <div class="col-lg-12 p-0">
              <iframe class="googlemap" scrolling="no" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=3hrv+mf%20Cajueiro%20da%20Praia,%20Piaui%20+()&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" frameborder="0" style="border:0; padding:1em; background-color:#fff"></iframe>
            </div>
          </div>
        </div>
      </section>

      <section class="">
        <div class="row justify-content-center text-center">
          <div class="col-md-8">
            <div class="col-lg-12 p-0">
              <p style="color: #000 !important">Endereço: 3hrv+mf Cajueiro da Praia, Piaui - 64.222-000</p>
            </div>
          </div>
        </div>
      </section>

    </div>