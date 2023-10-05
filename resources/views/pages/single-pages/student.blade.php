@extends('layout.masterlayout')

@section('pageTitle', 'Student - Single Page')

@section('content')
<h1>Single Page Student Details | {{$student->name}}</h1>

{{-- <h6><strong>Last Update: </strong>{{$studentItem->updated_at}}</h6> --}}

<section class="row">
    <div class="col-lg-4 col-12">
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
                <ul class="list-group">
                    <div class="fw-bold">Books Details: </div>
                    <li class="list-group-item px-1 d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            Books taken
                        </div>
                        <span class="badge bg-primary rounded-pill">{{$booksTaken}}</span>
                    </li>
                    <li class="list-group-item px-1 d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            Books Returned
                        </div>
                        <span class="badge bg-success rounded-pill">{{$booksReturned}}</span>
                    </li>
                    <li class="list-group-item px-1 d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            Books Pending
                        </div>
                        @if (!empty($booksPending))
                        <span class="badge bg-danger rounded-pill">{{$booksPending}}</span>
                        @else
                        ❌
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@if (!empty($bookDetails))
@php
$counter = 1;
@endphp
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">Sr #</th>
            <th scope="col">Book</th>
            <th scope="col">Status</th>
            <th scope="col">Due Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($bookDetails as $book)
        <tr>
            <td>{{$counter++}}</td>
            <td>{{$book->book}}</td>
            <td>{!!$book->status ? '<span class="badge text-bg-success">Returned</span>' : '<span class="badge text-bg-danger">Pending</span>'!!}</td>
            <td>{{$book->due_date}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif

<div class="">
    <a href={{route('students')}}><button class="btn btn-primary">
            < Back to Students</button></a>
</div>

@endsection
