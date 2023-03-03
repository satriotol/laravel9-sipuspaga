@extends('frontend_layouts.main')
@section('content')
    @include('frontend.breadcumb', [
        'mainTitle' => 'Ebook',
    ])
    <!-- breadcrumb-area-end -->
    <!-- blog-area start -->
    <section class="blog-area pt-120 pb-80">
        <div class="container">
            <table>
                <thead>
                    <th>Nama</th>
                    <th>File</th>
                    <th>Aksi</th>
                </thead>
            </table>
        </div>
    </section>
@endsection
