@extends('backend_layouts.main')
@section('content')
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
                    <form
                        action="@isset($user) {{ route('user.update', $user->id) }} @endisset @empty($user) {{ route('user.store') }} @endempty"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($user)
                            @method('PUT')
                        @endisset
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control"
                                value="{{ isset($user) ? $user->name : @old('name') }}" required name="name">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control"
                                value="{{ isset($user) ? $user->email : @old('email') }}" required name="email">
                        </div>
                        @hasrole(['USER', 'USER-CONFIRMATION'])
                            <div class="form-group">
                                <label>Nomor HP</label>
                                <input type="number" class="form-control"
                                    value="{{ isset($user) ? $user->phone_number : @old('phone_number') }}" required
                                    name="phone_number">
                            </div>
                        @endhasrole
                        @isset($user)
                            @if ($user->user_detail)
                                <div class="form-group">
                                    {!! Form::label('born_place', 'Kota Kelahiran') !!}
                                    {!! Form::text('born_place', isset($user) ? $user->user_detail->born_place : @old('born_place'), [
                                        'class' => 'form-control',
                                        'required',
                                    ]) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('birth', 'Tanggal Kelahiran') !!}
                                    {!! Form::date('birth', isset($user) ? $user->user_detail->birth : @old('birth'), [
                                        'class' => 'form-control',
                                        'required',
                                    ]) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('address', 'Alamat Rumah') !!}
                                    {!! Form::text('address', isset($user) ? $user->user_detail->address : @old('address'), [
                                        'class' => 'form-control',
                                        'required',
                                    ]) !!}
                                </div>
                            @endif
                        @endisset
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" value="""
                                @empty($user) required @endempty name="password">
                        </div>
                        <div class="form-group">
                            <label>Password Confirmation</label>
                            <input type="password" class="form-control" value=""
                                @empty($user) required @endempty name="password_confirmation">
                        </div>
                        <div class="form-group">
                            {!! Form::label('phone', 'Nomor HP') !!}
                            {!! Form::number('phone', isset($user) ? $user->phone : @old('phone'), ['class' => 'form-control']) !!}
                        </div>
                        @can('user-create')
                            <div class="form-group">
                                {!! Form::label('network_id', 'Jejaring') !!}
                                {!! Form::select(
                                    'network_id',
                                    $networks->pluck('name', 'id'),
                                    isset($user) ? $user->network_id : @old('network_id'),
                                    ['class' => 'form-control select2'],
                                ) !!}
                            </div>
                            <div class="form-group">
                                <label for="roles">Role</label>
                                <select name="roles" class="form-control" id="" required>
                                    <option value="">Pilih Role</option>
                                    @foreach ($roles as $r)
                                        <option value="{{ $r->id }}"
                                            @isset($user) @if ($r->name === $user->getUserRole($user)) selected @endif
                                @endisset>
                                            {{ $r->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        @endcan
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
