@extends('backend_layouts.main')
@section('content')
    <div class="page-header">
        <h1 class="page-title">Network</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('network.index') }}">Network</a></li>
                <li class="breadcrumb-item active" aria-current="page">Network Tabel</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Network</h3>
                </div>
                <div class="card-body">
                    <div class="text-end mb-2">
                        <a href="{{ route('network.create') }}" class="btn btn-sm btn-primary">Tambah</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table border table-bordered text-nowrap text-md-nowrap table-sm mb-0">
                            <thead>
                                <tr class="text-center">
                                    <th>Dinas</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($networks as $network)
                                    <tr>
                                        <td>{{$network->name}}</td>
                                        <td class="text-center">
                                            <form action="{{ route('network.destroy', $network->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <a class="btn btn-sm btn-warning"
                                                    href="{{ route('network.edit', $network->id) }}">
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
                </div>
            </div>
        </div>
    </div>
@endsection
