<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <link rel="manifest" href="manifest.html" crossorigin>
    <meta name="msapplication-config" content="browserconfig.html">
    <meta name="description" content="Index page">
    <meta name="keywords" content="index, page">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/template/favicon.svg">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <title>Abido</title>
</head>

<body>
    <!-- Preloader Start-->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <div class="loader"></div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.header')
    @include('layouts.header_mobile')
    <main class="main">
        @yield('content')
    </main>
    <!-- Footer-->
    @include('layouts.footer');
    <script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/vendors/modernizr-3.6.0.min.js"></script>
    <script src="{{ asset('assets/js/vendors/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/jquery-migrate-3.3.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/waypoints.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/wow.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/isotope.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/scrollup.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/counterup.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/slick.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/jquery.elevatezoom.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/noUISlider.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/slider.js') }}"></script>
    <script src="{{ asset('assets/js/mainc619.js?v=1.0') }}"></script>
</body>

</html>
