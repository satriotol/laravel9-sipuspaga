@extends('backend_layouts.main')
@section('content')
    <div class="page-header">
        <h1 class="page-title">Page</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('page.index') }}">Page</a></li>
                <li class="breadcrumb-item active" aria-current="page">Page Form</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Page</h3>
                </div>
                <div class="card-body">
                    @include('partials.errors')
                    <form
                        action="@isset($page) {{ route('page.update', $page->id) }} @endisset @empty($page) {{ route('page.store') }} @endempty"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($page)
                            @method('PUT')
                        @endisset
                        <div class="form-group">
                            {!! Form::label('page_id', 'Master Halaman') !!}
                            {!! Form::select('page_id', $pages, isset($page) ? $page->page_id : @old('page_id'), [
                                'class' => 'form-control select2',
                                'placeholder' => 'Masukkan Master Halaman',
                            ]) !!}
                        </div>
                        <div class="form-group">{!! Form::label('name', 'Nama Halaman') !!}{!! Form::text('name', isset($page) ? $page->name : @old('name'), [
                            'required',
                            'class' => 'form-control',
                            'placeholder' => 'Masukkan Nama Halaman',
                        ]) !!}</div>
                        <div class="form-group">
                            {!! Form::label('type', 'Tipe Halaman') !!}
                            {!! Form::select('type', $types, isset($page) ? $page->type : @old('type'), [
                                'class' => 'form-control select2',
                                'required',
                                'placeholder' => 'Masukkan Master Halaman',
                            ]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('content', 'Konten Halaman') !!}
                            {!! Form::textarea('content', isset($page) ? $page->content : @old('content'), [
                                'required',
                                'class' => 'form-control summernote',
                                'placeholder' => 'Masukkan Konten Halaman',
                            ]) !!}</div>
                        <div class="text-end">
                            <a class="btn btn-warning" href="{{ route('page.index') }}">Kembali</a>
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
