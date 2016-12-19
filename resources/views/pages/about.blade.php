@extends('layout')
@section('content')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                </div>
            @endif

            <div class="container-fluid text-center" style="margin-top:200px;">
                <div class="title m-b-md">
                    About
                </div>

                @include ('navigation')

            </div>
        </div>

@endsection
