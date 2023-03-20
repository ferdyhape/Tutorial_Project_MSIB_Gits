@extends('layouts.master')
@section('title', 'Show')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="my-4">
            <h3 class="text-center my-2">Show Data</h3>
            <div class="card mb-3" style="width: 18rem;">
                <img src="https://loremflickr.com/200/200" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $user->name }}</h5>
                    <p class="card-text">Id: <b>{{ $user->id }}</b><br>Email:
                        <b>{{ $user->email }}</b><br>{{ $user->role->name }}</p>
                </div>
            </div>
            <a href="{{ url('/user') }}" class="btn btn-primary my-2 d-block">Back</a>
        </div>
    </div>
@endsection
