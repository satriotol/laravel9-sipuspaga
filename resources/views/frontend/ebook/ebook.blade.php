@extends('frontend_layouts.main')
@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
@endpush
@section('content')
    @include('frontend.breadcumb', [
        'mainTitle' => 'Ebook',
    ])
    <!-- breadcrumb-area-end -->
    <!-- blog-area start -->
    <section class="blog-area pt-120 pb-80">
        <div class="container">
            <table class="table" id="users-table">
                <thead>
                    <th>Diupload Tanggal</th>
                    <th>Nama</th>
                    <th>File</th>
                </thead>
                <tbody>
                    @foreach ($ebooks as $ebook)
                        <tr>
                            <td>{{ $ebook->created_at }}</td>
                            <td>{{ $ebook->name }}</td>
                            <td><a href="{{ asset('uploads/' . $ebook->file) }}" target="_blank">Buka File</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
@push('script')
@endpush
