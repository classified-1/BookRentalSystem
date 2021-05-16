<section class="menu menu3 cid-sxu7YDeVMZ" once="menu" id="menu3-1">
    
  <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
      <div class="container">
          <div class="navbar-brand">
              
              <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-7" href="/">EBOOK</a></span>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <div class="hamburger">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
              </div>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                  @if (Request::is('login'))
                <li class="nav-item"><a class="nav-link link text-black display-4" href="{{url('#books')}}">Books</a></li>
                @else
                <li class="nav-item"><a class="nav-link link text-black display-4" href="{{url('/#books')}}">Books</a></li>
                @endif

                  <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="{{url('/about')}}">About</a></li>
                  <li class="nav-item">
                      <a class="nav-link link text-black text-primary display-4" href="{{url('/contact')}}">Contacts</a>
                  </li>
                  {{-- <li class="nav-item dropdown">
                    <a class="nav-link link text-black dropdown-toggle display-4" data-toggle="dropdown-submenu" aria-expanded="false">Account</a>
                    <div class="dropdown-menu">
                        <a class="text-black dropdown-item display-4" href="">Login</a>
                        <a class="text-black dropdown-item display-4" href="">Logout</a>
                    </div>
                </li> --}}
                <li class="nav-item dropdown">
                    <a class="nav-link link text-black dropdown-toggle display-4" data-toggle="dropdown-submenu" aria-expanded="false">Account</a>
                  
                  @if (Route::has('login'))
             
                      @auth
                      <div class="dropdown-menu">
                        <a class="text-black dropdown-item display-4" href="{{ url('/dashboard') }}">Dashboard</a>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            {{-- <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log out') }} --}}
                        <a class="text-black dropdown-item display-4" onclick="event.preventDefault();
                        this.closest('form').submit();">Logout</a>
                    </div>                                    
                        @else
           
                        <div class="dropdown-menu">
                            <a class="text-black dropdown-item display-4" href="{{ route('login') }}">Login</a>
                            <a class="text-black dropdown-item display-4" href="{{ route('register') }}">Register</a>
                        </div>
                       
                    @endauth
                      
                 
                  @endif
                  </li>
                
                </ul>
                  

                  {{-- //////Social Icons in Header --}}
              {{-- <div class="icons-menu">
                  <a class="iconfont-wrapper" href="#" target="_blank">
                      <span class="p-2 mbr-iconfont socicon-facebook socicon"></span>
                  </a>
                  <a class="iconfont-wrapper" href="#" target="_blank">
                      <span class="p-2 mbr-iconfont socicon-twitter socicon"></span>
                  </a>
                  <a class="iconfont-wrapper" href="#" target="_blank">
                      <span class="p-2 mbr-iconfont socicon-linkedin socicon" style="color: rgb(35, 35, 35); fill: rgb(35, 35, 35);"></span>
                  </a>  
              </div> --}}
              
          </div>
      </div>
  </nav>
</section>