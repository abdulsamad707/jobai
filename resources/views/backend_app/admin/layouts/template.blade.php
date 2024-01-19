<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
<title>Tezhly :: Admin Dashboard</title>
<link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
<link rel="stylesheet" href="{{asset('backend_assets/assets/plugins/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('backend_assets/assets/plugins/morrisjs/morris.css')}}" />
<link rel="stylesheet" href="{{asset('backend_assets/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css')}}"/>
<!-- Custom Css -->
<link rel="stylesheet" href="{{asset('backend_assets/assets/css/main.css')}}">
<link rel="stylesheet" href="{{asset('backend_assets/assets/css/color_skins.css')}}">
<link rel="stylesheet" href="{{asset('backend_assets/assets/plugins/bootstrap-select/css/bootstrap-select.css')}}">
<script src="https://kit.fontawesome.com/003e68ae06.js" crossorigin="anonymous"></script>
</head>
<body class="theme-black">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30 "><h2 class="text-white fs-1 fw-bold d-block">TEZHLY</h2></div>
        <p>Please wait...</p>
    </div>
</div>
@include('backend_app.admin.layouts.header')
@if(session('success'))
<div class="toast show" id="success" style="position: absolute;
right: 20px;
z-index: 9999;
top: 15px;" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
        <i class="fa-solid fa-circle-check text-success fs-5" style="margin-right:5px;"></i>
      <strong class="me-auto">Success</strong>
      <small class="mx-3">1 sec ago</small>

    </div>
    <div class="toast-body">
        {{ session('success') }}
    </div>
  </div>
@endif
@if(session('error'))
<div class="toast show" id="success" style="position: absolute;
right: 20px;
z-index: 9999;
top: 15px;" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
        <i class="fa-solid fa-circle-exclamation text-danger fs-5" style="margin-right:5px;"></i>

      <strong class="me-auto">Error</strong>
      <small class="mx-3">1 sec ago</small>

    </div>
    <div class="toast-body">
        {{ session('error') }}
    </div>
  </div>
@endif
@yield('content')


@include('backend_app.admin.layouts.footer')

<!-- Main Content -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.tiny.cloud/1/t8dblobhkcxvbbhrazojj9b04ieji4j69cycmor6ms2050nq/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
<script>
      $(document).ready(function() {
        setTimeout(function() {
  var successDiv = document.getElementById('success');
  if (successDiv) {
    successDiv.style.display = 'none';
  }
}, 3000);
         });
  tinymce.init({
    selector: '#textarea',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
  });
</script>
<!-- Jquery Core Js -->
<script src="{{asset('backend_assets/assets/bundles/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->
<script src="{{asset('backend_assets/assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="{{asset('backend_assets/assets/bundles/knob.bundle.js')}}"></script> <!-- Jquery Knob-->
<script src="{{asset('backend_assets/assets/bundles/jvectormap.bundle.js')}}"></script> <!-- JVectorMap Plugin Js -->
<script src="{{asset('backend_assets/assets/bundles/morrisscripts.bundle.js')}}"></script> <!-- Morris Plugin Js -->
<script src="{{asset('backend_assets/assets/bundles/sparkline.bundle.js')}}"></script> <!-- sparkline Plugin Js -->
<script src="{{asset('backend_assets/assets/bundles/doughnut.bundle.js')}}"></script>

<script src="{{asset('backend_assets/assets/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{asset('backend_assets/assets/js/pages/index.js')}}"></script>
<script src="{{asset('backend_assets/bundles/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js -->
<script src="{{asset('backend_assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js -->

<script src="{{asset('assets/plugins/ckeditor/ckeditor.js')}}"></script> <!-- Ckeditor -->

<script src="{{asset('assets/js/pages/forms/editors.js')}}"></script>
</body>
</html>
