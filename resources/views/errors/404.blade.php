@extends('layout.masterlayout')


@section('pageTitle', 'Page Not Found! 🚒')
    
@section('content')
<h1>Page Not Found!</h1>
<a href="{{route('home')}}"><button class="btn btn-outline-warning">Back to Homepage</button></a>
<h4>Redicting to Homepage in <span id="redirectTimer"></span> sec...</h4>
@endsection


@push('script')
    <script>
        let timer = 5000;
        let time = 6;
        const intervalTimeout = setInterval(() => {
            time = time - 1;
            document.getElementById("redirectTimer").innerText = time;
        }, 1000);


        const timeout = setTimeout(() => {
            clearInterval(intervalTimeout);
            clearTimeout(timeout);
            window.location.href = "/";
        }, timer);
    </script>
@endpush