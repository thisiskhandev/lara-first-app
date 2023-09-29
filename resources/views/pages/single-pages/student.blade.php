@extends('layout.masterlayout')

@section('pageTitle', 'Student - Single Page')

@section('content')
<h1>Single Page Student Details</h1>

{{-- <h6><strong>Last Update: </strong>{{$studentItem->updated_at}}</h6> --}}


{{dump($student)}}

<section class="row">
    @foreach ($student as $studentItem)
    <div class="col-lg-4 col-12">
        <div class="card my-5" style="width: 18rem;">
            @if(!empty($studentItem->headshot))
            <img src={{$studentItem->headshot}} class="img-fluid d-block text-center m-auto" width="150px" alt={{$studentItem->name}}>
            @else
            <div class="pb-3" style="background: #556080;"><img src={{"/images/user-dummy.png"}} class="img-fluid d-block text-center m-auto" width="150px" alt="Dummy"></div>
            @endif
            <div class="card-body text-center">
                <h5 class="card-title">{{$studentItem->name}}</h5>
                <a href={{"mailto:" . $studentItem->email}}>{{$studentItem->email}}</a>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>City: </strong>{{$studentItem->city}}</li>
                <li class="list-group-item"><strong>Age: </strong>{{$studentItem->age}}</li>
            </ul>
            <div class="card-body">
                <p class="card-text"><strong>Address: </strong>{{$studentItem->address}}</p>
            </div>
        </div>
    </div>
    @endforeach
</section>

<div class="">
    <a href={{route('students')}}><button class="btn btn-primary">
            < Back to Students</button></a>
</div>

@endsection
