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
            <table id="users-table">
                <thead>
                    <th>Diupload Tanggal</th>
                    <th>Nama</th>
                    <th>File</th>
                </thead>
            </table>
        </div>
    </section>
@endsection
@push('script')
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script>
        $(function() {
            $('#users-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('ebook.getEbook') }}',
                columns: [{
                    data: "created_at",
                    name: "created_at"
                }, {
                    data: 'name',
                    name: 'name'
                }, {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                }, ]
            });
        });
    </script>
@endpush
