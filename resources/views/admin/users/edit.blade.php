@extends('layouts.admin')


@section('title', 'Create | Page')

@section('sidebar')
    @parent
    
@stop

@section('content')

    <h1>Edit User</h1>

    <div class="col-sm-3">
        <img src="{{$user->photo ? $user->photo->file : '/images/default.PNG'}}" alt="img" class="img-responsive img-rounded">
    </div>
    <div class="row">
         @include('includes.form_errors')
    </div>
    <div class="col-sm-9">
        {!! Form::model($user, ['action'=>['App\Http\Controllers\AdminUsersController@update', $user->id], 'method' => 'patch', 'enctype'=>'multipart/form-data', 'class' => 'container']) !!}    
            <div class ='form-group'>
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>

            <div class ='form-group'>
                {!! Form::label('email', 'Email:') !!}
                {!! Form::email('email', null, ['class' => 'form-control']) !!}
            </div>

            <div class ='form-group'>
                {!! Form::label('role_id', 'Role:') !!}
                {!! Form::select('role_id', $roles, null, ['class' => 'form-control']) !!}
            </div>

            <div class ='form-group'>
                {!! Form::label('is_active', 'Status:') !!}
                {!! Form::select('is_active', array(1 => 'Active', 0 => 'Not Active'), null, ['class' => 'form-control']) !!}
            </div>

            <div class ='form-group'>
                {!! Form::label('photo_id', 'Photo:') !!}
                {!! Form::file('photo_id', null, ['class' => 'form-control']) !!}
            </div>

            <div class ='form-group'>
                {!! Form::label('password', 'Password:') !!}
                {!! Form::password('password',  ['class' => 'form-control']) !!}
            </div>

            <div class ='form-group'>
                {!! Form::submit('Update User', ['class'=>'btn btn-primary col-sm-6']) !!}
            </div>

        {!! Form::close() !!}

        {!! Form::open(['action'=>['App\Http\Controllers\AdminUsersController@destroy', $user->id], 'method' => 'DELETE', 'enctype'=>'multipart/form-data', 'class' => 'container']) !!}    

            <div class ='form-group'>
                {!! Form::submit('Delete User', ['class'=>'btn btn-danger col-sm-6']) !!}
            </div>

        {!! Form::close() !!}
    </div>

@stop