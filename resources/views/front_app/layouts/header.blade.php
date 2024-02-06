<div class="header position-fixed w-100 desktop-header" style="z-index:9999;">
<nav class=" bg-body-none  p-2 bg-transparent border-3 border-dark  position-relative"  style="z-index: 100!important;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-3">
          <button class="navbar-toggler bg-secondary py-2 px-4 border" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <i class="fa-solid fa-align-justify fs-5 "></i>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1"  id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h3 class="offcanvas-title fw-bold" id="offcanvasNavbarLabel" >TEZHLY</h3>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 fw-bold">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('about')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('resume-ai-builder')}}">Resume Ai Builder</a>
                  </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('courses')}}">Courses</a>
                  </li>
                  {{-- <li class="nav-item">
                    <a class="nav-link" href="{{route('goal-plan')}}">Goal Plan</a>
                  </li> --}}
                  {{-- <li class="nav-item">
                    <a class="nav-link" href="{{route('my-matches')}}">My Matches</a>
                  </li> --}}
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('pricing')}}">Pricing</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('faqs')}}">FAQs</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">Contact</a>
                  </li>
                  @if(!Auth::check())
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">Login</a>

                  </li>
                  @else
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('logout')}}">Logout</a>

                  </li>
                  @endif
              </ul>
              <form class="d-flex mt-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-6 text-center">
          <a class="navbar-brand fs-1 fw-bold" id="tezhly" href="{{route('home')}}">TEZHLY</a>
          <ul class="list-unstyled list-inline ms-auto fw-bold  mt-1" id="more" style="font-size:16px;">

            <li class="list-inline-item mx-4 fw-bold">FOR TEAM</li>


            <li class="list-inline-item mx-4 fw-bold">FOR PERSONAL</li>
            <li class="list-inline-item mx-4 fw-bold">FOR CAREER</li>




          </ul>
        </div>
        <div class="col-3">
            @if(!Auth::check())
          <div class="d-flex justify-content-end">
         <a href="{{route('login')}}" class="btn btn-secondary fw-bold px-5 rounded-pill"><i class="fa-solid fa-arrow-right-from-bracket"></i> Login</a>
            <i class="fa-solid fa-bell  fs-3 mx-4"></i>

          </div>
          @else
          <div class="dropdown mt-2 d-flex justify-content-end">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
             Profile
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('home')}}">Home</a></li>

              <li><a class="dropdown-item" href="{{route('user-dashboard')}}">Dashboard</a></li>
              <li><a class="dropdown-item" href="{{route('community')}}">Community</a></li>

              <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
            </ul>
          </div>
          @endif

        </div>
      </div>
    </div>

</nav>
</div>

  <nav class="navbar bg-body-none  p-3 border-bottom border-3 border-dark mob-header" style="background: #fefaef;">
    <div class="container-fluid">
      <a class="navbar-brand fs-1 fw-bold" href="{{route('home')}}">TEZHLY</a>


      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar1" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar1" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">TEZHLY</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 fw-bold">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('about')}}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('courses')}}">Courses</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('resume-ai-builder')}}">Resume Ai Builder</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('goal-plan')}}">Goal Plan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('my-matches')}}">My Matches</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('pricing')}}">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('faqs')}}">FAQs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('contact')}}">Contact</a>
              </li>

              @if(!Auth::check())
              <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">Login</a>
              </li>
              @else
              <li class="nav-item">
                <a class="nav-link" href="{{route('logout')}}">Logout</a>
              </li>
              @endif
              <li class="nav-item">
                <a class="nav-link" href="{{route('admin-dashboard')}}">Admin Dashboard</a>
              </li>

          </ul>
          <form class="d-flex mt-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </div>
  </nav>
