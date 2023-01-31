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
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Kontak</h3>
                </div>
                <div class="card-body">
                    <div class="text-end mb-2">
                        <a href="{{ route('contact.create') }}" class="btn btn-sm btn-primary">Tambah</a>
                    </div>
                    <div class="table-responsive">
                        <table id="example2" class="table table-bordered text-nowrap border-bottom">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Deskripsi</th>
                                    <th>Icon</th>
                                    <th>Handpone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $contact)
                                    <tr>
                                        <td class="text-wrap">
                                            {{ $contact->name }}
                                        </td>
                                        <td class="text-wrap">
                                            {{ $contact->description }}
                                        </td>
                                        <td>
                                            {{ $contact->icon }}
                                        </td>
                                        <td>
                                            {{ $contact->getPhoneAttribute() }}
                                        </td>
                                        <td>
                                            <form action="{{ route('contact.destroy', $contact->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <a class="btn btn-sm btn-warning"
                                                    href="{{ route('contact.edit', $contact->id) }}">
                                                    Edit
                                                </a>
                                                <input type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Are you sure?')" value="Delete" id="">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
