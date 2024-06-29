@extends('layouts.admin')
@section('dash')
<div class="container mt-3">
    <div class="row gap-2">
        <aside class=" col-md-3 accordion d-sm-none d-md-block p-2" id="accordionExample">
            <div class="d-grid gap-3">
                @foreach($course->modules as $k=>$module)
                <div class="accordion-item">
                    <div class="accordion-header" id="heading{{$k}}">
                        <button class="btn bg-prim text-light text-start w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$k}}" aria-expanded="true" aria-controls="collapse{{$k}}">
                            <i class="bi bi-caret-right-fill"></i> Module {{$k+1}}
                        </button>
                    </div>
                    <div id="collapse{{$k}}" class="accordion-collapse collapse {{$k==0?'show':''}}" aria-labelledby="heading{{$k}}" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="d-grid gap-2">
                                @foreach($module->lessons as $t=>$lesson)
                                <button class="btn bg-light offset-1 d-flex justify-content-between w-100">
                                    Topic {{$t+1}}
                                    <span class="text-end">
                                        <i class="bi {{($t<=2 && $k==0)?'bi-circle-fill':'bi-circle'}}"></i>
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
            <div class="card ">
                <img src="{{asset('storage/covers/'.($course->cover_path))}}" style="height:30vh;object-fit:cover;" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-decoration-underline">Course Description</h5>
                    <p class="card-text"><?php echo html_entity_decode($course->description)?></p>
                    <div class="d-flex justify-content-between ms-1 me-1">
                        <button class="btn-secondary btn"><i class="bi bi-chevron-left"></i> Back to Course</button>
                        <button class="button">Start Module</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection