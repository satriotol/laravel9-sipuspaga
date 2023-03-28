@extends('backend_layouts.main')
@section('content')
    <div class="page-header">
        <h1 class="page-title">Kategori Konsultasi</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('konsultasiCategory.index') }}">Kategori Konsultasi</a></li>
                <li class="breadcrumb-item active" aria-current="page">Kategori Konsultasi Tabel</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Kategori Konsultasi</h3>
                </div>
                <div class="card-body">
                    @include('partials.errors')
                    <form
                        action="@isset($konsultasiCategory) {{ route('konsultasiCategory.update', $konsultasiCategory->id) }} @endisset @empty($konsultasiCategory) {{ route('konsultasiCategory.store') }} @endempty"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($konsultasiCategory)
                            @method('PUT')
                        @endisset
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control"
                                value="{{ isset($konsultasiCategory) ? $konsultasiCategory->name : @old('name') }}" required
                                name="name">
                        </div>
                        <div class="form-group">
                            <label for="network_id">Jejaring</label>
                            {!! Form::select(
                                'network_id[]',
                                $networks->pluck('name', 'id'),
                                isset($konsultasiCategory) ? $konsultasiCategory->networks->pluck('id')->toArray() : @old('network_id'),
                                [
                                    'class' => 'form-control select2',
                                    'multiple',
                                    'required',
                                ],
                            ) !!}
                            {{-- <select name="network_id[]" class="form-control select2" multiple id="" required>
                                @foreach ($networks as $network)
                                    <option value="{{ $network->id }}" @selected(isset($konsultasiCategory) ? $konsultasiCategory->networks->pluck('id')->toArray() : $network->id == @old('network_id'))>
                                        {{ $network->name }}
                                    </option>
                                @endforeach
                            </select> --}}
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
