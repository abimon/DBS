@extends('layouts.app')
@section('content')
<div class="container mt-2 mb-2">
    <div class="row justify-content-center ">
        <form method="POST" action="{{ route('register') }}" class=" form  col-md-6">
        <h1 class="mb-2 mt-3 text-light text-center">New account</h1>
            <h2 class="mb-3 text-light text-center">Create an account</h2>
            @csrf

            <div class="mb-4">
                <input id="f_name" type="text" class="form-control @error('f_name') is-invalid @enderror rounded-pill" name="f_name" placeholder="First Name" value="{{ old('f_name') }}" required autocomplete="f_name" autofocus>
                @error('f_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mb-4">
                <input id="m_name" type="text" class="form-control @error('m_name') is-invalid @enderror rounded-pill" name="m_name" placeholder="Middle Name [Optional]" value="{{ old('m_name') }}"  autocomplete="m_name" autofocus>
                @error('m_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mb-4">
                <input id="l_name" type="text" class="form-control @error('l_name') is-invalid @enderror rounded-pill" name="l_name" placeholder="Last Name" value="{{ old('l_name') }}" required autocomplete="l_name" autofocus>
                @error('l_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mb-4">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror rounded-pill" placeholder="Email Address" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mb-4">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror rounded-pill" placeholder="Create Password" name="password" required autocomplete="new-password">
                <small class="text-white ms-3">Must be atleast 8 characters</small>

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mb-4">
                <input id="password-confirm" type="password" class="form-control rounded-pill" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
            </div>

            <div class="d-flex justify-content-center mb-3">
                <button type="submit" class="btn btn-outline-light rounded-pill shadow ps-5 pe-5 pt-2 pb-2">
                    {{ __('Sign Up') }}
                </button>
            </div>
            <p class="text-white text-center mt-3">Alread have an account? <a href="{{ route('login') }}" class="red-link">Sign in.</a></p>
        </form>
        
    </div>
</div>
@endsection