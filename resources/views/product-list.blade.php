@extends('template')

@section('title')
Catalogue
@endsection

@section('product-list')
    @foreach($products as $product)
    <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <div class="card p-3 m-1 shadow mb-4 rounded">
        <img
            src="{{$product->image}}"
            class="card-img-top p-0 mb-2 rounded"
            alt="image_of_product"
            style="height: 30vh; object-fit: cover"
        />
        <div class="card-body">
            <h5 class="bg-light card-title text-center mb-3">
                <span class="text-uppercase fw-lighter text-center"
                    >{{$product->name}}</span
                >
            </h5>
            <p class="bg-light card-text">
                <span class="fw-bold text-center text-secondary"
                    >Description: </span
                ><span class="fw-lighter">{{$product->description}}</span>
            </p>
            <p class="bg-light card-text">
                <span class="fw-bold text-center text-secondary"
                    >Price: EUR </span
                ><span class="text-uppercase">{{$product->price}}</span>
            </p>
            <p class="bg-light card-text">
                <span class="fw-bold text-center text-secondary"
                    >Distance: </span
                ><span class="text-uppercase fw-lighter"
                    >{{$product->distance}}</span
                ><span class="fw-bold text-center text-secondary">
                    @if($product->distance == 'N/A')
                    @else
                    KM
                    @endif
                    </span>
            </p>
            <p class="bg-light card-text">
                <span class="fw-bold text-center text-secondary"
                    >Group Size: </span
                ><span class="text-uppercase fw-lighter"
                    >{{$product->group_size}}</span
                ><span class="fw-bold text-center text-secondary"> Guests </span>
            </p>
            <p class="bg-light card-text">
                <span class="fw-bold text-center text-secondary"
                    >Trip Length: </span
                ><span class="text-uppercase fw-lighter"
                    >{{$product->duration}}</span
                ><span class="fw-bold text-center text-secondary"> Hours </span>
            </p>
            <p class="bg-light card-text">
                <span class="fw-bold text-center text-secondary"
                    >For clients aged over 14: </span
                ><span class="text-uppercase fw-lighter"
                    >{{$product->adult}}</span
                >
            </p>
            <p class="bg-light card-text">
                <span class="fw-bold text-center text-secondary"
                    >Level of difficulty: </span
                ><span class="fw-lighter">
                    @if ($product->level == '5') 
                       <img src="{{asset('assets/imgs/difficulty5.png')}}"/>
                    @elseif ($product->level == '4') 
                       <img src="{{asset('assets/imgs/difficulty4.png')}}" />
                    @elseif ($product->level == '3') 
                       <img src="{{asset('assets/imgs/difficulty3.png')}}" />
                    @elseif ($product->level == '2') 
                      <img src="{{asset('assets/imgs/difficulty2.png')}}" />
                    @else 
                       <img src="{{asset('assets/imgs/difficulty1.png')}}" />
                    @endif
               </span>
            </p>
            <div class="d-flex justify-content-between">
            <a href="{{ url('product', [$product->id]) }}"
                ><button class="btn btn-primary rounded my-2">
                    View Product Details
                </button></a
            >
           
            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{ $product->id }}" name="id">
                <input type="hidden" value="{{ $product->name }}" name="name">
                <input type="hidden" value="{{ $product->price }}" name="price">
                <input type="hidden" value="{{ $product->image }}"  name="image">
                <input type="hidden" value="1" name="quantity">
                <button class="btn btn-success rounded my-2">Add To Cart</button>
            </form>
        
        </div>
        </div>
    </div>
    </div>

    @endforeach

@endsection