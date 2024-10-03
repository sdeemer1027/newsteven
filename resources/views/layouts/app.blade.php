<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />



  <!-- Favicons -->
  <link href="assets/img/favicon.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Add this in the <head> section -- >
      <script src="{{ asset('js/jquery.min.js') }}"></script>
<!- - Add this in the <head> section -- >
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">

<!- - Add this before the closing </body> tag -- >
      <script src="{{ asset('js/app.js') }}"></script>
    -->
<!-- Add this in the <head> section -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">



        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">



  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

     <h3 class="logo"><a href="/"><img src="/srdlogo.png" height="50px;"><span style="color:#e97855;">S</span>teven.<span style="color:#e97855;">News</span></a></h3>
  <!--
     <a href="index.html" class="logo"><img src="/srdlogo.png" alt="" class="img-fluid"><span style="color:#e97855;">S</span>teven.<span style="color:#e97855;">News</span></a></a>-->
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/">Home</a></li>
          <li><a class="nav-link scrollto " href="{{route('foodfact.index')}}">FoodFacts</a></li>
          <li><a class="nav-link scrollto" href="/#about">About</a></li>
          <li><a class="nav-link scrollto" href="/#services">Services</a></li>
          <li><a class="nav-link scrollto " href="/#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="/#team">Team</a></li>
            <li><a class="nav-link scrollto" href="/Steve Deemer-2024.pdf">Resume</a></li>
  {{--
          <li class="dropdown"><a href="#"><span>Domains</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>

              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>


              <li><a href="#">Evets.Pet</a></li>
              <li><a href="#">ChildrenWish.org</a></li>
              <li><a href="#">TheUnwanted.club</a></li>
            </ul>
          </li>
          --}}
{{--

          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="#about">Get Started</a></li>

--}}




            @if (Route::has('login'))

                    @auth
                        <li class="dropdown"><a class="nav-link scrollto" href="{{ url('/dashboard') }}"> {{ Auth::user()->name }}</a>
             <ul>
              <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>

                     <form method="POST" action="{{ route('logout') }}">
                         @csrf

                         <x-dropdown-link :href="route('logout')"
                                          onclick="event.preventDefault();
                                                this.closest('form').submit();">
                             {{ __('Log Out') }}
                         </x-dropdown-link>
                     </form>

             </ul>

                        </li>
                    @else
                    <li><a class="nav-link " href="{{ route('login') }}">Log in</a></li>
                      @if (Route::has('register'))
                        <li><a class="nav-link scrollto" href="{{ route('register') }}">Register</a></li>
                      @endif
                    @endauth

            @endif





        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header bg-gray-100 dark:bg-gray-900-->

        <div class="min-h-screen ">

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>






  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3><span style="color:#e97855;">S</span>teven.<span style="color:#e97855;">News</span></h3>
              <p>
                Hollywood, FL. 33020, USA<br><br>
                <strong>Phone:</strong> +1 (954)391-0398<br>
                <strong>Email:</strong> dr.steve@steven.news<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/drsteve2020/" class="facebook"  target="_new"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/sd1964.with/" class="instagram"  target="_new"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="https://www.linkedin.com/in/steven-deemer/" class="linkedin" target="_new"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
        {{--
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
            --}}

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">&copy; Copyright <strong><span style="color:#e97855;">S</span>teven.<span style="color:#e97855;">News</span></strong> All Rights Reserved </div>
      <div class="credits">Designed by <span>Dr.Steve@</span><span style="color:#e97855;">S</span>teven.<span style="color:#e97855;">News</span> </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>











    </body>
</html>
