<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admindash/includes/adminLinks')
  </head>
  <title>Add Category</title>
<script src="{{asset('assets/userdashboard/user.js')}}"></script>
</head>
{{-- ////////////Navbar Start////// --}}

@include('admindash/includes/navbar')
<div class="container mt-1">
  <div class="row tm-content-row">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-block-col">
      <div class="tm-bg-primary-dark tm-block tm-block-products">
        <div class="tm-product-table-container ">
          <div>



        <form class="border p-5" action="storeC" method="POST">
          @csrf
          <h2 class="text-center text-light">ADD NEW CATEGORY</h2>
          <div class="form-group">
            <label>Enter Project Type</label>
            <input type="text" name="name" class="form-control" autocomplete="off"   >
        
          </div>
          <input type="submit" value="ADD CATEGORY" class="btn btn-primary">
        </form>
      
        <hr class="text-light">
        <table  class="table table-hover tm-table-small tm-product-table pr-4">
          <thead>  
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Category Name</th>
              <th scope="col">&nbsp;</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($category as $key=>$data)
            <tr>     
              <td scope="row">{{$key+1}}</td>
              <td scope="row">{{$data->name}}</td>
              <td>
                <a href="destroyC/{{$data->id}}" class="tm-product-delete-link">
                  <i class="far fa-trash-alt tm-product-delete-icon"></i>
                </a>
                <a href="editC/{{$data->id}}" class="tm-product-delete-link">
                  <i class="fas fa-edit tm-product-delete-icon"></i>
                </a>
              </td>
            </tr>
            @empty
            <tr>
              <h3 class="text-light" style="position: absolute;top:8em;left:18em" >No data Found</h3>
       
          </tr>
          @endforelse

          
          </tbody>
        </table>



      </div>
    </div>
    
  </div>
</div>

{{-- //////////Foooter////// --}}
@include('admindash/includes/footer')

