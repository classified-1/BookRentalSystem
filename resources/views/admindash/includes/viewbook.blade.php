<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admindash/includes/adminLinks')
    <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>
  <title>View Book</title>
<script src="{{asset('assets/userdashboard/user.js')}}"></script>
</head>

{{-- ////////////Navbar Start////// --}}

<body>
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
                  <a href="javascript:void(0)" class="tm-product-delete-link deletebtn" >
                    <i class="far fa-trash-alt tm-product-delete-icon" ></i>
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
@include('sweetalert::alert')

<script>
  $(document).ready(function () {
    $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

    $('.deletebtn').click(function (e) { 
      e.preventDefault();
      var data ={
        "_token": $('meta[name="csrf-token"]').val()
      }
      var id={{$data->id}};

      swal({
            title: "Are you sure?",
            text: "This Book will not be recovered again",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
        .then((willDelete) => {
            if (willDelete) {

              $.ajax({
                type: "DELETE",
                url: 'destroy/'+id,
             
                success: function (response) {
                  swal("Your file has been deleted!", {
                  icon: "success",
                    }).then((result) =>{
                      location.reload();
                  });
                }
              });
              
            } 
            });
  });
  });
</script>

</body>
