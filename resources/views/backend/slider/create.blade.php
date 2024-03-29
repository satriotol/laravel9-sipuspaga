@extends('backend_layouts.main')
@section('content')
    <div class="page-header">
        <h1 class="page-title">Slider</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('slider.index') }}">Slider</a></li>
                <li class="breadcrumb-item active" aria-current="page">Slider Tabel</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Slider</h3>
                </div>
                <div class="card-body">
                    @include('partials.errors')
                    <form
                        action="@isset($slider) {{ route('slider.update', $slider->id) }} @endisset @empty($slider) {{ route('slider.store') }} @endempty"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($slider)
                            @method('PUT')
                        @endisset
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" accept="image/*" class="form-control upload-filepond" name="image" required>
                        </div>
                        @isset($slider)
                            <img src="{{ asset('uploads/' . $slider->image) }}" class="img-thumbnail" alt="">
                        @endisset
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
