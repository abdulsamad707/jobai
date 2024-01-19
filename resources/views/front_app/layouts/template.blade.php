<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <style>
        @font-face {
    font-family: 'Futra'; /* Name the font family */
    src: url('{{asset('futura-black_Ft7eU/Futura Black.ttf')}}') format('truetype'); /* Path to your font file */
    /* You can define different font weights and styles if applicable */
}
    </style>
</head>
<body>

    <!-- preloader ending here -->

    <!-- common spinner -->

    <!-- Common Sidebar Demo -->


    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="icofont-rounded-up"></i></a>

    @include('front_app.layouts.header')
    @yield('content')
    @include('front_app.layouts.footer')
    @if(session('success'))
    <div class="toast show fixed-bottom" id="success" style="z-index: 99999;" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <i class="fa-solid fa-circle-check text-success me-2"></i>
          <strong class="me-auto text-success"> Success</strong>
          <small>1 sec ago</small>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            {{ session('success') }}
        </div>
      </div>
      @endif
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
         $(document).ready(function() {
        setTimeout(function() {
  var successDiv = document.getElementById('success');
  if (successDiv) {
    successDiv.style.display = 'none';
  }
}, 3000);
         });
     window.onscroll = function() {
  const header = document.querySelector('.header');
  const scrollPosition = window.scrollY;

  if (scrollPosition > 100) {
    $("#more").hide(300);
    $("#tezhly").addClass('text-white');
    header.style.background = 'rgba(51, 51, 51, 0.8)'; // Semi-transparent background color for the header
    // Add a blur effect to the header background
  } else {
    header.classList.remove('fixed');
    $("#more").show(500);
    $("#tezhly").removeClass('text-white');
    header.style.background = 'transparent'; // Reset header background
    header.style.backdropFilter = 'none'; // Remove the blur effect
  }

  // Other actions you may have for scrolling
  // For example, changing header height, adding/removing classes, etc.
};

    </script>
</body>
</html>
