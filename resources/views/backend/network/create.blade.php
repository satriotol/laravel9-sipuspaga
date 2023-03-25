@extends('backend_layouts.main')
@section('content')
    <div class="page-header">
        <h1 class="page-title">Network</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('network.index') }}">Network</a></li>
                <li class="breadcrumb-item active" aria-current="page">Network Form</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Network</h3>
                </div>
                <div class="card-body">
                    @include('partials.errors')
                    <form
                        action="@isset($network) {{ route('network.update', $network->id) }} @endisset @empty($network) {{ route('network.store') }} @endempty"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($network)
                            @method('PUT')
                        @endisset
                        <div class="form-group">{!! Form::label('name', 'Dinas') !!}{!! Form::text('name', isset($network) ? $network->name : @old('name'), [
                    'required',
                    'class' => 'form-control',
                    'placeholder' => 'Masukkan Dinas',
                ]) !!}</div>
                        <div class="text-end">
                            <a class="btn btn-warning" href="{{ route('network.index') }}">Kembali</a>
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
