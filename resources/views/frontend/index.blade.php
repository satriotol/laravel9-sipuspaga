<!doctype html>
<html class="no-js" lang="zxx">

<head>
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
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/responsive.css') }}">
</head>

<body>

    <!-- header-start -->
    <header>
        <div id="sticky-header" class="main-menu-area menu-padding pl-55 pr-55">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-lg-3">
                        <div class="header-left mr-40">
                            <div class="logo logo-mt f-left">
                                <a href="#"><img src="{{ asset('frontend_assets/img/logo/logopuspaga.png') }}"
                                        alt="" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-9">
                        <div class="header-right f-right d-none d-lg-block">
                            <div class="header-info f-right">
                                <span><i class="far fa-phone"></i>(024) 76402252 </span>
                            </div>
                            <div class="header-right-img f-right">
                                <img src="{{ asset('frontend_assets/img/shape/line-1.png') }}" alt="">
                            </div>
                            <div class="search-icon f-right d-none d-lg-block">
                                <a href="#" data-toggle="modal" data-target="#search-modal"><i
                                        class="far fa-search"></i></a>
                            </div>
                        </div>
                        <div class="main-menu text-right">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="active"><a href="#">Beranda</a>
                                    </li>
                                    <li><a href="#Beranda">Tentang</a></li>
                                    <li><a href="#">Halaman<i class="far fa-chevron-down"></i></a>
                                        <ul class="sub-menu text-left">
                                            <li><a href="#siapa_melayani">Siapa yang Melayani?</a>
                                            <li><a href="#bagaimana">Bagaimana Melayaninya?</a>
                                            <li><a href="#kapan">Kapan Melayaninya?</a>
                                            <li><a href="#dimana">Dimana Melayaninya?</a>
                                            <li><a href="#siapadilayani">Siapa yang Dilayani?</a>
                                            <li><a href="#apa">Apa Bentuk Pelayanannya?</a>
                                        </ul>
                                    </li>
                                    <li><a href="#kontak">Kontak</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="extra-info">
            <div class="close-icon">
                <button>
                    <i class="far fa-window-close"></i>
                </button>
            </div>
            <div class="logo-side mb-30">
                <a href="#">
                    <img src="{{ asset('frontend_assets/img/logo/white.png') }}" alt="" />
                </a>
            </div>
            <div class="side-info mb-30">
                <div class="contact-list mb-30">
                    <h4>Office Address</h4>
                    <p>123/A, Miranda City Likaoli
                        Prikano, Dope</p>
                </div>
                <div class="contact-list mb-30">
                    <h4>Phone Number</h4>
                    <p>+0989 7876 9865 9</p>
                    <p>+(090) 8765 86543 85</p>
                </div>
                <div class="contact-list mb-30">
                    <h4>Email Address</h4>
                    <p>info@example.com</p>
                    <p>example.mail@hum.com</p>
                </div>
            </div>
            <div class="instagram">
                <a href="#">
                    <img src="{{ asset('frontend_assets/img/portfolio/p1.jpg') }}" alt="">
                </a>
                <a href="#">
                    <img src="{{ asset('frontend_assets/img/portfolio/p2.jpg') }}" alt="">
                </a>
                <a href="#">
                    <img src="{{ asset('frontend_assets/img/portfolio/p3.jpg') }}" alt="">
                </a>
                <a href="#">
                    <img src="{{ asset('frontend_assets/img/portfolio/p4.jpg') }}" alt="">
                </a>
                <a href="#">
                    <img src="{{ asset('frontend_assets/img/portfolio/p5.jpg') }}" alt="">
                </a>
                <a href="#">
                    <img src="{{ asset('frontend_assets/img/portfolio/p6.jpg') }}" alt="">
                </a>
            </div>
            <div class="social-icon-right mt-20">
                <a href="#">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#">
                    <i class="fab fa-google-plus-g"></i>
                </a>
                <a href="#">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
    </header>
    <!-- header-start -->

    <main>

        <!-- slider-start -->
        <div class="slider-area">
            <div class="slider-active">
                <div class="single-slider slider-height d-flex align-items-center"
                    style="background-image:url({{ asset('frontend_assets/img/slider/balkot.jpg') }})">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-10 col-lg-10 ">
                                <div class="slider-content pos-rel">
                                    <h2 data-animation="fadeInLeft" data-delay=".3s">Selamat Datang di
                                        Website<span>PUSPAGA</span> </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider slider-height d-flex align-items-center"
                    style="background-image:url({{ asset('frontend_assets/img/slider/balkot.jpg') }})">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-10 col-lg-10 ">
                                <div class="slider-content pos-rel">
                                    <h2 data-animation="fadeInLeft" data-delay=".3s">Selamat Datang di
                                        Website<span>PUSPAGA</span> </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider-start -->

        <!-- about-us-area-start -->
        <div class="about-us-area pt-50" id="Beranda">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="about-us-img mb-30">
                            <img src="{{ asset('frontend_assets/img/about/puspaga4.jpg') }}" alt
                                style="height: 400px; width: 600px;">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="about-us-wrapper mb-30">
                            <div class="section-title pos-rel mb-35">
                                <h1></h1>
                                <span class="line">Tentang</span>
                                <h2>SELAMAT DATANG DI PUSPAGA</h2>
                            </div>
                            <div class="about-us-text pos-rel">
                                <span>Apa Itu Puspaga?</span>
                                <p>Tempat pembelajaran untuk meningkatkan kehidupan keluarga yang dilakukan oleh tenaga
                                    profesional melalui peningkatan kapasitas orang tua/keluarga atau orang yang
                                    bertanggung jawab dalam mengasuh dan melindungi anak.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about-us-area-end -->

        <!-- section-area-start -->
        <div class="section-area theme-bg pt-125">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 offset-lg-2 offset-xl-2">
                        <div class="section-title white-title section-2 text-center pos-rel mr-80 ml-80">
                            <h1></h1>
                            <span class="border-left-1 border-left-white"></span>
                            <span>Halaman</span>
                            <span class="border-right-1 border-right-white"></span>
                            <h2>Kami Sangat Terpercaya Dalam Pelayanan Kami</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section-area-end -->

        <!-- services-area-start -->
        <div class="services-area services-padding ml-160 mr-160" id="siapa_melayani">
            <div class="container-fluid">
                <div class="row services-active">
                    <div class="col-xl-12">
                        <div class="services-wrapper text-center mb-30">
                            <div class="services-img pos-rel">
                                <img src="{{ asset('frontend_assets/img/hover/hover1.jpg') }}" alt="">
                                <div class="services-text" style="top: 0; text-align: left; height:100%">
                                    <h1>01</h1>
                                    <h2>Siapa yang Melayani?</h2>
                                    <p>1. Minimal Dua Tenaga Profesi (Psikolog)<br>2. Dibantu Satu Tenaga Administrasi
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12" id="bagaimana">
                        <div class="services-wrapper text-center mb-30">
                            <div class="services-img pos-rel">
                                <img src="{{ asset('frontend_assets/img/hover/hover1.jpg') }}" alt="">
                                <div class="services-text" style="top: 0; text-align: left; height:100%">
                                    <h1>02</h1>
                                    <h2>Bagaimana Melayaninya?</h2>
                                    <p>1. Pengguna Datang ke Puspaga.<br>2. Psiko-edukasi ke Komunitas Keluarga dan
                                        "Jemput Bola"; Out Reach Terutama untuk Kelompok Keluarga Rentan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12" id="dimana">
                        <div class="services-wrapper text-center mb-30">
                            <div class="services-img pos-rel">
                                <img src="{{ asset('frontend_assets/img/hover/hover1.jpg') }}" alt="">
                                <div class="services-text" style="top: 0; text-align: left; height:100%">
                                    <h1>03</h1>
                                    <h2>Dimana Melayaninya?</h2>
                                    <p>1. Puspaga Provinsi (Rujukan Lanjutan)<br>2. Puspaga Kab/Kota (Kecamatan, Desa,
                                        Kelurahan)<br>3. Pengguna/Keluarga</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12" id="kapan">
                        <div class="services-wrapper text-center mb-30">
                            <div class="services-img pos-rel">
                                <img src="{{ asset('frontend_assets/img/hover/hover1.jpg') }}" alt="">
                                <div class="services-text" style="top: 0; text-align: left; height:100%">
                                    <h1>04</h1>
                                    <h2>Kapan Melayaninya?</h2>
                                    <p>1. Jam Kerja<br>2. Di Luar Jam Kerja (Sistem Piket)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="services-wrapper text-center mb-30">
                            <div class="services-img pos-rel">
                                <img src="{{ asset('frontend_assets/img/hover/hover1.jpg') }}" alt="">
                                <div class="services-text" style="top: 0; text-align: left; height:100%">
                                    <h1>01</h1>
                                    <h2>Siapa yang Melayani?</h2>
                                    <p>1. Minimal Dua Tenaga Profesi (Psikolog)<br>2. Dibantu Satu Tenaga Administrasi
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="services-wrapper text-center mb-30">
                            <div class="services-img pos-rel">
                                <img src="{{ asset('frontend_assets/img/hover/hover1.jpg') }}" alt="">
                                <div class="services-text" style="top: 0; text-align: left; height:100%">
                                    <h1>02</h1>
                                    <h2>Bagaimana Melayaninya?</h2>
                                    <p>1. Pengguna Datang ke Puspaga.<br>2. Psiko-edukasi ke Komunitas Keluarga dan
                                        "Jemput Bola"; Out Reach Terutama untuk Kelompok Keluarga Rentan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="services-wrapper text-center mb-30">
                            <div class="services-img pos-rel">
                                <img src="{{ asset('frontend_assets/img/hover/hover1.jpg') }}" alt="">
                                <div class="services-text" style="top: 0; text-align: left; height:100%">
                                    <h1>03</h1>
                                    <h2>Dimana Melayaninya?</h2>
                                    <p>1. Puspaga Provinsi (Rujukan Lanjutan)<br>2. Puspaga Kab/Kota (Kecamatan, Desa,
                                        Kelurahan)<br>3. Pengguna/Keluarga</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="services-wrapper text-center mb-30">
                            <div class="services-img pos-rel">
                                <img src="{{ asset('frontend_assets/img/hover/hover1.jpg') }}" alt="">
                                <div class="services-text" style="top: 0; text-align: left; height:100%">
                                    <h1>04</h1>
                                    <h2>Kapan Melayaninya?</h2>
                                    <p>1. Jam Kerja<br>2. Di Luar Jam Kerja (Sistem Piket)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- services-area-end -->

        <!-- features-02-area-start -->
        <div class="features-02-area pos-rel grey-bg mt-125">
            <div class="features-bg-img"
                style="background-image:url({{ asset('frontend_assets/img/bg/bg-04.jpg') }})">
                <div class="play-video-icon">
                </div>
            </div>
            <div class="container-fluid" id="siapadilayani">
                <div class="row">
                    <div class="col-xl-6 offset-xl-6 col-lg-6 offset-lg-6">
                        <div class="features-02-wrapper">
                            <div class="about-us-wrapper">
                                <div class="section-title pos-rel mb-35">
                                    <span>Siapa yang Dilayani?</span>
                                    <h2>Siapapun Akan Kami Bantu Dengan Tulus dan Ikhlas</h2>
                                </div>
                                <div class="features-02-link">
                                    <ul>
                                        <li>
                                            <div class="features-02-icon f-left l-0">
                                                <i class="far fa-baby"></i>
                                            </div>
                                            <div class="features-02-info" style="padding-bottom: 1px;">
                                                <h3>Anak</h3>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="features-02-icon f-left l-0">
                                                <i class="fal fa-users"></i>
                                            </div>
                                            <div class="features-02-info" style="padding-bottom: 1px;">
                                                <h3>Keluarga</h3>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="features-02-icon f-left">
                                                <i class="far fa-user-friends"></i>
                                            </div>
                                            <div class="features-02-info" style="padding-bottom: 1px;">
                                                <h3>Calon Keluarga</h3>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="features-02-icon f-left">
                                                <i class="far fa-school"></i>
                                            </div>
                                            <div class="features-02-info" style="padding-bottom: 1px;">
                                                <h3>Sekolah</h3>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="features-02-icon f-left">
                                                <i class="fal fa-university"></i>
                                            </div>
                                            <div class="features-02-info" style="padding-bottom: 1px;">
                                                <h3>Lembaga Penyedia Layanan Anak dan Keluarga</h3>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="features-02-icon f-left">
                                                <i class="far fa-city"></i>
                                            </div>
                                            <div class="features-02-info" style="padding-bottom: 1px;">
                                                <h3>Pemerintah Daerah</h3>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- features-02-area-end -->

        <!-- skills-area-start -->
        <div class="skills-area grey-bg pos-rel" id="apa">
            <div class="skills-bg-img" style="background-image:url({{ asset('frontend_assets/img/bg/bg-05.jpg') }})">
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="skills-wrapper">
                            <div class="section-title pos-rel mb-40">
                                <span>Apa Bentuk Pelayanannya?</span>
                                <h2>Kami Mengutamakan Prinsip Profesional</h2>
                            </div>
                            <div class="features-02-link">
                                <ul>
                                    <li>
                                        <div class="features-02-icon f-left l-0">
                                            <i class="fal fa-child"></i>
                                        </div>
                                        <div class="features-02-info" style="padding-bottom: 30px;">
                                            <h3>Hak Sipil dan Kebebasan</h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="features-02-icon f-left l-0">
                                            <i class="far fa-city"></i>
                                        </div>
                                        <div class="features-02-info" style="padding-bottom: 30px;">
                                            <h3>Lingkungan, Keluarga, dan Pengasuhan Alternatif</h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="features-02-icon f-left">
                                            <i class="far fa-medkit"></i>
                                        </div>
                                        <div class="features-02-info" style="padding-bottom: 30px;">
                                            <h3>Kesehatan Dasar dan Kesejahteraan</h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="features-02-icon f-left">
                                            <i class="far fa-school"></i>
                                        </div>
                                        <div class="features-02-info" style="padding-bottom: 30px;">
                                            <h3>Pendidikan, Pemanfaatan Waktu Luang, dan Kegiatan Budaya</h3>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- skills-area-end -->

        <!-- newsletters-area-start -->
        <div class="newsletters-area pt-100 pb-70"
            style="background-image:url({{ asset('frontend_assets/img/bg/bg-04.jpg') }})">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="newsletters-text mb-30">
                            <div class="section-title white-title pos-rel mb-35">
                                <h1>PUSPAGA</h1>
                                <h2>Buat Konsultasi Anda</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="single-newsletters mb-30">
                            <div class="newsletter-form">
                                <a href="{{ route('dashboard') }}" class="btn blue-success">Buat
                                    Konsultasi Sekarang<i class="far fa-paper-plane"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- newsletters-area-end -->

        <!-- footer-area-start -->
        <footer>
            <div class="footer-top-area black-bg pt-80 pb-50"
                style="background-image:url({{ asset('frontend_assets/img/bg/bg-04.jpg') }})">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.6282273328147!2d110.42590811431853!3d-7.052896771071706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c00e19e3db1%3A0xde471feee960ce9f!2sDinas%20Pemberdayaan%20Perempuan%20Dan%20Perlindungan%20Anak!5e0!3m2!1sid!2sid!4v1674576110738!5m2!1sid!2sid"
                                width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="footer-wrapper mb-30">
                                <h3 class="footer-title">Link Terkait</h3>
                                <div class="footer-link">
                                    <ul>
                                        <li><a href="https://dp3a.semarangkota.go.id/">DP3A</a></li>
                                        <li><a href="https://semarangkota.go.id/">Semarangkota.go.id</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6" id="kontak">
                            <div class="footer-wrapper mb-30">
                                <h3 class="footer-title">Kontak</h3>
                                <ul class="contact-link">
                                    <li>
                                        <div class="contact-address-icon">
                                            <i class="far fa-phone"></i>
                                        </div>
                                        <div class="contact-address-text">
                                            <span>(024) 76402252</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-address-icon">
                                            <i class="far fa-envelope-open"></i>
                                        </div>
                                        <div class="contact-address-text">
                                            <span>dinasp3a.kotasemarang@gmail.com</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-address-icon">
                                            <i class="far fa-map-marker-alt"></i>
                                        </div>
                                        <div class="contact-address-text">
                                            <span>Jl. Prof. Sudarto No.116, Sumurboto, Kec. Banyumanik, Kota Semarang,
                                                Jawa Tengah 50269</span>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="footer-wrapper mb-30">
                                <h3 class="footer-title">Sosial Media</h3>
                                <div class="footer-icon">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="footer-bottom-area black-soft-bg pt-25 pb-25">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="copyright text-center">
                                <p>Copyright <i class="far fa-copyright"></i> 2023 <a href="#">Puspaga</a>. All
                                    Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-area-end -->

        <!-- Modal Search -->
        <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form>
                        <input type="text" placeholder="Search here...">
                        <button>
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- JS here -->
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
</body>

</html>
