@extends('template')

@section('title')
    Article {{$name}}
@endsection



@section('content_title')
    Article {{$name}}!
@endsection

@section('content')
<img src="https://picsum.photos/id/100/500/400" class="card-img-top my-5 mx-2" alt="random_photo" style="width: 500px; height: 400px">
    <p>Here's the article {{$name}}'s description: </p>
 

@endsection