@extends('layouts.admin')
@section('dash')
<div class="container mt-3">
    <div class="row gap-2">
        <aside class=" col-md-3 accordion d-sm-none d-md-block p-2" id="accordionExample">
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
                <div class="accordion-item">
                    <div class="accordion-header" id="heading{{$k}}">
                        <button class="btn bg-prim text-light text-start w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$k}}" aria-expanded="true" aria-controls="collapse{{$k}}">
                            <i class="bi bi-caret-right-fill"></i> Lesson {{$k+1}}
                        </button>
                    </div>
                    <div id="collapse{{$k}}" class="accordion-collapse collapse {{$k==0?'show':''}}" aria-labelledby="heading{{$k}}" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="d-grid gap-2">
                                @foreach($lesson['topics'] as $t=>$topic)
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
            <h2>Lesson topic goes here</h2>
            <div class="card ">
                <img src="{{asset('storage/images/lesson.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-decoration-underline">Memory Verse</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="d-flex justify-content-between ms-1 me-1">
                        <button class="btn-secondary btn"><i class="bi bi-chevron-left"></i> Back to course</button>
                        <button class="button">Start Module</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection