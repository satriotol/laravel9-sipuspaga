<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <title>PUSPAGA - Pusat Pembelajaran Keluarga</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend_assets/img/logo/logokota.png') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/slick.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/responsive.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        html {
            scroll-behavior: smooth
        }
    </style>
</head>

<body>
    <main>
        @include('frontend_layouts.navbar')
        @yield('content')

        @include('frontend_layouts.footer')
        <script src="{{ asset('frontend_assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
        <script src="{{ asset('frontend_assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('frontend_assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('frontend_assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('frontend_assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('frontend_assets/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('frontend_assets/js/slick.min.js') }}"></script>
        <script src="{{ asset('frontend_assets/js/jquery.meanmenu.min.js') }}"></script>
        <script src="{{ asset('frontend_assets/js/ajax-form.js') }}"></script>
        <script src="{{ asset('frontend_assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('frontend_assets/js/waypoints.min.js') }}"></script>
        <script src="{{ asset('frontend_assets/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('frontend_assets/js/jquery.scrollUp.min.js') }}"></script>
        <script src="{{ asset('frontend_assets/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('frontend_assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('frontend_assets/js/plugins.js') }}"></script>
        <script src="{{ asset('frontend_assets/js/main.js') }}"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <script>
            $('.setting').slick({
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 1,
                adaptiveHeight: true
            });
        </script>
    </main>
</body>

</html>
