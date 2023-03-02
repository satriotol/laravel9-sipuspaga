@extends('backend_layouts.main')
@section('content')
    <div class="page-header">
        <h1 class="page-title">Berita</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('berita.index') }}">Berita</a></li>
                <li class="breadcrumb-item active" aria-current="page">Berita Form</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Berita</h3>
                </div>
                <div class="card-body">
                    @include('partials.errors')
                    <form
                        action="@isset($beritum) {{ route('berita.update', $beritum->id) }} @endisset @empty($beritum) {{ route('berita.store') }} @endempty"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($beritum)
                            @method('PUT')
                        @endisset
                        <div class="form-group">
                            {!! Form::label('berita_category_id', 'Kategori Berita') !!}
                            {!! Form::select(
                                'berita_category_id',
                                $beritaCategories,
                                isset($beritum) ? $beritum->berita_category_id : @old('berita_category_id'),
                                ['required', 'class' => 'form-control select2', 'placeholder' => 'Pilih Kategori'],
                            ) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('title', 'Judul Berita') !!}
                            {!! Form::text('title', isset($beritum) ? $beritum->title : @old('title'), [
                                'required',
                                'class' => 'form-control',
                                'placeholder' => 'Masukkan title',
                            ]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('content', 'Isi Berita') !!}
                            {!! Form::textarea('content', isset($beritum) ? $beritum->content : @old('content'), [
                                'required',
                                'class' => 'form-control summernote',
                                'placeholder' => 'Masukkan content',
                            ]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('image', 'Gambar') !!}
                            {!! Form::text('image', isset($beritum) ? $beritum->image : @old('image'), [
                                isset($beritum) ? '' : 'required',
                                'class' => 'form-control',
                                'placeholder' => 'Masukkan image',
                            ]) !!}
                            @isset($beritum)
                                <img src="{{ asset('uploads/' . $beritum->image) }}" height="100px" alt="">
                            @endisset
                        </div>
                        <div class="text-end">
                            <a class="btn btn-warning" href="{{ route('berita.index') }}">Kembali</a>
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
