@extends('layout')

{{-- Csrf Token --}}
@section('csrf')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
{{-- Page Title --}}
@section('title', 'Shop Page')
@section('content')
    {{-- Shop --}}
    <div class="container px-5 mb-5" style="margin-top: 200px">
        <div class="row">
            {{-- Image --}}
            <div class="col-lg-4">
                <img class="w-100" src="{{ asset('storage/products/' . $data->image) }}" alt="Console Image">
            </div>
            {{-- Detail --}}
            <div class="col-lg-8">
                <h4 class="text-danger">{{ $data->category_name }}</h4>
                <h3>{{ $data->name }}</h3>
                <div class="text-warning">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h4 class="my-4">
                    <i class="fa-solid fa-dollar-sign me-2 "></i>{{ $data->price }}
                </h4>
                <p class="text-justify">
                    {{ $data->description }}
                </p>

                @if (Auth::user())
                    @if (Auth::user()->role == 'user')
                        <div class="d-flex">
                            <button id="minusBtn" class="btn btn-sm btn-danger"><i class="fa-solid fa-minus"></i></button>
                            <input type="text" id="qty" value="1" class="form-control mx-1 text-center"
                                style="width: 50px;">
                            <button id="plusBtn" class="btn btn-sm btn-danger"><i class="fa-solid fa-plus"></i></button>
                            <button id="cartBtn" class="btn btn-sm btn-danger ms-2 px-3">
                                <i class="fa-solid fa-cart-shopping me-2"></i>Add To Cart
                            </button>
                            {{-- User Id & Product Id --}}
                            <input type="hidden" id="userId" value="{{ Auth::user()->id }}">
                            <input type="hidden" id="productId" value="{{ $data->id }}">
                        </div>
                    @endif
                @else
                    <div class="alert alert-warning" role="alert">
                        If you want to buy this product, you should <a href="{{ route('register') }}"
                            class="alert-link">Register</a> first
                    </div>
                @endif
            </div>
        </div>
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

            let qty = parseInt($('#qty').val());

            // plus button
            $('#plusBtn').click(function() {
                qty += 1
                $('#qty').val(qty);
            });
            // minus button
            $('#minusBtn').click(function() {
                if (qty > 1) {
                    qty -= 1
                    $('#qty').val(qty);
                }
            });
            // cart button
            $('#cartBtn').click(function() {
                let userId = $('#userId').val();
                let productId = $('#productId').val();

                $.ajax({
                    type: 'post',
                    url: '/cart/add',
                    data: {
                        'userId': userId,
                        'productId': productId,
                        'qty': qty
                    },
                    dataType: 'json',
                    success: function(response) {
                        setTimeout(function() {
                            document.location.href = "http://127.0.0.1:8000/";
                        }, 100);
                    }
                });
            });
        });
    </script>
@endsection
