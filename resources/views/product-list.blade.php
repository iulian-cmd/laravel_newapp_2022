@extends('template')

@section('title')
    Catalogue
@endsection



{{-- @section('image') --}}
{{-- @for ($i=113; $i < 125; $i++)
    <img src="https://picsum.photos/id/{{$i}}/500/400?grayscale" class="card-img-top my-5 mx-2" alt="random_photo" style="width: 500px; height: 400px">
    @endfor --}}
{{-- @endsection --}}


@section('content')

    @foreach($products as $product)
    
        <div class="card">
        <h5 class="bg-light card-title">Name: {{$product->name}}</h5>
        <img src="{{$product->image}}" class="card-img-top rounded m-3 p-2" alt="..." style="object-fit: contain;">
        <div class="card-body">
        <p class="bg-light card-text">Description: {{$product->description}}</p>
        <p class="bg-light">Price: {{$product->price}}</p>
        <p class="bg-light">Duration of the adventure: {{$product->duration}}</p>
        <p class="bg-light">For clients aged over 14: {{$product->adult}}</p>
        <p class="bg-light">Level of difficukty: {{$product->level}}</p>   
        </div>
      </div>
    
  @endforeach

@endsection
