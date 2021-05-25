
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
 <div class="col-sm-4" id="cardid" ><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?tech,street');">
         <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tech,street" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
        <div class="card-img-overlay d-flex flex-column">
         <div class="card-body">
            <small class="card-meta mb-2">Thought Leadership</small>
            <h4 class="card-title mt-0 "><a class="text-white" herf="#">Goverment Lorem Ipsum Sit Amet Consectetur dipisi?</a></h4>
           <small><i class="far fa-clock"></i> October 15, 2020</small>
          </div>
          <div class="card-footer">
            <a class="btn btn-info p-2 w-100 " id="returnbtn" >Return</a>
           <div class="media">
  <div class="media-body bg-danger pl-4 pt-2 pb-2"> 
    <h3 class="my-0 text-white d-block text-light"><strong>Fine: </strong>100Rs</h3>
    
  </div>
  </div>
    </div>
    </div>
      </div></div>

    </div>
  
  </div>
</section>



<script>
  function displayval(x){
  document.getElementById("returnbtn").classList.remove("retun-visibility");
    }
    function hideval(x){
  document.getElementById("returnbtn").classList.add("retun-visibility");
  }
  </script>

@include('userdash/includes/userdashboardfooter')
</x-app-layout>