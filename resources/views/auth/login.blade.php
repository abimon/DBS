@extends('layouts.app')

@section('content')
<div class="container mb-2 mt-2">
    <div class="row justify-content-center">
        <form method="POST" action="{{ route('login') }}" class="col-md-6 form card">
            <h1 class="text-light mb-2 mt-3 text-center">Log in</h1>
            <h2 class="mb-5 text-light text-center">Sign in to your account</h2>
            @csrf
            <div class="row d-flex justify-content-center">
                <div class="col-md-10">
                    <div class="mb-4">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror rounded-pill" placeholder="Email Address" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror rounded-pill" placeholder="Password" name="password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between mb-4 ms-2 me-2">
                <div class="text-white">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                    {{ __('Remember Me?') }}
                </div>
                <div>
                    @if (Route::has('password.request'))
                    <a class="btn-link text-white" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-outline-light rounded-pill shadow ps-5 pe-5 pt-2 pb-2">
                    {{ __('Login') }}
                </button>
            </div>
            <p class="text-white text-center mt-3">Don't have an account? <a href="{{ route('register') }}" class="red-link">Sign up now</a></p>
        </form>
    </div>
</div>
@endsection