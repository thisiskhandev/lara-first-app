{{-- @php
$fruits = ['one' => 'Apple','two' => 'Banana','three' => 'Mango'];
@endphp
@includeWhen(true, "layout.header", ['pageTitle' => 'Homepage', 'fruitNames' => $fruits]) --}}

@extends('layout.masterlayout')
@section('pageTitle', 'Home - Page')

@prepend('internal-style')
<style>
    h1 {
        background: #333;
        color: #fff;
        padding: 10px 10px;
    }

</style>
@endprepend


@section('content')
{{-- @dump(Auth::user()) --}}
@if (Auth::user())
<h1>Welcome, {{Auth::user()->name}}</h1>
@else
<h1>Welcome Guest</h1>
@endif
@endsection

@push('script')
<script src="/test1.js"></script>
<script src="/test2.js"></script>
<script src="/test3.js"></script>
@endpush
{{-- Push method can used multiple times while @section can't be use again. --}}
{{-- @push('script')
    <script src="/test1.js"></script>
    <script src="/test2.js"></script>
    <script src="/test3.js"></script>
@endpush --}}

{{-- @include("layout.footer") --}}
