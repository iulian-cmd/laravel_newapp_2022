@extends('template')

@section('title')

@endsection



@section('home')
<div id="body" class="container-fluid d-flex align-items-center vh-100">
    <div class="container d-flex justify-content-center flex-column">
        <h1 class="fs-1 flush-top">Welcome to Adventure Alps</h1>
        <div class="banner-form d-flex justify-content-center flex-column">
            <h3 class="fs-4 text-uppercase mt-3">Sport and travel packs in Auvergne-Rhône-Alpes</h3>

            <div class="banner-form_content">
                <p class="fs-2"><a class="link-light" href=" {{ url('product') }}">
                        View Catalogue

                    </a></p>
            </div>
        </div>
    </div>
</div>
@stop