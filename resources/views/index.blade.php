@extends('layouts.master')

@section('title', 'Index')

@section('content')
    <h1>Halaman index</h1>

    <a href="{{ url('user/create') }}" class="btn btn-primary">Tambah User</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ url('user/' . $user->id) }}" class="btn btn-info">Read</a>
                        <a href="{{ url('user/' . $user->id . '/edit') }}" class="btn btn-warning">Edit</a>
                        <form action="user/{{ $user->id }}" method="POST">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger" onclick="return confirm('bener mau hapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
