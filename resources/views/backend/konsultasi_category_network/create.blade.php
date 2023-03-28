@extends('backend_layouts.main')
@section('content')
    <div class="page-header">
        <h1 class="page-title">KonsultasiCategoryNetwork</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('konsultasi_category_network.index') }}">KonsultasiCategoryNetwork</a></li>
                <li class="breadcrumb-item active" aria-current="page">KonsultasiCategoryNetwork Form</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form KonsultasiCategoryNetwork</h3>
                </div>
                <div class="card-body">
                    @include('partials.errors')
                    <form
                        action="@isset($konsultasi_category_network) {{ route('konsultasi_category_network.update', $konsultasi_category_network->id) }} @endisset @empty($konsultasi_category_network) {{ route('konsultasi_category_network.store') }} @endempty"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($konsultasi_category_network)
                            @method('PUT')
                        @endisset
                        <div class='form-group'>
{!! Form::label('konsultasi_category_id', 'Konsultasi Kategori') !!}
{!! Form::select('konsultasi_category_id', '', isset($konsultasi_category_network) ? $konsultasi_category_network->konsultasi_category_id : @old('konsultasi_category_id'), [
                    'class' => 'form-control select2',
                    'required',
                    'placeholder' => 'Pilih Konsultasi Kategori'
                ]) !!}</div>

<div class='form-group'>
{!! Form::label('network_id', 'Jaringan') !!}
{!! Form::select('network_id', '', isset($konsultasi_category_network) ? $konsultasi_category_network->network_id : @old('network_id'), [
                    'class' => 'form-control select2',
                    'required',
                    'placeholder' => 'Pilih Jaringan'
                ]) !!}</div>
                        <div class="text-end">
                            <a class="btn btn-warning" href="{{ route('konsultasi_category_network.index') }}">Kembali</a>
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
