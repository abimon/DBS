@extends('layouts.admin')
@section('dash')
<div class="container p-3 mt-2 bg-light h-100">
    <div class="car h-100">
        <div class="card row">
            <div class="col-md-6 bg-prim text-light p-3">
                @foreach($users as $user)
                <div class="row">
                    <div class="col-2">
                        <img src="{{asset('storage/profile/'.($user->avatar))}}" style="width: 10vh;height:10vh;object-fit:cover;" alt="">
                    </div>
                    <div class="col-8">
                        <div class="">{{$user->f_name}} {{$user->m_name}} {{$user->l_name}}</div>
                        @if($user->isOnline())
                        <small class="text-danger">Active now</small>
                        @else
                        <small class="text-muted">Offline</small>
                        @endif
                    </div>
                </div>
                <hr>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection