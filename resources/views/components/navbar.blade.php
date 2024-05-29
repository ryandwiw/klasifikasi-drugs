@if(\Route::current()->getName() === 'about')
<div class="atas" style="margin-bottom: 100px; background-color:gray !important;">
    <h1 class="d-none">Feature</h1>
</div>
@endif
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="{{route('home')}}" class="logo d-flex align-items-center me-auto">
        <h1 class="sitename">Klasifikasi Drugs</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ \Route::current()->getName() === 'home' ? '#hero' : route('home') }}" class="">Home</a></li>
          <li><a href="{{ \Route::current()->getName() === 'home' ? '#about' : route('about') }}">About</a></li>
          <li><a href="{{ \Route::current()->getName() === 'home' ? '#services' : route('feature') }}">Feature</a></li>
          <li><a href="{{ \Route::current()->getName() === 'home' ? '#team' : route('tim') }}">Team</a></li>
         
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="{{route('predict_form')}}">Cek Sekarang</a>

    </div>
  </header>


{{-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <div class="navbar-brand text-center d-none d-lg-block navbar-desktop-icon" style="color:white">
            Machine Learning
        </div>

        <button class="navbar-toggler order-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars" style="color:#fff; font-size:28px;"></i></span>
        </button>


        <a class="navbar-brand order-3 d-lg-none" href="#" style="margin-left: 20px; color:white;">
            Machine Learning
        </a>


        <div class="collapse navbar-collapse justify-content-center order-lg-2" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('feature')}}">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('predict_form')}}">Check</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">About Us</a>
                    <div class="d-lg-none" style="color: white;">
                        <hr>
                    </div>
                </li>
                <div>
                    <div class="social-links">
                        <ul class="nav">
                            <li class="nav-item d-lg-none">
                                <div class="text-center mb-2">
                                    Directed By One
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </ul>
        </div>

        <ul class="navbar-nav d-none d-lg-flex ml-auto order-lg-last">
            <a href="{{route('login')}}"> <button type="button" class="btn btn-primary btn-outline-light"
                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem;">
                Login
            </button></a>
           
        </ul>

    </div>
</nav> --}}
