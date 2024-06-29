@extends('layouts.admin')
@section('dash')
<div class="container-fluid alert-success">
    @foreach ($users as $user)
    <div class="d-flex justify-content-between w-100">
        <div class="p-2">
            <img src="{{asset('storage/profile/'.($user->avatar))}}" style="width:40%; object-fit:cover;">
        </div>
        <div class="p-2">
            <div class="">{{$user->f_name}} {{$user->m_name}} {{$user->l_name}}</div>
            @if($user->isOnline())
            <small class="text-success">Active now</small>
            @else
            <small class="text-muted">Offline</small>
            @endif
        </div>
        @if (Auth()->user()->role == 'Admin')
        <div class="p-3 dropdown">
            <i class="bi bi-three-dots" type="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
            <ul class="dropdown-menu">
               <?php $roles  = ['Advisor','Admin','Student'];?>
               @foreach ($roles as $role)
               <li>
                    <form class="dropdown-item" action="{{route('user.update',$user->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="role" value="{{$role}}">
                        <button type="submit" class="btn btn-transparent">Make {{$role}}</button>
                    </form>
                </li>
               @endforeach
               <li>
                    <form class="dropdown-item" action="{{route('user.destroy',$user->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-transparent text-danger">Delete</button>
                    </form>
                </li>
            </ul>
        </div>
        @endif
    </div>
    <hr>
    @endforeach
</div>
@endsection