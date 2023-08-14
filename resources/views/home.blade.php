@php
    $fruits = ['one' => 'Apple','two' => 'Banana','three' =>  'Mango'];
@endphp
@includeWhen(true, "components.header", ['pageTitle' => 'Homepage', 'fruitNames' => $fruits])

    <h1>Homepage</h1>
    <a href="{{ route('about') }}">About</a>
    {{-- <a href="{{ route('posts') }}/11abc">Posts</a> --}}
    <a href="{{ route('posts', '123') }}/abc">Posts</a>
    <a href="{{ route('contact') }}">Contact Page</a>

@include("components.footer")