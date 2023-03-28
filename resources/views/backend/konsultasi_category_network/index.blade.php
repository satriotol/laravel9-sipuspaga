@extends('backend_layouts.main')
@section('content')
    <div class="page-header">
        <h1 class="page-title">KonsultasiCategoryNetwork</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('konsultasi_category_network.index') }}">KonsultasiCategoryNetwork</a></li>
                <li class="breadcrumb-item active" aria-current="page">KonsultasiCategoryNetwork Tabel</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">KonsultasiCategoryNetwork</h3>
                </div>
                <div class="card-body">
                    <div class="text-end mb-2">
                        <a href="{{ route('konsultasi_category_network.create') }}" class="btn btn-sm btn-primary">Tambah</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table border table-bordered text-nowrap text-md-nowrap table-sm mb-0">
                            <thead>
                                <tr class="text-center">
                                    <th>Konsultasi Kategori</th>
<th>Jaringan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($konsultasi_category_networks as $konsultasi_category_network)
                                    <tr>
                                        <td>{{$konsultasi_category_network->konsultasi_category_id}}</td>
<td>{{$konsultasi_category_network->network_id}}</td>
                                        <td class="text-center">
                                            <form action="{{ route('konsultasi_category_network.destroy', $konsultasi_category_network->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <a class="btn btn-sm btn-warning"
                                                    href="{{ route('konsultasi_category_network.edit', $konsultasi_category_network->id) }}">
                                                    Edit
                                                </a>
                                                <input type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Are you sure?')" value="Delete"
                                                    id="">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $konsultasi_category_networks->appends($_GET)->links('pagination::bootstrap-5')->withClass('pagination-container') }}
                </div>
            </div>
        </div>
    </div>
@endsection
