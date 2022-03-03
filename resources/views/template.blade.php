<head class="row">
  @include('head')
</head>

    <header class="row">
      @include('navbar')
    </header>

    {{-- @yield('image') --}}
    
    <div class="container-fluid bg-light">
      <div class="row">
        
            @yield('content') 
        </div>
      </div>
    {{-- </div> --}}

    <footer class="row">
        @include('footer')
    </footer>
      

