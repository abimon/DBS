@extends('layouts.app')
@section('content')
<style>
    h1 {
        font-size: 8em;
        color: white;
    }

    h3 {
        font-size: 3em;
        color: aliceblue;
        width:40%
    }
</style>
<div class="bg-transparent">
    <div class="text-center">
        <h1>THE</h1>
        <h1>HEARTH-ED</h1>
        <div class="d-flex justify-content-center mt-3">
            <h3>The truth that changes hearts</h3>
        </div>
        <a href="{{route('register')}}"><button class="btn btn-outline-dark text-white rounded-pill shadow ps-5 pe-5 pt-2 pb-2" style="background-image: linear-gradient(to right,#4b5316,#411901)">Join Us</button>
    </div>
</div>
@endsection