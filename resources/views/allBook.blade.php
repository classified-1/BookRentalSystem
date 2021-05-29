<head>
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

  @include('/includes/links')
  <title>View All Books</title>

  <link rel="stylesheet" href="{{ asset('assets/indexpage/index.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<div>
  @include('/includes/header')
</div>
<div class="wrapper">
  <div class="button_grp">

  </div>
    {{--////////////// Search//////////// --}}
    <div class="form-outline ml-4 mr-5 mb-2">
      <input type="text" name="search" id="search" class="form-control" placeholder="Type Book or Author Name"
      aria-label="Search" />
    </div>
    {{-- Books to Display --}}
  <div class="maindiv">
  
   

  
   
    
  </div>


</div>	
<script src="{{ asset('assets/web/assets/jquery/jquery.min.js')}}"></script> 
<script src="{{ asset('assets/books/books.js')}}"></script> 
@include('/includes/footer')
@include('/includes/scripts')

{{-- /////Search code jquery///// --}}
<script>
  $(document).ready(function(){
 
   fetch_customer_data();
 
     function fetch_customer_data(query = '')
   {
  $.ajax({
   url:"{{ route('viewAllBook.action') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('.maindiv').html(data.table_data);
   }
  })
   }
 
     $(document).on('keyup', '#search', function(){
       var query = $(this).val();
       fetch_customer_data(query);
         });
         });
 </script>