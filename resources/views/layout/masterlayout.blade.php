@include('layout.header')
<main class="content">
    <main class="container">
        <section class="row">
            <div class="col-md-8 col-12 py-5 mb-5">
                @hasSection('content')
                @yield('content')
                @else
                <h2>No Content Found!</h2>
                @endif
                {{-- @yield('content', '<h2>No Content Found!</h2>') --}}
            </div>
            <div class="col-md-4 col-12 py-5 mb-5">
                @section('sidebar')
                @include('layout.sidebar')
                @show
            </div>
        </section>
    </main>
</main>
@include('layout.footer')
