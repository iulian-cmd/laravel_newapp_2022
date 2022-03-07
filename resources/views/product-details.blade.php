@extends('template')

@section('title')
{{-- Article {{$products->name}}! --}}
@endsection


@section('content')
<div class="container d-flex justify-content-center">

    <div class="card p-2 m-3 shadow mb-5 bg-body rounded" id="details">
        <img
            src="{{$products->image}}"
            class="card-img-top shadow p-2 mb-3 bg-body rounded"
            alt="image_of_products"
            style="height: 15vw; object-fit: cover"
        />
        <div class="card-body">
            <h5 class="bg-light card-title text-center mb-3">
                <span class="text-uppercase fw-lighter text-center"
                    >{{$products->name}}</span
                >
            </h5>
            <p class="bg-light card-text">
                <span class="fw-bold text-center text-secondary"
                    >Description: </span
                ><span class="fw-lighter">{{$products->description}}</span>
            </p>
            
            <p class="bg-light card-text">
                <span class="fw-bold text-center text-secondary"
                    >Distance: </span
                ><span class="text-uppercase fw-lighter"
                    >{{$products->distance}}</span
                ><span class="fw-bold text-center text-secondary">
                    @if($products->distance == 'N/A')
                    @else
                    KM
                    @endif
                    </span>
            </p>
            <p class="bg-light card-text">
                <span class="fw-bold text-center text-secondary"
                    >Group Size: </span
                ><span class="text-uppercase fw-lighter"
                    >{{$products->group_size}}</span
                ><span class="fw-bold text-center text-secondary"> Guests </span>
            </p>
            <p class="bg-light card-text">
                <span class="fw-bold text-center text-secondary"
                    >Trip Length: </span
                ><span class="text-uppercase fw-lighter"
                    >{{$products->duration}}</span
                ><span class="fw-bold text-center text-secondary"> Hours </span>
            </p>
            <p class="bg-light card-text">
                <span class="fw-bold text-center text-secondary"
                    >For clients aged over 14: </span
                ><span class="text-uppercase fw-lighter"
                    >{{$products->adult}}</span
                >
            </p>
            <p class="bg-light card-text">
                <span class="fw-bold text-center text-secondary"
                    >Level of difficulty: </span
                ><span class="fw-lighter">
                    @if ($products->level == '5') 
                       <img src="{{asset('assets/imgs/difficulty5.png')}}" />
                    @elseif ($products->level == '4') 
                       <img src="{{asset('assets/imgs/difficulty4.png')}}" />
                    @elseif ($products->level == '3') 
                       <img src="{{asset('assets/imgs/difficulty3.png')}}" />
                    @elseif ($products->level == '2') 
                      <img src="{{asset('assets/imgs/difficulty2.png')}}" />
                    @else 
                       <img src="{{asset('assets/imgs/difficulty1.png')}}" />
                    @endif
               </span>
            </p>
            <p class="bg-light card-text">
                <span class="fw-bold text-center text-secondary"
                    >Price: EUR </span
                ><span class="text-uppercase">{{$products->price}}</span>
            </p>
            <div class="d-flex justify-content-between">
            <a href="{{ url('product') }}"
            ><button class="btn btn-primary rounded">
                Back to Trips
            </button></a
            >
            <a href="{{ url('cart', [$products->id]) }}"
            ><button class="btn btn-success rounded">Add to Cart</button></a
            >
        </div>
    </div>
</div>
    
    
    
    @endsection