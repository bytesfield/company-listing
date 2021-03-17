<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<link href="http://demo.harnishdesign.net/html/oxyy/images/favicon.png" rel="icon" />
<title>Company Listing - @yield('title')</title>
<meta name="description" content="A simple company listing">
<meta name="author" content="harnishdesign.net">

<!-- Web Fonts
========================= -->
<link rel='stylesheet' href='../../../fonts.googleapis.com/css2a55.css?family=Poppins:100,200,300,400,500,600,700,800,900' type='text/css'>

<!-- Stylesheet
========================= -->
<link rel="stylesheet" type="text/css" href="{{ asset('auth/css/bootstrap.min.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('auth/css/all.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('auth/css/stylesheet.css') }}" />
<!-- Colors Css -->
<link id="color-switcher" type="text/css" rel="stylesheet" href="#" />
</head>
<body>

<!-- Preloader -->
<div class="preloader">
  <div class="lds-ellipsis">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>
</div>
<!-- Preloader End -->

<div id="main-wrapper" class="oxyy-login-register">
  <div class="container-fluid px-0">
    <div class="row no-gutters min-vh-100"> 

      
     @section('content')

     @show
      <!-- Login Form End --> 
    </div>
  </div>
</div>



<!-- Script --> 
<script src="{{ asset('auth/js/jquery.min.js') }}"></script> 
<script src="{{ asset('auth/js/bootstrap.bundle.min.js') }}"></script> 
<!-- Style Switcher --> 
<script src="{{ asset('auth/js/switcher.min.js') }}"></script> 
<script src="{{ asset('auth/js/theme.js') }}"></script>
</body>

</html>