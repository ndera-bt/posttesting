@extends('layouts.admin')


@section('title', 'Create | Page')

@section('sidebar')
    @parent
    
@stop

@section('content')

    <h1>Create Users</h1>

    {!! Form::open(['action'=>'App\Http\Controllers\AdminUsersController@store', 'method' => 'post', 'enctype'=>'multipart/form-data', 'class' => 'container']) !!}    
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
            {!! Form::select('role_id', [''=>'Choose options'] + $roles, null, ['class' => 'form-control']) !!}
        </div>

        <div class ='form-group'>
            {!! Form::label('is_active', 'Status:') !!}
            {!! Form::select('is_active', array(1 => 'Active', 0 => 'Not Active'), 0, ['class' => 'form-control']) !!}
        </div>

        <div class ='form-group'>
            {!! Form::label('file', 'Photo:') !!}
            {!! Form::file('file', null, ['class' => 'form-control']) !!}
        </div>

        <div class ='form-group'>
            {!! Form::label('password', 'Password:') !!}
            {!! Form::password('password',  ['class' => 'form-control']) !!}
        </div>

        <div class ='form-group'>
            {!! Form::submit('Create User') !!}
        </div>

    {!! Form::close() !!}

   @include('includes.form_errors')


@stop