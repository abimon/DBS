@extends('layouts.app')
@section('content')
<div class="bg-transparent">
    <?php $image = asset('storage/images/home.png'); ?>
    <div style="background-image: url({{$image}});z-index:1;height:55vh">
        <div class="school">
            <h1 class="ms-5 fw-bold">The Digital Bible School</h1>
            <p class="ms-5">Truth that changes lives</p>
            <a href="{{route('register')}}" style="text-align:left;" class="ms-5"><button id="btn" class="button">Join Us</button></a>
        </div>
    </div>
    <div class="programs">
        <div id="aboutUs" class="about">
            <h2>Who we are</h2>
            <p>Digital Bible School is a Christian platform aimed at answering the pressing questions about bible doctrine in relation to the African and Youthful context. We draw from experience of both young and old Christian staff to bring to light the Bible truths with simplicity, with the guidance of the Holy Spirit. We believe that by interacting with the material in this platform, you will experience a richer Christian experience, even as you know more about this faith - Christianity.</p>
        </div>
        <div class="row" id="resources">
            <div class="col-4">
                <div><i class="bi bi-book"></i></div>
                <p class="prim text-center">Guided Lessons</p>
            </div>
            <div class="col-4">
                <div><i class="bi bi-collection"></i></div>
                <p>Free Resources</p>
            </div>
            <div class="col-4">
                <div><i class="bi bi-people"></i></div>
                <p>Online Community</p>
            </div>
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
                <div class="text-center program"><button class="mbutton ps-4 pe-4">See all topics</button></div>
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
        <div class="text-center offset-4">
            <button class="mbutton ps-4 pe-4">Get Involved</button>
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
            <button class="mbutton ps-4 pe-4">See more</button>
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

</div>
@endsection

<!-- 
    ("Afghanistan"),
    ("Albania"),
    ("Algeria"),
    ("Andorra"),
    ("Angola"),
    ("Antigua and Barbuda"),
    ("Argentina"),
    ("Armenia"),
    ("Australia"),
    ("Austria"),
    ("Azerbaijan"),
    ("The Bahamas"),
    ("Bahrain"),
    ("Bangladesh"),
    ("Barbados"),
    ("Belarus"),
    ("Belgium"),
    ("Belize"),
    ("Benin"),
    ("Bhutan"),
    ("Bolivia"),
    ("Bosnia and Herzegovina"),
    ("Botswana"),
    ("Brazil"),
    ("Brunei"),
    ("Bulgaria"),
    ("Burkina Faso"),
    ("Burundi"),
    ("Cabo Verde"),
    ("Cambodia"),
    ("Cameroon"),
    ("Canada"),
    ("Central African Republic"),
    ("Chad"),
    ("Chile"),
    ("China"),
    ("Colombia"),
    ("Comoros"),
    ("Congo, Democratic Republic of the"),
    ("Congo, Republic of the"),
    ("Costa Rica"),
    ("Côte d’Ivoire"),
    ("Croatia"),
    ("Cuba"),
    ("Cyprus"),
    ("Czech Republic"),
    ("Denmark"),
    ("Djibouti"),
    ("Dominica"),
    ("Dominican Republic"),
    ("East Timor (Timor-Leste)"),
    ("Ecuador"),
    ("Egypt"),
    ("El Salvador"),
    ("Equatorial Guinea"),
    ("Eritrea"),
    ("Estonia"),
    ("Eswatini"),
    ("Ethiopia"),
    ("Fiji"),
    ("Finland"),
    ("France"),
    ("Gabon"),
    ("The Gambia"),
    ("Georgia"),
    ("Germany"),
    ("Ghana"),
    ("Greece"),
    ("Grenada"),
    ("Guatemala"),
    ("Guinea"),
    ("Guinea-Bissau"),
    ("Guyana"),
    ("Haiti"),
    ("Honduras"),
    ("Hungary"),
    ("Iceland"),
    ("India"),
    ("Indonesia"),
    ("Iran"),
    ("Iraq"),
    ("Ireland"),
    ("Israel"),
    ("Italy"),
    ("Jamaica"),
    ("Japan"),
    ("Jordan"),
    ("Kazakhstan"),
    ("Kenya"),
    ("Kiribati"),
    ("Korea, North"),
    ("Korea, South"),
    ("Kosovo"),
    ("Kuwait"),
    ("Kyrgyzstan"),
    ("Laos"),
    ("Latvia"),
    ("Lebanon"),
    ("Lesotho"),
    ("Liberia"),
    ("Libya"),
    ("Liechtenstein"),
    ("Lithuania"),
    ("Luxembourg"),
    ("Madagascar"),
    ("Malawi"),
    ("Malaysia"),
    ("Maldives"),
    ("Mali"),
    ("Malta"),
    ("Marshall Islands"),
    ("Mauritania"),
    ("Mauritius"),
    ("Mexico"),
    ("Micronesia, Federated States of"),
    ("Moldova"),
    ("Monaco"),
    ("Mongolia"),
    ("Montenegro"),
    ("Morocco"),
    ("Mozambique"),
    ("Myanmar (Burma)"),
    ("Namibia"),
    ("Nauru"),
    ("Nepal"),
    ("Netherlands"),
    ("New Zealand"),
    ("Nicaragua"),
    ("Niger"),
    ("Nigeria"),
    ("North Macedonia"),
    ("Norway"),
    ("Oman"),
    ("Pakistan"),
    ("Palau"),
    ("Panama"),
    ("Papua New Guinea"),
    ("Paraguay"),
    ("Peru"),
    ("Philippines"),
    ("Poland"),
    ("Portugal"),
    ("Qatar"),
    ("Romania"),
    ("Russia"),
    ("Rwanda"),
    ("Saint Kitts and Nevis"),
    ("Saint Lucia"),
    ("Saint Vincent and the Grenadines"),
    ("Samoa"),
    ("San Marino"),
    ("Sao Tome and Principe"),
    ("Saudi Arabia"),
    ("Senegal"),
    ("Serbia"),
    ("Seychelles"),
    ("Sierra Leone"),
    ("Singapore"),
    ("Slovakia"),
    ("Slovenia"),
    ("Solomon Islands"),
    ("Somalia"),
    ("South Africa"),
    ("Spain"),
    ("Sri Lanka"),
    ("Sudan"),
    ("Sudan, South"),
    ("Suriname"),
    ("Sweden"),
    ("Switzerland"),
    ("Syria"),
    ("Taiwan"),
    ("Tajikistan"),
    ("Tanzania"),
    ("Thailand"),
    ("Togo"),
    ("Tonga"),
    ("Trinidad and Tobago"),
    ("Tunisia"),
    ("Turkey"),
    ("Turkmenistan"),
    ("Tuvalu"),
    ("Uganda"),
    ("Ukraine"),
    ("United Arab Emirates"),
    ("United Kingdom"),
    ("United States"),
    ("Uruguay"),
    ("Uzbekistan"),
    ("Vanuatu"),
    ("Vatican City"),
    ("Venezuela"),
    ("Vietnam"),
    ("Yemen"),
    ("Zambia"),
    ("Zimbabwe") 
-->