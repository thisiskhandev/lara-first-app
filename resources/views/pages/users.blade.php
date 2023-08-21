@extends('layout.masterlayout')

@section('pageTitle', 'Users')

@section('content')
<h1>Users</h1>
{{-- <h2>{{$user}}</h2>
<h2>{{!empty($city) ? $city : "No city found!"}}</h2> --}}

{{-- <div>
    <ul>
        @foreach ($user as $id => $userdata)
        <li>{{$userdata['name']}} | {{$userdata['phone']}} | {{$userdata['city']}}</li>
@endforeach
</ul>
</div> --}}

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">City</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($user as $id => $userdata)
        <tr>
            <th scope="row">{{$id + 1}}</th>
            <td>{{$userdata['name']}}</td>
            <td>{{$userdata['phone']}}</td>
            <td>{{$userdata['city']}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
