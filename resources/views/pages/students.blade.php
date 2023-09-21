@extends('layout.masterlayout')

@section('pageTitle', 'Students')

@section('content')
<h1>Students</h1>


<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">City</th>
            <th scope="col">Age</th>
            <th scope="col">Address</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cStdData as $skey => $sVal)
        <tr>
            <td scope="row">{{$sVal->id}}</td>
            <td scope="row">{{$sVal->name}}</td>
            <td scope="row">{!!$sVal->email ? $sVal->email : "<span style='color: red;'>N/A</span>"!!}</td>
            <td scope="row">{{$sVal->city}}</td>
            <td scope="row">{{$sVal->age}}</td>
            <td scope="row">{{$sVal->address}}</td>
            <td><a href="{{route('student', $sVal->id)}}"><button type="button" class="btn btn-dark w-100">View</button></a></td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
