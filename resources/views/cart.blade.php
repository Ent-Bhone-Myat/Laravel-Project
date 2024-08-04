@extends('layout')
@section('title', 'Cart Page')

{{-- Csrf Token --}}
@section('csrf')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

{{-- Cart Section --}}
@section('content')
    <div class="container-fluid p-5 mb-5" style="margin-top: 100px" >
        @if (count($data) == 0)
            <h4 class="text-center">There is no <span class="text-info">Cart Data !</span></h4>
            <hr class="horizontal dark mt-0">
        @else
            <h4 class="mb-5" id="main1">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 36 36">
                    <circle cx="13.5" cy="29.5" r="2.5" fill="currentColor"
                        class="clr-i-solid clr-i-solid-path-1" />
                    <circle cx="26.5" cy="29.5" r="2.5" fill="currentColor"
                        class="clr-i-solid clr-i-solid-path-2" />
                    <path fill="currentColor"
                        d="M33.1 6.39a1 1 0 0 0-.79-.39H9.21l-.45-1.43a1 1 0 0 0-.66-.65L4 2.66a1 1 0 1 0-.59 1.92L7 5.68l4.58 14.47l-1.63 1.34l-.13.13A2.66 2.66 0 0 0 9.74 25A2.75 2.75 0 0 0 12 26h16.69a1 1 0 0 0 0-2H11.84a.67.67 0 0 1-.56-1l2.41-2h15.43a1 1 0 0 0 1-.76l3.2-13a1 1 0 0 0-.22-.85"
                        class="clr-i-solid clr-i-solid-path-3" />
                    <path fill="none" d="M0 0h36v36H0z" />
                </svg>
                Shopping Cart
            </h4>
            <div class="row shadow rounded" id="main2">
                {{-- Left --}}
                <div class="col-lg-8 col-12 p-5">
                    <table class="table table-borderless text-center">
                        <tbody>
                            @foreach ($data as $cart)
                                <tr class="row border-bottom">
                                    {{-- Delete Btn --}}
                                    <td class="col-md-2 offset-10 col-2 d-md-none">
                                        <button class="btn btn-sm btn-dark">
                                            <i class="fa-solid fa-xmark text-white"></i>
                                        </button>
                                    </td>
                                    {{-- Image --}}
                                    <td class="col-md-2 col-12">
                                        <img class="img-fluid" src="{{ asset('storage/products/' . $cart->product_image) }}"
                                            alt="console">
                                    </td>
                                    {{-- Name --}}
                                    <td class="col-md-2 col-12">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            viewBox="0 0 48 48">
                                            <g fill="none">
                                                <rect width="28" height="40" x="10" y="4" stroke="currentColor"
                                                    stroke-width="4" rx="2" />
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="4" d="M16 34h8m-4-4v8" />
                                                <path fill="currentColor" stroke="currentColor" stroke-linejoin="round"
                                                    stroke-width="4" d="M16 10h16v9H16z" />
                                                <circle cx="31" cy="30" r="2" fill="currentColor" />
                                                <circle cx="31" cy="38" r="2" fill="currentColor" />
                                            </g>
                                        </svg>
                                        {{ $cart->product_name }}
                                    </td>
                                    {{-- Price --}}
                                    <td class="col-md-2 col-12">
                                        <i class="fa-solid fa-dollar-sign"></i>
                                        <span id="price">{{ $cart->product_price }}</span>
                                    </td>
                                    {{-- QTY --}}
                                    <td class="col-md-2 col-12">
                                        <div class="input-group mx-auto" style="width: 100px">
                                            {{-- Minus --}}
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-danger minusBtn">
                                                    <i class="fa-solid fa-minus"></i>
                                                </button>
                                            </div>
                                            {{-- Input Qty --}}
                                            <input type="text" value="{{ $cart->qty }}"
                                                class="form-control form-control-sm border-0 text-center" id="qty">
                                            {{-- Plus --}}
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-danger plusBtn">
                                                    <i class="fa-solid fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                    {{-- Total --}}
                                    <td class="col-md-2 col-12">
                                        <i class="fa-solid fa-dollar-sign"></i>
                                        <span id="total">{{ $cart->product_price * $cart->qty }}</span>
                                    </td>
                                    {{-- Delete Btn --}}
                                    <td class="col-md-2 col-12 d-md-block d-none deleteBtn">
                                        <button class="btn btn-sm btn-dark">
                                            <i class="fa-solid fa-xmark text-white"></i>
                                        </button>
                                    </td>
                                    {{-- Hidden Input Data --}}
                                    <input type="hidden" id="cartId" value="{{ $cart->id }}">
                                    <input type="hidden" id="productId" value="{{ $cart->product_id }}">
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{-- Right --}}
                <div class="col-lg-4 col-12 p-5">
                    <h4 class="mb-3">Card Detail</h4>
                    {{-- Billing Card --}}
                    <div>
                        <a href="#">
                            <img src="{{ asset('images/visa.png') }}" alt="card image" style="width: 70px">
                        </a>
                        <a href="#">
                            <img src="{{ asset('images/master.png') }}" alt="card image" style="width: 70px">
                        </a>
                        <a href="#">
                            <img src="{{ asset('images/discover.png') }}" alt="card image" style="width: 70px">
                        </a>
                        <a href="#">
                            <img src="{{ asset('images/american express.png') }}" alt="card image" style="width: 70px">
                        </a>
                    </div>
                    {{-- Order Total Price --}}
                    <div class="mt-5">
                        {{-- SubTotal --}}
                        <div class="d-flex justify-content-between">
                            <h6>Subtotal</h6>
                            <h6>
                                <i class="fa-solid fa-dollar-sign me-2"></i>
                                <span id="subTotal">{{ $subTotal }}</span>
                            </h6>
                        </div>
                        {{-- Shipping --}}
                        <div class="d-flex justify-content-between border-bottom">
                            <h6>Shipping</h6>
                            <h6><i class="fa-solid fa-dollar-sign me-2"></i>50</h6>
                        </div>
                        {{-- Total --}}
                        <div class="d-flex justify-content-between">
                            <h6>Total <small>(tax incl.)</small></h6>
                            <h6>
                                <i class="fa-solid fa-dollar-sign me-2"></i>
                                <span id="finalTotal">{{ $subTotal + 50 }}</span>
                            </h6>
                        </div>
                        {{-- Order & Clear Btn --}}
                        <div class="my-4">
                            <button class="btn btn-sm btn-primary px-3 me-3" id="orderBtn">
                                Order
                            </button>
                            <a href="{{ route('cart.clear') }}">
                                <button class="btn btn-sm btn-danger px-3">
                                    Clear Cart
                                </button>
                            </a>
                        </div>
                        {{-- Notice For Order --}}
                        <div class="alert alert-warning fs-6" role="alert">
                            Shipping time may be one week. <br>
                            After ordered, we will send voucher to your email.
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
@section('jqcode')
    <script>
        $(document).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // plus button
            $('.plusBtn').click(function() {
                let tr = $(this).parents('tr');
                let qty = parseInt(tr.find('#qty').val());
                qty += 1;
                tr.find('#qty').val(qty);

                let price = parseInt(tr.find('#price').text());
                let total = price * qty;
                tr.find('#total').text(total);

                calculate();
            })
            // minus button
            $('.minusBtn').click(function() {
                let tr = $(this).parents('tr');
                let qty = parseInt(tr.find('#qty').val());
                let count = 0;

                if (qty > 1) {
                    qty -= 1;
                    count = qty;
                }
                tr.find('#qty').val(qty);

                let price = parseInt(tr.find('#price').text());
                let total = price * qty;
                tr.find('#total').text(total);

                if (count > 0) {
                    calculate();
                }
            });

            // Delete Button
            $('.deleteBtn').click(function() {
                let tr = $(this).parents('tr');
                cartId = parseInt(tr.find('#cartId').val());

                $.ajax({
                    type: 'get',
                    url: '/cart/product/delete',
                    data: {
                        'cartId': cartId
                    },
                    dataType: 'json'
                });

                tr.remove();
                calculate();
            });

            // Order Button
            $('#orderBtn').click(function() {
                let orderList = [];
                let orderNumber = Math.floor(Math.random() * 10000000000);

                $('tr').each(function(index, row) {
                    orderList.push({
                        'productId': parseInt($(row).find('#productId').val()),
                        'orderNumber': 'moon' + orderNumber,
                        'qty': parseInt($(row).find('#qty').val()),
                        'total': parseInt($(row).find('#total').text()),
                    });
                });

                $.ajax({
                    type: 'post',
                    url: '/order',
                    data: Object.assign({}, orderList),
                    dataType: 'json',
                    success: function(response) {
                        $('#main1').remove();
                        $('#main2').remove();
                        $('#header').after(
                            `
                            <div class="alert alert-success alert-dismissible fade show text-center" role="alert" style="margin-top: 90px">
                                <strong class="me-3">Your order is success</strong> Please check order voucher in your e-mail.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            `
                        );
                    }
                });
            })

            // Subtotal Calculation
            function calculate() {
                let subTotal = 0;
                $('tr').each(function(index, row) {
                    subTotal += parseInt($(row).find('#total').text());
                });
                $('#subTotal').text(subTotal);
                $('#finalTotal').text(subTotal + 50);
            }
        });
    </script>
@endsection
