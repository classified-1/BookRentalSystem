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
                <table  class="table table-hover tm-table-small tm-product-table pr-4">
                  <thead>
                    <tr>
                      <th scope="col">Book Images</th>
                      <th scope="col">BOOK NAME</th>
                      <th scope="col">User Name</th>
                      <th scope="col">Request Date</th>
                      <th scope="col">&nbsp;</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      @forelse ($requestDetails as $key=>$data)

                      <th scope="row"><img src="{{Storage::url($data->Book->BookImg)}}" width="80px" height="80px"></th>
                      <td class="tm-product-name">{{$data->Book->BookName}}</td> 
                      <td>{{$data->User->name}}</td>
                      <td>{{$data->created_at}}</td>
                      <td>
                      </form>
                         {{-- ///////Approve/// --}}
                            @if($data->status==0)
                            <form action="reqapprove" method="post">
                                @csrf
                                <input type="hidden" name="reqid" value="{{$data->id}}" >
                                <button type="submit" class="tm-product-delete-link bg-info" >
                                        <i class="fas fa-check  text-light" style="position: relative;left:-2px;top:-1px;font-size: 1.5em"></i>
                                      </button>
                                  </form>
                            @endif
                      {{-- ////Approve MSG/// --}}
                      @if($data->status==1 || $data->status==-1)
                      <h6 class="text-light" style="font-size: 17px">Request Accepted</h6>
                      @endif
                    </div>
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

      
            </div>
          </div>
          
        </div>
      </div>

      {{-- ////////////Footer Start////// --}}
@include('admindash/includes/footer')
