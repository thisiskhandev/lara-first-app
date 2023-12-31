<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, inSitial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('styles/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @stack('stylesh')
    <title>@yield('pageTitle', "PAGE TITLE IS EMPTY 🤟")</title>
    @stack('internal-style')
</head>
<body>

    {{-- <ul>
     @foreach ($fruits as $keys => $values)
    <li>{{$keys}} - {{$values}}</li>
    @endforeach --}}

    {{-- @forelse ($fruits as $keys => $items)
        <li> {{$keys}} - {{$items}}</li>
    @empty
    <p style="color: red;">No fruit found!</p>
    @endforelse
    </ul> --}}

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}">LOGO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Posts
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('posts', '123') }}/abc">abc</a></li>
                            <li><a class="dropdown-item" href="{{ route('posts', '123') }}/bcd">bcd</a></li>
                            <li><a class="dropdown-item" href="{{ route('posts', '123') }}/edf">edf</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('users') }}">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('students') }}">Students</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('imageRoute') }}">All Images</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                @if (Auth::user())
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button class="btn btn-danger ms-3">Logout</button>
                </form>
                <span>{{Auth::user()->name}}</span>
                @endif
            </div>
        </div>
    </nav>
