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
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Konsultasi</h3>
                </div>
                <div class="card-body">
                    @include('partials.errors')
                    <form
                        action="@isset($konsultasi) {{ route('konsultasi.update', $konsultasi->id) }} @endisset @empty($konsultasi) {{ route('konsultasi.store') }} @endempty"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($konsultasi)
                            @method('PUT')
                        @endisset
                        <div class="form-group">
                            <label>Kategori</label>
                            <select name="konsultasi_category_id" class="form-control select2-show-search form-select"
                                required>
                                <option value="">Pilih Kategori</option>
                                @foreach ($konsultasiCategories as $konsultasiCategory)
                                    <option value="{{ $konsultasiCategory->id }}" @selected(isset($konsultasi) ? $konsultasiCategory->id == $konsultasi->konsultasi_category_id : $konsultasiCategory->id == @old('konsultasi_category_id'))>
                                        {{ $konsultasiCategory->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Pesan</label>
                            <input type="text" class="form-control"
                                value="{{ isset($konsultasi) ? $konsultasi->message : @old('message') }}" required
                                name="message">
                        </div>
                        <div class="form-group">
                            <label>Data Dukung</label>
                            <input type="file" class="form-control upload-filepond" accept="image/*" name="file">
                            @isset($konsultasi->file)
                                <a href="{{ asset('uploads/' . $konsultasi->file) }}" target="_blank">Buka Lampiran</a>
                            @endisset
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
