@extends('template')

@section('title')

@endsection



@section('home')
<div id="body" class="d-flex align-items-center">
    <div class=" welcome-txt container d-flex justify-content-center flex-column">
        <h3 class="welcome-txt">Welcome to Adventure Alps</h3>
        <p class="large">Sport and travel packs in Auvergne-Rhône-Alpes</p>
        <p class="large"><a class="btn-secondary hidden-md-down" href="{{ url('product') }}">
                View Catalogue

            </a></p>
    </div>
</div>
@stop