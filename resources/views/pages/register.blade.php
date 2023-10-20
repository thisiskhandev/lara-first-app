@extends('layout.masterlayout')

@section('pageTitle', 'Login')

@section('content')
<h1>Register</h1>

<section>
    @if (Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{Session::get('success')}}
    </div>
    @endif
    <form action="{{route('register')}}" method="POST" id="register" class="my-4">
        @csrf
        <div class="mb-3">
            <input type="text" name="name" class="form-control" id="" placeholder="Name" required />
        </div>
        <div class="mb-3">
            <input type="text" name="username" class="form-control" id="" placeholder="Username" required />
        </div>
        <div class="mb-3">
            <input type="email" name="email" class="form-control" id="" placeholder="Email address" required />
        </div>
        <div class="mb-3">
            <select name="role" class="form-select" aria-label="" required>
                <option selected>Select Role</option>
                <option value="0">Editor</option>
                <option value="1">Admin</option>
            </select>
        </div>
        <div class="mb-3">
            <input type="password" name="password" class="form-control" id="" placeholder="Password" required />
        </div>
        <button type="submit" class="btn btn-outline-success">Submit</button>
    </form>
</section>

@endsection
