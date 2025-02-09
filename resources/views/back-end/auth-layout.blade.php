<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title') - Samlik Engineering</title>
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <!-- Nucleo Icons -->
        <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-icons.css" rel="stylesheet" />
        <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-svg.css" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <!-- CSS Files -->
        <link id="pagestyle" href="{{asset('argon/assets/css/argon-dashboard.css?v=2.1.0')}}" rel="stylesheet" />
  <!-- You can include additional CSS or custom styling here -->
</head>
<body class="bg-default">
  @yield('content')
  <script src="{{asset('argon/assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('argon/assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('argon/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset('argon/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script src="{{asset('argon/assets/js/plugins/chartjs.min.js')}}"></script>
  <script src="{{asset('argon/assets/js/argon-dashboard.min.js?v=2.1.0')}}"></script>
  <!-- Include any additional JS scripts if needed -->
</body>
</html>
