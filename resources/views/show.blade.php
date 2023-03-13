@extends('layouts.master')
@section('title', 'Show')
@section('content')
    <div class="card" style="width: 18rem;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Id: {{ $user->id }}</li>
            <li class="list-group-item">Nama: {{ $user->name }}</li>
            <li class="list-group-item">Email: {{ $user->email }}</li>
        </ul>
    </div>
    <a href="{{ url('/user') }}" class="btn btn-primary">Back</a>
@endsection
