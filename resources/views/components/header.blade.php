<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, inSitial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('styles/app.css') }}">
    <title>{{$pageTitle ? $pageTitle : "PAGE TITLE IS EMPTY 🤟"}}</title>
</head>
<body>

    <ul>
        {{-- @foreach ($fruits as $keys => $values)
        <li>{{$keys}} - {{$values}}</li>
        @endforeach --}}

        @forelse ($fruits as $keys => $items)
            <li> {{$keys}} - {{$items}}</li>
        @empty
            <p style="color: red;">No fruit found!</p>
        @endforelse
    </ul>