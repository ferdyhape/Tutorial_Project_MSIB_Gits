@extends('layouts.master')
@section('title', 'Create')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="my-4 col-6">
            <h3 class="text-center my-2">Edit Data</h3>
            <form action="/user" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label ">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Role</label>
                    <select class="form-select" aria-label="Default select example" name="role_id">
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-success w-100">Create</button>
                <a href="{{ url('/user') }}" class="btn btn-primary my-2 d-block">Back</a>
            </form>
        </div>
    </div>
@endsection
