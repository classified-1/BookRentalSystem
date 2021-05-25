
<head>
  <link rel="stylesheet" href="{{asset('assets/userdashboard/BooksBorrowed/booksborrowed.css')}}">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<x-app-layout>
  <x-slot name="header">

  </x-slot>

@include('userdash/includes/userdashboardheader')

<section class="wrapper">
  <div class="container">
  
  <div class="row">
 <div class="col-sm-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?tech,street');">
         <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tech,street" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
        <div class="card-img-overlay d-flex flex-column">
         <div class="card-body">
        
            <h4 class="text-danger mb-2 animate-flicker p-2" style="background-color: #1414148e">Pending Approval</h4>

           
          </div>
        
          </div>
        </div>
      </div></div>
     
  
</div>
  
</div>
</section>
@include('userdash/includes/userdashboardfooter')
</x-app-layout>
