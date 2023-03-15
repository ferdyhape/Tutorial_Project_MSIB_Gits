@extends('layouts.master')

@section('title', 'Index')

@section('content')
    <div class="d-flex justify-content-between my-3">
        <h4>Halaman index</h4>
        <a href="{{ url('user/create') }}" class="btn btn-primary">Tambah User</a>
    </div>

    <table class="table table-sm table-striped">
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
                    <td class="d-flex justify-content-start gap-3">
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
