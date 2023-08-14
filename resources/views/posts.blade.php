@extends('layout.masterlayout')
{{-- @extends('layout.masterlayout', ['pageTitle' => 'Posts' . $id]) --}}
@section('pageTitle', 'Posts')

@section('content')

<h1 class="text-center">Posts</h1>
<a href="{{route('home')}}">Homepage</a>
@dd('The ID is: ' . $id, 'The Comment is: ' . $comment);

@endsection
