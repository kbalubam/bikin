  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Bikin</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="#about">Get Started</a></li>
        @if (Route::has('login'))
            @auth
                <li >
                  <a class="nav-link scrollto text-decoration-underline" href="{{ route('back') }}" >Dashboard</a>
              </li> 
            <li >
              <form class="m-0" action="{{ route('logout') }}" method="post" id="form">
              @csrf

                <a class="nav-link scrollto text-decoration-underline" href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('form').submit();" >Log out </a>
              </form>
            </li>
            @else
            <li >
              <a class="nav-link scrollto text-decoration-underline" href="{{ route('login') }}"  >Log in</a>
            </li>


              @if (Route::has('register'))
                <li >
                  <a class="nav-link scrollto text-decoration-underline" href="{{ route('register') }}" >Register</a>
                </li>
                    
                @endif
            @endauth
         @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
