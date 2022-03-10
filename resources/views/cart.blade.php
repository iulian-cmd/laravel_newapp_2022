@extends('template')

@section('content_cart')
<!-- SHOP BASKET SECTION-->
<section class="py-5 rounded-2">
    <div class="container pt-2 pb-4 bg-white opacity-75">
        <p class="text-muted lead mb-5">
            @if ($message = Session::get('success'))
        <div class="p-4 mb-3 rounded fs-5">
            <p class="text-success">{{ $message }}</p>
        </div>
        @endif
        </p>
        <h3 class="fs-3 text-center text-uppercase mb-3">Cart List</h3>
        <div class="row">
            <div class="col-lg-9">
                <!-- CART PRODUCTS TABLE-->
                <div class="table-responsive">
                    <table class="table table-light table-striped align-items-center text-uppercase">
                        <thead>
                            <tr class="text-sm" style='width: 10%;
                            background: brown !important;
                            color: brown !important;'>
                                <th class="border border-light border-top py-3" colspan="2">Product</th>
                                <th class="border border-light border-top py-3">Quantity</th>
                                <th class="border border-light border-top py-3">Unit price</th>
                                <th class="border border-light border-top py-3">Discount</th>
                                <th class="border border-light border-top py-3">Total</th>
                                <th class="border border-light border-top py-3">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cartItems as $item)
                            <tr class="text-sm">
                                <td class="border border-light py-3"><a href="{{url('/product/'.$item->id)}}"><img
                                            class="img-fluid flex-shrink-0" src="{{ $item->attributes->image }}"
                                            alt="Thumbnail" style="min-width: 50px; width:100; height:100;"></a></td>
                                <td class="border border-light py-3">
                                    {{ $item->name }}
                                </td>
                                <td>
                                    <form action="{{ route('cart.update') }}" method="POST"
                                        class="d-flex justify-content-evenly flex-row">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $item->id}}">
                                        <input type="number" name="quantity" value="{{ $item->quantity }}"
                                            class="text-center form-control form-control-sm" style="width: 4rem;" />
                                        <h3><button class="px-2 py-2 btn btn-success"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    fill="currentColor" class="bi bi-arrow-clockwise"
                                                    viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z" />
                                                    <path
                                                        d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z" />
                                                </svg></button></h3>
                                    </form>
                                </td>
                                <td class="border border-light py-3">${{ $item->price }}</td>
                                <td class="border border-light py-3">$0.00</td>
                                <td class="border border-light py-3">${{ $item->price * $item->quantity }}</td>
                                <td class="border border-light py-3">
                                    <form action="{{ route('cart.remove') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{ $item->id }}" name="id">
                                        <button class="px-2 py-2 btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="20" height="20" fill="currentColor" class="bi bi-trash"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                <path fill-rule="evenodd"
                                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                            </svg></button>
                                    </form>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th class="py-3 border-0" colspan="5"> <span class="h4 text-gray-700 mb-0">Total
                                        Order</span>
                                </th>
                                <th class="py-3 border-0 text-end" colspan="2"> <span
                                        class="h4 text-dark mb-0">${{ Cart::getTotal() }}</span></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- NAVIGATION FOOTER-->
                <div class="row gx-lg-0 bg-light px-4 py-3 text-center mb-5">
                    <div class="col-md-6 text-md-start py-1">
                        <form action="{{ route('product.list') }}">

                            <button class="btn btn-outline-primary my-1">Continue shopping</button>
                        </form>
                    </div>
                    <div class="col-md-6 text-md-end py-1">
                        <form action="{{ route('cart.clear') }}" method="POST">
                            @csrf
                            <button class="btn btn-outline-danger my-1">Remove All Cart</button>
                        </form>
                    </div>
                    <div>
                        <form action="{{ route('home') }}">
                            <button class="btn btn-outline-success my-1" type="submit">Proceed to checkout <i
                                    class="fas fa-angle-right ms-1"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- CHECKOUT SIDEBAR [ORDER SUMMARY]-->
            <div class="col-lg-3">
                <div class="mb-5">
                    <div class="p-4 bg-light">
                        <h3 class="text-uppercase mb-0">Order summary</h3>
                    </div>
                    <div class="py-4 px-3">
                        <p class="text-muted">Shipping and additional costs are calculated based on the values you have
                            entered.</p>
                        <div class="table-responsive bg-light">
                            <table class="table mb-0">
                                <tbody class="text-sm">
                                    <tr>
                                        <th class="text-muted"> <span class="d-block py-1 fw-normal">Order
                                                subtotal</span></th>
                                        <th> <span
                                                class="d-block py-1 fw-normal text-end">${{ Cart::getTotal() }}</span>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="text-muted"> <span class="d-block py-1 fw-normal">Insurance for
                                                cancelling</span></th>
                                        <th> <span class="d-block py-1 fw-normal text-end">$5.00</span></th>
                                    </tr>
                                    <tr>
                                        <th class="text-muted"> <span class="d-block py-1 fw-normal">Additional not
                                                hidden tax</span></th>
                                        <th> <span class="d-block py-1 fw-normal text-end">$5.00</span></th>
                                    </tr>
                                    <tr class="total">
                                        <td class="py-3 border-bottom-0 text-muted"> <span
                                                class="lead fw-bold">Total</span>
                                        </td>
                                        <th class="pt-3 border-bottom-0"> <span
                                                class="lead fw-bold text-end">${{ Cart::getTotal() + 10 }}</span>
                                        </th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="p-2">
                        <h4 class="text-uppercase mb-0">Coupon code</h4>
                    </div>
                    <div class="bg-light py-4 px-3">










                        <p class="text-muted">If you have a coupon code, please enter it in the box below.</p>
                        <form action="#">
                            <div class="input-group">
                                <input class="form-control" type="text">
                                <button class="btn btn-primary" type="submit"><i class="fas fa-gift"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
</section>
@endsection