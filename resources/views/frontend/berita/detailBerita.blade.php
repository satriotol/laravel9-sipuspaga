@extends('frontend_layouts.main')
@section('content')
    @include('frontend.breadcumb', [
        'mainTitle' => 'Publikasi',
        'subTitle' => $beritum->title,
        'route' => 'berita',
    ])
    <!-- breadcrumb-area-end -->
    <!-- blog-area start -->
    <section class="blog-area pt-120 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <article class="ostbox post format-image mb-40"
                        style="box-shadow: -9px 14px 13px -3px rgba(0, 0, 0, 0.35);">
                        <div class="text-center">
                            <a href="#">
                                <img src="{{ asset('uploads/' . $beritum->image) }}" class="img-thumbnail"
                                    style="height:400px">
                            </a>
                        </div>
                        <div class="postbox__text p-30">
                            <div class="post-meta mb-15">
                                <span><i class="far fa-calendar-check"></i> {{ $beritum->created_at }} </span>
                                <span><a href="#"><i class="far fa-comments"></i>
                                        {{ $beritum->berita_category->name }}</a></span>
                            </div>
                            <h3 class="blog-title">
                                <a href="#">{{ $beritum->title }}</a>
                            </h3>
                            <div>
                                {!! $beritum->content !!}
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-xl-4 col-lg-4 mb-30">
                    <div class="widget mb-40">
                        <h3 class="widget-title">Berita Lainnya</h3>
                        <ul class="recent-posts">
                            @foreach ($beritas as $berita)
                                <li>
                                    <div class="widget-posts-image">
                                        <a href="{{ route('detailBerita', $berita->id) }}"><img
                                                src="{{ asset('uploads/' . $berita->image) }}" alt=""></a>
                                    </div>
                                    <div class="widget-posts-body">
                                        <h6 class="widget-posts-title"><a
                                                href="{{ route('detailBerita', $berita->id) }}">{{ $berita->title }}</a>
                                        </h6>
                                        <div class="widget-posts-meta">{{ $berita->created_at->format('y-m-d') }} </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
