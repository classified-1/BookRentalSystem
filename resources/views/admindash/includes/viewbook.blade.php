<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admindash/includes/adminLinks')
  </head>
  <title>View Book</title>
<script src="{{asset('assets/userdashboard/user.js')}}"></script>
</head>

{{-- ////////////Navbar Start////// --}}

@include('admindash/includes/navbar')
<div class="container mt-1">
  <div class="row tm-content-row">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-block-col">
      <div class="tm-bg-primary-dark tm-block tm-block-products">
        <div class="tm-product-table-container ">
          <table  class="table table-hover tm-table-small tm-product-table pr-4">
            <thead>
              <tr>
                <th scope="col">Book Images</th>
                <th scope="col">BOOK NAME</th>
                <th scope="col">AUTHOR</th>
                <th scope="col">CATEGORY</th>
                <th scope="col">ADDED ON</th>
                <th scope="col">&nbsp;</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                @forelse ($all_book as $key=>$data)
               
                <th scope="row"><img src="{{Storage::url($data->BookImg)}}" width="80px" height="80px"></th>
                <td class="tm-product-name">{{$data->BookName}}</td>
                <td>{{$data->AuthorName}}</td>
                <td>{{$data->Category->name}}</td>
                <td>{{$data->created_at}}</td>
                <td>
                  <a href="destroy/{{$data->id}}" class="tm-product-delete-link">
                    <i class="far fa-trash-alt tm-product-delete-icon"></i>
                  </a>
                  <a href="edit/{{$data->id}}" class="tm-product-delete-link">
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
        <!-- table container -->
        <a
          href="{{url('addbook')}}"
          class="btn btn-primary btn-block text-uppercase mb-3">Add new product</a>

      </div>
    </div>
    
  </div>
</div>

{{-- //////////Foooter////// --}}
@include('admindash/includes/footer')

