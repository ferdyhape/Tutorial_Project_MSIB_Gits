@extends('layouts.master')
@section('title', 'Edit')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="my-4 col-6">
            <h3 class="text-center my-2">Edit Data</h3>
            <form action="/user/{{ $user->id }}" method="POST">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" value="{{ $user->password }}">
                </div>
                <button type="submit" class="btn btn-warning w-100">Edit</button>
                <a href="{{ url('/user') }}" class="btn btn-primary my-2 d-block">Back</a>
            </form>
        </div>
    </div>
@endsection
