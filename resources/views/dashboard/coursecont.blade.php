@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <?php $image = asset('storage/images/lesson.jpg'); ?>
    <div style="background-image: url({{$image}});" class="banner">
        <div class="p-4">
            <h6 class="text-white">FAMILY LIFE</h6>
            <h3 class="mt-3">Parenting With Purpose</h3>
            <div class="row">
                <div class="col-7">
                    <p class="mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae libero quisquam eos natus maxime harum quo? Dolores reiciendis laudantium blanditiis.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-between">
        <div class="col-md-7">
            <div class="alert mt-2" style="background-color:#F9EFC9;">
                <div class="row">
                    <div class="col-1"><i class="bi bi-person-circle" style="font-size:x-large"></i></div>
                    <div class="col-10">
                        <div class="progress mt-3 bg-light" role="progressbar" aria-label="Example 1px high" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 6px">
                            <div class="progress-bar" style="width: 25%; background-color:#141430;"></div>
                        </div>
                        <div class="text-end"><i><b>25% Complete</b></i></div>
                    </div>
                </div>
            </div>
            <h4 style="color: #141430;">ADDITIONAL RESOURCES</h4>
            <ul>
                <li><b>Free Study Guide PDF</b> Lorem ipsum dolor sit, amet consectetur adipisicing elit. </li>
                <li><b>Free Video Downloads</b> Lorem ipsum dolor sit, amet consectetur adipisicing elit. </li>
            </ul>
            <h4>Course Content</h4>
            <aside class="left-sidebar accordion p-2" id="accordionExample">
                <div class="d-grid gap-3">
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
                    @foreach($lessons as $k=>$lesson)
                    <div class="mb-2">
                        <div class="accordion-header" id="heading{{$k}}">
                            <button class="btn text-start w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$k}}" aria-expanded="true" aria-controls="collapse{{$k}}" style="background-color:#F9EFC9;color:#141430;font-weight:bold;">
                                <div class="d-flex justify-content-between">
                                    <div><i class="bi bi-caret-right-fill"></i> Lorem ipsum dolor {{$k+1}} </div>
                                    <div>{{count($lesson['topics'])}} Modules</div>
                                </div>
                            </button>
                        </div>
                        <div id="collapse{{$k}}" class="accordion-collapse collapse" aria-labelledby="heading{{$k}}" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="d-grid gap-2">
                                    @foreach($lesson['topics'] as $t=>$topic)
                                    <button class="btn  offset-1 d-flex justify-content-between w-75">
                                        Topic {{$t+1}}
                                        <!-- <span class="text-end">
                                        <i class="bi {{($t<=2 && $k==0)?'bi-circle-fill':'bi-circle'}}"></i>
                                    </span> -->
                                    </button>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </aside>
        </div>
        <div class="col-md-3">
            <div class="card fw-bold" style="background-color:#F9EFC9; color:#141430;border-radius:0px 0px 12px 12px;">
                <div class="card-body">
                    <h5 class="fw-bold prim mb-3">Course includes</h5>
                    <div class="mb-1"><i class="bi bi-journals"></i> 10 Lessons</div>
                    <div class="mb-1"><i class="bi bi-filetype-rb"></i> 25 Reflection Questions</div>
                    <button class="btn rounded-pill bg-light fw-bold" style="font-size: small;">Start course with a new group</button>
                </div>
            </div>
        </div>
    </div>
    <h3 class="text-center text-decoration-underline fw-bold" style="color: #141430;">Ratings and reviews</h3>
    <div class="row mb-5">
        <div class="col-md-4">
            <div class="progress mb-2" style="border-radius:12px; height:10px" role="progressbar" aria-label="Basic example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar" style="width: 100%;border-radius:12px;"></div>
            </div>
            <div class="progress mb-2" style="border-radius:12px; height:10px" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar" style="width: 75%;border-radius:12px;"></div>
            </div>
            <div class="progress mb-2" style="border-radius:12px; height:10px" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar" style="width: 50%;border-radius:12px;"></div>
            </div>
            <div class="progress mb-2" style="border-radius:12px; height:10px" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar" style="width: 25%;border-radius:12px;"></div>
            </div>
            <div class="progress mb-2" style="border-radius:12px; height:10px" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar" style="width: 0%"></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="d-flex justify-content-center">
                <div class="text-warning d-flex justify-content-between col-6">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                </div>
            </div>
            <h1 class="text-center fw-bold" style="color: #141430;">4.7</h1>
            <h5 class="text-center fw-bold">Av. Ratings</h5>
        </div>
        <div class="col-md-4">
            <p class="fw-bold">What is your experience?<br>We'd like to know</p>
            <button class="button">Write a review</button>
        </div>
    </div>
</div>
@endsection