@extends('template')

@section('title')

@endsection



@section('content')
<div class="welcome-txt">
    <h3>Welcome to Adventure Alps</h3>
<p class="large">Sport and travel packs in Auvergne-Rhône-Alpes</p>     
<a class="btn-secondary hidden-md-down" href="{{ url('product') }}">                    
    View Catalogue

</a>
</div>

@stop