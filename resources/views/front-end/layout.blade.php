<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="{{asset('constrion/assets/icon/favicon.ico')}}">
        <title>Samlik Engineering Serices Ltd.</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="{{asset('constrion/assets/plugins/bootstrap-3.3.4/css/bootstrap.min.css')}}" type='text/css'>
        <link rel="stylesheet" href="{{asset('constrion/assets/css/style.css')}}" type="text/css">
        <script src="{{asset('constrion/assets/js/modernizr.js')}}"></script>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="assets/js/html5shiv.min.js"></script>
            <script src="assets/js/respond.min.js"></script>
            <![endif]-->
    </head>
<body>
    <!-- Header and Navigation -->
    @include('front-end.partials.preloader')
    @include('front-end.partials.top-bar')
    @include('front-end.partials.navbar')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('front-end.partials.footer')

    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>





    <!-- Bootstrap core JavaScript
        ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('constrion/assets/js/jquery-2.1.1.min.js')}}"></script>
	<!-- bootstrap -->
    <script src="{{asset('constrion/assets/plugins/bootstrap-3.3.4/js/bootstrap.min.js')}}"></script>

    <!-- isotope -->
    <script src="{{asset('constrion/assets/plugins/isotope/jquery.isotope.min.js')}}"></script>

    <!-- wow -->
    <script src="{{asset('constrion/assets/plugins/wow/wow.min.js')}}"></script>
	 <!--slider-revolution JS-->
	<script src="{{asset('constrion/assets/plugins/slider-revolution/tools.min.js')}}"></script>
	<script src="{{asset('constrion/assets/plugins/slider-revolution/slider.revolution.min.js')}}"></script>

    <!-- prettyPhoto -->
    <script src="{{asset('constrion/assets/plugins/prettyPhoto/jquery.prettyPhoto.js')}}"></script>

    <!-- owl-carousel -->
	<script src="{{asset('constrion/assets/plugins/owl-carousel/owl.carousel.js')}}"></script>
    <!-- sticky -->
	<script src="{{asset('constrion/assets/plugins/sticky/jquery.sticky.js')}}"></script>

    <!-- Form Validation -->
    <script src="{{asset('constrion/assets/plugins/jquery-validate/jquery.validate.min.js')}}"></script>

    <!-- custom -->
    <script src="{{asset('constrion/assets/js/app.js')}}"></script>
    <script src="{{asset('constrion/assets/js/slider-setting.js')}}"></script>
</body>
</html>
