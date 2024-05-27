@extends('layouts.admin')
@section('dash')
<div class="container">
    <div class="container-fluid bg-light mt-3 rounded  pb-3">
        <div class="row">
            <div class="col-md-7 car m-3">
                <div class="cover">
                    @if(Auth()->user()->cover_photo == null)
                    <img src="{{asset('storage/images/about.png')}}" class="w-100">
                    @else
                    <img src="{{asset('storage/profile/'.Auth()->user()->cover_photo)}}" class="w-100">
                    @endif
                    <div class="text-light fw-bolder camera" data-bs-toggle="modal" data-bs-target="#EditCover" type='button'>
                        <i class="bi bi-camera"></i>
                    </div>
                    <div class="modal fade" id="EditCover" tabindex="-2" aria-labelledby="EditCoverLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="EditProfileLabel">Edit Cover</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{route('user.update',Auth()->user()->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <div class="m-3 card p-3 border-dark bg-transparent" style="border-style:dashed;">
                                                <img id="out" src="{{asset('storage/profile/'.Auth()->user()->cover)}}" style="width: 100%; object-fit:contain;" />
                                                <input type="file" accept="image/jpeg, image/png, image/webp" name="cover" id="cover" style="display: none;" class="form-control" onchange="loadCoverFile(event)">
                                                <div class="pt-2" id="desc">
                                                    <div class="text-center" style="font-size: xxx-large; font-weight:bolder;">
                                                        <i class="bi bi-upload"></i>
                                                    </div>
                                                    <div class="text-center">
                                                        <label for="cover" class="btn button text-white" title="Upload new profile image">Browse</label>
                                                    </div>
                                                    <div class="text-center prim">*File supported .png .jpg .webp</div>
                                                </div>
                                                <script>
                                                    var loadCoverFile = function(event) {
                                                        var image = document.getElementById('out');
                                                        image.src = URL.createObjectURL(event.target.files[0]);
                                                        document.getElementById('cover').value == image.src;

                                                    };
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body row d-flex justify-content-between">
                    <div class="col-md-3">
                        <div class="icon">
                            <div class="cover">
                                @if(Auth()->user()->avatar == null)
                                <img src="{{asset('storage/images/image1.png')}}" class="w-100" style="object-fit: cover; border-radius:50%;">
                                @else
                                <img src="{{asset('storage/profile/'.Auth()->user()->avatar)}}" class="w-100" style="object-fit: cover; border-radius:50%;">
                                @endif

                                <div class="text-light fw-bolder cam" data-bs-toggle="modal" data-bs-target="#EditAvatar" type='button'>
                                    <i class="bi bi-camera-fill"></i>
                                </div>

                            </div>
                            <!-- <i class="bi bi-person-fill"></i> -->
                        </div>

                    </div>
                    <div class="modal fade" id="EditAvatar" tabindex="-2" aria-labelledby="EditAvatarLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="EditProfileLabel">Edit Avatar</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{route('user.update',Auth()->user()->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <div class="m-3 card p-3 border-dark bg-transparent" style="border-style:dashed;">
                                                <img id="output" src="{{asset('storage/profile/'.Auth()->user()->avatar)}}" style="width: 100%; object-fit:contain;" />
                                                <input type="file" accept="image/jpeg, image/png, image/webp" name="avatar" id="avatar" style="display: none;" class="form-control" onchange="loadFile(event)">
                                                <div class="pt-2" id="desc">
                                                    <div class="text-center" style="font-size: xxx-large; font-weight:bolder;">
                                                        <i class="bi bi-upload"></i>
                                                    </div>
                                                    <div class="text-center">
                                                        <label for="avatar" class="btn button text-white" title="Upload new profile image">Browse</label>
                                                    </div>
                                                    <div class="text-center prim">*File supported .png .jpg .webp</div>
                                                </div>
                                                <script>
                                                    var loadFile = function(event) {
                                                        var image = document.getElementById('output');
                                                        image.src = URL.createObjectURL(event.target.files[0]);
                                                        document.getElementById('avatar').value == image.src;

                                                    };
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-9">
                        <h5 class="card-title">{{Auth()->user()->f_name}} {{Auth()->user()->m_name}} {{Auth()->user()->l_name}}</h5>
                        <p class="card-text fw-bold">{{'@'.Auth()->user()->username}} <i class="bi bi-dot"></i> Joined {{date_format(Auth()->user()->created_at,'F Y')}} <i class="bi bi-dot"></i> 
                                @if(Auth()->user()->isOnline())
                                <span class="text-success">Active now</span>
                                @else
                                <span class="text-secondary">Offline</span>
                                @endif
                            </span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 car m-3">
                <div class="progression p-3">
                    <div class="card-body">
                        <h5 class="card-title"><b>Complete your profile</b></h5>
                        <div class="" height="75">
                            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{$per}}" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-prim" style="width: {{$per}}%">{{$per}}%</div>
                            </div>
                        </div>
                        <div class="w-100 ms-0 fw-bold">
                            <div class="row mt-3">
                                <i class="bi {{$g==7 ? 'bi-circle-fill' : 'bi-circle'}} col-1"></i>
                                <div class="col-9">General Information</div>

                                <div class="col-1">{{$g}}/7</div>
                            </div>
                            <div class="row mt-3">
                                <i class="bi {{Auth()->user()->avatar != null?'bi-circle-fill':'bi-circle'}} col-1"></i>
                                <div class="col-9">Profile Photo</div>
                                <div class="col-1">
                                    @if(Auth()->user()->avatar != null)
                                    1/1
                                    @else
                                    0/1
                                    @endif
                                </div>
                            </div>
                            <div class="row mt-3">
                                <i class="bi {{Auth()->user()->cover_photo != null?'bi-circle-fill':'bi-circle'}} col-1"></i>
                                <div class="col-9">Cover Photo</div>
                                <div class="col-1">
                                    @if(Auth()->user()->cover_photo != null)
                                    1/1
                                    @else
                                    0/1
                                    @endif
                                </div>
                            </div>
                            <div class="row mt-3">
                                <i class="bi {{Auth()->user()->biography != null?'bi-circle-fill':'bi-circle'}} col-1"></i>
                                <div class="col-9">Biography</div>
                                <div class="col-1">
                                    @if(Auth()->user()->biography != null)
                                    1/1
                                    @else
                                    0/1
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion" id="accordionExample">
            <nav class="nav">
                <a class="nav-link fw-bold prim active" type="button" data-bs-toggle="collapse" data-bs-target="#general" aria-expanded="true" aria-controls="collapseOne" aria-current="page" href="#">Profile</a>
                <a class="nav-link fw-bold prim" href="#" type="button" data-bs-toggle="collapse" data-bs-target="#biography" aria-expanded="true" aria-controls="collapseOne" aria-current="page">Biography</a>
                <!-- <a class="nav-link fw-bold prim" href="#">Groups</a>
                <a class="nav-link fw-bold prim" href="#">Forums</a>
                <a class="nav-link fw-bold prim" aria-disabled="true">Friends</a> -->
            </nav>
            <div id="general" class="p-5 rounded accordion-collapse collapse show" data-bs-parent="#accordionExample" style="background-color: #E9F2F8;">
                <div class="d-flex justify-content-between">
                    <h5 class="prim fw-bold">
                        General Information
                    </h5>
                    <button class="rounded-pill button ps-4 pe-4 bg-secondary" data-bs-toggle="modal" data-bs-target="#EditProfile" type='button'>Edit</button>

                    <div class="modal fade" id="EditProfile" tabindex="-1" aria-labelledby="EditProfileLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="EditProfileLabel">Edit Profile</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{route('user.update',Auth()->user()->id)}}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="">First Name</label>
                                            <input type="text" class="form-control" name="f_name" value="{{Auth()->user()->f_name}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Middle Name</label>
                                            <input type="text" class="form-control" name="m_name" value="{{Auth()->user()->m_name}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Last Name</label>
                                            <input type="text" class="form-control" name="l_name" value="{{Auth()->user()->l_name}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Email</label>
                                            <input type="email" class="form-control" name="email" value="{{Auth()->user()->email}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Phone No.</label>
                                            <input type="number" class="form-control" name="contact" value="{{Auth()->user()->contact}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Country of Origin</label>
                                            <select name="country" require id="" class="form-select">
                                                @if(Auth()->user()->country == null)
                                                <option>--- Select Country of Origin ---</option>
                                                @endif
                                                @foreach($nations as $nation)
                                                <?php 
                                                $n=Auth()->user()->country;
                                                $c = $nation->country;
                                                ?>
                                                <option value="{{$nation->country}}" {{$n == $c?'selected':''}}>{{$nation->country}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Year of Birth</label>
                                            <input type="text" class="form-control" name="yob" value="{{Auth()->user()->yob}}">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="">
                    <div class="row mb-3">
                        <div class="col-md-4 fw-bold">First Name</div>
                        <div class="col-md-6">{{Auth()->user()->f_name}}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 fw-bold">Middle Name</div>
                        <div class="col-md-6">{{Auth()->user()->m_name}}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 fw-bold">Last Name</div>
                        <div class="col-md-6">{{Auth()->user()->l_name}}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 fw-bold">Phone No.</div>
                        <div class="col-md-6">+{{Auth()->user()->contact}}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 fw-bold">Email</div>
                        <div class="col-md-6">{{Auth()->user()->email}}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 fw-bold">Year of Birth</div>
                        <div class="col-md-6">{{Auth()->user()->yob}}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 fw-bold">Country of Origin</div>
                        <div class="col-md-6">{{Auth()->user()->country}}</div>
                    </div>
                    
                </div>
            </div>
            <div id="biography" class="p-5 rounded accordion-collapse collapse" data-bs-parent="#accordionExample" style="background-color: #E9F2F8;">
                <?php echo html_entity_decode(Auth()->user()->biography); ?>
                @if(Auth()->user()->biography==null)
                <button class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#PubBio" type="button">
                    Publish My Biography
                </button>
                @else
                <button class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#EditBio" type="button">
                    Edit My Bio
                </button>
                @endif
            </div>
        </div>
    </div>
</div>
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="PubBio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Publish My Biography</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('user.update',Auth()->user()->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <textarea name="biography" id="editor1"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="EditBio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit My Biography</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <form action="{{route('user.update',Auth()->user()->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <textarea name="biography" id="editor2">
                        <?php echo html_entity_decode(Auth()->user()->biography); ?>
                    </textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection