@extends(Auth()->user()?'layouts.admin':'layouts.app')
@section(Auth()->user()?'dash':'content')
<div class="container mt-3">
    @if ((Auth()->user())&&(Auth()->user()->role == 'Admin'))
    <a href="{{route('courses.create')}}"><button class="btn bg-prim text-white">Add Course</button></a>
    <hr>
    @endif
    <button class="button ps-3 pe-3"><i class="bi bi-sliders"></i> Filter By</button>
    <div class="row mt-3">
        <div class="col-md-4 col-6 mb-3">
            <div class="dropdown">
                <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Category
                </a>
                <ul class="dropdown-menu">
                    <?php $cats = ['Test', 'Salvation', 'Law', 'Grace', 'Health']; ?>
                    @foreach($cats as $cat)
                    <li><a class="dropdown-item" onclick="sort('<?php echo $cat; ?>')">{{$cat}}</a></li>
                    @endforeach
                    <script>
                        function sort(tit) {
                            var elements = document.querySelectorAll('.post');
                            elements.forEach(element => {
                                if (element.classList.contains(tit)) {
                                    element.style.display = '';
                                } else {
                                    element.style.display = 'none';
                                }
                            });
                        }
                    </script>
                </ul>
            </div>
        </div>
        <div class="col-md-4 col-6 mb-3">
            <div class="dropdown">
                <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Topic
                </a>

                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" onclick="sortTitle('all')">All</a></li>
                    @foreach($courses as $course)
                    <li><a class="dropdown-item" onclick="sortTitle('<?php echo $course->slug; ?>')">{{$course->title}}</a></li>
                    @endforeach
                    <script>
                        function sortTitle(tit) {
                            var elements = document.querySelectorAll('.post');
                            elements.forEach(element => {
                                if (element.classList.contains(tit)) {
                                    element.style.display = '';
                                } else {
                                    element.style.display = 'none';
                                }
                            });
                        }
                    </script>
                </ul>
            </div>
        </div>
        <div class="col-md-4 col-6 mb-3">
            <div class="dropdown">
                <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Enrollment
                </a>

                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" onclick="sortEnroll('all')">All</a></li>
                    <li><a class="dropdown-item" onclick="sortEnroll('true')">Enrolled</a></li>
                    <li><a class="dropdown-item" onclick="sortEnroll('false')">Not Enrolled</a></li>
                    
                    <script>
                        function sortEnroll(tit) {
                            var elements = document.querySelectorAll('.post');
                            elements.forEach(element => {
                                if (element.classList.contains(tit)) {
                                    element.style.display = '';
                                } else {
                                    element.style.display = 'none';
                                }
                            });
                        }
                    </script>
                </ul>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        @foreach($courses as $k=>$course)
        <div class="col-md-4 p-2 post {{(Auth()->user())&&(Auth()->user()->enrolls->contains('course_id',$course->id))?'true':'false'}} {{$course->category}} all {{$course->slug}}" id="{{$course->title}}">
            <div class="card h-100" style="border-radius:12px;">
                <img src="{{asset('storage/covers/'.$course->cover_path)}}" alt="Cover Image" style="height:30vh;object-fit:cover; border-radius:12px;">
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
                        @if ((Auth()->user())&&(Auth()->user()->role == "Admin"))
                        <div class="bi bi-people"> {{16*$k}}</div>
                        @endif
                    </div>
                    
                    <div class="d-flex justify-content-end mt-3">
                    @if((Auth()->user())&&(Auth()->user()->enrolls->contains('course_id',$course->id)))
                        <a href="{{route('module.index',['course'=>$course->id])}}" class="btn bg-prim text-light">
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
                        
                        <!-- <a href="{{route('module.index',['course'=>$course->id])}}" class="btn bg-prim text-light">
                            Resume <i class="bi bi-arrow-right"></i>
                        </a> -->
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection