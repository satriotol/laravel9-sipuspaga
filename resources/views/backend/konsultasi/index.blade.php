@extends('backend_layouts.main')
@section('content')
    <div class="page-header">
        <h1 class="page-title">Konsultasi</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('konsultasi.index') }}">Konsultasi</a></li>
                <li class="breadcrumb-item active" aria-current="page">Konsultasi Tabel</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Konsultasi</h3>
                </div>
                <div class="card-body">
                    <div class="text-end mb-2">
                        <a href="{{ route('konsultasi.create') }}" class="btn btn-sm btn-primary">Tambah</a>
                    </div>
                    <div class="table-responsive">
                        <table id="example2" class="table table-bordered text-nowrap border-bottom">
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Kategori</th>
                                    <th>User</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($konsultasis as $konsultasi)
                                    <tr>
                                        <td>{{ $konsultasi->created_at }}</td>
                                        <td>{{ $konsultasi->konsultasi_category->name }}</td>
                                        <td>{{ $konsultasi->user->name ?? '' }}</td>
                                        <td>
                                            <div class="badge bg-{{ $konsultasi->getLatestStatus()->status->color }}">
                                                {{ $konsultasi->getLatestStatus()->status->name }}
                                            </div>
                                        </td>
                                        <td>
                                            <form action="{{ route('konsultasi.destroy', $konsultasi->id) }}"
                                                method="post">
                                                @csrf
                                                @method('delete')
                                                <a class="btn btn-sm btn-primary"
                                                    href="{{ route('konsultasi.show', $konsultasi->id) }}">
                                                    Detail
                                                </a>
                                                <a class="btn btn-sm btn-warning"
                                                    href="{{ route('konsultasi.edit', $konsultasi->id) }}">
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
