@extends('layouts.admin')
@section('dash')
<div class="container bg-white p-3 h-100">
    <div class="bg-prim rounded p-2 w-100 mt-3">
        <h5 class="text-white ps-3">Add course</h5>
    </div>
    <div class="car p-4 mt-3">
        <div class="d-flex justify-content-between mt-1 border-dark border-bottom">
            <h5>{{$course->title}} Course Curriculum</h5>
            <span>Step 3 of 3</span>
        </div>
        <div class="mt-2">
            <div class="btn bg-prim text-white" data-bs-toggle="modal" data-bs-target="#addSection" type='button'>Add Module</div>
            <div class="modal fade" id="addSection" tabindex="-1" aria-labelledby="addSectionLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="addSectionLabel">Add Module</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{route('module.store',['courseId'=>$course->id])}}" method="post">
                            @csrf
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="">Module title</label>
                                    <input type="text" class="form-control" name="title">
                                </div>
                                <textarea name="description" id="editor{{1}}"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- {{$course->modules}} -->
        @foreach($course->modules as $m=>$module)
        <div class="mt-2 bg-prim p-2 card">
            <div class="text-white d-flex justify-content-between mb-3">
                <span>Module {{$m+1}}: {{$module->title}}</span>
                <button class="btn btn-outline-light btn-small" data-bs-toggle="modal" data-bs-target="#addLesson{{$m+1}}">Add Lesson</button>
                <div class="modal fade prim" id="addLesson{{$m+1}}" tabindex="-1" aria-labelledby="addLesson{{$m+1}}Label" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="addLesson{{$m+1}}Label">Module Lesson</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <form action="{{route('lesson.store',['courseId'=>$module->id])}}" method="post">
                                @csrf
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="">Lesson title</label>
                                        <input type="text" class="form-control" name="title">
                                    </div>
                                    <textarea name="body" id="editor{{$m+2}}"></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @foreach($module->lessons as $t=>$lesson)
            <div class="p-3 rounded w-100 bg-light prim fw-medium mb-3">
                <div class="d-flex justify-content-between">
                    <div class="fw-bold">
                        Lesson {{$t+1}}: {{$lesson->title}}
                    </div>
                    <div>
                        <i class="btn bi bi-trash" type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#delete{{$lesson->id}}"></i>
                        <i class="bi bi-chevron-down" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$t}}m{{$m}}" aria-expanded="false" aria-controls="collapse{{$t}}m{{$m}}"></i>
                        <!-- Modal -->
                        <div class="modal fade" id="delete{{$lesson->id}}" tabindex="-1" aria-labelledby="exampleModalLabel{{$lesson->id}}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Confirm</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="{{route('lesson.destroy',$lesson->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <div class="modal-body text-danger">
                                            Do you want to delete the lesson <b>{{$lesson->title}}</b>?<br>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-danger">Confirm</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse text-start" id="collapse{{$t}}m{{$m}}">
                    <?php echo htmlspecialchars_decode($lesson['body']) ?>
                    <div class="btn btn-outline-dark me-3">Edit Content</div>
                    <!-- <div class="btn btn-outline-dark">Add Description</div> -->
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
</div>
@endsection