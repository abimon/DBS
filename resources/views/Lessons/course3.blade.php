@extends('layouts.admin')
@section('dash')
<div class="container bg-white p-3 h-100">
    <div class="bg-prim rounded p-2 w-100 mt-3">
        <h5 class="text-white ps-3">Add course</h5>
    </div>
    <form action="{{route('module.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="car p-4 mt-3">
            <div class="d-flex justify-content-between mt-1 border-dark border-bottom">
                <h5>Course Curriculum</h5>
                <span>Step 3 of 3</span>
            </div>
            <div class="mt-2">
                <button class="btn bg-prim text-white">Add Section</button>
            </div>
            <!-- TODO:: Add forms for Modules and Lessons -->
            <?php $lessons = [
                [
                    'topics' => ['', '', '', '', '', '', ''],
                    'title' => ''
                ],
                [
                    'topics' => ['', '', '', '', '', '', ''],
                    'title' => ''
                ],
                [
                    'topics' => ['', '', '', '', '', '', ''],
                    'title' => ''
                ],
                [
                    'topics' => ['', '', '', '', '', '', ''],
                    'title' => ''
                ],
                [
                    'topics' => ['', '', '', '', '', '', ''],
                    'title' => ''
                ],
                [
                    'topics' => ['', '', '', '', '', '', ''],
                    'title' => ''
                ],
                [
                    'topics' => ['', '', '', '', '', '', ''],
                    'title' => ''
                ],
                [
                    'topics' => ['', '', '', '', '', '', ''],
                    'title' => ''
                ],
            ]; ?>
            @foreach($lessons as $m=>$lesson)
            <div class="mt-2 bg-prim p-2 card">
                <div class="text-white d-flex justify-content-between mb-3">
                    <span>Module {{$m+1}}: Title Lorem ipsum dolor</span>
                    <button class="btn btn-outline-light btn-small">Add Lesson</button>
                </div>
                @foreach($lesson['topics'] as $t=>$topic)
                <div class="btn rounded w-100 bg-light prim fw-medium mb-3">
                    <div class="d-flex justify-content-between">
                        <p>Topic {{$t+1}}</p>
                        <div>
                            <i class="bi bi-trash"></i>
                            <i class="bi bi-chevron-down" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$t}}m{{$m}}" aria-expanded="false" aria-controls="collapse{{$t}}m{{$m}}"></i>
                        </div>
                    </div>
                    <div class="collapse text-start" id="collapse{{$t}}m{{$m}}">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas vel voluptate fugit, dolorem rem iste quis aperiam. Sunt enim qui explicabo voluptatibus consequatur provident, perspiciatis rerum harum dicta laboriosam eligendi?</p>
                        <div class="btn btn-outline-dark me-3">Add Article</div>
                        <div class="btn btn-outline-dark">Add Description</div>
                    </div>
                </div>
                @endforeach

            </div>
            @endforeach

        </div>
        <div class="d-flex justify-content-between mt-3">
            <a href="{{url()->previous()}}"><button type="button" class="btn bg-secondary text-white">Previous</button></a>
            <button type="submit" class="btn bg-prim text-white">Save and Upload</button>
        </div>
    </form>
</div>
@endsection