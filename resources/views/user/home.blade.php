<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    

    <title>TATAK LNU Merch</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="{{url('home')}}"><h2>TATAK LNU <em>Merch</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{url('home')}}">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="">Stall</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=""> IGP Merch</a>
              </li>

                <li class="nav-item">
              @if (Route::has('login'))
                
                    @auth

                    <li class="nav-item">
                <a class="nav-link" href="{{url('showcart')}}">
                <i class="bi bi-bag-fill"></i>Cart[{{$count}}]</a>
              </li>
                    
                        <x-app-layout>
    
                        </x-app-layout>
                       
                    @else
                      <li><a class="nav-link" href="{{ route('login') }}" >Log in</a></li>

                        @if (Route::has('register'))
                           <li><a class="nav-link" href="{{ route('register') }}" >Register</a></li>
                        @endif
                    @endauth
            @endif
            </li>
            </ul>
          </div>
        </div>
      </nav>

      @if(session()->has('message'))

    <div class="alert alert-success">

    <button style="float:right;" type="button" class="close" data-bs-dismiss="alert">x</button>

    
    {{session()->get('message')}}
    

    </div>
    @endif
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Best Offer</h4>
            <h2>School spirit never goes out of style!</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Buy Now</h4>
            <h2>Support your school and look great doing it!</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Get Yours Now</h4>
            <h2>Wear your school colors with confidence!</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    @include('user.product')

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About TATAK LNU Merch</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Looking for School Merchandise?</h4>
              <p >Welcome to TATAK LNU MERCH, your one-stop-shop for all the latest and greatest merchandise from your favorite school!
                 We are proud to offer a wide selection of high-quality clothing, accessories, and other items that showcase your school spirit and support for LNU. 
                 Whether you're a current student, alumni, or just a fan of the school, our website has something for everyone, and our products are designed to help you show off your love for LNU with pride. 
                 So come and explore our website today, and find the perfect item to add to your collection!
                </p>
              <ul class="featured-list">
                <li><a href="#">A wide selection of high-quality merchandise
                    </a></li>
                <li><a href="#">Clothing items such as t-shirts, uniform, and jackets
                    </a></li>
                <li><a href="#">Customized designs that showcase LNU spirit and pride
                    </a></li>
                <li><a href="#">Great gift options for LNU students, alumni, and fans
                    </a></li>
                <li><a href="#">A convenient and user-friendly website experience.
                    </a></li>
              </ul>
              <a href="" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/feature-lnu.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>


    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>The Will of D - 2023 TATAK LNU Merch.
            
            </p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
