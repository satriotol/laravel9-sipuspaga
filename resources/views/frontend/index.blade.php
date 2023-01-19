<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PUSPAGA - Pusat Pembelajaran Keluarga</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{ asset('frontend_assets/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('frontend_assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('frontend_assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('frontend_assets/css/style.css') }}" rel="stylesheet">

    <!-- Link Icon -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

</head>

<div>
    <!-- Topbar Start -->
    <div class="container-fluid bg-secondary ps-5 pe-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body py-2 pe-3 border-end fa-brands fa-facebook" href=""></a>
                    <a class="text-body py-2 px-3 border-end fa-brands fa-instagram"
                        href="http://instagram.com/dp3a_kotasemarang"></a>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-end">
                <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5">
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0"><i class="fa fa-envelope-open me-2"></i>@semarangkota.go.id</p>
                    </div>
                    <div class="py-2">
                        <p class="m-0"><i class="fa fa-phone-alt me-2"></i>+012 345 6789</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="index.html" class="navbar-brand p-0">
            <h1 class="m-0 text-uppercase text-primary"><img class="pemkot"
                    src="{{ asset('frontend_assets/img/logopemkot.jpg') }}"
                    style="width: 80px; height: 60px;"></i>PUSPAGA</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 me-n3">
                <a href="index.html" class="nav-item nav-link active">Beranda</a>
                <a href="#about" class="nav-item nav-link">Tentang</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Halaman</a>
                    <div class="dropdown-menu m-0">
                        <a href="#lokasi_pelayanan" class="dropdown-item">Lokasi Pelayanan</a>
                        <a href="#siapa" class="dropdown-item">Tujuan Pelayanan</a>
                        <a href="#bagaimana" class="dropdown-item">Tata Cara</a>
                        <a href="#siapa_kapan" class="dropdown-item">Siapa dan Kapan</a>
                        <a href="#bentuk_pelayanan" class="dropdown-item">Bentuk Pelayanan</a>
                    </div>
                </div>
                <a href="#kontak" class="nav-item nav-link">Kontak</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('frontend_assets/img/puspaga.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('frontend_assets/img/puspaga2.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid bg-secondary p-0" id="about">
        <div class="row g-0">
            <div class="col-lg-6 py-6 px-5">
                <h1 class="display-5 mb-4">Selamat Datang di <span class="text-primary">PUSPAGA</span></h1>
                {{-- <h4 class="text-primary mb-4">APA ITU PUSPAGA</h4> --}}
                <p class="mb-4">Tempat pembelajaran untuk meningkatkan kehidupan keluarga yang dilakukan oleh tenaga
                    profesional melalui peningkatan kapasitas orang tua/keluarga atau orang yang bertanggung jawab dalam
                    mengasuh dan melindungi anak.</p>
                <a href="" class="btn btn-primary py-md-3 px-md-5 rounded-pill">Dimana Melayaninya? -></a>
            </div>
            <div class="col-lg-6" id="lokasi_pelayanan">
                <div class="h-100 d-flex flex-column justify-content-center bg-primary p-5">
                    <div class="d-flex text-white mb-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4"
                            style="width: 60px; height: 60px;">
                            <i class="fa-sharp fa-solid fa-building fs-4"></i>
                        </div>
                        <div class="ps-4">
                            <h3>PUSPAGA Provinsi (Rujukan Lanjutan)</h3>
                            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat ipsum
                                lorem et sit sed stet lorem sit clita duo</p>
                        </div>
                    </div>
                    <div class="d-flex text-white mb-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4"
                            style="width: 60px; height: 60px;">
                            <i class="fa-solid fa-city fs-4"></i>
                        </div>
                        <div class="ps-4">
                            <h3>PUSPAGA Kab/Kota (Kecamatan, Desa, Kelurahan)</h3>
                            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat ipsum
                                lorem et sit sed stet lorem sit clita duo</p>
                        </div>
                    </div>
                    <div class="d-flex text-white">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4"
                            style="width: 60px; height: 60px;">
                            <i class="fa-sharp fa-solid fa-user-friends fs-4"></i>
                        </div>
                        <div class="ps-4">
                            <h3>Pengguna/Keluarga</h3>
                            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat ipsum lorem et sit sed stet lorem sit clita duo</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div class="container-fluid pt-6 px-5" id="siapa">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h4 class="display-5 mb-0">Siapa yang dilayani?</h4>
            <hr class="w-25 mx-auto bg-primary">
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4"
                        style="width: 90px; height: 90px;">
                        <i class="fa fa-child-reaching fa-2x"></i>
                    </div>
                    <h3 class="mb-3">Anak</h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4"
                        style="width: 90px; height: 90px;">
                        <i class="fa-solid fa-user-friends fa-2x"></i>
                    </div>
                    <h3 class="mb-3">Keluarga</h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4"
                        style="width: 90px; height: 90px;">
                        <i class="fa-solid fa-user-clock fa-2x"></i>
                    </div>
                    <h3 class="mb-3">Calon Keluarga</h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4"
                        style="width: 90px; height: 90px;">
                        <i class="fa-solid fa-school fa-2x"></i>
                    </div>
                    <h3 class="mb-3">Sekolah</h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4"
                        style="width: 90px; height: 90px;">
                        <i class="fa fa-balance-scale fa-2x"></i>
                    </div>
                    <h3 class="mb-3">Lembaga Penyedia Layanan Anak dan Keluarga</h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4"
                        style="width: 90px; height: 90px;">
                        <i class="fa-solid fa-city fa-2x"></i>
                    </div>
                    <h3 class="mb-3">Pemerintah Daerah</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <div class="container-fluid bg-secondary p-0" id="bagaimana">
        <div class="row g-0">
            <div class="col-lg-6" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="{{ asset('frontend_assets/img/puspaga3.jpg') }}">
                </div>
            </div>
            <div class="col-lg-6 py-6 px-5">
                <h1 class="display-5 mb-4">Bagaimana Melayaninya??</h1>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item">
                        <p class="fs-4 fw-normal mb-4"><i class="fa fa-quote-left text-primary me-3"></i>Pertama, pengguna datang ke PUSPAGA.</p>
                        <div class="d-flex align-items-center">
                            <div class="ps-4">
                                <h3></h3>
                                <span class="text-uppercase"></span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <p class="fs-4 fw-normal mb-4"><i class="fa fa-quote-left text-primary me-3"></i>Selanjutnya, Psiko-edukasi ke Komunitas Keluarga dan "jemput bola", out reach terutama untuk kelompok keluarga rentan.</p>
                        <div class="d-flex align-items-center">
                            <div class="ps-4">
                                <h3></h3>
                                <span class="text-uppercase"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Start -->
    <div class="container-fluid py-6 px-5" id="siapa_kapan">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-0">Siapa dan Kapan</h1>
            <hr class="w-25 mx-auto bg-primary">
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12">
                        <h3 class="text-primary">SIAPA YANG MELAYANI?</h3>
                    </div>
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                            style="width: 60px; height: 60px;">
                            <i class="fa-solid fa-user-group fs-4 text-white"></i>
                        </div>
                        <h7>Minimal Dua Tenaga Profesi (Psikolog)</h7>
                    </div>
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                            style="width: 60px; height: 60px;">
                            <i class="fa-solid fa-user fs-4 text-white"></i>
                        </div>
                        <h7>Dibantu Satu Tenaga Administrasi</h7>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-block bg-primary h-100 text-center">
                    <img class="img-fluid h-100" src="{{ asset('frontend_assets/img/dkksemarang.jpg') }}"
                        alt="">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12">
                        <h3 class="text-primary">KAPAN MELAYANINYA?</h3>
                    </div>
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                            style="width: 60px; height: 60px;">
                            <i class="fa-solid fa-sun fs-4 text-white"></i>
                        </div>
                        <h7>Jam Kerja</h7>
                    </div>
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                            style="width: 60px; height: 60px;">
                            <i class="fa-solid fa-moon fs-4 text-white"></i>
                        </div>
                        <h7>Di Luar Jam Kerja (Sistem Piket)</h7>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Start -->


    <!-- Quote Start -->
    <div class="container-fluid bg-secondary px-0" id="bentuk_pelayanan">
        <div class="row g-0">
            <div class="col-lg-6 py-6 px-5">
                <h1 class="display-5 mb-4">Apa Bentuk Pelayanannya?</h1>
                <p class="mb-4">1. Hak Sipil dan Kebebasan<br>2. Lingkungan, Keluarga, dan Pengasuhan
                    Alternatif<br>3. Kesehatan Dasar dan Kesejahteraan<br>4. Pendidikan, Pemanfaatan Waktu Luang, dan
                    Kegiatan Budaya</p>
            </div>
            <div class="col-lg-6" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="{{ asset('frontend_assets/img/puspaga4.jpg') }}"
                        style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->






    <!-- Footer Start -->
    <div class="container-fluid bg-primary text-secondary p-5">
        <div class="row g-5">
            <div class="col-12 text-center">
                <h1 class="display-5 mb-4">Kritik dan Saran</h1>
                <form class="mx-auto" style="max-width: 600px;">
                    <div class="input-group">
                        <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                        <button class="btn btn-dark px-4">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-secondary p-5" id="kontak">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Akses Cepat</h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-secondary mb-2" href="#"><i
                            class="bi bi-arrow-right text-primary me-2"></i>Beranda</a>
                    <a class="text-secondary mb-2" href="#about"><i
                            class="bi bi-arrow-right text-primary me-2"></i>Tentang</a>
                    <a class="text-secondary mb-2" href="#lokasi_pelayanan"><i
                            class="bi bi-arrow-right text-primary me-2"></i>Lokasi Pelayanan</a>
                    <a class="text-secondary mb-2" href="#siapa"><i
                            class="bi bi-arrow-right text-primary me-2"></i>Tujuan Pelayanan</a>
                    <a class="text-secondary mb-2" href="#bagaimana"><i
                            class="bi bi-arrow-right text-primary me-2"></i>Tata Cara</a>
                    <a class="text-secondary mb-2" href="#siapa_kapan"><i
                            class="bi bi-arrow-right text-primary me-2"></i>Siapa dan Kapan</a>
                    <a class="text-secondary mb-2" href="#bentuk_pelayanan"><i
                            class="bi bi-arrow-right text-primary me-2"></i>Bentuk Pelayanan</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Link Populer</h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-secondary mb-2" href="#"><i
                            class="bi bi-arrow-right text-primary me-2"></i>Beranda</a>
                    <!-- <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Tentang</a>
                    <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Lokasi Pelayanan</a>
                    <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Tujuan Pelayanan</a>
                    <a class="text-secondary" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Tata Cara</a>
                    <a class="text-secondary" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Siapa dan Kapan</a>
                    <a class="text-secondary" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Bentuk Pelayanan</a> -->
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Alamat</h3>
                <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>Jl. Prof. Sudarto No.116, Sumurboto,
                    Kec. Banyumanik, Kota Semarang, Jawa Tengah 50269</p>
                <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>@semarangkota.go.id</p>
                <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>+012 345 67890</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Ikuti Kami</h3>
                <div class="d-flex">
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i
                            class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i
                            class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i
                            class="fab fa-instagram fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-secondary text-center border-top py-4 px-5"
        style="border-color: rgba(256, 256, 256, .1) !important;">
        <p class="m-0">&copy; <a class="text-secondary border-bottom" href="#">Kota Semarang</a>. All Rights
            Reserved. Designed by <a class="text-secondary border-bottom" href="https://htmlcodex.com">Diskominfo Kota
                Semarang</a></p>
    </div>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend_assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>

</html>
