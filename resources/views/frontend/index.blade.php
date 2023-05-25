@extends('frontend_layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-8 p-0">
            <div class="slider">
                @foreach ($sliders as $slider)
                    <div><img src="{{ asset('uploads/' . $slider->image) }}" alt=""></div>
                @endforeach
            </div>
        </div>
        <div class="col-md-4 p-0">
            <img src="{{ asset('uploads/' . $setting->slider_image) }}" class="img-thumbnail" style="height:100%"
                alt="">
        </div>
    </div>
    <div class="about-us-area pt-50" id="Beranda">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="about-us-img mb-30" data-aos="fade-right">
                        <img src="{{ asset('frontend_assets/img/about/puspaga4.jpg') }}" alt
                            style="width: 100%;object-fit:cover">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="about-us-wrapper mb-30" data-aos="fade-up">
                        <div class="section-title pos-rel mb-35">
                            <span>
                                Pengertian Dan Visi Misi
                            </span>
                            <h2>SELAMAT DATANG DI PUSPAGA</h2>
                        </div>
                        <div class="setting">
                            <div class="about-us-text pos-rel">
                                <span>Pengertian Puspaga</span>
                                <br>
                                {!! $setting->pengertian !!}
                            </div>
                            <div class="about-us-text pos-rel">
                                <span>Visi Puspaga</span>
                                <div>
                                    {!! $setting->visi !!}
                                </div>
                                <br>
                                <span>Misi Puspaga</span>
                                <div>
                                    {!! $setting->misi !!}
                                </div>
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
    <div class="working-area pt-125 pb-95">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 offset-lg-2 offset-xl-2">
                    <div class="section-title section-2 text-center pos-rel mr-60 ml-60 mb-75">
                        <span class="border-left-1"></span>
                        <span>Layanan Kami</span>
                        <span class="border-right-1"></span>
                        <h2>Konsultasi Dan Pembelajaran </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="working-wrapper text-center mb-30">
                        <div class="working-img">
                            <img src="{{ asset('frontend_assets/img/working/01.png') }}" alt="">
                        </div>
                        <div class="working-text">
                            <h3>Konsultasi</h3>
                            <p>Konsultasi adalah langkah bijak untuk mencari pemahaman lebih dalam. Kami siap membantu Anda.
                                Silakan daftarkan diri Anda, sehingga kami dapat berdiskusi secara pribadi setelah kami
                                melakukan penelusuran awal</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="working-wrapper text-center mb-30">
                        <div class="working-img">
                            <img src="{{ asset('frontend_assets/img/working/02.png') }}" alt="">
                        </div>
                        <div class="working-text">
                            <h3>Pembelajaran</h3>
                            <p>Pembelajaran adalah kunci untuk pertumbuhan dan pengembangan diri. Dapatkan kesempatan
                                belajar melalui ebook dan publikasi yang kami sediakan di Puspaga. Tingkatkan pengetahuan
                                Anda dan raih potensi terbaik Anda</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="project-02-area pt-125 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 offset-lg-2 offset-xl-2">
                    <div class="section-title section-2 text-center pos-rel mr-60 ml-60 mb-75">
                        <span class="border-left-1"></span>
                        <span>Publikasi</span>
                        <span class="border-right-1"></span>
                        <h2>Publikasi SIPUSPAGA</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                @foreach ($beritas as $berita)
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-project single-02-project">
                            <div class="project-img">
                                <a href="{{ route('detailBerita', $berita->id) }}"><img
                                        style="height: 300px;width: 100%;object-fit: cover;"
                                        src="{{ asset('uploads/' . $berita->image) }}" alt=""></a>
                            </div>
                            <div class="inner-project">
                                <div class="project-text">
                                    <div class="project-link-info">
                                    </div>
                                    <div class="project-content">
                                        <h3><a href="{{ route('detailBerita', $berita->id) }}"
                                                style="font-size:1rem">{{ $berita->title }}</a>
                                        </h3>
                                    </div>
                                    <div class="project-button">
                                        <div class="b-button b-02-button f-left">
                                            <a href="{{ route('detailBerita', $berita->id) }}">Baca Lebih Lanjut</a>
                                        </div>
                                        <div class="project-b-button f-right">
                                            <a href="{{ route('detailBerita', $berita->id) }}"><i
                                                    class="far fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="features-02-area pos-rel grey-bg mt-125">
        <div class="container pt-100 pb-100">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div>
                        <div class="about-us-wrapper">
                            <div class="section-title">
                                <span>Tujuan</span>
                                <h2>Tujuan Puspaga</h2>
                            </div>
                            <div class="features-02-link" data-aos="fade-up">
                                {!! $setting->tujuan !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div>
                        <div class="section-title">
                            <span>Tugas Fungsi</span>
                            <h2>Tugas Fungsi Puspaga</h2>
                        </div>
                        <div class="features-02-link" data-aos="fade-up">
                            {!! $setting->tugas_fungsi !!}
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
                <div class="col-md-6">
                    <div class="newsletters-text mb-30">
                        <div class="section-title white-title pos-rel mb-35">
                            <h2>Buat Konsultasi Anda</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
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
@endsection
