@extends('backend_layouts.main')
@section('content')
    <div class="page-header">
        <h1 class="page-title">Setting</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('setting.index') }}">Setting</a></li>
                <li class="breadcrumb-item active" aria-current="page">Setting Tabel</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Setting</h3>
                </div>
                <div class="card-body">
                    @include('partials.errors')
                    <form
                        action="@isset($setting) {{ route('setting.update', $setting->id) }} @endisset @empty($setting) {{ route('setting.store') }} @endempty"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($setting)
                            @method('PUT')
                        @endisset
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('pengertian', 'Pengertian') !!}
                                    {!! Form::textarea('pengertian', isset($setting) ? $setting->pengertian : @old('pengertian'), [
                                        'required',
                                        'class' => 'form-control',
                                    ]) !!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('tujuan', 'Tujuan') !!}
                                    {!! Form::textarea('tujuan', isset($setting) ? $setting->tujuan : @old('tujuan'), [
                                        'required',
                                        'class' => 'form-control summernote',
                                    ]) !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('visi', 'Visi') !!}
                                    {!! Form::textarea('visi', isset($setting) ? $setting->visi : @old('visi'), [
                                        'required',
                                        'class' => 'form-control',
                                    ]) !!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('misi', 'Misi') !!}
                                    {!! Form::textarea('misi', isset($setting) ? $setting->misi : @old('misi'), [
                                        'required',
                                        'class' => 'form-control',
                                    ]) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('tugas_fungsi', 'Tugas Fungsi') !!}
                            {!! Form::textarea('tugas_fungsi', isset($setting) ? $setting->tugas_fungsi : @old('tugas_fungsi'), [
                                'required',
                                'class' => 'form-control summernote',
                            ]) !!}
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('logo', 'Logo') !!}
                                    {!! Form::file('logo', ['class' => 'form-control upload-logo']) !!}
                                    <small class="text-danger">Ukuran Rekomendasi Adalah 162 x 50 pixel</small>
                                    @isset($setting)
                                        <br>
                                        <img src="{{ asset('uploads/' . $setting->logo) }}" height="100px" alt="">
                                    @endisset
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('slider_image', 'Gambar Slider') !!}
                                    {!! Form::file('slider_image', ['class' => 'form-control upload-icon']) !!}
                                    <small class="text-danger">Ukuran Rekomendasi Adalah 162 x 50 pixel</small>
                                    @isset($setting)
                                        <br>
                                        <img src="{{ asset('uploads/' . $setting->slider_image) }}" height="100px" alt="">
                                    @endisset
                                </div>
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
