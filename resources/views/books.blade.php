<head>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

</head>
<div class="wrapper">
  {{-- ////////Category List////// --}}
  <div class="button_grp">
    <ul>
      <div class="container">
        <div class="row">
          <div class="col-9">  
            <li data-li="all" class="btn active">All</li>
      
            @foreach($all_category as $key=>$data) 
           
            <li data-li="{{$data->name}}" class="btn">{{$data->name}}</li>
      
            @endforeach
          </div>
          <div class="vl col-1 mt-3" style="border-left: 2px solid #000000;
          height: 2em;"></div>
          <div class="col-2">
            <span class="ml-auto">
              <a href="/viewAllBook" style="position: relative;top:28%;font-size:1.3em">View All Books</a>
            </span>
          </div>
        </div>
      </div>
    </ul>
  </div>





  {{-- Books to Display --}}
  <div class="maindiv">
    @forelse ($all_book as $key=>$data)
   
    <div class="item {{$data->Category->name}}">
      <img src="{{Storage::url($data->BookImg)}}" alt="" id="bookimg">
      @if (Auth::check())  
      <div class="addDashboardDiv"><a href="#" class="addDashboardLink">
        <i class="fas fa-plus-circle" class="tooltip" title="Add Book to Dashboard" style="font-size:30px;position: relative;right:0.5em"></i></a></div>

        @else
        <div class="addDashboardDiv" style="background-color: rgb(255, 255, 255) !important;"> <h6 class="text-center text-info"  style="font-size: 15px">Signin or Register to Request Book</h6 > </div>
        
        @endif
        
    </div>  
    @empty
      <h3 class="text-light" style="position: absolute;top:8em;left:18em" >No data Found</h3>
  @endforelse
  
  
   
    
  </div>


</div>	
<script src="{{ asset('assets/web/assets/jquery/jquery.min.js')}}"></script> 
<script src="{{ asset('assets/books/books.js')}}"></script> 