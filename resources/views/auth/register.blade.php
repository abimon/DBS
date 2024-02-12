@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="rounded shadow col-md-8">
            <div class="row" style="z-index: -1;">
                <div class="col-5 m-0">
                    <img src="{{asset('storage/images/authside.png')}}" style="max-height:400px; object-fit:fill; border-radius:0px;" alt="">
                </div>
                <div class="col-7 m-0" style="background-image: linear-gradient(to right,#411900,#4b5320)">
                    <h2 class="mb-3 mt-3 text-light text-center">Create an Account</h2>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="mb-3">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror rounded-pill" name="name" placeholder="Full Name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror rounded-pill" placeholder="Email Address" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror rounded-pill" placeholder="Create Password" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input id="password-confirm" type="password" class="form-control rounded-pill" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="d-flex justify-content-center mb-3">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                    <p class="text-white text-center mt-3">Don't have an account? <a href="{{ route('login') }}" class="text-info">Sign in.</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection