@extends('layout.masterlayout')

@section('pageTitle', 'Student - Single Page')

@section('content')
<h1>Single Page Student Details</h1>

<div class="card my-5" style="width: 18rem;">
    <img src={{"/images/user-dummy.png"}} class="img-fluid text-center m-auto" width="150px" alt="Dummy" style="background: #556080;">
    <div class="card-body text-center">
        <h5 class="card-title">{{$student->name}}</h5>
        <a href={{"mailto:" . $student->email}}>{{$student->email}}</a>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><strong>City: </strong>{{$student->city}}</li>
        <li class="list-group-item"><strong>Age: </strong>{{$student->age}}</li>
    </ul>
    <div class="card-body">
        <p class="card-text"><strong>Address: </strong>{{$student->address}}</p>
    </div>
</div>

<div class="">
    <a href={{route('home')}}><button class="btn btn-primary">Back to Home</button></a>
</div>

@endsection
