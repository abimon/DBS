@extends('layouts.admin')
@section('dash')
<div class="container">
    <div class="container-fluid bg-light mt-3 rounded  pb-3">
        <div class="row">
            <div class="col-md-7 car m-3">
                <img src="{{asset('storage/images/about.png')}}" class="w-100" alt="...">
                <div class="card-body row d-flex justify-content-between">
                    <div class="col-md-3">
                        <div class="icon"><i class="bi bi-person-fill"></i></div>
                    </div>
                    <div class=" col-md-8">
                        <h5 class="card-title">Full Username</h5>
                        <p class="card-text fw-bold">@user_slug <i class="bi bi-dot"></i> Joined {{date('F Y')}} <i class="bi bi-dot"></i> <span class="text-danger">Active now</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 car m-3">
                <div class="progression p-3">
                    <div class="card-body">
                        <h5 class="card-title"><b>Complete your profile</b></h5>
                        <div class="" height="75">
                            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-prim" style="width: 25%">25%</div>
                            </div>
                        </div>
                        <div class="w-100 ms-0 fw-bold">
                            <div class="row mt-1">
                                <i class="bi bi-circle col-1"></i>
                                <div class="col-9">General Information</div>
                                <div class="col-1">5/7</div>
                            </div>
                            <div class="row mt-1">
                                <i class="bi bi-circle col-1"></i>
                                <div class="col-9">Profile Photo</div>
                                <div class="col-1">0/1</div>
                            </div>
                            <div class="row mt-1">
                                <i class="bi bi-circle col-1"></i>
                                <div class="col-9">Cover Photo</div>
                                <div class="col-1">0/1</div>
                            </div>
                            <div class="row mt-1">
                                <i class="bi bi-circle col-1"></i>
                                <div class="col-9">Biography</div>
                                <div class="col-1">0/1</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="nav">
            <a class="nav-link fw-bold prim active" aria-current="page" href="#">Profile</a>
            <a class="nav-link fw-bold prim" href="#">Groups</a>
            <a class="nav-link fw-bold prim" href="#">Forums</a>
            <a class="nav-link fw-bold prim disabled" aria-disabled="true">Friends</a>
        </nav>
        <div class="p-5 rounded" style="background-color: rgb(212, 247, 236);">
            <div class="d-flex justify-content-between">
                <h5 class="prim fw-bold">
                    General Information
                </h5>
                <button class="rounded-pill button ps-4 pe-4 bg-secondary">Edit</button>
            </div>
            <hr>
            <div class="">
                <div class="row mb-3">
                    <div class="col-md-4 fw-bold">First Name</div>
                    <div class="col-md-6">McSoff</div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 fw-bold">Last Name</div>
                    <div class="col-md-6">Leisenburg</div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 fw-bold">Year of Birth</div>
                    <div class="col-md-6">1986</div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 fw-bold">Country of Origin</div>
                    <div class="col-md-6">Spain</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection