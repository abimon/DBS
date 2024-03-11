@extends('layouts.app')
@section('content')
<div class="bg-transparent">
    <?php $image = asset('storage/images/home.png'); ?>
    <div style="background-image: url({{$image}});z-index:-1;">
        <div class="school">
            <h1 class="ms-5 fw-bold">The Digital <br>Bible School</h1>
            <p class="ms-5">Truth that changes lives</p>

            <a href="{{route('register')}}" style="text-align:left;" class="ms-5"><button id="btn" class="button">Join Us</button></a>
        </div>

    </div>
    <div class="about">
        <h2>Who are we?</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere consequuntur iste veritatis rerum aut porro obcaecati reiciendis, eius alias nulla cupiditate deserunt ut excepturi dolorem nam corporis autem! Quod, quibusdam.</p>
    </div>
    <div class="row programs">
        <div class="col-md-4 col-6">
            <div><i class="bi bi-book"></i></div>
            <p class="prim text-center">Guide Lessons</p>
        </div>
        <div class="col-md-4 col-6">
            <div><i class="bi bi-collection"></i></div>
            <p>Free Resource</p>
        </div>
        <div class="col-md-4 col-6">
            <div><i class="bi bi-people"></i></div>
            <p>Online Community</p>
        </div>
    </div>
    <div id="about_program">
        <h1>? <br>About the Program</h1>
        <div class="row mt-5">
            <div class="col-lg-5 text-end">
                <img src="{{asset('storage/images/about.png')}}" style="width: 100%;">
            </div>
            <div class="col-lg-6">
                <h2>Gain knowledge with our in-depth courses</h2>
                <div class="program"><i class="bi bi-house-heart"></i> Parenting with purpose</div>
                <div class="program"><i class="bi bi-recycle"></i> Been there, done that</div>
                <div class="program"><i class="bi bi-heart-pulse"></i> Habits of a healthy heart</div>
                <div class="program"><i class="bi bi-bookmarks"></i> The book of Ruth</div>
                <div class="text-center program"><button class="btn btn-outline-primary">See all topics</button></div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-6">
                <h2>Get personalized guidance</h2>
                <div class="program"><i class="bi bi-question-circle-fill"></i> Weekly Q & A sessions</div>
                <div class="program"><i class="bi bi-camera-video"></i> Live monthly training</div>
                <div class="program"><i class="bi bi-chat-left-dots"></i> Active forums</div>
            </div>
            <div class="col-lg-5">
                <img src="{{asset('storage/images/get.png')}}" style="width: 100%;">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-5 text-end">
                <img src="{{asset('storage/images/connect.png')}}" style="width: 100%;">
            </div>
            <div class="col-lg-6">
                <h2>Find encouragement & Connection from our supportive community</h2>
            </div>
        </div>
        <div class="text-center">
            <button class="btn btn-primary">Get Involved</button>
        </div>
    </div>
    <div id="message">
        <h1>Message Series</h1>
        <div class="row d-flex justify-content-between">
            <?php $lessons = ['image1', 'image2', 'image3', '']; ?>
            @foreach($lessons as $lesson)
            <div class="col-lg-3 col-md-4 col-6 p-2">
                <div class="position-relative bg-light overflow-hidden">
                    <img class="img-fluid" src="{{asset('storage/images/'.$lesson.'.png')}}" style='height:30vh;width:100%;object-fit:cover;' alt="">
                </div>
                <div class="border-top">
                    <a href="">Address title will go here</a>
                    <p>Short statement here...</p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center">
            <button class="btn ps-4 pe-4">See more</button>
        </div>
    </div>
    <?php $img = asset("storage/images/help.png"); ?>
    <div id="help" style="background-image: url({{$img}});">
        <div class="title">
            <p>Have a question?</p>
            <p>We want to help.</p>
            <button class="btn btn-outline-light">Contact us</button>
        </div>
    </div>
    <div class="bottom">
        <div class="row p-3 d-flex justify-content-between" id="connect">
            <div class="col-md-4  text-start p-2">
                <div class="title">Stay Connected</div>
                <p>Be the first to know about news, events and more here at DBS</p>
                <form action="" method="post">
                    <input type="email" name="email" placeholder="ENTER EMAIL ADDRESS" class="form-control">
                </form>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3 text-start p-2">
                <div class="title">Resources</div>
                <p>Ipsum</p>
                <p>Blog</p>
                <p>Podcast</p>
                <p>Sermons</p>
                <p>Devotionals</p>
                <p>Lorem ipsum</p>
            </div>
            <div class="col-md-2 text-start p-2">
                <div class="title">Connect</div>
                <p><i class="bi bi-facebook"></i> <i class="bi bi-twitter-x"></i></p>
            </div>
            <div class="col-md-1"></div>
            <div class="mt-1 mail">
                <i class="bi bi-envelope"></i> info@thehearted.org
            </div>
        </div>

    </div>
</div>
@endsection