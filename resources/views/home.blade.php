<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
</head>
<body>
    <h1>Homepage</h1>
    <a href="{{ route('about') }}">About</a>
    {{-- <a href="{{ route('posts') }}/11abc">Posts</a> --}}
    <a href="{{ route('posts', '123') }}/abc">Posts</a>
    <a href="{{ route('contact') }}">Contact Page</a>
</body>
</html>