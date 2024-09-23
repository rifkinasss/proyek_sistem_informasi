@extends('Super-Admin.layouts.app')

@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">User Management Admin</h4>
                <p class="card-description"> Super Admin dapat menambah, mengubah, dan menghapus admin!
                </p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th> No </th>
                                <th> NIP </th>
                                <th> Nama </th>
                                <th> Email </th>
                                <th> Aksi </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($admins as $admin)
                                <tr>
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td> {{ $admin->nip }} </td>
                                    <td> {{ $admin->nama_lengkap }} </td>
                                    <td>
                                        {{ $admin->email }}
                                    </td>
                                    <td>
                                        <a href="">Edit</a>
                                        <a href="">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
