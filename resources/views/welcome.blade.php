@extends('layouts.app')
@section('content')
<div class="bg-transparent">
    <div class="text-center">
        <h1>THE</h1>
        <h1>HEARTH-ED</h1>
        <div class="d-flex justify-content-center mt-3 mb-5">
            <h2 style="width: 40%;">The truth that changes hearts</h2>
        </div>
        <a href="{{route('register')}}"><button id="btn" class="btn btn-outline-dark text-white rounded-pill shadow ps-5 pe-5 pt-2 pb-2" >Join Us</button>
    </div>
</div>
@endsection