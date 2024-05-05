@extends('layouts.admin')
@section('dash')
<div class="container">
    <a href="{{route('courses.create')}}"><button class="btn bg-prim text-white">Add Course</button></a>
    <hr>
    <div class="row d-flex justify-content-between">
        <?php $courses = [
            ['image' => 'image1.png', 'course' => 'Course 1'],
            ['image' => 'image2.png', 'course' => 'Course 2'],
            ['image' => 'image3.png', 'course' => 'Course 3']
        ]; ?>

        @foreach($courses as $course)
        <div class="col-md-4 p-2">
            <div class="card">
                <img src="{{asset('storage/images/'.$course['image'])}}" alt="Cover Image" style="height:30vh;object-fit:cover;">
                <div class="card-body">
                    <h5 class="card-title">{{$course['course']}}</h5>
                    <p class="card-text">Short description</p>
                    <div class="progress mb-2">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-prim" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="#" class="btn bg-prim text-light">Continue</a>
                        <a href="/course/{{$course['course']}}" class="btn btn-success">View</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection