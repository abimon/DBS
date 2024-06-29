@extends('layouts.admin')
@section('dash')
<div class="container">
    <div class="row">
        @if (Auth()->user()->enrolls->count()>0)
        @foreach (Auth()->user()->enrolls as $course)
        <div class="col-md-4 p-2">
            <div class="card h-100">
                <img src="{{asset('storage/covers/'.$course->course->cover_path)}}" alt="Cover Image" style="height:30vh;object-fit:cover;">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h5 class="card-title">{{$course->course->title}}</h5>
                            <small class="text-secondary">
                                <i class="bi bi-book-half"></i>
                                {{$course->course->modules->count()}} Module(s)
                            </small>
                        </div>
                    </div>
                    <div class="card-text ">
                        <?php echo html_entity_decode(mb_substr($course->course->description, 0, 100)); ?>
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                        <form action="{{route('enroll.destroy',$course->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn bg-prim text-light">
                                <i class="bi bi-dash-circle"></i> Drop
                            </button>
                        </form>
                        <a href="{{route('enroll.show',$course->course_id)}}" class="btn bg-prim text-light">
                            Resume <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @else

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
                    <div class="card-text ">
                        <?php echo html_entity_decode(mb_substr($course->description, 0, 250)); ?>
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                        <form action="{{route('enroll.store')}}" method="post">
                            @csrf
                            <input type="hidden" name="course_id" value="{{$course->id}}">
                            <button type="submit" class="btn bg-prim text-light">
                                Enroll
                            </button>
                        </form>
                        <a href="{{route('module.index',['course'=>$course->id])}}" class="btn bg-prim text-light">
                            Resume <i class="bi bi-eye"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>
@endsection