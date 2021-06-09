@extends('layouts.admin')


@section('content')

<h1>Posts</h1>
    <table class="table">
            <thead>
                <tr style="color: #00A03C;">
                <th class="font-weight-bold">ID</th>
                <th class="font-weight-bold">USER</th>
                <th class="font-weight-bold">CATEGORY</th>
                <th class="font-weight-bold">PHOTO</th>
                <th class="font-weight-bold">TITLE</th>
                <th class="font-weight-bold">BODY</th>
                <th class="font-weight-bold">CREATED_AT</th>
                <th class="font-weight-bold">UPDATED</th>
                <th class="font-weight-bold">ACTION</th>
            </tr>
            </thead>
        <tbody>
            @if($posts)
                @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->user->name}}</td>
            <td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
            <td><img height="50px" src="{{$post->photo ? $post->photo->file : '/images/default.PNG'}}" alt="img" class="img-responsive img-rounded">
            </td>
            <td>{{$post->title}}</td>
            <td>{{$post->body}}</td>
            <td>{{$post->created_at}}</td>
            <td>{{$post->updated_at}}</td>
            <td>
                <div class="badge badge-warning p-2"><a href="{{route('admin.posts.edit', $post->id)}}">Update</a></div>
                <div class="badge badge-warning p-2"><a href="">View</a></div>
            </td>
        </tr>
                @endforeach
            @endif
        </tbody>
    </table>

@stop 