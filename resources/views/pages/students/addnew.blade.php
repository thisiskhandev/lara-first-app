@extends('layout.masterlayout')

@section('pageTitle', 'Add a new student')

@section('content')
<h1>Add A New Student</h1>

<form action="/add" method="POST">
    @csrf
    <div class="mb-3">
        <input type="text" name="name" class="form-control" id="" placeholder="Name" />
    </div>
    <div class="mb-3">
        <input type="email" name="email" class="form-control" id="" placeholder="Email address" />
    </div>
    <div class="mb-3">
        <input type="text" name="city" class="form-control" id="" placeholder="City" />
    </div>
    <div class="mb-3">
        <input type="number" name="age" minlength="18" maxlength="35" class="form-control" id="" placeholder="Age" />
    </div>
    <div class="mb-3">
        <textarea name="address" id="" cols="30" rows="3" class="form-control" placeholder="Address" class="resize" style="resize: none"></textarea>
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
</form>

<div class="divider"></div>

<div class="mt-5">
    <a href={{route('students')}}><button class="btn btn-primary">
            < Back to Students</button></a>
</div>
@endsection
