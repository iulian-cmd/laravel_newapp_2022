@extends('template')

@section('title')

@endsection



@section('home')
<div id="body" class="container-fluid d-flex align-items-center vh-100">
    <div class="container d-flex justify-content-center flex-column">
        <h1 class="fs-1 flush-top">Welcome to Adventure Alps</h1>
        <p class="fs-4">Sport and travel packs in Auvergne-Rhône-Alpes</p>
        <div class="banner-form">
            <p class="fs-2"><a class="link-light" href=" {{ url('product') }}">
                    View Catalogue

                </a></p>
        </div>
    </div>
</div>
@stop