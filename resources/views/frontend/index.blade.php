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
    <div class="blog-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
                    <div class="section-title section-2 text-center pos-rel ml-60 mr-60 mb-80">
                        <span class="border-left-1"></span>
                        <span>Berita</span>
                        <span class="border-right-1"></span>
                        <h2>Publikasi SIPUSPAGA</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($beritas as $berita)
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="blog-wrapper mb-30">
                            <div class="blog-img">
                                <a href="{{ route('detailBerita', $berita->id) }}"><img
                                        src="{{ asset('uploads/' . $berita->image) }}" alt=""></a>
                                <div class="blog-date">
                                    <a href="{{ route('detailBerita', $berita->id) }}">03 <br> Feb</a>
                                </div>
                                <div class="blog-text">
                                    <h3 class="mb-0"><a
                                            href="{{ route('detailBerita', $berita->id) }}">{{ $berita->title }}</a></h3>
                                    <small>{{ $berita->created_at }}</small>
                                    <div>{!! Str::limit($berita->content, 500, '... ', true) !!}</div>
                                    <div class="b-button b-02-button">
                                        <a href="{{ route('detailBerita', $berita->id) }}">Baca Lebih Lanjut</a>
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
