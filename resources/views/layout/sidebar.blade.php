<div class="card mb-4">
    <div class="card-header">
        Featured
    </div>
    <ul class="list-group list-group-flush list-inline">
        <li class="list-group-item"><a href="{{route('home')}}">Home</a></li>
        <li class="list-group-item"><a href="{{route('students')}}">Students</a></li>
        @if (empty(Auth::user()->name))
        <li class="list-group-item"><a href="{{route('register')}}">Register</a></li>
        <li class="list-group-item"><a href="{{route('login')}}">Login</a></li>
        @endif
        <li class="list-group-item"><a href="{{route('contact')}}">Contact Us</a></li>
    </ul>
</div>
