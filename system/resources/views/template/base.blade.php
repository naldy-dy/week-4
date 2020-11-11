
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{url('public')}}/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="{{url('public')}}/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Paper Dashboard 2 by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{url('public')}}/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="{{url('public')}}/assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{url('public')}}/assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    @include('template.section.sidebar')
    <div class="main-panel" style="height: 100vh;">
     
     <!-- nav -->
      @include('template.section.header')
     <!-- end nav -->

      <div class="content">
        <div class="row">
          <div class="col-md-12">
            @yield('content')
          </div>
        </div>
      </div>
      @include('template.section.footer')
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{url('public')}}/assets/js/core/jquery.min.js"></script>
  <script src="{{url('public')}}/assets/js/core/popper.min.js"></script>
  <script src="{{url('public')}}/assets/js/core/bootstrap.min.js"></script>
  <script src="{{url('public')}}/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="{{url('public')}}/assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="{{url('public')}}/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{url('public')}}/assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
</body>

</html>
