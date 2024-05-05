@extends('layouts.admin')
@section('dash')
<div class="container mt-3">
    <a href="{{route('courses.create')}}"><button class="btn bg-prim text-white">Add Course</button></a>
    <hr>
    <div class="row d-flex justify-content-between">
        @foreach($courses as $k=>$course)
        <div class="col-md-4 p-2">
            <div class="card h-100">
                <img src="{{asset('storage/covers/'.$course->cover_path)}}" alt="Cover Image" style="height:30vh;object-fit:cover;">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                    <div>
                    <h5 class="card-title">{{$course->title}}</h5>
                    <small>{{$course->category}}</small>
                    </div>
                    <div class="bi bi-people"> {{16*$k}}</div>
                    </div>
                    <div class="card-text h-50" style="overflow: hidden;"><?php echo html_entity_decode($course->description)?></div>
                    <!-- <div class="progress mb-2">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-prim" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                    </div> -->
                    
                    <p class="fw-bold text-end"><i class="bi bi-copies"></i> {{$course->modules->count()}} Modules</p>
                    <div class="d-flex justify-content-between">
                        <a href="/course/{{$k}}" class="btn bg-prim text-light">View</a>
                        <a href="/enroll/{{$k}}" class="btn btn-success">Enroll</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection