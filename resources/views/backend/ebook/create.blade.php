@extends('backend_layouts.main')
@section('content')
    <div class="page-header">
        <h1 class="page-title">Ebook</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('ebook.index') }}">Ebook</a></li>
                <li class="breadcrumb-item active" aria-current="page">Ebook Form</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Ebook</h3>
                </div>
                <div class="card-body">
                    @include('partials.errors')
                    <form
                        action="@isset($ebook) {{ route('ebook.update', $ebook->id) }} @endisset @empty($ebook) {{ route('ebook.store') }} @endempty"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($ebook)
                            @method('PUT')
                        @endisset
                        <div class="form-group">{!! Form::label('name', 'name') !!}{!! Form::text('name', isset($ebook) ? $ebook->name : @old('name'), [
                            'required',
                            'class' => 'form-control',
                            'placeholder' => 'Masukkan name',
                        ]) !!}</div>
                        <div class="form-group">{!! Form::label('description', 'description') !!}{!! Form::textarea('description', isset($ebook) ? $ebook->description : @old('description'), [
                            'required',
                            'class' => 'form-control summernote',
                            'placeholder' => 'Masukkan description',
                        ]) !!}</div>
                        <div class="form-group">
                            {!! Form::label('file', 'Gambar') !!}
                            {!! Form::text('file', isset($ebook) ? $ebook->file : @old('file'), [
                                isset($ebook) ? '' : 'required',
                                'class' => 'form-control upload-filepond',
                                'placeholder' => 'Masukkan file',
                                'accept' => 'application/pdf,application/vnd.ms-excel',
                            ]) !!}
                            @isset($ebook)
                                <a href="{{ asset('uploads/' . $ebook->file) }}" target="_blank">Buka File</a>
                            @endisset
                        </div>
                        <div class="text-end">
                            <a class="btn btn-warning" href="{{ route('ebook.index') }}">Kembali</a>
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
