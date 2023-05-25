@extends('backend_layouts.main')
@section('content')
    <div class="page-header">
        <h1 class="page-title">Gallery</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('gallery.index') }}">Gallery</a></li>
                <li class="breadcrumb-item active" aria-current="page">Gallery Form</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-{{ isset($gallery) ? '6' : '12' }}">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Gallery</h3>
                </div>
                <div class="card-body">
                    @include('partials.errors')
                    <form
                        action="@isset($gallery) {{ route('gallery.update', $gallery->id) }} @endisset @empty($gallery) {{ route('gallery.store') }} @endempty"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($gallery)
                            @method('PUT')
                        @endisset
                        <div class="form-group">
                            {!! Form::label('title', 'Judul') !!}
                            {!! Form::text('title', isset($gallery) ? $gallery->title : @old('title'), [
                                'required',
                                'class' => 'form-control',
                                'placeholder' => 'Masukkan Judul',
                            ]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('images', 'Galeri') !!}
                            {!! Form::file('images[]', [
                                'multiple',
                                isset($gallery) ? '' : 'required',
                                'class' => 'form-control upload-filepond',
                                'accept' => 'image/*',
                            ]) !!}
                        </div>
                        <div class="text-end">
                            <a class="btn btn-warning" href="{{ route('gallery.index') }}">Kembali</a>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @isset($gallery)
            <div class="col-md-6">
                @include('backend.gallery_image.index', [
                    'gallery' => $gallery,
                ])
            </div>
        @endisset
    </div>
@endsection
@push('custom-scripts')
@endpush
