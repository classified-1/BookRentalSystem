<head>
  <link rel="stylesheet" href="{{asset('assets/userdashboard/user.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>



<div class="grid-container" >
<div class="menu-icon">
 <i class="fas fa-bars header__menu"></i>
</div>


<header class="header">
{{-- ///////Display Errors here///// --}}

<h6 class=" text-light">

  <h6 class="ml-auto text-light">Error msgs here</h6>
</header>

<aside class="sidenav">
 <div class="sidenav__close-icon">
   <i class="fas fa-times sidenav__brand-close"></i>
 </div>
 <div style="background-color: #2e3038;padding:20px;">
  <h6 class=" text-light">Welcome {{ Auth::user()->name }}</h6>
</div>
 <ul class="sidenav__list">


  {{-- /////BooksBorrowed/// --}}
  <a href="{{url('/dashboard')}}" style="text-decoration: none"   > <li class="sidenav__list-item activeal" id="bb">Books Borrowed</li></a>

   {{-- ////////Requested Books////// --}}
<a href="{{url('/requestedbook')}}" style="text-decoration: none"   ><li class="sidenav__list-item" id="rb">Requested Book(s)</li></a>

  {{-- ///////History//// --}}
  <a href="{{url('/history')}}" i style="text-decoration: none"   > <li class="sidenav__list-item" id="his">History</li>
  </a>

   {{-- ///////Logout//// --}}
  
   <li class="sidenav__list-item" href="{{url('/')}}">
    <form method="POST" action="{{ route('logout') }}">
    @csrf
    <a onclick="event.preventDefault();this.closest('form').submit();">Log out
    </a> </li>
 </ul>
</aside>

<main class="main">






  <script>

    if(window.location.pathname=="/dashboard"){
      document.getElementById("bb").classList.add("active")
    }  else if(window.location.pathname=="/requestedbook"){
      document.getElementById("rb").classList.add("active")
    }   else if(window.location.pathname=="/history"){
      document.getElementById("his").classList.add("active")
    } 
  </script>
  