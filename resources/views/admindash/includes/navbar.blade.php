<nav class="navbar navbar-expand-xl">
  <div class="container h-100">
    <a class="navbar-brand" href="{{url('dashboard')}}">
      <h2 class="tm-site-title mb-0" style="font-size:20px !important">Welcome {{Auth::user()->name }}</h2>
    </a>
    <button
      class="navbar-toggler ml-auto mr-0"
      type="button"
      data-toggle="collapse"
      data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars tm-nav-icon"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto h-100">
        <li class="nav-item">
          <a class="nav-link " href="{{url('/')}}">
            <i class="fas fa-home"></i>Home
          </a>
        </li>
     
        <li class="nav-item" id="vb">
          <a class="nav-link" href="{{url('dashboard')}}">
            <i class="fas fa-swatchbook"></i> View Books
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item " id="ab">
          <a class="nav-link " href="{{url('addbook')}}">
            <i class="fas fa-plus-circle"></i> Add Book
          </a>
        </li>
        <li class="nav-item " id="br">
          <a class="nav-link " href="{{url('booksrequest')}}">
            <i class="fas fa-clipboard-check"></i> Book Request
          </a>
        </li>
        

        <li class="nav-item mt-2">
          <form method="POST" action="{{ route('logout') }}">
            @csrf
          <a class="nav-link" href="route('logout')" onclick="event.preventDefault();
          this.closest('form').submit();">
            <i class="fas fa-sign-out-alt"></i> Logout
          </a>
          </form>
        </li>

      </ul>

    </div>
  </div>
</nav>



<script>

  if(window.location.pathname=="/dashboard"){
    document.getElementById("vb").classList.add("active")
  }  else if(window.location.pathname=="/addbook"){
    document.getElementById("ab").classList.add("active")
  }   else if(window.location.pathname=="/booksrequest"){
    document.getElementById("br").classList.add("active")
  } 
</script>
