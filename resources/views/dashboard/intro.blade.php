@extends('layouts.app')
@section('content')
<div class="row ms-2 gap-3">
        <aside class="left-sidebar col-3 accordion d-sm-none d-md-block p-2" id="accordionExample" style="background-color:#F9EFC9;">
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
                <div class="accordion-item" >
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
        <div class="col-md-1"></div>
        <div class="col-md-7" >
            <h4 class="text-decoration-underline">Introduction</h4>
            <div class="" style="width: 100%;">
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse nulla excepturi quidem corporis in cupiditate aut voluptas ad tempora quibusdam recusandae vel, amet pariatur ratione atque, iure mollitia adipisci obcaecati!</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis soluta veniam laborum dolor rem voluptatem aliquam quisquam asperiores.</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione consequatur nesciunt impedit similique repudiandae hic assumenda natus corporis possimus porro nemo distinctio cupiditate culpa sint quas amet, itaque excepturi voluptatum.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis beatae doloribus praesentium dignissimos porro voluptatibus quo sit nulla fugiat dolore facilis fugit vitae earum, cumque consequatur ut dicta numquam doloremque!</p>
                    <div class="d-flex justify-content-between ms-1 me-1">
                        <button class="btn-secondary btn rounded-pill"><i class="bi bi-chevron-left"></i> Previous</button>
                        <button class="rounded-pill bg-prim btn text-light">Next <i class="bi bi-chevron-right"></i></button>
                    </div>
            </div>
        </div>
</div>
@endsection