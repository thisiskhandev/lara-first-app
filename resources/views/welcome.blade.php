<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome page</h1>

    5+2 = {{5+2}}

    <br><br>

    {{"Hello World"}}

    <br><br>

    {{"<h1>Hello World</h1>"}}

    <br>

    {!! "<h1>Hello World</h1>" !!}
    {!! "<script>console.log('see console..')</script>" !!}

    @php
        $user = "Hassan Khan";
    @endphp

    {{ $user }}

    @{{ $user }}

    @php
        $colors = ['Black', 'Blue', 'Brown', 'Red', 'Purple'];
    @endphp

    <ul>
    @foreach ($colors as $c)
        {{-- <li> {{$loop->index}} - {{$c}}</li> --}}
        {{-- <li> {{$loop->iteration}} - {{$c}}</li> --}}
        {{-- <li> {{$loop->count}} - {{$c}}</li> --}}
        {{-- <li> {{$loop->count}} - {{$c}}</li> --}}
        @if ($loop->first) 
            <li style="color: red;">{{$c}}</li>
        @elseif ($loop->last)
            <li style="color: green;">{{$c}}</li>
        @else
        <li style="color: #000;">{{$c}}</li>
        @endif
    @endforeach
    </ul>

</body>
</html>