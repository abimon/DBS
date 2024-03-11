@extends('layouts.admin')
@section('content')
<div class="container">
    <!-- <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div> -->
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
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="#" class="btn btn-primary">Continue</a>
                        <a href="#" class="btn btn-success">Join</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection