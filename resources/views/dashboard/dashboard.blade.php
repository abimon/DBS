@extends('layouts.admin')
@section('dash')
<div class="container">
    <div class="row d-flex justify-content-center">
        @foreach($courses as $k=>$course)
        <div class="col-md-4 p-2">
            <div class="card h-100">
                <img src="{{asset('storage/covers/'.$course->cover_path)}}" alt="Cover Image" style="height:30vh;object-fit:cover;">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h5 class="card-title">{{$course->title}}</h5>
                            <!-- <small>{{$course->category}}</small> -->
                            <small class="text-secondary">
                                <i class="bi bi-book-half"></i>
                                {{$course->modules->count()}} Module(s)
                            </small>
                        </div>
                        @if (Auth()->user()->role == "Admin")
                        <div class="bi bi-people"> {{16*$k}}</div>
                        @endif
                    </div>
                    <!-- <div class="card-text ">
                        <?php echo html_entity_decode(mb_substr($course->description, 0, 250)); ?>
                    </div> -->
                    <div class="d-flex justify-content-end  mt-3">
                        @if (Auth()->user()->role=='Admin')
                        <a href="{{route('courses.edit',$course->id)}}" class="btn bg-prim text-light me-3">
                            Edit <i class="bi bi-pen"></i>
                        </a>
                        @endif
                        @if(Auth()->user()->enrolls->contains('course_id',$course->id))
                        <a href="{{route('courses.show',$course->slug)}}" class="btn bg-prim text-light">
                            Resume <i class="bi bi-eye"></i>
                        </a>
                        @else
                        <form action="{{route('enroll.store')}}" method="post">
                            @csrf
                            <input type="hidden" name="course_id" value="{{$course->id}}">
                            <button type="submit" class="btn bg-prim text-light">
                                Enroll
                            </button>
                        </form>
                        @endif

                        
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection