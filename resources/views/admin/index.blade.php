@extends('layouts.admin')


@section('title', 'Admin | Page')

@section('sidebar')
    @parent
    
@stop

@section('content')
<h1>Admin</h1>
    <table class="table">
        <thead>
            <tr style="color: #00A03C;">
            <th class="font-weight-bold">ID</th>
            <th class="font-weight-bold">FIRST NAME</th>
            <th class="font-weight-bold">LAST NAME</th>
            <th class="font-weight-bold">EMAIL</th>
            <th class="font-weight-bold">ACTION</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <div class="badge badge-warning p-2"><a href="">Update</a></div>
                <div class="badge badge-warning p-2"><a href="">View</a></div>
            </td>
        </tr>
        </tbody>
    </table>

@stop

@section('footer')

@stop