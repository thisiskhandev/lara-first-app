{{-- @php
$fruits = ['one' => 'Apple','two' => 'Banana','three' => 'Mango'];
@endphp
@includeWhen(true, "layout.header", ['pageTitle' => 'Homepage', 'fruitNames' => $fruits]) --}}

@extends('layout.masterlayout')
@section('pageTitle', 'Home - Page')


@section('content')
<h1>Homepage - Heading</h1>
@endsection

{{-- @include("layout.footer") --}}
