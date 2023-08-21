@extends('layout.masterlayout')

@section('pageTitle', 'User - Single Page')

@section('content')
<h1>User Details</h1>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">City</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$id}}</td>
            <td>{{$userData['name']}}</td>
            <td>{{$userData['phone']}}</td>
            <td>{{$userData['city']}}</td>
        </tr>
    </tbody>
</table>
<a href="{{route('users')}}"><button type="button" class="btn btn-outline-primary">
        Go Back</button></a>

@endsection
