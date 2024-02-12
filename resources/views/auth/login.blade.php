@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" >
        <div class="rounded shadow col-md-8" >
            <div class="row" style="z-index: 2;">
                <div class="col-5 m-0">
                    <img src="{{asset('storage/images/authside.png')}}" style="max-height:400px; object-fit:fill; border-radius:0px;" alt="">
                </div>
                <div class="col-7 m-0" style="background-image: linear-gradient(to right,#411900,#4b5320)">
                    <h2 class="mb-3 mt-3 text-light text-center">Sign in</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror rounded-pill" placeholder="Email Address" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror rounded-pill" placeholder="Password" name="password" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-center mb-3">
                                <div class="text-white">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"> 
                                        {{ __('Remember Me') }}
                                </div>
                            <div>
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>

                        <div class="d-flex justify-content-center">
                            <button type="submit" class="w-75  btn btn-outline-primary rounded-pill form-control">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </form>
                    <p class="text-white text-center mt-3">Don't have an account? <a href="{{ route('register') }}" class="text-info">Sign up now</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection