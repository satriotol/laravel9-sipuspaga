@extends('frontend_layouts.main')
@push('css')
    <style>
        img.img-berita {
            transition: 0.3s;
        }

        img.img-berita:hover {
            height: 400px;
        }
    </style>
@endpush
@section('content')
    @include('frontend.breadcumb', [
        'mainTitle' => 'Galeri',
    ])
    <!-- breadcrumb-area-end -->
    <!-- blog-area start -->
    <section class="blog-area pt-120 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        @foreach ($galleries as $gallery)
                            <div class="col-md-3">
                                <article class="postbox post format-image mb-40"
                                    style="box-shadow: -9px 14px 13px -3px rgba(0, 0, 0, 0.35);">
                                    <div class="postbox__thumb">
                                        <a href="{{ route('detailGaleri', $gallery->id) }}">
                                            <img src="{{ asset('uploads/' . $gallery->gallery_images->first()->image) }}"
                                                class="img-berita" height="200px" style="object-fit: cover"
                                                alt="blog image">
                                        </a>
                                    </div>
                                    <div class="postbox__text p-30">
                                        <div class="post-meta mb-15">
                                            <span><i class="far fa-calendar-check"></i> {{ $gallery->created_at }} </span>
                                        </div>
                                        <h3 class="blog-title">
                                            <a href="{{ route('detailGaleri', $gallery->id) }}">{{ $gallery->title }}</a>
                                        </h3>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>
                    <div class="">
                        {!! $galleries->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
