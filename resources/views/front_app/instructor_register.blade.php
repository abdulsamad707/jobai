

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tezhly</title>
    <link rel="shortcut icon" href="assets/images/x-icon.png" type="image/x-icon">

    <link rel="stylesheet" href="{{asset('assets/css/plugins/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/icofont.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/lightcase.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendors/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/preloder.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/demo-view.css')}}">
    <script src="https://kit.fontawesome.com/003e68ae06.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('assets/css/style.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>


<nav class="navbar bg-body-none  p-3" style="background: transparent;">
    <div class="container-fluid">
      <a class="navbar-brand fs-1 fw-bold" href="#">TEZHLY</a>
      <i class="fa-solid fa-bell ms-auto fs-2 mx-4"></i>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">TEZHLY</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
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

    <div class=" ">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12">

            <div class="account-wrapper" style="box-shadow:none;">
                <h3 class="title fw-bold py-3">Register Your Acocunt</h3>
                <form method="POST" action="{{ route('register') }}" class="account-form">
                    @csrf
                    <div class="form-group">
                        <input type="text" placeholder="Instructor Name" name="name">
                        @error('username')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Email" name="email">
                        @error('email')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" name="password">
                        @error('password')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Confirm Password" name="password_confirmation">
                        @error('password_confirmation')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <input type="hidden" name="role" value="instructor">
                    <div class="form-group">
                        <button class="lab-btn"><span>Get Started Now</span></button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12">
            <img src="https://static.vecteezy.com/system/resources/previews/011/381/872/original/male-teacher-sitting-in-the-classroom-3d-character-illustration-png.png" alt="">
        </div>
        </div>
    </div>

    <!-- preloader ending here -->

    <!-- common spinner -->

    <!-- Common Sidebar Demo -->


    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="icofont-rounded-up"></i></a>




    <script src="{{asset('assets/js/functions.js')}}"></script>
    <script src="{{asset('assets/js/demo-view.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

