@extends('backend_layouts.main')
@section('content')
    <div class="page-header">
        <h1 class="page-title">GalleryImage</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('gallery_image.index') }}">GalleryImage</a></li>
                <li class="breadcrumb-item active" aria-current="page">GalleryImage Form</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form GalleryImage</h3>
                </div>
                <div class="card-body">
                    @include('partials.errors')
                    <form
                        action="@isset($gallery_image) {{ route('gallery_image.update', $gallery_image->id) }} @endisset @empty($gallery_image) {{ route('gallery_image.store') }} @endempty"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($gallery_image)
                            @method('PUT')
                        @endisset
                        <div class="form-group">{!! Form::label('image', 'image') !!}{!! Form::text('image', isset($gallery_image) ? $gallery_image->image : @old('image'), [
                    'required',
                    'class' => 'form-control',
                    'placeholder' => 'Masukkan image',
                ]) !!}</div>
                        <div class="text-end">
                            <a class="btn btn-warning" href="{{ route('gallery_image.index') }}">Kembali</a>
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
