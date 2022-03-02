@extends('template')

@section('title')
    Articles
@endsection

@section('content_title')
    Article 
@endsection

@section('image')
@for ($i=113; $i < 125; $i++)
    <img src="https://picsum.photos/id/{{$i}}/500/400?grayscale" class="card-img-top my-5 mx-2" alt="random_photo" style="width: 500px; height: 400px">
    @endfor
@endsection

@section('content')
   

@endsection