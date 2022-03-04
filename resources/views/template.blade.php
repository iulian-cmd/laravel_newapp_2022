<head class="row">
    @include('head')
</head>

<header class="row">
    @include('navbar')
</header>

<div class="container bg-light">
    @yield('title')
</div>


<div class="container-fluid bg-light">
<div class="row">
    {{-- <div class="col">   --}}
    @yield('content')
  </div>
</div>
{{-- </div> --}}


<footer class="row">
    @include('footer')
</footer>