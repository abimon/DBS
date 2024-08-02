@extends('layouts.admin')
@section('dash')
<?php $l = (Auth()->user()->enrolls->where('course_id', $course->id)->first())->lesson;
$m = (Auth()->user()->enrolls->where('course_id', $course->id)->first())->module; ?>
<div class="container mt-3">
    <div class="row gap-2">
        <aside class=" col-md-3 accordion d-sm-none d-md-block p-2" id="accordionExample">
            <div class="d-grid gap-3">
                <img src="{{asset('storage/covers/'.($course->cover_path))}}" style="height:30vh;object-fit:cover;" class="card-img-top" alt="...">
                @foreach($course->modules as $k=>$module)
                <div class="accordion-item">
                    <div class="accordion-header" id="heading{{$k}}">
                        <button class="btn bg-prim text-light text-start w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$k}}" aria-expanded="true" aria-controls="collapse{{$k}}">
                            <i class="bi bi-caret-right-fill"></i> {{$module->title}}
                        </button>
                    </div>

                    <div id="collapse{{$k}}" class="accordion-collapse collapse {{$m==($k+1)?'show':''}}" aria-labelledby="heading{{$k}}" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="d-grid gap-2">
                                @foreach($module->lessons as $t=>$lesson)
                                <button class="btn bg-light  d-flex justify-content-between w-100">
                                    <span class="text-start me-1">{{$lesson->title}}</span>
                                    <span class="text-end">
                                        <i class="bi {{(($l>=($t+1) && $m==($k+1)) || ($m>($k+1)))?'bi-circle-fill':'bi-circle'}}"></i>
                                    </span>
                                </button>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </aside>
        <div class="col-md-8 p-2" style="background-color:#F9EFC9;">
            <h2>{{$course->title}}</h2>
            @foreach ($course->modules as $k=>$module)
            @if($m==($k+1))
            @foreach ($module->lessons as $t=>$lesson)
            
            @if (($t+1)==$l)
            <div class="card ">
                <div class="card-body">
                    <h5 class="card-title text-decoration-underline">{{$lesson->title}}</h5>
                    <p class="card-text"><?php echo html_entity_decode($lesson->body) ?></p>
                    <div class="d-flex justify-content-between ms-1 me-1">
                        <a href="{{route('courses.index')}}"><button class="btn-secondary btn"><i class="bi bi-chevron-left"></i> Back to Courses</button></a>
                        <form action="{{route('enroll.update',$course->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <button class="button" type="submit">Proceed</button>
                        </form>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            @endif

            @endforeach
        </div>
    </div>
</div>
@endsection