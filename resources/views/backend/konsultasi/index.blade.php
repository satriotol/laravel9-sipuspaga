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
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                <div class="card bg-primary img-card box-primary-shadow">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="text-white">
                                <h2 class="mb-0 number-font">{{ $countKonsultasi }}</h2>
                                <p class="text-white mb-0">Total Konsultasi </p>
                            </div>
                            <div class="ms-auto"> <i class="fa fa-user-o text-white fs-30 me-2 mt-2"></i> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                <div class="card bg-success img-card box-success-shadow">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="text-white">
                                <h2 class="mb-0 number-font">{{ $countKonsultasiToday }}</h2>
                                <p class="text-white mb-0">Total Konsultasi Hari Ini </p>
                            </div>
                            <div class="ms-auto"> <i class="fa fa-user-o text-white fs-30 me-2 mt-2"></i> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Pencarian</h3>
                </div>
                <div class="card-body">
                    <form action="" method="get">
                        <div class="row">
                            <div class="col-md-4">
                                {!! Form::label('konsultasi_category_id', 'Kategori') !!}
                                {!! Form::select('konsultasi_category_id', $konsultasiCategories, @old('konsultasi_category_id'), [
                                    'class' => 'form-control select2',
                                    'placeholder' => 'Cari Kategori',
                                ]) !!}
                            </div>
                            <div class="col-md-4">
                                {!! Form::label('user_id', 'Pelapor') !!}
                                {!! Form::select('user_id', $pelapors, @old('user_id'), [
                                    'class' => 'form-control select2-show-search ',
                                    'placeholder' => 'Cari Pelapor',
                                ]) !!}
                            </div>
                            <div class="col-md-4">
                                {!! Form::label('status_id', 'Status') !!}
                                {!! Form::select('status_id', $statuses, @old('status_id'), [
                                    'class' => 'form-control select2-show-search ',
                                    'placeholder' => 'Cari Status',
                                ]) !!}
                            </div>
                        </div>
                        <div class="text-end">
                            {!! Form::submit('Cari', ['class' => 'btn btn-success']) !!}
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Konsultasi</h3>
                </div>
                <div class="card-body">
                    <div class="text-end mb-2">
                        <a href="{{ route('konsultasi.create') }}" class="btn btn-sm btn-primary">Tambah</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table border table-bordered text-nowrap text-md-nowrap table-sm mb-0">
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Kategori</th>
                                    <th>Pelapor</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($konsultasis as $konsultasi)
                                    <tr>
                                        <td>{{ $konsultasi->created_at }}</td>
                                        <td>{{ $konsultasi->konsultasi_category->name ?? '' }}</td>
                                        <td>{{ $konsultasi->user->name ?? '' }}</td>
                                        <td>
                                            {{-- @if ($konsultasi->getLatestStatus())
                                                <div class="badge bg-{{ $konsultasi->getLatestStatus()->status->color }}">
                                                    {{ $konsultasi->getLatestStatus()->status->name }}
                                                </div>
                                            @endif --}}
                                            <div class="badge bg-{{ $konsultasi->konsultasi_status->status->color }}">
                                                {{ $konsultasi->konsultasi_status->status->name }}
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
                    {{ $konsultasis->appends($_GET)->links('pagination::bootstrap-5')->withClass('pagination-container') }}

                </div>
            </div>
        </div>
    </div>
@endsection
