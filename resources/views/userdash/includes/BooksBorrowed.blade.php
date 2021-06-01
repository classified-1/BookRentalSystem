
<head>
  <link rel="stylesheet" href="{{asset('assets/userdashboard/BooksBorrowed/booksborrowed.css')}}">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"></head>

<x-app-layout>
  <x-slot name="header">

  </x-slot>

@include('userdash/includes/userdashboardheader')

<section class="wrapper">
  <div class="container">
  
  <div class="row">
    @forelse ($BooksBorrowed as $key=>$data)
 <div class="col-sm-4" id="cardid" ><div class="card text-white card-has-bg click-col" style="background-image:url('{{Storage::url($data->Book->BookImg)}}');">

        <div class="card-img-overlay d-flex flex-column" onmousemove="displayval()" onmouseout="hideval()">
         <div class="card-body">
            <h5 class="card-meta ">{{$data->Book->BookName}}</h5>
            <small class="card-meta text-light mb-5 ml-4">By: {{$data->Book->AuthorName}}</small>
            <h4 class="card-title mt-5 "><a class="text-white" herf="#">Return it Before</a></h4>
           <small><i class="far fa-clock"></i> October 15, 2020</small>
          </div>

          {{-- /////////Return Button//// --}}
        </form>
          <div class="card-footer">
            @if($data->status==1)
            <form action="returnBook" method="post">
                @csrf
                <input type="hidden" name="reqid" value="{{$data->id}}" >
                <button type="submit" id="{{$data->id}}" class="btn btn-info p-2 w-100 returnit " >
                  Return
                      </button>
                  </form>
            @endif
            

            {{-- ///////Fine//// --}}
        <div class="media">
          <div class="media-body bg-danger pl-4 pt-2 pb-2"> 
          <h3 class="my-0 text-white d-block text-light"><strong>Fine: </strong>100Rs</h3>
          </div>
          </div>
        </div>
          </div>
      </div></div>
      @empty
      <h3 class="text-dark" style="position: absolute;top:8em;left:25em" >No Book Borrowed</h3>
  @endforelse
    </div>
  
  </div>
</section>




@include('userdash/includes/userdashboardfooter')
@include('sweetalert::alert')
</x-app-layout>