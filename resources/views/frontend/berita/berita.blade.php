@extends('frontend_layouts.main')
@section('content')
    <div class="breadcrumb-area pt-230 pb-240" style="background-image:url({{ asset('frontend_assets/img/bg/bg-10.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-text text-center">
                        <h1>Berita</h1>
                        <ul class="breadcrumb-menu">
                            <li><a href="{{ route('home.index') }}">Beranda</a></li>
                            <li><span>Berita</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->
    <!-- blog-area start -->
    <section class="blog-area pt-120 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        @foreach ($beritas as $berita)
                            <div class="col-md-6">

                                <article class="postbox post format-image mb-40"
                                    style="box-shadow: -9px 14px 13px -3px rgba(0, 0, 0, 0.35);">
                                    <div class="postbox__thumb">
                                        <a href="#">
                                            <img src="{{ asset('uploads/' . $berita->image) }}" height="300px"
                                                style="object-fit: cover" alt="blog image">
                                        </a>
                                    </div>
                                    <div class="postbox__text p-30">
                                        <div class="post-meta mb-15">
                                            <span><i class="far fa-calendar-check"></i> {{ $berita->created_at }} </span>
                                            <span><a href="#"><i class="far fa-comments"></i>
                                                    {{ $berita->berita_category->name }}</a></span>
                                        </div>
                                        <h3 class="blog-title">
                                            <a href="#">{{ $berita->title }}</a>
                                        </h3>
                                        <div class="read-more mt-30">
                                            <a href="">Lihat Selengkapnya</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>
                    <div class="">
                        {!! $beritas->links() !!}
                        {{-- <ul>
                            <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                            <li class="active"><a href="#">01</a></li>
                            <li><a href="#">02</a></li>
                            <li><a href="#">03</a></li>
                            <li><a href="#"><i class="fas fa-ellipsis-h"></i></a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                        </ul> --}}
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 mb-30">
                    <div class="widget mb-40">
                        <form class="search-form">
                            <input type="text" name="title" placeholder="Search..." value="{{ @old('title') }}">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <div class="widget mb-40">
                        <h3 class="widget-title">Kategori</h3>
                        <ul class="service-list">
                            @foreach ($beritaCategories as $beritaCategory)
                                <li>
                                    <a
                                        href="{{ route('berita', ['berita_category_id' => $beritaCategory->id, 'title' => old('title')]) }}">{{ $beritaCategory->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
