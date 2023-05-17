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
                <i class="fa-solid fa-cart-shopping"></i>Cart[{{$count}}]</a>
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

  <div style ="padding: 100px;" align="center">


<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Product Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  

  <form action="{{url('order')}}" method="POST">

  @csrf

  @foreach($carts as $cart)
    <tr>
      <td>

      <input type="text" name="productname[]" value="{{$cart->product_title}}" hidden="">
        
      {{$cart->product_title}}
    
    </td>
      <td>

      <input type="text" name="quantity[]" value="{{$cart->quantity}}" hidden="">
        
      {{$cart->quantity}}
    
    </td>
      <td>

     <input type="text" name="price[]" value="{{$cart->price}}" hidden="">
      
      {{$cart->price}}
    
    </td>      
      <td><a class="btn btn-outline-danger  " href="{{url('delete', $cart->id)}}">Delete</a></td>
    </tr>
    @endforeach
  </tbody>
</table>

<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Confirm Order</button>

</form>

<a href="{{ url('place-order', ['id' => $data]) }}" class="btn btn-success">Place Order</a>


</div>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Place Order</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
        <form>
          <h4 class="border border-secondary">Shipping Information</h4>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputName">Name</label>
              <input disabled type="name" class="form-control border border-dark" id="name" name="name" placeholder="Name" value="{{$data->name}}">
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail">Email</label>
              <input disabled type="email" class="form-control border border-dark" id="email" name="email" placeholder="Email" value="{{$data->email}}">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPhoneNumber">Phone Number</label>
            <input disabled type="text" class="form-control border border-dark" id="phone-number" name="phone-number" placeholder="Phone number">
          </div>
          <div class="form-group">
            <label for="inputAddress">Address</label>
            <input disabled type="text" class="form-control border border-dark" id="address" name="address" placeholder="Address">
          </div>
          @foreach($carts as $cart)
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCity">Product Name</label>
              <input type="text" class="form-control" id="product_name" value="{{$cart->product_title}}">
            </div>
            <div class="form-group col-md-4">
              <label for="inputCity">Quantity</label>
              <input type="text" class="form-control" id="quantity" value="{{$cart->quantity}}">
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">Price</label>
              <input type="text" class="form-control" id="price" value="{{$cart->price}}">
            </div>
        </div>
        @endforeach
          <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
</div>



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
