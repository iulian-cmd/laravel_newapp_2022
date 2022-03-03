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
    
        <div class="card p-2 m-3 shadow p-3 mb-5 bg-body rounded">
            <img src="{{$product->image}}" class="card-img-top shadow p-2 mb-3 bg-body rounded" alt="image_of_product" style="height: 15vw; object-fit: cover;">
            <div class="card-body">
                <h5 class="bg-light card-title text-center mb-3"><span class="fw-bold text-secondary">Name of the product: </span><span class="text-uppercase fw-lighter text-center">{{$product->name}}</span></h5>
                <p class="bg-light card-text"><span class="fw-bold text-center text-secondary">Description: </span><span class="fw-lighter">{{$product->description}}</span></p>
                <p class="bg-light card-text"><span class="fw-bold text-center text-secondary">Price: EUR </span><span class="text-uppercase">{{$product->price}}</span></p>
                <p class="bg-light card-text"><span class="fw-bold text-center text-secondary">Duration of the adventure: </span><span class="text-uppercase fw-lighter">{{$product->duration}}</span><span class="fw-bold text-center text-secondary"> h </span></p>
                <p class="bg-light card-text"><span class="fw-bold text-center text-secondary">For clients aged over 14: </span><span class="text-uppercase fw-lighter">{{$product->adult}}</span></p>
                <p class="bg-light card-text"><span class="fw-bold text-center text-secondary">Level of difficulty: </span><span class="fw-lighter">{{$product->level}}</span></p>   
        </div>
        </div>
          
        
        @endforeach


@endsection
