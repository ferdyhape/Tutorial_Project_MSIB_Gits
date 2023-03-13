@extends('layouts.master')
@section('title', 'Edit')
@section('content')
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
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
