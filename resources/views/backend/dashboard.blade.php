@extends('backend_layouts.main')
@section('content')
    @hasrole('USER-CONFIRMATION')
        <div class="page-header">
            <h1 class="page-title">User</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('user.index') }}">User</a></li>
                    <li class="breadcrumb-item active" aria-current="page">User Tabel</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Form User</h3>
                    </div>
                    <div class="card-body">
                        @include('partials.errors')
                        <form action="{{ route('verification.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label>Masukan KODE OTP Anda</label>
                                <input type="text" class="form-control" required name="otp_code">
                            </div>
                            <a href="{{ route('verification.updateOtp') }}">Kirim Ulang OTP</a>
                            <div class="text-end">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endhasrole
@endsection
@push('custom-scripts')
@endpush
