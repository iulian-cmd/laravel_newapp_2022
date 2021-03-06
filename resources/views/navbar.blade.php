<div class="container-fluid fw-bold fs-4">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand text-success" href=""><img src="{{asset('assets/imgs/logo_dark_noback.png')}}"
                    alt="Logo" class="img rounded" style="width:100px; height:100px;" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{request()->routeIs('home') ? 'active text-danger' : '' }}"
                            aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{request()->routeIs('product.list') ? 'active text-danger' : '' }}"
                            href="{{ route ('product.list') }}">Product List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{request()->routeIs('cart.list') ? 'active text-danger' : '' }}"
                            href="{{ route ('cart.list') }}">Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{request()->routeIs('contact') ? 'active text-danger' : '' }}"
                            href="{{ route ('contact') }}">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Backoffice
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item nav-link {{request()->routeIs('Action') ? 'active' : '' }}"
                                    href="{{ route ('backoffice.index') }}">List</a></li>
                            <li><a class="dropdown-item nav-link {{request()->routeIs('Action') ? 'active' : '' }}"
                                    href="{{ route ('backoffice.create') }}">Create</a></li>
                            <li><a class="dropdown-item nav-link {{request()->routeIs('Action') ? 'active' : '' }}"
                                    href="{{ route ('backoffice.index') }}">List</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex mt-3 pt-2">
                    <input class="form-control me-3 btn-outline-light" type="search" placeholder="Search"
                        aria-label="Search">
                    <button class="btn btn-outline-dark" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    @show

</div>