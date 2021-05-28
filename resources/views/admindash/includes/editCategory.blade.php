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


        <form class="border p-5" action="../updateC/{{$category->id}}" method="GET">
          @csrf
          <h2 class="text-center text-light">UPDATE CATEGORY</h2>
          <div class="form-group">
            <label>Enter Project Type</label>
            <input type="text" value="{{$category->name}}" name="name" class="form-control" autocomplete="off"   >
        
          </div>
          <input type="submit" value="UPDATE CATEGORY" class="btn btn-primary">
        </form>
      
  



      </div>
    </div>
    
  </div>
</div>

{{-- //////////Foooter////// --}}
@include('admindash/includes/footer')

