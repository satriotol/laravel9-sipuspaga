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
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Kategori Konsultasi</h3>
                </div>
                <div class="card-body">
                    @include('partials.errors')
                    <form
                        action="@isset($konsultasiCategory) {{ route('konsultasiCategory.update', $konsultasiCategory->id) }} @endisset @empty($konsultasiCategory) {{ route('konsultasiCategory.store') }} @endempty"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($konsultasiCategory)
                            @method('PUT')
                        @endisset
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control"
                                value="{{ isset($konsultasiCategory) ? $konsultasiCategory->name : @old('name') }}" required
                                name="name">
                        </div>
                        <div class="form-group">
                            <label for="opd_id">OPD</label>
                            <select name="opd_id" class="form-control" id="" required>
                                <option value="">Pilih OPD</option>
                                @foreach ($opds as $opd)
                                    <option value="{{ $opd->id }}" @selected(isset($konsultasiCategory) ? $konsultasiCategory->opd_id == $opd->id : $opd->id == @old('opd_id'))>
                                        {{ $opd->nama_opd }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="text-end">
                            <a class="btn btn-warning" href="{{ url()->previous() }}">Kembali</a>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('custom-scripts')
@endpush
