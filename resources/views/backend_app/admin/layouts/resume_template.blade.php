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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
@include('backend_app.admin.layouts.resume_header')
@yield('content')
<div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">



<!-- Main Content -->
<script src="https://cdn.tiny.cloud/1/t8dblobhkcxvbbhrazojj9b04ieji4j69cycmor6ms2050nq/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
<script>
  tinymce.init({
    selector: '#textarea',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
  });
</script>
<!-- Jquery Core Js -->

<script src="{{asset('backend_assets/assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="{{asset('backend_assets/assets/bundles/mainscripts.bundle.js')}}"></script>

</body>
</html>
