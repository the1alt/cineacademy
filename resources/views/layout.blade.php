<!DOCTYPE html>
<html>

<head>
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  @section('title')
    <title>CineAcademy</title>
  @show
  <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
  <meta name="description" content="AbsoluteAdmin - A Responsive HTML5 Admin UI Framework">
  <meta name="author" content="AbsoluteAdmin">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Font CSS (Via CDN) -->
  <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>
  <link rel="stylesheet" type="text/css"  href="{{asset('vendor/plugins/magnific/magnific-popup.css')}}">
  @section('css')
  @show
  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="{{asset('skin/default_skin/css/theme.css')}}">

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">
  {{-- Ma CSS --}}

  <link rel="stylesheet" href="{{asset('css/main.css')}}" media="screen" title="no title">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

</head>

<body class="blank-page">

  <!-- Start: Main -->
  <div id="main">


    <!-- Start: Header -->
    @include('partial/_header')
    <!-- End: Header -->

    <!-- Start: Sidebar -->
    @include('partial/_sidebar')
    <!-- End: Sidebar -->

    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">
      <section class="content">
        <div class="tray tray-center">
          @section('content')
          @show
        </div>
      </section>
    </section>
  </div>


  @section('js')
  <!-- jQuery -->
  <script src="{{asset('vendor/jquery/jquery-1.11.1.min.js')}}"></script>
  <script src="{{asset('vendor/jquery/jquery_ui/jquery-ui.min.js')}}"></script>

  <!-- Theme Javascript -->
  <script src="{{asset('js/utility/utility.js')}}"></script>
  <script src="{{asset('js/demo/demo.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script>
  <script type="text/javascript">
  jQuery(document).ready(function() {

    "use strict";

    // Init Theme Core
    Core.init();


  });
  </script>
  <!-- END: PAGE SCRIPTS -->
  @show
</body>
</html>
