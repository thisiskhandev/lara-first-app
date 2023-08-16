{{-- @php
$fruits = ['one' => 'Apple','two' => 'Banana','three' => 'Mango'];
@endphp
@includeWhen(true, "layout.header", ['pageTitle' => 'Homepage', 'fruitNames' => $fruits]) --}}

@extends('layout.masterlayout')
@section('pageTitle', 'Home - Page')

@prepend('internal-style')
<style>
    h1 {
        background: pink;
    }
</style>
@endprepend


@section('content')
<h1>Homepage - Heading</h1>
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
