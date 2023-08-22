@extends('layout.masterlayout')
{{-- @extends('layout.masterlayout', ['pageTitle' => 'Posts' . $id]) --}}
@section('pageTitle', 'Posts')

@section('content')

<h1>Posts</h1>
<a href="{{route('home')}}"><button class="btn btn-primary">Homepage</button></a>
{{-- @dd('The ID is: ' . $id, 'The Comment is: ' . $comment); --}}

<div class="mt-5">
    <h2>ID {{!empty($id) ? $id : "Not found!"}}</h2>
    <h2>Comment {{!empty($comment) ? $comment : "Not found!"}}</h2>
</div>

@endsection
