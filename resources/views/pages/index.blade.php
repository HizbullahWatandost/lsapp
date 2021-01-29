@extends('layouts.app')

@section('content')
        <div class="jambotron text-center">
                <h2> Welcome to Laravel </h2>
                <p> This is a laravel application </p>
                <p>
                        <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
                        <a class="btn btn-primary btn-lg" href="/register" role="button">Register</a>
                </p>
        </div>
@endsection
