@extends('backend_layouts.main')
@section('content')
    <div class="page-header">
        <h1 class="page-title">Konsultasi</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('konsultasi.index') }}">Konsultasi</a></li>
                <li class="breadcrumb-item active" aria-current="page">Konsultasi Tabel</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            @empty(Auth::user()->user_detail)
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Proses Konsultasi</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('konsultasiStatus.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="text" value="{{ $konsultasi->id }}" name="konsultasi_id" id=""
                                class="d-none">
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status_id" class="form-control select2-show-search form-select" required>
                                    <option value="">Pilih Status</option>
                                    @foreach ($statuses as $status)
                                        <option value="{{ $status->id }}">
                                            {{ $status->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea class="form-control" cols="30" rows="5" placeholder="Isikan Deskripsi" name="description" required></textarea>
                            </div>
                            <li class="list-group-item">
                                Kirim Whatsapp
                                <div class="material-switch pull-right">
                                    <input id="someSwitchOptionPrimary" name="kirimWa" type="checkbox" />
                                    <label for="someSwitchOptionPrimary" class="label-primary"></label>
                                </div>
                            </li>
                            <div class="form-group">
                                <label>File</label>
                                <input type="file" class="form-control upload-file" name="file">
                            </div>
                            <div class="text-end">
                                <button class="btn btn-primary" type="submit" id="submit-button">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            @endempty
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Konsultasi</h3>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <td>Kategori</td>
                            <td>:</td>
                            <td>{{ $konsultasi->konsultasi_category->name }}</td>
                        </tr>
                        <tr>
                            <td>Catatan</td>
                            <td>:</td>
                            <td>{{ $konsultasi->message }}</td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>{{ $konsultasi->user->name }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Timeline Konsultasi</h3>
                </div>
                <div class="card-body">
                    <div class="vtimeline">
                        @foreach ($konsultasi->konsultasi_statuses as $konsultasi_status)
                            <div class="timeline-wrapper timeline-wrapper-{{ $konsultasi_status->status->color }}">
                                <div class="avatar avatar-md timeline-badge">
                                    <span class="timeline-icon"><svg style="width:25px;height:25px" viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M4,2A2,2 0 0,0 2,4V11C2,11.55 2.22,12.05 2.59,12.42L11.59,21.42C11.95,21.78 12.45,22 13,22C13.55,22 14.05,21.78 14.41,21.41L21.41,14.41C21.78,14.05 22,13.55 22,13C22,12.45 21.77,11.94 21.41,11.58L12.41,2.58C12.05,2.22 11.55,2 11,2H4V2M11,4L20,13L13,20L4,11V4H11V4H11M6.5,5A1.5,1.5 0 0,0 5,6.5A1.5,1.5 0 0,0 6.5,8A1.5,1.5 0 0,0 8,6.5A1.5,1.5 0 0,0 6.5,5M10.95,10.5C9.82,10.5 8.9,11.42 8.9,12.55C8.9,13.12 9.13,13.62 9.5,14L13,17.5L16.5,14C16.87,13.63 17.1,13.11 17.1,12.55A2.05,2.05 0 0,0 15.05,10.5C14.5,10.5 13.97,10.73 13.6,11.1L13,11.7L12.4,11.11C12.03,10.73 11.5,10.5 10.95,10.5Z" />
                                        </svg></span>
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h6 class="timeline-title">{{ $konsultasi_status->status->name }}</h6>
                                    </div>
                                    <div class="timeline-body">
                                        <p>{{ $konsultasi_status->description }}</p>
                                        @isset($konsultasi_status->file)
                                            <a href="{{ asset('uploads/' . $konsultasi_status->file) }}" target="_blank">Buka
                                                File</a>
                                        @endisset
                                    </div>
                                    <div class="timeline-footer d-flex align-items-center flex-wrap">
                                        @empty(Auth::user()->user_detail)
                                            <form action="{{ route('konsultasiStatus.destroy', $konsultasi_status->id) }}"
                                                method="post">
                                                @csrf
                                                @method('delete')
                                                <input type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Are you sure?')" value="Delete" id="">
                                            </form>
                                        @endempty
                                        <span class="ms-auto"><i
                                                class="fe fe-calendar text-muted me-1"></i>{{ $konsultasi_status->created_at }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('custom-scripts')
@endpush
