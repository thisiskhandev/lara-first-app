@extends('layout.masterlayout')

@section('pageTitle', 'Login')

@section('content')
<h1>Login</h1>

<section>
    @if (Session::has('error'))
    <div class="alert alert-danger" role="alert">
        {{Session::get('error')}}
    </div>
    @endif
    <form action="{{route('login')}}" method="POST" id="login" class="my-4">
        @csrf
        <div class="mb-3">
            <input type="text" name="username" class="form-control" id="" placeholder="Username" required />
        </div>
        {{-- <div class="mb-3">
            <input type="email" name="email" class="form-control" id="" placeholder="Email address" required/>
        </div> --}}
        <div class="mb-3">
            <input type="password" name="password" class="form-control" id="" placeholder="Password" required />
        </div>
        <button type="submit" class="btn btn-outline-success">Submit</button>
    </form>
</section>

@endsection
