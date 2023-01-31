@extends('backend_layouts.main')
@section('content')
    <div class="page-header">
        <h1 class="page-title">Kontak</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('contact.index') }}">Kontak</a></li>
                <li class="breadcrumb-item active" aria-current="page">Kontak Tabel</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Kontak</h3>
                </div>
                <div class="card-body">
                    @include('partials.errors')
                    <form
                        action="@isset($contact) {{ route('contact.update', $contact->id) }} @endisset @empty($contact) {{ route('contact.store') }} @endempty"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($contact)
                            @method('PUT')
                        @endisset
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="name" required class="form-control" id=""
                                value="{{ isset($contact) ? $contact->name : @old('name') }}">
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <input type="text" name="description" required class="form-control" id=""
                                value="{{ isset($contact) ? $contact->description : @old('description') }}">
                        </div>
                        <div class="form-group">
                            <label>Icon</label>
                            <input type="text" name="icon" required class="form-control" id=""
                                value="{{ isset($contact) ? $contact->icon : @old('icon') }}">
                            <a href="https://fontawesome.com/icons" target="_blank">FontAwesome</a>
                        </div>
                        <div class="form-group">
                            <label>Nomor HP ?</label>
                            <select name="is_phone" class="form-control">
                                <option value="">Tidak</option>
                                <option value="1" @selected(isset($contact) ? $contact->is_phone == 1 : @old('is_phone'))>Ya</option>
                            </select>
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
