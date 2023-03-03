@extends('frontend_layouts.main')
@section('content')
    @include('frontend.breadcumb', [
        'mainTitle' => 'Ebook',
    ])
    <!-- breadcrumb-area-end -->
    <!-- blog-area start -->
    <section class="blog-area pt-120 pb-80">
        <div class="container">
            <table class="table" style="color:black">
                <thead>
                    <th>Nama</th>
                    <th>File</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    @foreach ($ebooks as $ebook)
                        <tr>
                            <td>{{ $ebook->name }}</td>
                            <td>{{ $ebook->file }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
