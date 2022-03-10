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
        <h3 class="fs-3 text-center text-uppercase">Cart List</h3>
        <div class="row">
            <div class="col-lg-9">
                <!-- CART PRODUCTS TABLE-->
                <div class="table-responsive">
                    <table class="table table-light table-striped align-items-center text-uppercase">
                        <thead>
                            <tr class="text-sm" style='width: 10%;
                            background: maroon !important;
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
                            <<<<<<< HEAD <tr class="text-sm">
                                <td class="border border-light py-3"><img class="img-fluid flex-shrink-0"
                                        src="{{ $item->attributes->image }}" alt="Thumbnail"
                                        style="min-width: 50px; width:100; height:100;"></td>
                                <td class="border border-light py-3">{{ $item->name }}
                                </td>
                                <td class="border border-light py-3 px-1">
                                    <form action="{{ route('cart.update') }}" method="POST"
                                        class="d-flex justify-content-center flex-row">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $item->id}}">
                                        <input type="number" name="quantity" value="{{ $item->quantity }}"
                                            class="text-center bg-light form-control form-control-sm"
                                            style="width: 3rem;" />
                                        <button type="submit"
                                            class="mx-1 px-2 py-2 btn btn-success border-2">update</button>
                                    </form>
                                </td>
                                <td class="border border-light py-3">${{ $item->price }}</td>
                                <td class="border border-light py-3">$0.00</td>
                                <td class="border border-light py-3">$246.00</td>
                                <td class="border border-light py-3">
                                    <form action="{{ route('cart.remove') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{ $item->id }}" name="id">
                                        <button class="px-2 py-2 btn btn-danger">remove</button>
                                        =======
                                        <tr class="text-sm bg-light">
                                            <td class="align-items-center border border-light py-3"><img
                                                    class="img-fluid flex-shrink-0" src="{{ $item->attributes->image }}"
                                                    alt="Thumbnail" style="min-width: 50px; width:100; height:100;">
                                            </td>
                                            <td class="align-items-center border border-light py-3">{{ $item->name }}
                                            </td>
                                            <td class="align-items-center border border-light py-3 px-1">
                                                <form action="{{ route('cart.update') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $item->id}}">
                                                    <input type="number" name="quantity" value="{{ $item->quantity }}"
                                                        class="text-center bg-light input-group input-group-sm" size="2"
                                                        maxlength="2" />
                                                    <button type="submit"
                                                        class="align-items-center px-4 py-2 btn btn-success">update</button>
                                                </form>
                                            </td>
                                            <td class="align-items-center border border-light py-3">${{ $item->price }}
                                            </td>
                                            <td class="align-items-center border border-light py-3">$0.00</td>
                                            <td class="align-items-center border border-light py-3">$246.00</td>
                                            <td class="align-items-center border border-light py-3">
                                                <form action="{{ route('cart.remove') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" value="{{ $item->id }}" name="id">
                                                    <button
                                                        class="align-items-center px-4 py-2 btn btn-danger">remove</button>
                                                    >>>>>>> a179d04 (cart test 004)
                                                </form>

                                            </td>
                                        </tr>
                                        @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <<<<<<< HEAD <th class="py-3 border-0" colspan="5"> <span
                                        class="h4 text-gray-700 mb-0">Total
                                        Order</span>
                                    </th>
                                    <th class="py-3 border-0 text-end" colspan="2"> <span
                                            class="h4 text-dark mb-0">${{ Cart::getTotal() }}</span></th>
                                    =======
                                    <th class="py-3 border-0" colspan="5"> <span
                                            class="h4 text-gray-700 mb-0">Total</span>
                                    </th>
                                    <th class="py-3 border-0 text-end" colspan="2"> <span
                                            class="h4 text-gray-700 mb-0">${{ Cart::getTotal() }}</span></th>
                                    >>>>>>> a179d04 (cart test 004)
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- NAVIGATION FOOTER-->
                <<<<<<< HEAD <div class="row gx-lg-0 bg-light px-4 py-3 text-center mb-5">
                    <div class="col-md-6 text-md-start py-1">
                        <form action="{{ route('product.list') }}">

                            <button class="btn btn-outline-primary my-1">Continue shopping</button>
                            =======
                            <div class="row gx-lg-0 align-items-center bg-light px-4 py-3 text-center mb-5">
                                <div class="col-md-6 text-md-start py-1">
                                    <form action="{{ route('product.list') }}">

                                        <button class="btn btn-outline-secondary my-1">Continue shopping</button>
                                        >>>>>>> a179d04 (cart test 004)
                                    </form>
                                </div>
                                <div class="col-md-6 text-md-end py-1">
                                    <form action="{{ route('cart.clear') }}" method="POST">
                                        @csrf
                                        <<<<<<< HEAD <button class="btn btn-outline-danger my-1">Remove All
                                            Cart</button>
                                            =======
                                            <button class="btn btn-outline-secondary my-1">Remove All Cart</button>
                                            >>>>>>> a179d04 (cart test 004)
                                    </form>
                                </div>
                                <div>
                                    <form action="{{ route('home') }}">
                                        <<<<<<< HEAD <button class="btn btn-outline-success my-1" type="submit">Proceed
                                            to checkout <i=======<button class="btn btn-outline-primary my-1"
                                                type="submit">Proceed to checkout <i>>>>>>> a179d04 (cart test 004)
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
                                <p class="text-muted">Shipping and additional costs are calculated based on the values
                                    you have
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
                                                <th class="text-muted"> <span class="d-block py-1 fw-normal">Insurance
                                                        for
                                                        cancelling</span></th>
                                                <th> <span class="d-block py-1 fw-normal text-end">$5.00</span></th>
                                            </tr>
                                            <tr>
                                                <th class="text-muted"> <span class="d-block py-1 fw-normal">Additional
                                                        not
                                                        hidden tax</span></th>
                                                <th> <span class="d-block py-1 fw-normal text-end">$5.00</span></th>
                                            </tr>
                                            <tr class="total">
                                                <td class="py-3 border-bottom-0 text-muted"> <span
                                                        class="lead fw-bold">Total</span>
                                                </td>
                                                <th class="pt-3 border-bottom-0"> <span
                                                        class="lead fw-bold text-end">$456.00</span>
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
                                        <button class="btn btn-primary" type="submit"><i
                                                class="fas fa-gift"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
</section>
@endsection