@extends('layouts.admin')
@section('dash')
<div class="container mt-3">
    @if (Auth()->user()->role == 'Admin')
    <a href="{{route('courses.create')}}"><button class="btn bg-prim text-white">Add Course</button></a>
    <hr>
    @endif
    <button class="button ps-3 pe-3"><i class="bi bi-sliders"></i> Filter</button>
    <div class="row w-50 mt-3">
        <div class="col-md-4 mb-3">
            <div class="dropdown">
                <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Series
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="dropdown">
                <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Category
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="dropdown">
                <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Topic
                </a>

                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row ">
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
                        <?php echo html_entity_decode(mb_substr($course->description,0,250)); ?>
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                        <a href="/course/{{$k}}" class="btn bg-prim text-light">
                            Enroll
                        </a>
                        <a href="{{route('module.index',['course'=>$course->id])}}" class="btn bg-prim text-light">
                            Resume <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
