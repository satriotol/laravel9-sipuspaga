@extends('backend_layouts.main')
@section('content')
    <div class="page-header">
        <h1 class="page-title">Page</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('page.index') }}">Page</a></li>
                <li class="breadcrumb-item active" aria-current="page">Page Tabel</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Page</h3>
                </div>
                <div class="card-body">
                    <div class="text-end mb-2">
                        <a href="{{ route('page.create') }}" class="btn btn-sm btn-primary">Tambah</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table border table-bordered text-nowrap text-md-nowrap table-sm mb-0">
                            <thead>
                                <tr class="text-center">
                                    <th>Master Halaman</th>
                                    <th>Nama Halaman</th>
                                    <th>Tipe Halaman</th>
                                    <th>Konten Halaman</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pages as $page)
                                    <tr>
                                        <td>{{ $page->page_id }}</td>
                                        <td>{{ $page->name }}</td>
                                        <td>{{ $page->type }}</td>
                                        <td>{{ $page->content }} <a href="{!! $page->content !!}">test</a></td>
                                        <td class="text-center">
                                            <form action="{{ route('page.destroy', $page->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <a class="btn btn-sm btn-warning"
                                                    href="{{ route('page.edit', $page->id) }}">
                                                    Edit
                                                </a>
                                                <input type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Are you sure?')" value="Delete" id="">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
