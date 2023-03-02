@extends('backend_layouts.main')
@section('content')
    <div class="page-header">
        <h1 class="page-title">Ebook</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('ebook.index') }}">Ebook</a></li>
                <li class="breadcrumb-item active" aria-current="page">Ebook Tabel</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Ebook</h3>
                </div>
                <div class="card-body">
                    <div class="text-end mb-2">
                        <a href="{{ route('ebook.create') }}" class="btn btn-sm btn-primary">Tambah</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table border table-bordered text-nowrap text-md-nowrap table-sm mb-0">
                            <thead>
                                <tr class="text-center">
                                    <th>name</th>
                                    <th>description</th>
                                    <th>file</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ebooks as $ebook)
                                    <tr>
                                        <td>{{ $ebook->name }}</td>
                                        <td>{!! $ebook->description !!}</td>
                                        <td><a href="{{ asset('uploads/' . $ebook->file) }}" target="_blank">Buka File</a>
                                        </td>
                                        <td class="text-center">
                                            <form action="{{ route('ebook.destroy', $ebook->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <a class="btn btn-sm btn-warning"
                                                    href="{{ route('ebook.edit', $ebook->id) }}">
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
