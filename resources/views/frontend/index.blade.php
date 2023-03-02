@extends('frontend_layouts.main')
@section('content')
    <div class="slider-area">
        <div class="slider-active">
            @foreach ($sliders as $slider)
                <div class="single-slider slider-height d-flex align-items-center"
                    style="background-image:url({{ asset('uploads/' . $slider->image) }})">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-10 col-lg-10 ">
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="about-us-area pt-50" id="Beranda">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="about-us-img mb-30" data-aos="fade-right">
                        <img src="{{ asset('frontend_assets/img/about/puspaga4.jpg') }}" alt
                            style="height: 400px; width: 600px;">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="about-us-wrapper mb-30" data-aos="fade-left">
                        <div class="section-title pos-rel mb-35">
                            <h1></h1>
                            <span class="line">Pengertian Dan Visi Misi</span>
                            <h2>SELAMAT DATANG DI PUSPAGA</h2>
                        </div>
                        <div class="setting">
                            <div class="about-us-text pos-rel">
                                <span>Pengertian Puspaga</span>
                                <p>{{ $setting->pengertian }}</p>
                            </div>
                            <div class="about-us-text pos-rel">
                                <span>Visi Puspaga</span>
                                <p>{{ $setting->visi }}</p>
                                <span>Misi Puspaga</span>
                                <p>{{ $setting->misi }}</p>
                            </div>
                        </div>
                        <div class="newsletter-form">
                            <a href="{{ route('dashboard') }}" target="_blank" class="btn blue-success">Buat
                                Konsultasi Sekarang<i class="far fa-paper-plane"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-area theme-bg pt-125">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 offset-lg-2 offset-xl-2">
                    <div class="section-title white-title section-2 text-center pos-rel mr-80 ml-80">
                        <span class="border-left-1 border-left-white"></span>
                        <span>Tujuan</span>
                        <span class="border-right-1 border-right-white"></span>
                        <h2>Kami Sangat Terpercaya Dalam Pelayanan Kami</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    <div class="features-02-area pos-rel grey-bg mt-125">
        <div class="features-bg-img" style="background-image:url({{ asset('frontend_assets/img/bg/bg-04.jpg') }})">
            <div class="play-video-icon">
            </div>
        </div>
        <div class="container-fluid" id="siapadilayani">
            <div class="row">
                <div class="col-xl-6 offset-xl-6 col-lg-6 offset-lg-6">
                    <div class="features-02-wrapper">
                        <div class="about-us-wrapper">
                            <div class="section-title pos-rel mb-35">
                                <span>Tujuan</span>
                                <h2>Tujuan Puspaga</h2>
                            </div>
                            <div class="features-02-link" data-aos="fade-up">
                                {!! $setting->tujuan !!}
                                {{-- <ul>
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
                                    </ul> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="skills-area grey-bg pos-rel" id="apa">
        <div class="skills-bg-img" style="background-image:url({{ asset('frontend_assets/img/bg/bg-05.jpg') }})">
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="skills-wrapper">
                        <div class="section-title pos-rel mb-40">
                            <span>Tugas Fungsi</span>
                            <h2>Tugas Fungsi Puspaga</h2>
                        </div>
                        <div class="features-02-link" data-aos="fade-up">
                            {!! $setting->tugas_fungsi !!}
                            {{-- <ul>
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
                                </ul> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="newsletters-area pt-100 pb-70"
        style="background-image:url({{ asset('frontend_assets/img/bg/bg-04.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="newsletters-text mb-30">
                        <div class="section-title white-title pos-rel mb-35">
                            <h2>Buat Konsultasi Anda</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="single-newsletters mb-30">
                        <div class="newsletter-form">
                            <a href="{{ route('dashboard') }}" target="_blank" class="btn blue-success">Buat
                                Konsultasi Sekarang<i class="far fa-paper-plane"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
@endsection
