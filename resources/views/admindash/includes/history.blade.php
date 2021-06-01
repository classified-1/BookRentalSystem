<head> 
    
  @include('admindash/includes/adminLinks')
  <title>Book Request</title>
  <style>
      ._visibility{display:none}
  </style>
</head>
{{-- ////////////Navbar Start////// --}}
  @include('admindash/includes/navbar')
  {{-- ////////////Navbar Ends////// --}}
  <div class="container mt-1">
      <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container ">

              <h3 class="text-center text-light mb-3">Request History</h3>
              <table  class="table table-hover tm-table-small tm-product-table pr-4">
                <thead>
                  <tr>
                    <th scope="col">BOOK NAME</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Request Date</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                   @forelse ($adminReqHistroy as $key=>$data)
                  <tr>
                  <td> {{$data->Book->BookName}} </td> 
                    <td class="ml-2">{{$data->User->name}} </td>
                    <td class="ml-3">{{$data->created_at->format('d-M-Y h A')}}</td>
                    <td class="ml-3"> 
                      @if($data->status==1)
                         <i class="text-primary">Approved
                     @elseif($data->status==0 )
                     <i class="text-danger">Pending
                     @else
                     <i class="text-success">Returned
                     @endif
                    </td>
                                
                  </tr>    
                  @empty
                @endforelse                           
                </tbody>
              </table>



              {{-- /////////////Start of Book History//// --}}
            <h3 class="text-center text-light mb-3  mt-5">Books History</h3>
            <table  class="table table-hover tm-table-small tm-product-table pr-4">
              <thead>
                <tr>
                  <th scope="col">BOOK NAME</th>
                  <th scope="col">AUTHOR NAME</th>
                  <th scope="col">ADDED ON</th>
                  <th scope="col">UPDATED ON</th>
                </tr>
              </thead>
              <tbody>
                 @forelse ($booksHistroy as $key=>$data)
                <tr>
                <td> {{$data->BookName}} </td> 
                <th scope="col">{{$data->AuthorName}}</th>
                <td class="ml-2">{{$data->created_at->format('d-M-Y h A')}} </td>
                <td class="ml-3">{{$data->updated_at->format('d-M-Y h A')}}</td>
                              
                </tr>    
                @empty
              @endforelse                           
              </tbody>
            </table>
            </div>
            <!-- table container -->

    
          </div>
        </div>
        
      </div>
    </div>

    {{-- ////////////Footer Start////// --}}
@include('admindash/includes/footer')
