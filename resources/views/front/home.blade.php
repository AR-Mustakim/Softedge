@extends('front.master')

@section('head')
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <title>Softedge Innovation</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-tale-seo-agency.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


  </head>

@endsection

@section('header')
<!-- ***** Pre-Header Area Start ***** -->
<div class="pre-header">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-sm-9">
        <div class="left-info">
          <ul>
            <li><a href="#"><i class="fa fa-phone"></i>+606 760 6203</a></li>
            <li><a href="#"><i class="fa fa-envelope"></i>hr@mysoftedge.com</a></li>
            <li><a href="#"><i class="fa fa-map-marker-alt"></i>Pusat Perdagangan Paroi, Seremban, Negeri Sembilan</a></li>
          </ul>
        </div>
      </div>
      {{-- <div class="col-lg-4 col-sm-3">
        <div class="social-icons">
          <ul>
            <li><a href="#">login</a></li>
            <li><a href="#"><i class="fas fa-cog"></i></a></li>
          </ul>
        </div>
      </div> --}}
    </div>
  </div>
</div>
<!-- ***** Pre-Header Area End ***** -->

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
  <div class="container">
      <div class="row">
          <div class="col-12">
              <nav class="main-nav">
                  <!-- ***** Logo Start ***** -->
                  <a href="#top" class="logo">
                      <img src="assets/images/logo2.png" alt="" style="max-width: 112px;">
                  </a>
                  <!-- ***** Logo End ***** -->
                  <!-- ***** Menu Start ***** -->
                  <ul class="nav">
                    <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                    <li class="scroll-to-section"><a href="#about">about</a></li>
                    <li class="scroll-to-section"><a href="#services">Services</a></li>
                    <li class="scroll-to-section"><a href="#projects">Projects</a></li>
                    {{-- <li class="has-sub">
                        <a href="javascript:void(0)">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="faqs.html">FAQs</a></li>
                        </ul>
                    </li> --}}
                  </ul>   
                  <li class="scroll-to-section nav-contact"><a href="#contact">Contact Us</a></li>
                  <a class='menu-trigger'>
                      <span>Menu</span>
                  </a>
                  <!-- ***** Menu End ***** -->
              </nav>
          </div>
      </div>
  </div>
</header>
<!-- ***** Header Area End ***** -->
@endsection

@section('footer')
<footer>
    <div class="footer-container">
            {{-- <p><b>Phone :</b> +606 671 55421. &nbsp;&nbsp;
            <b>Email :</b> webmaster@mysostedge.com<br> --}}
            <p>Copyright © 2024 Softedge System. All Rights Reserved. 
            </p>
          
    </div>

      <!-- Scripts -->
      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

      <script src="assets/js/isotope.min.js"></script>
      <script src="assets/js/owl-carousel.js"></script>
      <script src="assets/js/tabs.js"></script>
      <script src="assets/js/popup.js"></script>
      <script src="assets/js/custom.js"></script>

  </footer>
@endsection
