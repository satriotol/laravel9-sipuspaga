@extends('backend_layouts.main')
@section('content')
    <div class="page-header">
        <h1 class="page-title">Kategori Konsultasi</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('konsultasiCategory.index') }}">Kategori Konsultasi</a></li>
                <li class="breadcrumb-item active" aria-current="page">Kategori Konsultasi Tabel</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Kategori Konsultasi</h3>
                </div>
                <div class="card-body">
                    <div class="text-end mb-2">
                        <a href="{{ route('konsultasiCategory.create') }}" class="btn btn-sm btn-primary">Tambah</a>
                    </div>
                    <div class="table-responsive">
                        <table id="example2" class="table table-bordered text-nowrap border-bottom">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Jejaring</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($konsultasiCategories as $konsultasiCategory)
                                    <tr>
                                        <td>{{ $konsultasiCategory->name }}</td>
                                        <td>
                                            @foreach ($konsultasiCategory->networks as $network)
                                                <div class="badge bg-primary">{{ $network->name }}</div>
                                            @endforeach
                                        </td>
                                        <td>
                                            <form
                                                action="{{ route('konsultasiCategory.destroy', $konsultasiCategory->id) }}"
                                                method="post">
                                                @csrf
                                                @method('delete')
                                                <a class="btn btn-sm btn-warning"
                                                    href="{{ route('konsultasiCategory.edit', $konsultasiCategory->id) }}">
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
