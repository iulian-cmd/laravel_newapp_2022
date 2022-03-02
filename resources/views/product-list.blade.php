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
Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui quo eius doloremque officiis consequatur dolore beatae, quod cupiditate neque totam pariatur laboriosam. Reiciendis minus incidunt, labore corrupti accusamus quis doloribus.
Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ipsum nemo suscipit laboriosam ut eveniet optio dolorum magnam quod praesentium numquam delectus pariatur fugiat quibusdam ad, deleniti iste hic consequatur!


@endsection