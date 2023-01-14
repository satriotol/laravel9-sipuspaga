@extends('backend_layouts.main')
@section('content')
    <div class="page-header">
        <h1 class="page-title">Status Konsultasi</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('status.index') }}">Status Konsultasi</a></li>
                <li class="breadcrumb-item active" aria-current="page">Status Konsultasi Tabel</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Status Konsultasi</h3>
                </div>
                <div class="card-body">
                    @include('partials.errors')
                    <form
                        action="@isset($status) {{ route('status.update', $status->id) }} @endisset @empty($status) {{ route('status.store') }} @endempty"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($status)
                            @method('PUT')
                        @endisset
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control"
                                value="{{ isset($status) ? $status->name : @old('name') }}" required name="name">
                        </div>
                        <div class="form-group">
                            <label>Warna</label>
                            <input type="text" class="form-control"
                                value="{{ isset($status) ? $status->color : @old('color') }}" required name="color">
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="custom-switch form-switch me-5">
                                    <input type="checkbox" @checked(isset($status) ? $status->is_waiting : @old('is_waiting')) name="is_waiting"
                                        class="custom-switch-input name">
                                    <span class="custom-switch-indicator"></span>
                                    <span class="custom-switch-description">WAITING</span>
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label class="custom-switch form-switch me-5">
                                    <input type="checkbox" @checked(isset($status) ? $status->is_process : @old('is_process')) name="is_process" class="custom-switch-input name">
                                    <span class="custom-switch-indicator"></span>
                                    <span class="custom-switch-description">PROSES</span>
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label class="custom-switch form-switch me-5">
                                    <input type="checkbox" @checked(isset($status) ? $status->is_done : @old('is_done')) name="is_done" class="custom-switch-input name">
                                    <span class="custom-switch-indicator"></span>
                                    <span class="custom-switch-description">SELESAI</span>
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label class="custom-switch form-switch me-5">
                                    <input type="checkbox" @checked(isset($status) ? $status->is_declined : @old('is_declined')) name="is_declined" class="custom-switch-input name">
                                    <span class="custom-switch-indicator"></span>
                                    <span class="custom-switch-description">DITOLAK</span>
                                </label>
                            </div>
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
