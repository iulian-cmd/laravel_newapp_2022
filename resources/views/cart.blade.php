@extends('template')

@section('content_cart')
<!-- SHOP BASKET SECTION-->
<section class="py-5">
    <div class="container py-4 bg-white opacity-75">
        <p class="text-muted lead mb-5">
            @if ($message = Session::get('success'))
        <div class="p-4 mb-3 text-success rounded fs-5">
            <p class="text-green-800">{{ $message }}</p>
        </div>
        @endif
        </p>
        <h3 class="fs-3 text-center">Cart List</h3>
        <div class="row">
            <div class="col-lg-9">
                <!-- CART PRODUCTS TABLE-->
                <form method="get" action="shop-checkout1.html">
                    <div class="table-responsive">
                        <table class="table table-light table-striped">
                            <thead>
                                <tr class="text-sm">
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
                                    <td class="align-middle border border-light py-3"><a href="#"><img
                                                class="img-fluid flex-shrink-0" src="{{ $item->attributes->image }}"
                                                alt="Thumbnail" style="min-width: 50px" width="100"></a></td>
                                    <td class="align-middle border border-light py-3">{{ $item->name }}
                                    </td>
                                    <td class="align-middle border border-light py-3">
                                        <form action="{{ route('cart.update') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $item->id}}">
                                            <input type="number" name="quantity" value="{{ $item->quantity }}"
                                                class="w-6 text-center bg-gray-300" />
                                            <button type="submit"
                                                class="px-2 pb-2 ml-2 text-white bg-blue-500">update</button>
                                        </form>
                                    </td>
                                    <td class="align-middle border border-light py-3">${{ $item->price }}</td>
                                    <td class="align-middle border border-light py-3">$0.00</td>
                                    <td class="align-middle border border-light py-3">$246.00</td>
                                    <td class="align-middle border border-light py-3">
                                        <form action="{{ route('cart.remove') }}" method="POST">
                                            @csrf
                                            <input type="hidden" value="{{ $item->id }}" name="id">
                                            <button class="align-middle px-4 py-2 text-danger
                                                rounded-circle btn-border-light">X</button>
                                        </form>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="py-3 border-0" colspan="5"> <span
                                            class="h4 text-gray-700 mb-0">Total</span></th>
                                    <th class="py-3 border-0 text-end" colspan="2"> <span
                                            class="h4 text-gray-700 mb-0">${{ Cart::getTotal() }}</span></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- NAVIGATION FOOTER-->
                    <div class="row gx-lg-0 align-items-center bg-light px-4 py-3 text-center mb-5">
                        <div class="col-md-6 text-md-start py-1">
                            <form action="{{ route('home') }}">

                                <button class="btn btn-secondary my-1">Continue shopping</button>
                            </form>
                        </div>
                        <div class="col-md-6 text-md-end py-1">
                            <form action="{{ route('cart.clear') }}" method="POST">
                                @csrf
                                <button class="btn btn-secondary my-1">Remove All Cart</button>
                            </form>
                        </div>
                        <div>
                            <form action="{{ route('home') }}">
                                <button class="btn btn-outline-primary my-1" type="submit">Proceed to checkout <i
                                        class="fas fa-angle-right ms-1"></i></button>
                            </form>
                        </div>
                    </div>
                </form>
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
                                        <th> <span class="d-block py-1 fw-normal text-end">$446.00</span></th>
                                    </tr>
                                    <tr>
                                        <th class="text-muted"> <span class="d-block py-1 fw-normal">Shipping and
                                                handling</span></th>
                                        <th> <span class="d-block py-1 fw-normal text-end">$10.00</span></th>
                                    </tr>
                                    <tr>
                                        <th class="text-muted"> <span class="d-block py-1 fw-normal">Tax</span></th>
                                        <th> <span class="d-block py-1 fw-normal text-end">$0.00</span></th>
                                    </tr>
                                    <tr class="total">
                                        <td class="py-3 border-bottom-0 text-muted"> <span
                                                class="lead fw-bold">Total</span>
                                        </td>
                                        <th class="py-3 border-bottom-0"> <span
                                                class="lead fw-bold text-end">$456.00</span>
                                        </th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="p-4 bg-gray-200">
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