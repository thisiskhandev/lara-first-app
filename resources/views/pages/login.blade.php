@extends('layout.masterlayout')

@section('pageTitle', 'Login')

@section('content')
<h1>Login</h1>

<section>
    <form action="login" method="POST" id="login" class="my-4">
        @csrf
        <div class="mb-3">
            <input type="email" name="email" class="form-control" id="" placeholder="Email address" />
        </div>
        <div class="mb-3">
            <input type="password" name="pass" class="form-control" id="" placeholder="Password" />
        </div>
        <button type="submit" class="btn btn-outline-success">Submit</button>
    </form>
</section>

@endsection
