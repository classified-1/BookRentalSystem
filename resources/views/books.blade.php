<head>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

</head>
<div class="wrapper">
  <div class="button_grp">
    <ul>
      <li data-li="all" class="btn active">All</li>
      <li data-li="Sci-Fi" class="btn">Sci-Fi</li>
      <li data-li="files" class="btn">Files</li>
      <li data-li="images" class="btn">Images</li>
      <li data-li="sheets" class="btn">Sheets</li>
      <li data-li="pdfs" class="btn">PDFs</li>
      <li data-li="documents" class="btn">Documents</li>
    </ul>
  </div>
  <div class="maindiv">
    @forelse ($all_book as $key=>$data)
    <div class="item sheets">
      <img src="{{Storage::url($data->BookImg)}}" alt="" id="bookimg">
      <div class="addDashboardDiv"><a href="#" class="addDashboardLink">
        <i class="fas fa-plus-circle" class="tooltip" title="Add Book to Dashboard" style="font-size:30px"></i></a></div>
    </div>  
    @empty
      <h3 class="text-light" style="position: absolute;top:8em;left:18em" >No data Found</h3>
  @endforelse
  
  
   
    
  </div>


</div>	
<script src="{{ asset('assets/web/assets/jquery/jquery.min.js')}}"></script> 
<script src="{{ asset('assets/books/books.js')}}"></script> 