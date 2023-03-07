@extends('frontend_layouts.main')
@push('css')
    <style>
        img.img-galeri {
            border-radius: 2rem;
            box-shadow: -9px 14px 13px -3px rgba(0, 0, 0, 0.35);
            height: 13rem;
            width: 100%;
            object-fit: cover;
            transition: 0.3s;
        }

        img.img-galeri:hover {
            height: 15rem;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/lightbox2@2.11.4/dist/css/lightbox.min.css" rel="stylesheet">
@endpush
@section('content')
    @include('frontend.breadcumb', [
        'mainTitle' => 'Galeri',
        'subTitle' => $gallery->title,
        'route' => 'galeri',
    ])
    <!-- breadcrumb-area-end -->
    <!-- blog-area start -->
    <section class="blog-area pt-120 pb-80">
        <div class="container">
            <div class="row gallery">
                <div class="col-md-12">
                    <h3>{{ $gallery->title }}</h3>
                </div>
                @foreach ($gallery->gallery_images as $gallery_image)
                    <div class="col-md-4 mb-5">
                        <a href="{{ asset('uploads/' . $gallery_image->image) }}" data-lightbox="example">
                            <img class="img-galeri" src="{{ asset('uploads/' . $gallery_image->image) }}" alt="">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
@push('script')
    <script src="https://cdn.jsdelivr.net/npm/lightbox2@2.11.4/dist/js/lightbox.min.js"></script>
    <script>
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true
        })
    </script>
@endpush
