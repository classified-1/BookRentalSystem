
<link rel="stylesheet" href="{{asset('assets/userdashboard/user.css')}}">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

<div class="grid-container" >
  <div class="menu-icon">
   <i class="fas fa-bars header__menu"></i>
 </div>
  
 <header class="header">
  {{-- ///////Display Errors here///// --}}
  <h2 class="text-center">Error msgs here</h2>
 </header>
 

 <aside class="sidenav">
   <div class="sidenav__close-icon">
     <i class="fas fa-times sidenav__brand-close"></i>
   </div>
   <div style="background-color: rgb(28, 28, 43);padding:20px;">
    <h2>Welcome {{ Auth::user()->name }}</h2>
  </div>
   <ul class="sidenav__list">
     <li class="sidenav__list-item">Books Borrowed</li>
     <li class="sidenav__list-item">Requested Book(s)</li>
     <li class="sidenav__list-item">History</li>
    
     <li class="sidenav__list-item" href="{{url('/')}}"><form method="POST" action="{{ route('logout') }}">
      @csrf
      <a onclick="event.preventDefault();this.closest('form').submit();">Log out
      </a> </li>
   </ul>
 </aside>

 <main class="main">
   <div class="main-header">
   @include('userdash/includes/BooksBorrowed')
   </div>
 </main>

 <footer class="footer">
   <div class="footer__copyright">&copy; 2021 EBOOK</div>
  
 </footer>
</div>

<script src="{{url('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js')}}"></script>
<script src="{{asset('assets/userdashboard/user.js')}}"></script>