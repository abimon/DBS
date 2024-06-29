@extends('layouts.app')
@section('content')
<div class="" id="profile" style="font-family: Montserrat;">
    <div class="sidebar mb-3">
        <ul style="list-style: none; margin-left:0px;" class="h-100 mt-3 fw-bold">
            <li class="mb-5 bg-transparent dlogo">
                <h4 style="font-weight:bold">{{Auth()->user()->role}} Panel</h4>
            </li>
            <li class="mb-5 fw-medium bg-transparent">
                <a href="/dashboard" class='prim'>
                    <i class="bi bi-speedometer"></i> Dashboard
                </a>
            </li>
            <li class="mb-5 fw-medium bg-transparent">
                <a href="/profile">
                    <i class="bi bi-person-square"></i> Profile
                </a>
            </li>
            <li class="mb-5 fw-medium bg-transparent">
                <a href="{{route('courses.index')}}">
                    <i class="bi bi-journal-bookmark-fill"></i> Courses
                </a>
            </li>
            @if (Auth()->user()->role == 'Admin')
            <li class="mb-5 fw-medium bg-transparent">
                <a href="{{route('user.index')}}">
                    <i class="bi bi-people-fill"></i> Registered Users
                </a>
            </li>
            @else
            <li class="mb-5 fw-medium bg-transparent">
                <a href="/courses/MyCourses" style="text-decoration: none; overflow:hidden; text-wrap:nowrap" class='prim'>
                    <i class="bi bi-journal-bookmark-fill"></i> My Courses
                </a>
            </li>
            @endif
            <li class="mb-5 fw-medium bg-transparent">
                <a href="" style="text-decoration: none;overflow:hidden; text-wrap:nowrap" class='prim'>
                    <i class="bi bi-bell"></i> Notifications
                </a>
            </li>
            <li class="mb-5 fw-medium bg-transparent">
                <a class="text-danger" style="text-decoration: none;overflow:hidden; text-wrap:nowrap" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" aria-expanded="false">
                    <i class="bi bi-power"></i> Logout
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </a>
            </li>
        </ul>
    </div>
    <div class="main">
        @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session::get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if (Session::has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ Session::get('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @yield('dash')
    </div>
</div>
@endsection