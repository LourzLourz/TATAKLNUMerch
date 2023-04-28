
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

            @if(session()->has('message'))

    <div class="alert alert-success">

    <button style="float:right;" type="button" class="close" data-bs-dismiss="alert">x</button>

        
    

    {{session()->get('message')}}
    

    </div>
    @endif


            <table class="table">
  <thead>
    <tr style=" align: center">
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
  


    </tr>

    @foreach($data as $product)

  </thead>
  <tbody>
    <tr>
      <th scope="row">{{$product->title}}</th>
      <td>{{$product->description}}</td>
      <td>{{$product->quantity}}</td>
      <td>{{$product->price}}</td>
      <td>
        
        <img height="500" width="500" src="/productimage/{{$product->image}}">

      </td>
      <td>

        <a class="btn btn-info" href="{{url('updateview', $product->id )}}">Update</a>

      </td>
      <td>

        <a class="btn btn-danger" href="{{url('deleteproduct', $product->id)}}">Delete</a>

      </td>



    </tr>
    
    @endforeach

  </tbody>
</table>
            

            </div>
        </div>


        
        @include('admin.script')
  </body>
</html>