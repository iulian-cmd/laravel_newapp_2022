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

<div class="cart">
    @yield('content_cart')
</div>

<div class="contact_page">
    @yield('contact_page')
</div>

<footer>
    @include('footer')
</footer>