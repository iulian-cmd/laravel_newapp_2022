<head class="row">
    @include('head')
</head>

<header class="container">
    @include('navbar')
</header>

<div id="catalogue" class="container bg-light text-center">
    @yield('title')
</div>

<div class="container bg-light">
    <div class="row g-0">
        @yield('content')
    </div>
</div>

<footer class="row">
    @include('footer')
</footer>