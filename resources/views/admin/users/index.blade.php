@extends('layouts.admin')


@section('title', 'Users | Page')

@section('sidebar')
    @parent
    
@stop

@section('content')

@if(Session::has('deleted_user'))

    <p class="bg-danger">{{session('deleted_user')}}</p>

@endif

@if(Session::has('user_updated'))

    <p class="bg-success">{{session('user_updated')}}</p>

@endif

@if(Session::has('create_user'))

    <p class="bg-success">{{session('create_user')}}</p>

@endif

<h1>Users</h1>
    <table class="table">
        <thead>
            <tr style="color: #00A03C;">
            <th class="font-weight-bold">ID</th>
            <th class="font-weight-bold">PHOTO</th>
            <th class="font-weight-bold">NAME</th>
            <th class="font-weight-bold">EMAIL</th>
            <th class="font-weight-bold">ROLE</th>
            <th class="font-weight-bold">STATUS</th>
            <th class="font-weight-bold">CREATED_AT</th>
            <th class="font-weight-bold">UPDATED</th>
            <th class="font-weight-bold">ACTION</th>
        </tr>
        </thead>
    <tbody>
        @if($users)
            @foreach($users as $user)
    <tr>
        <td>{{$user->id}}</td>
        <td><img height="50px" src="{{$user->photo ? $user->photo->file : '/images/default.PNG'}}" alt="img" class="img-responsive img-rounded">
        </td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->role->name}}</td>
        <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
        <td>{{$user->created_at->diffForHumans()}}</td>
        <td>{{$user->updated_at->diffForHumans()}}</td>
        <td>
            <div class="badge badge-warning p-2"><a href="{{route('admin.users.edit', $user->id)}}">Update</a></div>
            <div class="badge badge-warning p-2"><a href="">View</a></div>
        </td>
    </tr>
        @endforeach
        @endif
    </tbody>
</table>

@stop

@section('footer')

@stop