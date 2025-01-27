@extends('layouts.app')
@section('content')
    <div class="container mx-auto ">
        {{-- // judul tabel data user --}}
        <div class="container d-flex justify-content-between my-2">
            <h3>Data User</h3>
            <a href="{{ route('users.create') }}" class="btn btn-success">Tambah Data</a>
        </div>
        {{-- // tabel data user --}}
        <div class="card">
            <table class="table text-center">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Number</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $index => $user)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <button type="button" class="btn btn-warning">Edit</button>
                                <button type="button" class="btn btn-danger">Hapus</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
