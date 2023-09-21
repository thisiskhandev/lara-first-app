@extends('layout.masterlayout')

@section('pageTitle', 'Student - Single Page')

@section('content')
<h1>Single Page Student Details</h1>

<h6><strong>Last Update: </strong>{{$student->updated_at}}</h6>
<div class="card my-5" style="width: 18rem;">
    @if(!empty($student->headshot))
    <img src={{$student->headshot}} class="img-fluid d-block text-center m-auto" width="150px" alt={{$student->name}}>
    @else
    <div class="pb-3" style="background: #556080;"><img src={{"/images/user-dummy.png"}} class="img-fluid d-block text-center m-auto" width="150px" alt="Dummy"></div>
    @endif
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
    <a href={{route('students')}}><button class="btn btn-primary">
            < Back to Students</button></a>
</div>

@endsection
