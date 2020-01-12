@extends('layouts.public')

@section('content')
    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="text-center">
            <h2 class="mb-4">Laravel Project Demo</h2>
            @auth
                <a class="btn btn-secondary" href="/dashboard">Dashboard</a>
            @else
                <a class="btn btn-secondary" href="/login">Login</a>
            @endauth
        </div>
    </div>
@endsection
