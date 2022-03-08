<head class="row">
    @include('head')
</head>


<header class="container-fluid">
    @include('navbar')
</header>


<div id="catalogue" class="container text-center">
    @yield('title')
</div>

<div class="product-list">
    <div class="row g-0">
        @yield('product-list')
    </div>
</div>

<div class="product-details">
    <div class="row">
        @yield('product-details')
    </div>
</div>

<div class="home">
    @yield('home')
</div>


<footer>
    @include('footer')
</footer>


