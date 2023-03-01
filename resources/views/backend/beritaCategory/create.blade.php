@extends('backend_layouts.main')
@section('content')
    <div class="page-header">
        <h1 class="page-title">Kategori Berita</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('beritaCategory.index') }}">Kategori Berita</a></li>
                <li class="breadcrumb-item active" aria-current="page">Kategori Berita Tabel</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Kategori Berita</h3>
                </div>
                <div class="card-body">
                    @include('partials.errors')
                    <form
                        action="@isset($beritaCategory) {{ route('beritaCategory.update', $beritaCategory->id) }} @endisset @empty($beritaCategory) {{ route('beritaCategory.store') }} @endempty"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($beritaCategory)
                            @method('PUT')
                        @endisset
                        <div class="form-group">
                            {!! Form::label('name', 'Nama') !!}
                            {!! Form::text('name', isset($beritaCategory) ? $beritaCategory->name : @old('name'), [
                                'required',
                                'class' => 'form-control',
                                'placeholder' => 'Masukkan Nama Kategori'
                            ]) !!}
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
