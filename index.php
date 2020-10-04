<?php 

$mysqli = new mysqli('localhost', 'root', '', 'registration');

$query = "SELECT * FROM plans";

session_start();

if(isset($_POST["logoutBtn"]))
{
  session_destroy();
  header("Refresh:0");
}

?>

<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Sidh Motors</title>
  <meta name="author" content="Vecuro">
  <meta name="description" content="Sidh Motors">
  <meta name="keywords" content="Sidh Motors" />
  <meta name="robots" content="INDEX,FOLLOW">

  <!-- Mobile Specific Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Google Web Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&amp;family=Roboto:wght@400;500;700&amp;display=swap"
    rel="stylesheet">

  <!-- Favicons - Place favicon.ico in the root directory -->
  <link rel="icon" type="image/png" href="assets/img/favicons/favicon.ico">
  <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicons/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <!-- All CSS -->
  <!-- Flat Icon -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/flaticon.min.css">
  <!-- All Plugins -->
  <link rel="stylesheet" href="assets/css/plugin.min.css">
  <!-- Main Theme CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  

</head>

<body>


  <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->



  <!--********************************
  ***** Code Start From Here *****
  ******************************** -->







  <!-- Preloader -->
  <div class="preloader ">
    <div class="meter">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="subline"></div>
      <div class="subline"></div>
      <div class="subline"></div>
      <div class="subline"></div>
      <div class="subline"></div>
      <div class="loader-circle-1">
        <div class="loader-circle-2"></div>
      </div>
      <div class="needle"></div>
      <span class="loadtext">Loading</span>
    </div>
  </div>
  <!-- Preloader end -->




  <!-- Mobile Menu -->
  <div class="mobile-menu-wrapper ">
    <div class="mean-menu-area">
      <!-- Menu Close Btn -->
      <button class="mobileMenucls"><i class="fal fa-times"></i></button>

      <!-- Mobile Menu -->
      <div class="mobile-logo">
        <!--<a href="index.html"><img src="assets/img/logo.png" alt="Sidh Motors"></a>-->
      </div>

      <!-- Mobile Menu -->
      <div class="mobile-menu"></div><!-- Menu Will Append With Javascript -->

    </div>
  </div>
  <!-- Mobile Menu end -->

  <!-- Sticky Header -->
  <div class="sticky-header-wrap sticky-header">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-6 col-md-3">
          <div class="logo">
            <!--<a href="index.html"><img src="assets/img/logo-h3.png" alt="Sidh Motors"></a>-->
          </div>
        </div>
        <div class="col-6 col-md-9 text-right">
          <nav class="main-menu">
            <ul>
              <li class="menu-item-has-children">
                <a href="index.html">Home</a>
                <!-- Sub Menu -->
                <!--<ul class="sub-menu">
                  <li><a href="index.html">Home One</a></li>
                  <li><a href="index-2.html">Home Two</a></li>
                  <li><a href="index-3.html">Home Three</a></li>
                </ul>-->
              </li>
              <li class="menu-item-has-children">
                <a href="about-us.html">About</a>
                <!-- Sub Menu -->
                <!--<ul class="sub-menu">
                  <li><a href="about-us.html">About Us One</a></li>
                  <li><a href="about-us-2.html">About Us Two</a></li>
                  <li><a href="about-us-3.html">About Us Three</a></li>
                </ul>-->
              </li>
              <li class="menu-item-has-children">
                <a href="#">Services</a>
                <!-- Sub Menu -->
                <!--<ul class="sub-menu">
                  <li><a href="services.html">Services</a></li>
                  <li><a href="service-details.html">Services Details</a></li>
                </ul>-->
              </li>
              <!--<li class="menu-item-has-children">
                <a href="#">Team</a>
                <!-- Sub Menu -->
                <!--<ul class="sub-menu">
                  <li><a href="team.html">Team</a></li>
                  <li><a href="team-details.html">Team Details</a></li>
                </ul>-->
              <!--</li>
              <li class="menu-item-has-children">
                <a href="#">Shop</a>
                <!-- Sub Menu -->
                <!--<ul class="sub-menu">
                  <li><a href="shop.html">Shop</a></li>
                  <li><a href="shop-2.html">Shop Left Sidebar</a></li>
                  <li><a href="shop-grid.html">Shop Grid</a></li>
                  <li><a href="shop-details.html">Shop Details</a></li>
                  <li><a href="shop-details-2.html">Shop Details Sidebar</a></li>
                  <li><a href="shop-details-3.html">Shop Details Sidebar Left</a></li>
                  <li><a href="cart.html">Cart</a></li>
                  <li><a href="checkout.html">Checkout</a></li>
                </ul>-->
              <!--</li>
              <li class="menu-item-has-children">
                <a href="#">Blog</a>
                <!-- Sub Menu -->
                <!--<ul class="sub-menu">
                  <li><a href="blog.html">Blog</a></li>
                  <li><a href="blog-details.html">Blog Details</a></li>
                </ul>-->
              <!--</li>-->
              <li class="menu-item-has-children">
                <a href="#">Plans</a>
                <!-- Sub Menu -->
                <!--<ul class="sub-menu">
                  <li><a href="price-plan.html">Price Plan</a></li>
                  <li><a href="faq.html">FAQ Page</a></li>
                  <li><a href="appointment.html">Appointment</a></li>
                  <li><a href="project.html">Projects</a></li>
                  <li><a href="project-details.html">Project Details</a></li>
                  <li><a href="error.html">404 Page</a></li>
                  <li><a href="login.html">Login</a></li>
                  <li><a href="sign-up.html">Sign Up</a></li>
                </ul>-->
              </li>
              <li><a href="contact.html">Contact</a></li>
            </ul>
          </nav>
          <!-- Mobile Menu Toggle Btn -->
          <button class="menuToggleBtn d-inline-block d-lg-none"><i class="far fa-bars"></i></button>
        </div>
      </div>
    </div>
  </div>
  <!-- Sticky Header end -->

  <!-- Header Top -->
  <div class="header-top-layout1">
    <!-- Header top area -->
    <!--<div class="header-top-wrap  ">
      <div class="container">
        <div class="row align-items-center">
          <!-- Header top left -->
          <!--<div class="col-md-6" data-aos="fade-left">
            <div class="header-top-left d-flex align-items-center">
              <!-- Select Box -->
              <!--<div class="select-box">
                <select name="languageSelect" id="languageSelect" class="select2">
                  <option value="en">EN</option>
                  <option value="us">US</option>
                  <option value="bn">BD</option>
                </select>
              </div>
              <!-- Select Box -->
              <!--<div class="select-box">
                <select name="currencySelect" id="currencySelect" class="select2">
                  <option value="USD">USD</option>
                  <option value="BDT">BDT</option>
                  <option value="RUP">EUR</option>
                </select>
              </div>
              <!-- Links -->
              <!--<ul class="social-links">
                <li><span>Follows Us On :</span></li>
                <li><a href="https://facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="https://instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 text-right" data-aos="fade-right">
            <!-- Header top right -->
            <!--<div class="header-top-right">
              <ul class="header-top-links">
                <li><a href="services.html"><i class="fas fa-map-marker-alt"></i>Track Your Services</a></li>
                <li><span><i class="far fa-user"></i><a href="login.html">Login</a> | <a href="sign-up.html">Sign
                      Up</a></span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>-->
    <!-- Header top area end -->
    <!-- header Middle Area -->
    <div class="header-middle-area">
      <div class="container">
        <div class="row aling-items-center">
          <div class="col-lg-8 col-xl-8 d-flex" data-aos="fade-down">
            <!-- action Box -->
            <div class="action-box d-flex  align-items-center">
              <div class="icon">
                <span class="shape-icon"><i class="fal fa-clock"></i></span>
              </div>
              <div class="content">
                <span>Monday to Saturday</span>
                <p class="text">8:00 am - 5:30 pm</p>
              </div>
            </div>

            <!-- action Box -->
            <div class="action-box d-flex align-items-center">
              <div class="icon">
                <span class="shape-icon"><i class="fal fa-envelope"></i></span>
              </div>
              <div class="content">
                <span>Contact Us</span>
                <p class="text"><a href="mailto:contact@Sidh Motors.com">contact@Sidh Motors.com</a></p>
              </div>
            </div>
          </div>

          <!-- Search bar -->
          <!--<div class="col-lg-4">
            <form action="#" class="search-bar">
              <input type="text" placeholder="Search by Title, Category...">
              <button class="primary-btn type2">Search</button>
            </form>
          </div>-->
        </div>

        <!-- Phone Box -->
        <div class="phone-box d-none d-xl-flex align-items-center">
          <div class="icon">
            <a href="tel:+0123456789"><i class="fas fa-phone"></i></a>
          </div>
          <div class="content">
            <span>SUPPORT & ORDER</span>
            <a href="tel:+0123456789">052 (699) 256 - 692</a>
          </div>
        </div>

      </div>
    </div>
    <!-- header Middle Area end -->
  </div>
  <!-- Header Top end -->


  
    
  <!-- Header Area -->
  <header class='header-layout1'>
    <div class="container">
      <div class="row align-items-center">
        <!-- Logo -->
        <div class="data-aos="fade-right">
          <div style="margin-top:35px;" class="header-logo">
            <!--<a href="index.html"><img src="assets/img/logo.png" alt="Sidh Motors"></a>-->
            <li style="">
            <?php 
        if(isset($_SESSION['user']))
        {
          $msg="<p><b>Hello</b> ".$_SESSION['user']."&nbsp&nbsp&nbsp&nbsp&nbsp<b>Wallet</b> : ".$_SESSION['pts']."pts";
          echo '<div class="" role="alert">'.$msg.'</div>';
        }
        
    ?>
          </div>
        </div>
        
        <!-- Main Menu Area -->
        <div class="col-8 col-lg-9 col-xl-7 text-right" data-aos="fade-down">
          <nav class="main-menu">
            <ul>
            <li>
              
            </li>
              <li class="menu-item-has-children">
                <a href="#">Home</a>
                <!-- Sub Menu -->
                <!--<ul class="sub-menu">
                  <li><a href="index.html">Home One</a></li>
                  <li><a href="index-2.html">Home Two</a></li>
                  <li><a href="index-3.html">Home Three</a></li>
                </ul>-->
              </li>
              <li class="menu-item-has-children">
                <a href="#">About</a>
                <!-- Sub Menu -->
                <!--<ul class="sub-menu">
                  <li><a href="about-us.html">About Us One</a></li>
                  <li><a href="about-us-2.html">About Us Two</a></li>
                  <li><a href="about-us-3.html">About Us Three</a></li>
                </ul>-->
              </li>
              <li class="menu-item-has-children">
                <a href="#">Services</a>
                <!-- Sub Menu -->
                <!--<ul class="sub-menu">
                  <li><a href="services.html">Services</a></li>
                  <li><a href="service-details.html">Services Details</a></li>
                </ul>-->
              </li>
              <!--<li class="menu-item-has-children">
                <a href="#">Team</a>
                <!-- Sub Menu -->
                <!--<ul class="sub-menu">
                  <li><a href="team.html">Team</a></li>
                  <li><a href="team-details.html">Team Details</a></li>
                </ul>-->
              <!--</li>
              <li class="menu-item-has-children">
                <a href="#">Shop</a>
                <!-- Sub Menu -->
                <!--<ul class="sub-menu">
                  <li><a href="shop.html">Shop</a></li>
                  <li><a href="shop-2.html">Shop Left Sidebar</a></li>
                  <li><a href="shop-grid.html">Shop Grid</a></li>
                  <li><a href="shop-details.html">Shop Details</a></li>
                  <li><a href="shop-details-2.html">Shop Details Sidebar</a></li>
                  <li><a href="shop-details-3.html">Shop Details Sidebar Left</a></li>
                  <li><a href="cart.html">Cart</a></li>
                  <li><a href="checkout.html">Checkout</a></li>
                </ul>-->
              <!--</li>
              <li class="menu-item-has-children">
                <a href="#">Blog</a>
                <!-- Sub Menu -->
                <!--<ul class="sub-menu">
                  <li><a href="blog.html">Blog</a></li>
                  <li><a href="blog-details.html">Blog Details</a></li>
                </ul>-->
              <!--</li>-->
              <li class="menu-item-has-children">
                <a href="#">Plans</a>
                <!-- Sub Menu -->
                <!--<ul class="sub-menu">
                  <li><a href="price-plan.html">Price Plan</a></li>
                  <li><a href="faq.html">FAQ Page</a></li>
                  <li><a href="appointment.html">Appointment</a></li>
                  <li><a href="project.html">Projects</a></li>
                  <li><a href="project-details.html">Project Details</a></li>
                  <li><a href="error.html">404 Page</a></li>
                  <li><a href="login.html">Login</a></li>
                  <li><a href="sign-up.html">Sign Up</a></li>
                </ul>-->
              </li>
              <li><a href="#">Contact</a></li>
            </ul>
          </nav>
          <!-- Mobile Menu Toggle Btn -->
          <button class="menuToggleBtn d-inline-block d-lg-none"><i class="far fa-bars"></i></button>
        </div>
        <!-- Main Menu Area end -->
        <!-- Header Btn -->
        <div class="col-lg-1 col-xl-3 text-right" data-aos="fade-left">
          <div class="header-btn">
          <?php
                 if(isset($_SESSION['user']))
                 {
                   echo '<form method="POST"><button class="primary-btn d-none d-xl-inline-block no-shadow" name="logoutBtn" type="submit">Logout</button></form>';
                 }
                 else{
                   echo '<a href="sign-up.php" class="primary-btn d-none d-xl-inline-block no-shadow">Sign Up</a>';
                   echo '<a href="login.php" class="primary-btn d-none d-xl-inline-block no-shadow">Login In</a>';
                 }
              ?> 
            <button class="sidebarToggler d-none d-lg-inline-block"><i class="far fa-bars"></i></button>
          </div>
        </div>
        <!-- Header Btn end -->
      </div>
    </div>
  </header>
  <!-- Header Area end -->

  <!-- Hero Area -->
  <div class="hero-sec-wrapper hero-layout1">
    <div class="hero-slider-active">
      <!-- Single Hero Slide -->
      <div class="single-hero-slide ls-slide" data-ls="duration: 7000; transition2d: 4;">
        <!-- Hero Image -->
        <img src="assets/img/hero-img/hero-img-1-1.jpg" alt="Sidh Motors" class="ls-bg">
        <!-- Overly Shape -->
        <div style='background-image: url("assets/img/overly-shape/overly-hero.png"); background-size: cover;
          background-position: 50% 50%;top:0px; left:0px; text-align:initial; font-weight:400; font-style:normal;
          text-decoration:none; mix-blend-mode:normal; width:100%; height:100%; z-index: 2;' class="ls-l" data-ls="position:fixed; offsetxin:-900; delayin: 400; easingin:easeOutQuint; offsetxout:-300;
          durationout:400;">
        </div>
        <!-- Subtitle Bg Layer -->
        <img src="assets/img/hero-img/slider-1-shape.svg" class="ls-l sub-title-bg" alt="Slider Bg Image"
          style="width: 910px; height: 134px; left: -270px; top: 248px;"
          data-ls="offsetxin:-900; delayin: 400; easingin:easeOutQuint; offsetxout:-300; durationout:400;">

        <!-- Small Title -->
        <span class="small-title ls-l" style="top: 262px; left: 55px; width: 810px; height: 80px; font-size: 50px; font-family: Oswald, sans-serif;
          color: #fff; line-height: 80px; text-transform: uppercase; letter-spacing: 5px; font-weight: 500;"
          data-ls="offsetxin:-500; delayin:800; easingin:easeOutQuint; offsetxout:-100; durationout:400;">Sidh Motors
          </span>
        <!-- Big Title -->
        <h1 class="big-title ls-l" style="top: 390px; left: 55px; font-size: 60px; line-height: 75px; width: 670px; white-space: normal;
          text-transform: uppercase; color: #fff; font-weight: 700; letter-spacing: 0.20px;"
          data-ls="offsetyin:30; durationin:600; delayin:1000; offsetyout:-30; durationout:400;">
          The Best Car Services Provide You</h1>
        <!-- Text -->
        <!--<p class="text ls-l d-none d-md-none" style="top: 565px; left: 55px; font-size: 16px; line-height: 28px; white-space: normal; width: 580px; color:
          #fff;" data-ls="offsetyin:30; durationin:600; delayin:1200; offsetyout:-30;
            durationout:400;">
          Mntrinsicly redefine mission-critical quality vectors rather than cross functional technologies. Objectively
          cultivate an expanded array of infrastructures rather than goal-oriented experiences. </p>
        <!-- Hero Btn -->
        <!--<a href="about-us.html" class="d-none d-sm-none primary-btn type2 hover-white ls-l"
          style="top: 685px; left: 55px; height: 50px; width: 200px; z-index: 3; line-height: 50px; box-shadow: none;"
          data-ls="offsetyin:150; durationin:700; delayin:1400; easingin:easeOutQuint; rotatexin:20; scalexin:1.4;
          scalexout:1.4; durationout:500; parallaxlevel:0;">More Details</a>
        <!-- Hero Btn -->
        <!--<a href="services.html" class="d-none d-sm-none primary-btn outline-btn white-btn type2 ls-l"
          style="top: 685px; left: 275px; height: 50px; width: 200px; z-index: 3; line-height: 50px; box-shadow: none;"
          data-ls="offsetyin:150; durationin:700; delayin:1600; easingin:easeOutQuint; rotatexin:20; scalexin:1.4; scalexout:1.4; durationout:400;">Get
          a Services</a>
        <!-- Hero Video Btn -->
        <!--<div class="hero-btn-wrap ls-l"
          style="top: 450px; left: 985px; width: 100px; height: 100px; font-size: 32px; line-height: 100px;"
          data-ls="offsetyin: -150; durationin:700; delayin: 1800; easingin:easeOutQuint; rotatexin:-20; scalexin:1.8; scalexout:1.8; durationout:500;">
          <a data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="video-btn ripple-wrap"
            style="width: 100%; height: 100%; font-size: inherit; line-height: inherit;">
            <span class="btn-text"><i class="fal fa-play"></i></span>
            <span class="ripple ripple-1"></span>
            <span class="ripple ripple-2"></span>
            <span class="ripple ripple-3"></span>
          </a>
        </div>-->
      </div>
      <!-- Single Hero Slide end -->
      <!-- Single Hero Slide -->
      <div class="single-hero-slide ls-slide" data-ls="duration: 7000; transition2d: 4;">
        <!-- Hero Image -->
        <img src="assets/img/hero-img/hero-img-1-2.jpg" alt="Sidh Motors" class="ls-bg">
        <!-- Overly Shape -->
        <div style='background-image: url("assets/img/overly-shape/overly-hero.png"); background-size: cover;
          background-position: 50% 50%;top:0px; left:0px; text-align:initial; font-weight:400; font-style:normal;
          text-decoration:none; mix-blend-mode:normal; width:100%; height:100%; z-index: 2;' class="ls-l" data-ls="position:fixed; offsetxin:-900; delayin: 400; easingin:easeOutQuint; offsetxout:-300;
          durationout:400;">
        </div>
        <!-- Subtitle Bg Layer -->
        <img src="assets/img/hero-img/slider-1-shape.svg" class="ls-l sub-title-bg" alt="Slider Bg Image"
          style="width: 910px; height: 134px; left: -270px; top: 248px;"
          data-ls="offsetxin:-900; delayin: 400; easingin:easeOutQuint; offsetxout:-300; durationout:400;">

        <!-- Small Title -->
        <span class="small-title ls-l" style="top: 262px; left: 55px; width: 810px; height: 80px; font-size: 50px; font-family: Oswald, sans-serif;
          color: #fff; line-height: 80px; text-transform: uppercase; letter-spacing: 5px; font-weight: 500;"
          data-ls="offsetxin:-500; delayin:800; easingin:easeOutQuint; offsetxout:-100; durationout:400;">Sidh Motors</span>
        <!-- Big Title -->
        <h1 class="big-title ls-l" style="top: 390px; left: 55px; font-size: 60px; line-height: 75px; width: 670px; white-space: normal;
          text-transform: uppercase; color: #fff; font-weight: 700; letter-spacing: 0.20px;" data-ls="offsetyin:30;
          durationin:600; delayin:1000; offsetyout:-30; durationout:400;"> Car Service With Well Trained Technician
        </h1>
        <!-- Text -->
        <!--<p class="text ls-l" style="top: 565px; left: 55px; font-size: 16px; line-height: 28px; white-space: normal; width: 580px; color:
          #fff;" data-ls="offsetyin:30; durationin:600; delayin:1200; offsetyout:-30;
            durationout:400;">
          Mntrinsicly redefine mission-critical quality vectors rather than cross functional technologies. Objectively
          cultivate an expanded array of infrastructures rather than goal-oriented experiences. </p>
        <!-- Hero Btn -->
        <!--<a href="about-us.html" class="d-none d-sm-none primary-btn type2 hover-white ls-l"
          style="top: 685px; left: 55px; height: 50px; width: 200px; z-index: 3; line-height: 50px; box-shadow: none;"
          data-ls="offsetyin:150; durationin:700; delayin:1400; easingin:easeOutQuint; rotatexin:20; scalexin:1.4;
          scalexout:1.4; durationout:500; parallaxlevel:0;">More Details</a>
        <!-- Hero Btn -->
        <!--<a href="services.html" class="d-none d-sm-none primary-btn outline-btn white-btn type2 ls-l"
          style="top: 685px; left: 275px; height: 50px; width: 200px; z-index: 3; line-height: 50px; box-shadow: none;"
          data-ls="offsetyin:150; durationin:700; delayin:1600; easingin:easeOutQuint; rotatexin:20; scalexin:1.4; scalexout:1.4; durationout:400;">Get
          a Services</a>
        <!-- Hero Video Btn -->
        <!--<div class="hero-btn-wrap ls-l"
          style="top: 450px; left: 985px; width: 100px; height: 100px; font-size: 32px; line-height: 100px;"
          data-ls="offsetyin: -150; durationin:700; delayin: 1800; easingin:easeOutQuint; rotatexin:-20; scalexin:1.8; scalexout:1.8; durationout:500;">
          <a data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="video-btn ripple-wrap"
            style="width: 100%; height: 100%; font-size: inherit; line-height: inherit;">
            <span class="btn-text"><i class="fal fa-play"></i></span>
            <span class="ripple ripple-1"></span>
            <span class="ripple ripple-2"></span>
            <span class="ripple ripple-3"></span>
          </a>
        </div>-->
      </div>
      <!-- Single Hero Slide end -->
      <!-- Single Hero Slide -->
      <div class="single-hero-slide ls-slide" data-ls="duration: 7000; transition2d: 4;">
        <!-- Hero Image -->
        <img src="assets/img/hero-img/hero-img-1-3.jpg" alt="Sidh Motors" class="ls-bg">
        <!-- Overly Shape -->
        <div style='background-image: url("assets/img/overly-shape/overly-hero.png"); background-size: cover;
          background-position: 50% 50%;top:0px; left:0px; text-align:initial; font-weight:400; font-style:normal;
          text-decoration:none; mix-blend-mode:normal; width:100%; height:100%; z-index: 2;' class="ls-l" data-ls="position:fixed; offsetxin:-900; delayin: 400; easingin:easeOutQuint; offsetxout:-300;
          durationout:400;">
        </div>
        <!-- Subtitle Bg Layer -->
        <img src="assets/img/hero-img/slider-1-shape.svg" class="ls-l sub-title-bg" alt="Slider Bg Image"
          style="width: 910px; height: 134px; left: -270px; top: 248px;"
          data-ls="offsetxin:-900; delayin: 400; easingin:easeOutQuint; offsetxout:-300; durationout:400;">

        <!-- Small Title -->
        <span class="small-title ls-l" style="top: 262px; left: 55px; width: 810px; height: 80px; font-size: 50px; font-family: Oswald, sans-serif;
          color: #fff; line-height: 80px; text-transform: uppercase; letter-spacing: 5px; font-weight: 500;"
          data-ls="offsetxin:-500; delayin:800; easingin:easeOutQuint; offsetxout:-100; durationout:400;">Sidh Motors</span>
        <!-- Big Title -->
        <h1 class="big-title ls-l" style="top: 390px; left: 55px; font-size: 60px; line-height: 75px; width: 770px; white-space: normal;
          text-transform: uppercase; color: #fff; font-weight: 700; letter-spacing: 0.20px;" data-ls="offsetyin:30;
          durationin:600; delayin:1000; offsetyout:-30; durationout:400;">Best Original Parts & product change</h1>
        <!-- Text -->
        <!--<p class="text ls-l" style="top: 565px; left: 55px; font-size: 16px; line-height: 28px; white-space: normal; width: 580px; color:
          #fff;" data-ls="offsetyin:30; durationin:600; delayin:1200; offsetyout:-30;
            durationout:400;">
          Mntrinsicly redefine mission-critical quality vectors rather than cross functional technologies. Objectively
          cultivate an expanded array of infrastructures rather than goal-oriented experiences. </p>
        <!-- Hero Btn -->
        <!--<a href="about-us.html" class="d-none d-sm-none primary-btn type2 hover-white ls-l"
          style="top: 685px; left: 55px; height: 50px; width: 200px; z-index: 3; line-height: 50px; box-shadow: none;"
          data-ls="offsetyin:150; durationin:700; delayin:1400; easingin:easeOutQuint; rotatexin:20; scalexin:1.4;
          scalexout:1.4; durationout:500; parallaxlevel:0;">More Details</a>
        <!-- Hero Btn -->
        <!--<a href="services.html" class="d-none d-sm-none primary-btn outline-btn white-btn type2 ls-l"
          style="top: 685px; left: 275px; height: 50px; width: 200px; z-index: 3; line-height: 50px; box-shadow: none;"
          data-ls="offsetyin:150; durationin:700; delayin:1600; easingin:easeOutQuint; rotatexin:20; scalexin:1.4; scalexout:1.4; durationout:400;">Get
          a Services</a>
        <!-- Hero Video Btn -->
        <!--<div class="hero-btn-wrap ls-l"
          style="top: 450px; left: 985px; width: 100px; height: 100px; font-size: 32px; line-height: 100px;"
          data-ls="offsetyin: -150; durationin:700; delayin: 1800; easingin:easeOutQuint; rotatexin:-20; scalexin:1.8; scalexout:1.8; durationout:500;">
          <a data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="video-btn ripple-wrap"
            style="width: 100%; height: 100%; font-size: inherit; line-height: inherit;">
            <span class="btn-text"><i class="fal fa-play"></i></span>
            <span class="ripple ripple-1"></span>
            <span class="ripple ripple-2"></span>
            <span class="ripple ripple-3"></span>
          </a>
        </div>-->
      </div>
      <!-- Single Hero Slide end -->

    </div>

  </div>
  <!-- Hero Area end -->

  <!-- About Us Section -->
  <section class="about-us-sec about-wrap-layout1 pt-125 pb-130">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- Title -->
          <h2 class="about-title">We Have <span>25</span> Years</h2>
        </div>
        <!-- About Us Image Area -->
        <div class="col-lg-5 col-xl-4">
          <div class="about-us-left">
            <!-- About US Image -->
            <div class="about-us-img">
              <a href="about-us.html"><img src="assets/img/about-us/about-us-img-1-1.jpg" alt="About Sidh Motors"></a>
            </div>
            <!-- Experience Box -->
            <div class="experiance-box d-md-flex">
              <div class="icon">
                <span><i class="flaticon-award"></i></span>
              </div>
              <div class="content">
                <h2 class="main-title">Experience</h2>
                <h3 class="title">Best Services Company</h3>
                <p class="text">Collaboratively disintermediate enabled benefits rather than.</p>
              </div>
            </div>
          </div>
        </div>
        <!-- About Us Image Area end -->
        <!-- About Us Content Area -->
        <div class="col-lg-7 col-xl-5">
          <div class="about-us-content">
            <h3 class="sub-title">Welcome To <span>Sidh Motors</span></h3>
            <p class="text">Collaboratively plagiarize extensible e-markets vis-a-vis business
              outsourcing. Progressively visualize team driven e-commerce before excellent technology. Enthusiastically
              simplify optimal vortals without open-source web services monotonectally supply efficient.</p>

            <!-- Features List -->
            <div class="features-list">
              <ul>
                <li>24 Month / 24,000km Nationwide Warranty</li>
                <li>Customer Rewards Program</li>
                <li>24-Hour Roadside Assistance</li>
                <li>Courtesy Local Shuttle Service</li>
                <li>Courtesy Loaner Vehicle</li>
              </ul>
            </div>

          </div>
        </div>
        <!-- About Us Content Area end -->
        <!-- Offer Widget -->
        <div class="col col-lg-4 col-xl-3">
          <div class="widget widget_offer_banner d-none d-xl-block">
            <a href="price-plan.html" class="link-overlay"></a>
            <h3 class="title">
              <span class="text-white f-34">Services</span>
              Your
              <span class="text_medium f-47"><span class="text-white">Car</span> At</span>
              <span class="text-white f-65">Very</span>
              <span class="text_sm f-39">LOWEST</span>
              <span class="text_medium f-48">PRICE</span>
            </h3>

            <div class="price-box">
              <span class="text">Start</span>
              <span class="price"><sup>$</sup>30</span>
              <span class="sub">/off</span>
            </div>

            <img src="assets/img/widget/offer-banner.png" alt="Offer Banner">

          </div>
        </div>
        <!-- Offer Widget end -->
        <!-- Action Area -->
        <div class="col-lg-11 col-xl-8 offset-xl-4">
          <div class="action-area d-md-flex justify-content-between align-items-center">
            <div class="action-box-area d-sm-flex">
              <!-- Single Action Box -->
              <!--<div class="action-box">
                <div class="icon">
                  <span><i class="flaticon-call"></i></span>
                </div>
                <div class="content">
                  <span>Phone Number</span>
                  <p class="text"><a href="tel:052699256692">052 (699) 256 - 692</a></p>
                </div>
              </div>
              <!-- action Box -->
              <!--<div class="action-box">
                <div class="icon">
                  <span><i class="flaticon-envelope"></i></span>
                </div>
                <div class="content">
                  <span>Email Address</span>
                  <p class="text"><a href="mailto:info@Sidh Motors.com">info@Sidh Motors.com</a></p>
                </div>
              </div>
            </div>
            <!-- Action Btn -->
            <!--<div class="action-btn">
              <a href="about-us.html" class="primary-btn no-shadow">Get More Info</a>
            </div>-->
          </div>
        </div>
        <!-- Action Area end -->
      </div>
    </div>
  </section>
  <!-- About Us Section end -->

  <!-- Our Service -->
  <section class="service-layout1 our-service-wrapper background-image pb-100 pt-130"
    data-img="assets/img/bg-img/service-bg-1-1.png">
    <!-- Shape Bottom -->
    <div class="shape-bg shape-br">
      <img src="assets/img/service/bg-shape-img.png" alt="Service Things">
    </div>
    <div class="container">
      <div class="row text-center justify-content-center">
        <!-- Section Title -->
        <div class="col-md-10 col-lg-8 col-xl-6" data-aos="fade-up" data-aos-delay="1000">
          <div class="section-title">
            <h2 class="title">Our SERVICE</h2>
            <p>Progressively enable pandemic markets for process-centric processes. Completely iterate resource
              maximizing process improvements.</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="1000">
        <!-- Single Service -->
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="service-box">
            <div class="service-img">
              <img src="assets/img/service/service-img-1-1.jpg" alt="Service Image">
            </div>
            <span class="service-icon"><i class="flaticon-automobile"></i></span>
            <div class="service-content">
              <a href="services.html">
                <h3 class="title">Periodic Services</h3>
              </a>
              <p>Distinctively disintermediate market positioning markets and emerging total linkage.</p>
            </div>
            <a href="services.html" class="service-icon bottom-icon"><i class="fal fa-plus"></i></a>
          </div>
        </div>
        <!-- Single Service -->
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="service-box">
            <div class="service-img">
              <img src="assets/img/service/service-img-1-2.jpg" alt="Service Image">
            </div>
            <span class="service-icon"><i class="flaticon-car-service-1"></i></span>
            <div class="service-content">
              <a href="services.html">
                <h3 class="title">AC Services</h3>
              </a>
              <p>Distinctively disintermediate market positioning markets and emerging total linkage.</p>
            </div>
            <a href="services.html" class="service-icon bottom-icon"><i class="fal fa-plus"></i></a>
          </div>
        </div>
        <!-- Single Service -->
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="service-box">
            <div class="service-img">
              <img src="assets/img/service/service-img-1-3.jpg" alt="Service Image">
            </div>
            <span class="service-icon"><i class="flaticon-auto-focus"></i></span>
            <div class="service-content">
              <a href="services.html">
                <h3 class="title">Tyres & Wheels Care</h3>
              </a>
              <p>Distinctively disintermediate market positioning markets and emerging total linkage.</p>
            </div>
            <a href="services.html" class="service-icon bottom-icon"><i class="fal fa-plus"></i></a>
          </div>
        </div>
        <!-- Single Service -->
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="service-box">
            <div class="service-img">
              <img src="assets/img/service/service-img-1-4.jpg" alt="Service Image">
            </div>
            <span class="service-icon"><i class="flaticon-shift"></i></span>
            <div class="service-content">
              <a href="services.html">
                <h3 class="title">Cleaning & Detailing</h3>
              </a>
              <p>Distinctively disintermediate market positioning markets and emerging total linkage.</p>
            </div>
            <a href="services.html" class="service-icon bottom-icon"><i class="fal fa-plus"></i></a>
          </div>
        </div>
        <!-- Single Service -->
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="service-box">
            <div class="service-img">
              <img src="assets/img/service/service-img-1-5.jpg" alt="Service Image">
            </div>
            <span class="service-icon"><i class="flaticon-winch"></i></span>
            <div class="service-content">
              <a href="services.html">
                <h3 class="title">Denting Painting</h3>
              </a>
              <p>Distinctively disintermediate market positioning markets and emerging total linkage.</p>
            </div>
            <a href="services.html" class="service-icon bottom-icon"><i class="fal fa-plus"></i></a>
          </div>
        </div>
        <!-- Single Service -->
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="service-box">
            <div class="service-img">
              <img src="assets/img/service/service-img-1-6.jpg" alt="Service Image">
            </div>
            <span class="service-icon"><i class="flaticon-tire-pressure-1"></i></span>
            <div class="service-content">
              <a href="services.html">
                <h3 class="title">Batteries</h3>
              </a>
              <p>Distinctively disintermediate market positioning markets and emerging total linkage.</p>
            </div>
            <a href="services.html" class="service-icon bottom-icon"><i class="fal fa-plus"></i></a>
          </div>
        </div>
        <!-- Single Service -->
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="service-box">
            <div class="service-img">
              <img src="assets/img/service/service-img-1-7.jpg" alt="Service Image">
            </div>
            <span class="service-icon"><i class="flaticon-electrical-service"></i></span>
            <div class="service-content">
              <a href="services.html">
                <h3 class="title">Insurance Services</h3>
              </a>
              <p>Distinctively disintermediate market positioning markets and emerging total linkage.</p>
            </div>
            <a href="services.html" class="service-icon bottom-icon"><i class="fal fa-plus"></i></a>
          </div>
        </div>
        <!-- Single Service -->
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="service-box">
            <div class="service-img">
              <img src="assets/img/service/service-img-1-8.jpg" alt="Service Image">
            </div>
            <span class="service-icon"><i class="flaticon-car-1"></i></span>
            <div class="service-content">
              <a href="services.html">
                <h3 class="title">Lights & Fitments</h3>
              </a>
              <p>Distinctively disintermediate market positioning markets and emerging total linkage.</p>
            </div>
            <a href="services.html" class="service-icon bottom-icon"><i class="fal fa-plus"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Our Service end -->

  <!-- Repair Estimator -->
  <div class="repair-estimator-wrap repair-estimator-layout1 background-image pt-80 pb-60"
    data-img="assets/img/bg-img/repaire-est-bg-1-1.jpg">
    <div class="container">
      <div class="row align-items-center" data-aos="fade-up" data-aos-delay="1500">
        <!-- Service content -->
        <div class="col-xl-4">
          <div class="estimator-title-area">
            <h2 class="title">Subscribe to Newsletter</h2>
            <p class="text"><a href="blog.html">Offer News</a> | <a href="services.html">Services News</a> | <a href="blog.html">Others Features News</a>
            </p>
            <!--<p class="text">Get a location-based car repair estimate</p>-->
          </div>
        </div>
        <div class="col-xl-8">
          <form action="#" class="subsc-form">
            <div class="form-group d-sm-flex align-items-center">
              <input type="text" placeholder="Enter Your Email" class="form-control">
              <button type="submit" class="primary-btn hover-white">Subscribe</button>
            </div>
          </form>
          <!--<form action="#" class="estimator-form">
            <div class="row gutters-20">
              <!-- Single Input -->
              <!--<div class="col-sm-6 col-md-4 col-lg-3 form-group">
                <label for="carBrand" class="sr-only">Car Brand</label>
                <select name="carBrand" id="carBrand" class="select2">
                  <option value="carBrand">Car Brand</option>
                  <option value="BMW">BMW</option>
                  <option value="Cadillac">Cadillac</option>
                  <option value="Chevrolet">Chevrolet</option>
                  <option value="Datsun">Datsun</option>
                  <option value="Ferrari">Ferrari</option>
                </select>
              </div>
              <!-- Single Input -->
              <!--<div class="col-sm-6 col-md-4 col-lg-3 form-group">
                <label for="carModel" class="sr-only">Model</label>
                <select name="carModel" id="carModel" class="select2">
                  <option value="model">Model</option>
                  <option value="Mercedes-Benz">Mercedes-Benz</option>
                  <option value="GLE Coupe">GLE Coupe</option>
                  <option value="Volvo S60">Volvo S60</option>
                  <option value="Land Rover">Land Rover</option>
                  <option value="MPV. Datsun">MPV. Datsun</option>
                </select>
              </div>
              <!-- Single Input -->
              <!--<div class="col-sm-6 col-md-4 col-lg-3 form-group">
                <label for="year" class="sr-only">Year</label>
                <select name="year" id="year" class="select2">
                  <option value="year">Year</option>
                  <option value="2020">2020</option>
                  <option value="2021">2021</option>
                  <option value="2022">2022</option>
                  <option value="2023">2023</option>
                  <option value="2024">2024</option>
                </select>
              </div>
              <!-- Single Input -->
              <!--<div class="col-sm-6 col-md-4 col-lg-3 form-group">
                <label for="zipCode" class="sr-only">Zip Code</label>
                <select name="zipCode" id="zipCode" class="select2">
                  <option value="zipCode">Zip Code</option>
                  <option value="3120">3120</option>
                  <option value="1280">1280</option>
                  <option value="1920">1920</option>
                  <option value="1920">1920</option>
                </select>
              </div>
              <!-- Single Input -->
              <!--<div class="col-sm-6 col-md-4 col-lg-9 form-group">
                <label for="serviceNeed" class="sr-only">Services Needed</label>
                <input type="text" id="serviceNeed" name="serviceNeed" class="form-control"
                  placeholder="Services Needed">
              </div>
              <!-- Single Input -->
              <!--<div class="col-sm-6 col-md-4 col-lg-3 form-group">
                <button type="submit" class="primary-btn hover-white">Get Estimate</button>
              </div>


            </div>
          </form>-->
        </div>
      </div>
    </div>
  </div>
  <!-- Repair Estimator end -->

  <!-- Work Process -->
  <section class="work-process-wrap work-process-layout1 pt-130 pb-100">
    <div class="container">
      <div class="row justify-content-center text-center">
        <!-- Section Title -->
        <div class="col-md-10 col-lg-8 col-xl-6 " data-aos="fade-up" data-aos-delay="1500">
          <div class="section-title">
            <h2 class="title">How We Work</h2>
            <p>Progressively enable pandemic markets for process-centric processes. Completely iterate resource
              maximizing
              process improvements.</p>
          </div>
        </div>
      </div>
      <div class="row" data-aos="fade-up" data-aos-delay="1500">
        <!-- Signle Work Process -->
        <div class="col-sm-6 col-xl-3">
          <div class="work-process">
            <div class="process-head">
              <span class="icon ripple-wrap">
                <span class="text">1st</span>
                <span class="ripple ripple-1"></span>
                <span class="ripple ripple-2"></span>
                <span class="ripple ripple-3"></span>
              </span>
            </div>
            <div class="process-body">
              <div class="process-img">
                <img src="assets/img/work-process/process-img-1.png" alt="Work Process">
              </div>
              <div class="process-content">
                <h3 class="title">Select The Perfect Car Service</h3>
                <p>Assertively transition orthogonal niches via turnkey initiatives. </p>
              </div>
            </div>
          </div>
        </div>
        <!-- Signle Work Process -->
        <div class="col-sm-6 col-xl-3">
          <div class="work-process">
            <div class="process-head">
              <span class="icon ripple-wrap">
                <span class="text">2nd</span>
                <span class="ripple ripple-1"></span>
                <span class="ripple ripple-2"></span>
                <span class="ripple ripple-3"></span>
              </span>
            </div>
            <div class="process-body">
              <div class="process-img">
                <img src="assets/img/work-process/process-img-2.png" alt="Work Process">
              </div>
              <div class="process-content">
                <h3 class="title">Schedule Free Doorstep Pick-up</h3>
                <p>Assertively transition orthogonal niches via turnkey initiatives. </p>
              </div>
            </div>
          </div>
        </div>
        <!-- Signle Work Process -->
        <div class="col-sm-6 col-xl-3">
          <div class="work-process">
            <div class="process-head">
              <span class="icon ripple-wrap">
                <span class="text">3rd</span>
                <span class="ripple ripple-1"></span>
                <span class="ripple ripple-2"></span>
                <span class="ripple ripple-3"></span>
              </span>
            </div>
            <div class="process-body">
              <div class="process-img">
                <img src="assets/img/work-process/process-img-3.png" alt="Work Process">
              </div>
              <div class="process-content">
                <h3 class="title">Track Your Car Service Real-Time</h3>
                <p>Assertively transition orthogonal niches via turnkey initiatives. </p>
              </div>
            </div>
          </div>
        </div>
        <!-- Signle Work Process -->
        <div class="col-sm-6 col-xl-3">
          <div class="work-process">
            <div class="process-head">
              <span class="icon ripple-wrap">
                <span class="text">4th</span>
                <span class="ripple ripple-1"></span>
                <span class="ripple ripple-2"></span>
                <span class="ripple ripple-3"></span>
              </span>
            </div>
            <div class="process-body">
              <div class="process-img">
                <img src="assets/img/work-process/process-img-4.png" alt="Work Process">
              </div>
              <div class="process-content">
                <h3 class="title">Earn While We Service Your Car</h3>
                <p>Assertively transition orthogonal niches via turnkey initiatives. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Work Process end -->

  <!-- Latest Project -->
  <!--<section class="latest-project-wrapper background-image pt-120 pb-120"
    data-img="assets/img/bg-img/latest-project-1.jpg">
    <div class="container">
      <div class="row ">
        <!-- Section Title -->
        <!--<div class="col-xl-5">
          <div class="section-title">
            <h2 class="title">There Are Some Best Of Work Done By Us</h2>
            <p class="text">Dramatically architect standards compliant core competencies without tactical supply chains.
              Progressively productivate distributed bandwidth high-payoff intellectual capital. Distinctively cultivate
              team building web services whereas global value. Interactively leverage other's leading-edge e-business
              and fully researched strategic theme areas.</p>
            <a href="project-details.html" class="primary-btn hover-white">View Details</a>
          </div>
        </div>
        <!-- Section Title end -->


        <!-- Slider Area -->
        <!--<div class="col-xl-7 position-static">
          <div class="project-slider-area">
            <!-- Thumb Logo -->
            <!--<div class="thumb-logo">
              <img src="assets/img/thumb-logo.png" alt="Thumb Logo">
            </div>
            <!-- Slider Area -->
            <!--<div class="latProject-slider-active">
              <img src="assets/img/latest-project/project-1-1.jpg" alt="Project Image">
              <img src="assets/img/latest-project/project-1-2.jpg" alt="Project Image">
            </div>

          </div>
        </div>
        <!-- Slider Area end -->


      <!--</div>
    </div>
  </section>-->
  <!-- Latest Project end -->

  <!-- Our Team -->
  <!--<section class="our-team-wrapper team-layout1 pt-200 pb-100">
    <div class="container">

      <div class="row text-center justify-content-center">
        <!-- Section Title -->
        <!--<div class="col-md-10 col-lg-8 col-xl-6 " data-aos="fade-up">
          <div class="section-title pt-55 pb-25">
            <h2 class="title">Our Experts</h2>
            <p>Progressively enable pandemic markets for process-centric processes. Completely iterate resource
              maximizing process improvements.</p>
          </div>
        </div>
      </div>

      <div class="row gutters-10 team-slider1-active " data-aos="fade-up">

        <!-- Single Team -->
        <!--<div class="col-xl-3">
          <div class="team-member">
            <div class="member-img">
              <img src="assets/img/team-member/member-img-1-1.jpg" alt="Team Member Image">
            </div>

            <div class="link-area">
              <!-- Social Share -->
              <!--<ul class="social-links hover-link">
                <li><a href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="skype:echo:1234?call"><i class="fab fa-skype"></i></a></li>
              </ul>
              <!-- Overly Icon -->
              <!--<a href="#" class="btn-overly member-link circle-btn xs">
                <i class="fas fa-share-alt"></i>
                <span class="ripple ripple-1"></span>
                <span class="ripple ripple-2"></span>
                <span class="ripple ripple-3"></span>
              </a>
            </div>


            <div class="member-content">

              <div class="member-text">
                <span class="degi">Founder</span>
                <h3 class="name"><a href="team-details.html">David Smith</a></h3>
              </div>

            </div>
          </div>
        </div>
        <!-- Single Team -->
        <!--<div class="col-xl-3">
          <div class="team-member">
            <div class="member-img">
              <img src="assets/img/team-member/member-img-1-2.jpg" alt="Team Member Image">
            </div>
            <div class="link-area">
              <!-- Social Share -->
              <!--<ul class="social-links hover-link">
                <li><a href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="skype:echo:1234?call"><i class="fab fa-skype"></i></a></li>
              </ul>
              <!-- Overly Icon -->
              <!--<a href="#" class="btn-overly member-link circle-btn xs">
                <i class="fas fa-share-alt"></i>
                <span class="ripple ripple-1"></span>
                <span class="ripple ripple-2"></span>
                <span class="ripple ripple-3"></span>
              </a>
            </div>
            <div class="member-content">
              <div class="member-text">
                <span class="degi">Engineer</span>
                <h3 class="name"><a href="team-details.html">Jon Clark</a></h3>
              </div>

            </div>
          </div>
        </div>
        <!-- Single Team -->
        <!--<div class="col-xl-3">
          <div class="team-member">
            <div class="member-img">
              <img src="assets/img/team-member/member-img-1-3.jpg" alt="Team Member Image">
            </div>
            <div class="link-area">
              <!-- Social Share -->
              <!--<ul class="social-links hover-link">
                <li><a href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="skype:echo:1234?call"><i class="fab fa-skype"></i></a></li>
              </ul>
              <!-- Overly Icon -->
              <!--<a href="#" class="btn-overly member-link circle-btn xs">
                <i class="fas fa-share-alt"></i>
                <span class="ripple ripple-1"></span>
                <span class="ripple ripple-2"></span>
                <span class="ripple ripple-3"></span>
              </a>
            </div>
            <div class="member-content">
              <div class="member-text">
                <span class="degi">Engineer</span>
                <h3 class="name"><a href="team-details.html">Micle Doe</a></h3>
              </div>

            </div>
          </div>
        </div>
        <!-- Single Team -->
        <!--<div class="col-xl-3">
          <div class="team-member">
            <div class="member-img">
              <img src="assets/img/team-member/member-img-1-4.jpg" alt="Team Member Image">
            </div>
            <div class="link-area">
              <!-- Social Share -->
              <!--<ul class="social-links hover-link">
                <li><a href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="skype:echo:1234?call"><i class="fab fa-skype"></i></a></li>
              </ul>
              <!-- Overly Icon -->
<!--<a href="#" class="btn-overly member-link circle-btn xs">
                <i class="fas fa-share-alt"></i>
                <span class="ripple ripple-1"></span>
                <span class="ripple ripple-2"></span>
                <span class="ripple ripple-3"></span>
              </a>
            </div>
            <div class="member-content">
              <div class="member-text">
                <span class="degi">Manager</span>
                <h3 class="name"><a href="team-details.html">Jon Steven</a></h3>
              </div>

            </div>
          </div>
        </div>
        <!-- Single Team -->
       <!-- <div class="col-xl-3">
          <div class="team-member">
            <div class="member-img">
              <img src="assets/img/team-member/member-img-1-5.jpg" alt="Team Member Image">
            </div>
            <div class="link-area">
              <!-- Social Share -->
        <!--      <ul class="social-links hover-link">
                <li><a href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="skype:echo:1234?call"><i class="fab fa-skype"></i></a></li>
              </ul>
              <!-- Overly Icon -->
           <!--   <a href="#" class="btn-overly member-link circle-btn xs">
                <i class="fas fa-share-alt"></i>
                <span class="ripple ripple-1"></span>
                <span class="ripple ripple-2"></span>
                <span class="ripple ripple-3"></span>
              </a>
            </div>
            <div class="member-content">
              <div class="member-text">
                <span class="degi">Founder</span>
                <h3 class="name"><a href="team-details.html">Vivi Marian</a></h3>
              </div>

            </div>
          </div>
        </div>


      </div>

    </div>
  </section>
  <!-- Our Team end -->

  <!-- Our Features Area -->
  <section class="our-featured-wrapper featured-layout1 background-image pt-130 pb-130"
    data-img="assets/img/featured/featured-bg-1-1.jpg">
    <div class="container">
      <div class="row text-center justify-content-center">
        <!-- Section Title -->
        <div class="col-md-10 col-lg-8 col-xl-6 " data-aos="fade-up">
          <div class="section-title">
            <h2 class="title">Why We Best?</h2>
            <p>Progressively enable pandemic markets for process-centric processes. Completely iterate resource
              maximizing
              process improvements.</p>
          </div>
        </div>
      </div>


      <div class="row featured-slider-active " data-aos="fade-up">

        <!-- Single Featured -->
        <div class="col-xl-4">
          <div class="single-featured">
            <span class="shape"></span>
            <div class="featured-icon">
              <span class="circle-btn xl">
                <i class="flaticon-calculator"></i>
              </span>
            </div>
            <div class="featured-content">
              <h3 class="title">Free Doorstep Pick-up & Drop</h3>
              <p class="text">Conveniently disseminate visionary process improvements whereas technically sound
                outsourcing client-centric.</p>
            </div>
          </div>
        </div>
        <!-- Single Featured -->
        <div class="col-xl-4">
          <div class="single-featured">
            <span class="shape"></span>
            <div class="featured-icon">
              <span class="circle-btn xl">
                <i class="flaticon-agreement"></i>
              </span>
            </div>
            <div class="featured-content">
              <h3 class="title">Upfront & Competitive Pricing</h3>
              <p class="text">Conveniently disseminate visionary process improvements whereas technically sound
                outsourcing client-centric.</p>
            </div>
          </div>
        </div>
        <!-- Single Featured -->
        <div class="col-xl-4">
          <div class="single-featured">
            <span class="shape"></span>
            <div class="featured-icon">
              <span class="circle-btn xl">
                <i class="flaticon-award"></i>
              </span>
            </div>
            <div class="featured-content">
              <h3 class="title">Network Warranty on Car Service</h3>
              <p class="text">Conveniently disseminate visionary process improvements whereas technically sound
                outsourcing client-centric.</p>
            </div>
          </div>
        </div>
        <!-- Single Featured -->
        <div class="col-xl-4">
          <div class="single-featured">
            <span class="shape"></span>
            <div class="featured-icon">
              <span class="circle-btn xl">
                <i class="flaticon-consult"></i>
              </span>
            </div>
            <div class="featured-content">
              <h3 class="title">100% Genuine Spare Parts</h3>
              <p class="text">Conveniently disseminate visionary process improvements whereas technically sound
                outsourcing client-centric.</p>
            </div>
          </div>
        </div>


      </div>


    </div>
  </section>
  <!-- Our Features Area end -->

  <!-- Pricing Table -->
  <section class="pricing-table-wrapper pricing-table-layout1  pt-130 pb-100">
    <div class="container">
      <!-- Section Title -->
      <div class="row text-center justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-6" data-aos="fade-up">
          <div class="section-title">
            <h2 class="title">Price Plan</h2>
            <p>Progressively enable pandemic markets for process-centric processes. Completely iterate resource
              maximizing
              process improvements.</p>
          </div>
        </div>
      </div><!-- .row END-->

      <div class="row priceTable-slider1-active" data-aos="fade-up">
        <!-- Single Pricing Table -->

<?php if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["name"];
        $field2name = $row["description"];
        $field3name = $row["amount"];
        $field4name = $row["feature_1"];
        $field5name = $row["feature_2"];
        $field6name = $row["feature_3"];
        $field7name = $row["feature_4"];
        $field8name = $row["feature_5"];
      

        echo '
                <div class="col-xl-4">
          <div class="pricing-table">
            <div class="content">
              <h3 class="title">'.$field1name.'</h3>
              <p class="text">'.$field2name.'</p>
            </div>

            <div class="pricing-icon">
              <span class="circle-btn">
                <i class="flaticon-startup-1"></i>
                <span class="ripple ripple-1"></span>
                <span class="ripple ripple-2"></span>
                <span class="ripple ripple-3"></span>
              </span>
            </div>

            <ul class="pricing-list">
              <li>'.$field4name.'</li>
              <li>'.$field5name.'</li>
              <li>'.$field6name.'</li>
              <li>'.$field7name.'</li>
              <li>'.$field8name.'</li>
            </ul>
            <div class="price-plan">
              <h4 class="plan-text"><span>'.$field3name.'</span> Rs| month</h4>
            </div>
            <a href="price-plan.html" class="primary-btn">Get More Info</a>
          </div>
        </div>'

              ;
    }
    $result->free();
} 
?>
        

      
        </div>
      </div><!-- .row END -->
    </div><!-- .container END -->
  </section>
  <!-- Pricing Table end -->

  <!-- Testomonial Section -->
  <section class="testomonial-wrapper testomonial-layout1 pt-130 pb-100">
    <div class="container">
      <div class="row text-center justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-6" data-aos="fade-up">
          <!-- Section Title -->
          <div class="section-title pb-35">
            <h2 class="title">Our Achievement</h2>
            <p>Progressively enable pandemic markets for process-centric processes. Completely iterate resource
              maximizing process improvements.</p>
          </div>
        </div>
      </div><!-- .row END -->
      <!-- Counter Area -->
      <div class="counter-area-wrap ">
        <div class="container">
          <div class="inner-wrapper">
            <div class="row justify-content-center " data-aos="fade-up" data-aos-delay="1100">

              <!-- Single Counter -->
              <div class="col-sm-6 col-xl-3">
                <div class="counter-box">
                  <div class="icon">
                    <span class="shape-icon">
                      <i class="flaticon-mission"></i>
                    </span>
                  </div>
                  <div class="content">
                    <span class="counter">25</span>
                    <p class="text">Years Of Experience</p>
                  </div>

                </div>
              </div>
              <!-- Single Counter -->
              <div class="col-sm-6 col-xl-3">
                <div class="counter-box">
                  <div class="icon">
                    <span class="shape-icon">
                      <i class="flaticon-worker"></i>
                    </span>
                  </div>
                  <div class="content">
                    <span class="counter">800</span>
                    <p class="text">Technician & Workers</p>
                  </div>

                </div>
              </div>
              <!-- Single Counter -->
              <div class="col-sm-6 col-xl-3">
                <div class="counter-box">
                  <div class="icon">
                    <span class="shape-icon">
                      <i class="flaticon-team"></i>
                    </span>
                  </div>
                  <div class="content">
                    <span class="counter">2500</span>
                    <p class="text">Satisfied Customers</p>
                  </div>

                </div>
              </div>
              <!-- Single Counter -->
              <div class="col-sm-6 col-xl-3">
                <div class="counter-box">
                  <div class="icon">
                    <span class="shape-icon">
                      <i class="flaticon-taxi"></i>
                    </span>
                  </div>
                  <div class="content">
                    <span class="counter">3000</span>
                    <p class="text">Vehicle Repaired</p>
                  </div>

                </div>
              </div>



            </div><!-- .row END -->
          </div><!-- inner Wrapper -->
        </div><!-- .container END -->
      </div>
      <!-- Counter Area end -->
      <div class="row testomonal-slider1" data-aos="fade-up">
        <!-- Single Testomonial -->
        <div class="col-12">
          <div class="single-testomonial d-lg-flex">
            <!-- Testomonial Author -->
            <div class="testo-author">
              <img src="assets/img/testomonial/testo-author-1-1.png" alt="Testomonial Author">
              <h3 class="name">David Smith</h3>
              <span>Customer</span>
            </div>
            <!-- Testomonial Content -->
            <div class="testomonial-content">
              <span class="quote"><i class="fal fa-quote-left"></i></span>
              <p class="text">Objectively unleash resource maximizing networks vis-a-vis parallel services. Continually
                parallel task real-time users without global sources. Credibly provide access to parallel resources
                whereas worldwide solutions. </p>
              <div class="rating">
                <i class="fal fa-star"></i>
                <i class="fal fa-star"></i>
                <i class="fal fa-star"></i>
                <i class="fal fa-star"></i>
                <i class="fal fa-star"></i>
              </div>
            </div>
          </div>
        </div>
        <!-- Single Testomonial -->
        <div class="col-12">
          <div class="single-testomonial d-lg-flex">
            <!-- Testomonial Author -->
            <div class="testo-author">
              <img src="assets/img/testomonial/testo-author-1-2.png" alt="Testomonial Author">
              <h3 class="name">Vivi Marian</h3>
              <span>Customer</span>
            </div>
            <!-- Testomonial Content -->
            <div class="testomonial-content">
              <span class="quote"><i class="fal fa-quote-left"></i></span>
              <p class="text">Objectively unleash resource maximizing networks vis-a-vis parallel services. Continually
                parallel task real-time users without global sources. Credibly provide access to parallel resources
                whereas worldwide solutions. </p>
              <div class="rating">
                <i class="fal fa-star"></i>
                <i class="fal fa-star"></i>
                <i class="fal fa-star"></i>
                <i class="fal fa-star"></i>
                <i class="fal fa-star"></i>
              </div>
            </div>
          </div>
        </div>
      </div><!-- .row END -->
    </div><!-- .container END -->
  </section>
  <!-- Testomonial Section end -->


  <!-- blog Area -->
  <!--<section class="blog-wrapper blog-layout1 pt-130 pb-100">
    <div class="container">
      <div class="row text-center justify-content-center">
        <!-- Section Title -->
        <!--<div class="col-md-10 col-lg-8 col-xl-6" data-aos="fade-up">
          <div class="section-title">
            <h2 class="title">Latest News</h2>
            <p>Progressively enable pandemic markets for process-centric processes. Completely iterate resource
              maximizing
              process improvements.</p>
          </div>
        </div>
      </div><!-- .row END -->


      <!--<div class="row blog-slider1-active" data-aos="fade-up">

        <!-- Single Blog -->
        <!--<div class="col-xl-4">
          <div class="blog">
            <!-- Blog Image -->
            <!--<div class="blog-img">
              <a href="blog-details.html">
                <img src="assets/img/blog/blog-img-1-1.jpg" alt="Blog Image">
              </a>
            </div>
            <!-- Blog Content -->
            <!--<div class="blog-content">
              <h3 class="blog-title"><a href="blog-details.html">Professionally streamline revolutionary solutions </a>
              </h3>
              <p class="blog-text">Distinctively mesh an expanded array of technology after multimedia based growth
                strategies.</p>
              <div class="blog-meta">
                <span><i class="fal fa-user"></i>David Smith</span>
                <span><i class="fal fa-calendar-minus"></i>22 Jun 2020</span>
              </div>
            </div>

          </div>
        </div>
        <!-- Single Blog -->
        <!--<div class="col-xl-4">
          <div class="blog">
            <!-- Blog Image -->
            <!--<div class="blog-img">
              <a href="blog-details.html">
                <img src="assets/img/blog/blog-img-1-2.jpg" alt="Blog Image">
              </a>
            </div>
            <!-- Blog Content -->
            <!--<div class="blog-content">
              <h3 class="blog-title"><a href="blog-details.html">Professionally home support and solutions </a></h3>
              <p class="blog-text">Distinctively mesh an expanded array of technology after multimedia based growth
                strategies.</p>
              <div class="blog-meta">
                <span><i class="fal fa-user"></i>David Smith</span>
                <span><i class="fal fa-calendar-minus"></i>22 Jun 2020</span>
              </div>
            </div>

          </div>
        </div>
        <!-- Single Blog -->
        <!--<div class="col-xl-4">
          <div class="blog">
            <!-- Blog Image -->
            <!--<div class="blog-img">
              <a href="blog-details.html">
                <img src="assets/img/blog/blog-img-1-3.jpg" alt="Blog Image">
              </a>
            </div>
            <!-- Blog Content -->
            <!--<div class="blog-content">
              <h3 class="blog-title"><a href="blog-details.html">Repaire with Special Trained technician now </a></h3>
              <p class="blog-text">Distinctively mesh an expanded array of technology after multimedia based growth
                strategies.</p>
              <div class="blog-meta">
                <span><i class="fal fa-user"></i>David Smith</span>
                <span><i class="fal fa-calendar-minus"></i>22 Jun 2020</span>
              </div>
            </div>

          </div>
        </div>
        <!-- Single Blog -->
        <!--<div class="col-xl-4">
          <div class="blog">
            <!-- Blog Image -->
            <!--<div class="blog-img">
              <a href="blog-details.html">
                <img src="assets/img/blog/blog-img-1-4.jpg" alt="Blog Image">
              </a>
            </div>
            <!-- Blog Content -->
            <!--<div class="blog-content">
              <h3 class="blog-title"><a href="blog-details.html">Hight quality performance with pro support </a></h3>
              <p class="blog-text">Distinctively mesh an expanded array of technology after multimedia based growth
                strategies.</p>
              <div class="blog-meta">
                <span><i class="fal fa-user"></i>David Smith</span>
                <span><i class="fal fa-calendar-minus"></i>22 Jun 2020</span>
              </div>
            </div>

          </div>
        </div>
      </div><!-- .row END -->
    <!--</div><!-- .container END -->
  <!--</section>

  <!-- blog Area end -->





  <!-- Subscribe Area -->
  <!--<section class="subscribe-sec-wrapper subscribe-layout1">
    <div class="container">
      <div class="inner-wrapper background-image pt-70 pb-80" data-img="assets/img/subscribe/subscribe-img-1-1.jpg">
        <div class="row gutters-20 text-center justify-content-center">
          <div class="col-11 col-md-10 col-lg-8 col-xl-6" data-aos="fade-up">
            <div class="subscribe-content">
              <h2 class="title">Subscribe To Newsletter</h2>
              <p class='text'><a href="blog.html">Offer News</a> | <a href="services.html">Services News</a> | <a
                  href="blog.html">Others Features News</a>
              </p>
              <!-- Subscribe Form -->
              <!--<form action="#" class="subsc-form">
                <div class="form-group d-sm-flex align-items-center">
                  <input type="text" placeholder="Enter Your Email" class="form-control">
                  <button type="submit" class="primary-btn hover-white">Subscribe</button>
                </div>
              </form>

            </div>
          </div>
        </div><!-- .row END -->
      <!--</div>
    </div><!-- .container END -->
  <!--</section>
  <!-- Subscribe Area end -->

  <!-- Brand Area -->
  <!--<div class="brand-area-wrapper brand-layout1 pt-100 pb-100">
    <!-- BG Shape -->
    <!--<div class="bg-shape car-shape">
      <img src="assets/img/bg-img/car-1-1.png" alt="Modern Car">
    </div>

    <div class="container">
      <div class="row brand-slider1-active" data-aos="fade-up">

        <!-- Single Brand -->
       <!-- <div class="col-xl-3">
          <div class="brand-box">
            <a href="about-us.html"><img src="assets/img/brand/brand-1-1.png" alt="Brand Image"></a>
          </div>
        </div>
        <!-- Single Brand -->
        <!--<div class="col-xl-3">
          <div class="brand-box">
            <a href="about-us.html"><img src="assets/img/brand/brand-1-2.png" alt="Brand Image"></a>
          </div>
        </div>
        <!-- Single Brand -->
        <!--<div class="col-xl-3">
          <div class="brand-box">
            <a href="about-us.html"><img src="assets/img/brand/brand-1-3.png" alt="Brand Image"></a>
          </div>
        </div>
        <!-- Single Brand -->
        <!--<div class="col-xl-3">
          <div class="brand-box">
            <a href="about-us.html"><img src="assets/img/brand/brand-1-4.png" alt="Brand Image"></a>
          </div>
        </div>
        <!-- Single Brand -->
        <!--<div class="col-xl-3">
          <div class="brand-box">
            <a href="about-us.html"><img src="assets/img/brand/brand-1-5.png" alt="Brand Image"></a>
          </div>
        </div>
        <!-- Single Brand -->
        <!--<div class="col-xl-3">
          <div class="brand-box">
            <a href="about-us.html"><img src="assets/img/brand/brand-1-6.png" alt="Brand Image"></a>
          </div>
        </div>


      </div><!-- .row END -->
    <!--</div><!-- .container END -->
  <!--</div>
  <!-- Brand Area end -->

  <!-- footer section start -->
  <footer class="footer-area footer-layout1 ">


    <!-- Footer Widget Area -->
    <div class="footer-wid-wrap pt-100 pb-100">
      <div class="container">
        <div class="row">
          <!-- Single Widget -->
          <div class="col-sm-6 col-lg-3 col-xl-3 ">
            <div class="widget footer-widget widget_contact">
              <!-- title -->
              <h3 class="widget_title">Contact Us</h3>
              <p><i class="fas fa-phone-alt"></i><a href="tel:+4256121289">+4256 121 289</a></p>
              <p><i class="fal fa-envelope"></i><a href="mailto:info@Sidh Motors.com">info@Sidh Motors.com</a></p>
              <p><i class="far fa-map-marker-alt"></i>6265 Brockport NY 14420</p>
            </div>
          </div>


          <!-- Single Widget -->
          <div class="col-sm-6 col-lg-3 col-xl-2 ">
            <div class="widget footer-widget widget-links">
              <!-- Title -->
              <h3 class="widget_title">Useful Links</h3>
              <ul>
                <li><a href="about-us.html">About</a></li>
                <li><a href="services.html">Service</a></li>
                <li><a href="project.html">Projects</a></li>
                <li><a href="error.html">Privacy Policy</a></li>
              </ul>
            </div>
          </div>

          <!-- Single Widget -->
          <div class="col-sm-6 col-lg-3 col-xl-2 ">
            <div class="widget footer-widget widget-links">
              <!-- Title -->
              <h3 class="widget_title">Important Links</h3>
              <ul>
                <li><a href="faq.html">FAQ</a></li>
                <li><a href="price-plan.html">Price Table</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="error.html">Term & Condition</a></li>
              </ul>
            </div>
          </div>


          <!-- Single Widget  -->
          <div class="col-sm-6 col-lg-3 col-xl-5 ">
            <div class="footer-widget widget-map h-100">
              <div class="google-map" id="footer-map"></div>
            </div>
          </div>



        </div><!-- row END -->
      </div>
    </div>
    <!-- Footer Widget Area end -->


    <!-- Copyright Area -->
    <div class="copyright-area">
      <div class="container">
        <div class="row align-items-center">
          <!-- Logo -->
          <div class="col-md-3 col-lg-3">
            <div class="copyright-logo d-none d-md-block">
              <!--<a href="index.html"><img src="assets/img/footer-logo-1-1.png" alt="Footer Logo"></a>-->
            </div>
          </div>

          <!-- Copyright -->
          <div class="col-md-9 col-lg-6 text-center text-md-right text-lg-center">
            <div class="copyright">
              <p class="text">&copy; 2020 <a href="index.html">Sidh Motors.</a> All Rights Reserved.</p>
            </div>
          </div>

          <!-- Social Links -->
          <div class="col-lg-3 text-right">
            <div class="social-links d-none d-lg-block">
              <ul>
                <li><a href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                <li><a href="skype:echo123?chat"><i class="fab fa-skype"></i></a></li>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- Copyright Area end -->


  </footer>
  <!-- footer section end -->



  <!-- scroll to top -->
  <a href="#" class="scrollToTop"><i class="move"></i></a>



  <!-- Sidemenu Area -->
  <div class="sidemenu-wrapper d-none d-lg-block ">
    <div class="sidemenu-content">
      <!-- Close Button -->
      <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
      <!-- Single Widget -->
      <div class="widget sidemenu-widget widget_about mb-0">
        <a href="index.html"><img src="assets/img/logo.png" alt="Logo"></a>
        <p class="about-text">Quickly recaptiualize real-time interfaces and timely models. Proactively exploit viral
          meta-services for interdependent customer service. Dynamically actualize bleeding-edge internal</p>
      </div>
      <!-- Single Widget -->
      <div class="widget sidemenu-widget widget_contact">
        <p><i class="fas fa-phone-alt"></i><a href="tel:+4256121289">+4256 121 289</a></p>
        <p><i class="fal fa-envelope"></i><a href="mailto:info@Sidh Motors.com">info@Sidh Motors.com</a></p>
        <p><i class="far fa-map-marker-alt"></i>6265 Brockport NY 14420</p>
      </div>
     <!--<div class="widget widget_recent_entries">
        <!-- title -->
        <!--<h3 class="widget_title">Recent Posts</h3>

        <!-- Single Post -->
        <!--<div class="blog">
          <div class="blog-img">
            <img src="assets/img/blog/blog-thum-2-1.jpg" alt="Blog Image">
          </div>
          <div class="blog-content">
            <h4 class="blog-title"><a href="blog-details.html">Objectively embrace timely potentialities sound.</a>
            </h4>
            <span><i class="fal fa-calendar-minus"></i> 22 Jun 2020</span>
          </div>
        </div>

        <!-- Single Post -->
        <!--<div class="blog">
          <div class="blog-img">
            <img src="assets/img/blog/blog-thum-2-2.jpg" alt="Blog Image">
          </div>
          <div class="blog-content">
            <h4 class="blog-title"><a href="blog-details.html">Hight quality service and special take care</a></h4>
            <span><i class="fal fa-calendar-minus"></i>June 25, 2020</span>
          </div>
        </div>
      </div>-->
    </div>
  </div>
  <!-- Sidemenu Area end -->











  <!-- Code End  -->





  <!-- js file start -->
  <!-- Jquery -->
  <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
  <!-- All Plugins -->
  <script src="assets/js/plugin.min.js"></script>
  <!-- Google Map js -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
  <!-- Main Js File -->
  <script src="assets/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>  
<!-- End js file -->

</body>

</html>