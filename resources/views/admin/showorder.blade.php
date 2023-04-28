
<!DOCTYPE html>
<html lang="en">
  <head>

    @include('admin.css')

  </head>
  <body>
    
        @include('admin.sidebar')  

        @include('admin.navbar')

        <div class="container-fluid page-body-wrapper">

            <div class="container" align="center">


            <table class="table">
  <thead>
    <tr style=" align: center">
      <th scope="col">Customer Name</th>
      <th scope="col">Phome</th>
      <th scope="col">Address</th>
      <th scope="col">Product Title</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>


    </tr>

    @foreach($order as $orders)

  </thead>
  <tbody>
    <tr>
      <th scope="row">{{$orders->name}}</th>
      <td>{{$orders->phone}}</td>
      <td>{{$orders->address}}</td>
      <td>{{$orders->product_name}}</td>
      <td>{{$orders->price}}</td>
      <td>{{$orders->quantity}}</td>
      <td>{{$orders->status}}</td>
      <td>
        
      <a class="btn btn-success" href="{{url('updatestatus', $orders->id)}}">
        Delivered
      </a>
     </td>

    @endforeach

            </div>
        </div>
        
        @include('admin.script')
  </body>
</html>