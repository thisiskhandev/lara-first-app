@extends('layout.masterlayout')
@section('pageTitle', 'About Us - Page')

@push('internal-style')
<style>
    h1 {
        background-color: #ddd;
        border-left: 1px solid red;
    }
</style>
@endpush


@section('content')
<h1>About - Heading</h1>
    
    {{-- By using syntax of using @verbatim the Laravel understands well that the code using in this syntax is not laravel but instead of other framework or script --}}
    @verbatim
        <div id="app">{{message}}</div>
    @endverbatim
@endsection

@push('script')
<script src="https://unpkg.com/vue@3.2.29/dist/vue.global.js"></script>
<script>
    const {createApp} = Vue
    createApp({
        data() {
            return {
                message: 'This Message is comming from Vue JS'
            }
        }
    }).mount('#app')
</script>
@endpush