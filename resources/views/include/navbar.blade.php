<nav class="navbar navbar-expand-lg fixed-top nav-container ">
    <div class="container-fluid d-flex justify-content-between ">
      <a class="navbar-brand logo-container" href="{{ route('index') }}">
        <img src="{{ asset('images/BMQ Logo alpha.png') }}" alt="" class='image-logo' id='blue-logo'>
        <img src="{{ asset('images/BMQ Logo alpha-WHITE.png') }}" alt="" class='image-logo image-display' id='white-logo'>
        <div class="text-logo">BMQ <br> BUILDERS & SUPPLY <br> CORPORATION</div>
        </a>
    <div class="nav-links-wrapper">
        <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div  class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">BMQ</h5>
                <button type="button " class="btn-close btn-close-white" data-bs-dismiss="offcanvas" data-bs-theme="dark" aria-label="Close"></button>
              </div>
            <ul class="navbar-nav ">
                <li class="nav-item px-3 mr-1 {{ request()->routeIs(['index','ict.index'])? 'link-active':'' }}">
                    <a class="nav-link " href="{{ route('index') }}">HOME</a>
                </li>
                <li class="nav-item px-3 mr-1 {{ request()->routeIs(['careers','partners'])? 'link-active':'' }}">
                {{-- <a class="nav-link" href="#">OPPORTUNITIES</a> --}}
                    <div class="dropdown-center nav-link">
                        <a class=" dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            OPPORTUNITIES
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="{{ route('careers') }}">CAREERS</a></li>
                        <li><a class="dropdown-item" href="{{ route('partners') }}">PARTNERS</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item px-3 mr-1 {{ request()->routeIs(['services','ict.services'])? 'link-active':'' }}">
                    <div class="dropdown nav-link">
                        <a class=" dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            SERVICES
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="{{ route('services') }}">CONSTRUCTION</a></li>
                            <li><a class="dropdown-item" href="{{ route('ict.services') }}">ICT SOLUTIONS</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item px-3 mr-1 {{ request()->routeIs(['portfolio'])? 'link-active':'' }}">
                    <a class="nav-link" href="{{ route('portfolio') }}">PORTFOLIO</a>
                </li>
                <li class="nav-item px-3 mr-1 {{ request()->routeIs(['about'])? 'link-active':'' }}">
                    <a class="nav-link" href="{{ route('about') }}">ABOUT</a>
                </li>
            </ul>
        </div>
    </div>
    </div>
</nav>