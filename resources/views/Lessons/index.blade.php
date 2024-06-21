@extends('layouts.admin')
@section('dash')
<div class="container mt-3">
    @if (Auth()->user()->role == 'Admin')
    <a href="{{route('courses.create')}}"><button class="btn bg-prim text-white">Add Course</button></a>
    <hr>
    @endif
    <button class="button ps-3 pe-3"><i class="bi bi-sliders"></i> Filter</button>
    <div class="row w-50 mt-3">
        <div class="col-md-4 mb-3">
            <div class="dropdown">
                <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Series
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="dropdown">
                <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Category
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="dropdown">
                <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Topic
                </a>

                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row ">
        @foreach($courses as $k=>$course)
        <div class="col-md-4 p-2">
            <div class="card h-100">
                
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
