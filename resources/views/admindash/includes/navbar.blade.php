<nav class="navbar navbar-expand-xl">
  <div class="container h-100">
    <a class="navbar-brand" href="index.html">
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
          <a class="nav-link" href="{{url('dashboard')}}">
            <i class="fas fa-swatchbook"></i> View Books
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="products.html">
            <i class="fas fa-plus-circle"></i> Add Book
          </a>
        </li>
        

        <li class="nav-item">
          <a class="nav-link" href="accounts.html">
            <i class="far fa-user"></i> Accounts
          </a>
        </li>
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            href="#"
            id="navbarDropdown"
            role="button"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            <i class="fas fa-cog"></i>
            <span> Settings <i class="fas fa-angle-down"></i> </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Profile</a>
            <a class="dropdown-item" href="#">Billing</a>
            <a class="dropdown-item" href="#">Customize</a>
          </div>
        </li>
      </ul>

    </div>
  </div>
</nav>