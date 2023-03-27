@extends('backend_layouts.main')
@section('content')
    <div class="page-header">
        <h1 class="page-title">Pelapor</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Pelapor</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pelapor Tabel</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Pelapor</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table border table-bordered text-nowrap text-md-nowrap table-sm mb-0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Nomor HP</th>
                                    <th>Usia</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone_number }}</td>
                                        <td>{{ $user->user_detail->age() }} Tahun</td>
                                        <td>{{ $user->getUserRole($user) }}</td>
                                        <td>
                                            <form action="{{ route('user.destroy', $user->uuid) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <a class="btn btn-sm btn-warning"
                                                    href="{{ route('user.edit', $user->uuid) }}">
                                                    Edit
                                                </a>
                                                <a href="{{ route('user.resetPassword', $user->uuid) }}"
                                                    class="btn btn-sm btn-info"
                                                    onclick="return confirm('Are you sure?')">Reset
                                                    Password</a>
                                                @if (Auth::user()->id != $user->id)
                                                    <input type="submit" class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Are you sure?')" value="Delete"
                                                        id="">
                                                @endif
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $users->appends($_GET)->links('pagination::bootstrap-5')->withClass('pagination-container') }}
                </div>
            </div>
        </div>
    </div>
@endsection
