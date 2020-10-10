<!DOCTYPE html>
<html lang="en">
  <head>
    <title>VATSIM Europe, Middle East and Africa Region</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('theme/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('theme/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('theme/css/jquery.fancybox.min.css') }}">

    <link rel="stylesheet" href="{{ asset('theme/css/bootstrap-datepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('theme/fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('theme/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('theme/css/style.css') }}">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
      
      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo mr-auto w-25"><a href="index.html">VATEMEA</a></div>

          <div class="mx-auto text-center">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#divisions-section" class="nav-link">Divisions</a></li>
                <li><a href="#about-section" class="nav-link">About Us</a></li>
                <li><a href="#teachers-section" class="nav-link">Policies</a></li>
                <li><a href="#staff-section" class="nav-link">Staff</a></li>
                <li><a href="#dashboard-section" class="nav-link">Dashboard</a></li>
                <li><a href="#contact-section" class="nav-link">Contact</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      
    </header>

    @yield('content')

  </div>
  </body>
</html>