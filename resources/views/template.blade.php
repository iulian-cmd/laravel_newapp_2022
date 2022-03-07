<head class="row">
    @include('head')
</head>

<header class="container">
    @include('navbar')
</header>

<div class="container bg-light">
    @yield('title')
</div>

<div class="container bg-light">
    <div class="row">
        @yield('content')
    </div>
</div>

<footer class="row">
    @include('footer')
</footer>