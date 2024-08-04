@extends('admin.layout')
@section('title', 'Order Detail')
@section('breadc')
    {{-- Page Title --}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Home</a></li>
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Order</a></li>
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Order List</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Order Detail</li>
        </ol>
        <h6 class="font-weight-bolder mb-0">Order Detail</h6>
    </nav>
@endsection
@section('content')
    {{-- About User --}}
    <div class="card mx-auto my-4 col-xl-5 col-md-6 p-3">
        <div class="card-body">
            <h5 class="card-title text-center">
                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512">
                    <path fill="currentColor"
                        d="M380.95 114.46c-62.946-13.147-63.32 32.04-124.868 32.04c-53.25 0-55.247-44.675-124.87-32.04C17.207 135.072-.32 385.9 60.16 399.045c33.578 7.295 50.495-31.644 94.89-59.593a51.562 51.562 0 0 0 79.77-25.78a244 244 0 0 1 21.24-.91c7.466 0 14.44.32 21.126.898a51.573 51.573 0 0 0 79.82 25.717c44.45 27.95 61.367 66.93 94.955 59.626c60.47-13.104 42.496-260.845-71.01-284.543zM147.47 242.703h-26.144V216.12H94.73v-26.143h26.594v-26.593h26.144v26.582h26.582v26.144h-26.582v26.582zm38.223 89.615a34.336 34.336 0 1 1 34.337-34.336a34.336 34.336 0 0 1-34.325 34.346zm140.602 0a34.336 34.336 0 1 1 34.367-34.325a34.336 34.336 0 0 1-34.368 34.335zM349.98 220.36a17.323 17.323 0 1 1 17.32-17.32a17.323 17.323 0 0 1-17.323 17.323zm37.518 37.52a17.323 17.323 0 1 1 17.322-17.324a17.323 17.323 0 0 1-17.365 17.334zm0-75.048a17.323 17.323 0 1 1 17.322-17.323a17.323 17.323 0 0 1-17.365 17.333zm37.518 37.518a17.323 17.323 0 1 1 17.323-17.323a17.323 17.323 0 0 1-17.367 17.334z" />
                </svg>
                {{ $data2->user_name }} [id - {{ $data2->user_id }}]
            </h5>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M15 21h-2v-2h2zm-2-7h-2v5h2zm8-2h-2v4h2zm-2-2h-2v2h2zM7 12H5v2h2zm-2-2H3v2h2zm7-5h2V3h-2zm-7.5-.5v3h3v-3zM9 9H3V3h6zm-4.5 7.5v3h3v-3zM9 21H3v-6h6zm7.5-16.5v3h3v-3zM21 9h-6V3h6zm-2 10v-3h-4v2h2v3h4v-2zm-2-7h-4v2h4zm-4-2H7v2h2v2h2v-2h2zm1-1V7h-2V5h-2v4zM6.75 5.25h-1.5v1.5h1.5zm0 12h-1.5v1.5h1.5zm12-12h-1.5v1.5h1.5z" />
                </svg>
                {{ $data2->order_number }}
            </li>
            <li class="list-group-item">
                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 256">
                    <path fill="currentColor"
                        d="M200 168a48.05 48.05 0 0 1-48 48h-16v16a8 8 0 0 1-16 0v-16h-16a48.05 48.05 0 0 1-48-48a8 8 0 0 1 16 0a32 32 0 0 0 32 32h48a32 32 0 0 0 0-64h-40a48 48 0 0 1 0-96h8V24a8 8 0 0 1 16 0v16h8a48.05 48.05 0 0 1 48 48a8 8 0 0 1-16 0a32 32 0 0 0-32-32h-32a32 32 0 0 0 0 64h40a48.05 48.05 0 0 1 48 48" />
                </svg>
                {{ $data2->total_amount }} (Tax inc.)
            </li>
        </ul>
    </div>
    {{-- Order List --}}
    @foreach ($data as $orderDetail)
        <div class="card mx-auto my-4 col-xl-5 col-md-6 p-3">
            {{-- Order Image --}}
            @if ($orderDetail->product_image == null)
                <div class="m-3 text-center">
                    <img src="{{ asset('images/noimage.png') }}" alt="noImage" width="250" height="250"
                        class="img-fluid">
                </div>
            @else
                <div class="m-3 text-center">
                    <img src="{{ asset('storage/products/' . $orderDetail->product_image) }}" alt="Product Image"
                        width="350" class="img-fluid">
                </div>
            @endif

            <div class="card-body">
                <h5 class="card-title text-center">
                    <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                        viewBox="0 0 512 512">
                        <path fill="currentColor"
                            d="M380.95 114.46c-62.946-13.147-63.32 32.04-124.868 32.04c-53.25 0-55.247-44.675-124.87-32.04C17.207 135.072-.32 385.9 60.16 399.045c33.578 7.295 50.495-31.644 94.89-59.593a51.562 51.562 0 0 0 79.77-25.78a244 244 0 0 1 21.24-.91c7.466 0 14.44.32 21.126.898a51.573 51.573 0 0 0 79.82 25.717c44.45 27.95 61.367 66.93 94.955 59.626c60.47-13.104 42.496-260.845-71.01-284.543zM147.47 242.703h-26.144V216.12H94.73v-26.143h26.594v-26.593h26.144v26.582h26.582v26.144h-26.582v26.582zm38.223 89.615a34.336 34.336 0 1 1 34.337-34.336a34.336 34.336 0 0 1-34.325 34.346zm140.602 0a34.336 34.336 0 1 1 34.367-34.325a34.336 34.336 0 0 1-34.368 34.335zM349.98 220.36a17.323 17.323 0 1 1 17.32-17.32a17.323 17.323 0 0 1-17.323 17.323zm37.518 37.52a17.323 17.323 0 1 1 17.322-17.324a17.323 17.323 0 0 1-17.365 17.334zm0-75.048a17.323 17.323 0 1 1 17.322-17.323a17.323 17.323 0 0 1-17.365 17.333zm37.518 37.518a17.323 17.323 0 1 1 17.323-17.323a17.323 17.323 0 0 1-17.367 17.334z" />
                    </svg>
                    {{ $orderDetail->product_name }}
                </h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 26 26">
                        <g fill="currentColor" fill-rule="evenodd" clip-rule="evenodd">
                            <path
                                d="M13.5 26C20.404 26 26 20.404 26 13.5S20.404 1 13.5 1S1 6.596 1 13.5S6.596 26 13.5 26m0-2C19.299 24 24 19.299 24 13.5S19.299 3 13.5 3S3 7.701 3 13.5S7.701 24 13.5 24"
                                opacity=".2" />
                            <g opacity=".2">
                                <path
                                    d="M11.397 8.7c-.551.413-.8.908-.8 1.37c0 .463.249.958.8 1.372c.552.414 1.36.7 2.295.7a1 1 0 1 1 0 2c-1.326 0-2.565-.402-3.495-1.1c-.93-.698-1.6-1.738-1.6-2.971c0-1.234.67-2.274 1.6-2.972c.93-.697 2.17-1.099 3.495-1.099c2.053 0 3.994.983 4.766 2.62a1 1 0 0 1-1.81.853C16.298 8.726 15.206 8 13.693 8c-.935 0-1.743.286-2.295.7" />
                                <path
                                    d="M15.657 17.583c.551-.413.799-.908.799-1.37c0-.464-.248-.959-.8-1.372c-.551-.414-1.36-.7-2.295-.7a1 1 0 0 1 0-2c1.327 0 2.566.402 3.496 1.1c.93.698 1.599 1.738 1.599 2.971s-.669 2.274-1.6 2.971c-.93.698-2.168 1.1-3.495 1.1c-2.052 0-3.994-.983-4.765-2.621a1 1 0 0 1 1.809-.853c.352.748 1.444 1.474 2.957 1.474c.935 0 1.743-.286 2.295-.7M13.5 4a1 1 0 0 1 1 1v1a1 1 0 1 1-2 0V5a1 1 0 0 1 1-1" />
                                <path d="M13.5 19a1 1 0 0 1 1 1v1a1 1 0 1 1-2 0v-1a1 1 0 0 1 1-1" />
                            </g>
                            <path
                                d="M10.097 8.3c-.646.484-1 1.115-1 1.77c0 .656.354 1.287 1 1.772c.646.485 1.562.8 2.595.8a.5.5 0 0 1 0 1c-1.228 0-2.36-.373-3.195-1c-.836-.627-1.4-1.53-1.4-2.571c0-1.04.564-1.945 1.4-2.572c.836-.626 1.967-.999 3.195-.999c1.918 0 3.647.919 4.314 2.334a.5.5 0 0 1-.905.426c-.457-.97-1.761-1.76-3.409-1.76c-1.033 0-1.949.315-2.595.8" />
                            <path
                                d="M14.957 17.983c.646-.484.999-1.116.999-1.77c0-.656-.353-1.288-1-1.772c-.646-.485-1.562-.8-2.594-.8a.5.5 0 1 1 0-1c1.228 0 2.36.373 3.195 1s1.399 1.53 1.399 2.571c0 1.04-.564 1.945-1.4 2.571c-.835.627-1.966 1-3.194 1c-1.918 0-3.647-.919-4.314-2.334a.5.5 0 0 1 .905-.426c.457.97 1.76 1.76 3.409 1.76c1.032 0 1.948-.315 2.595-.8M12 4a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 12 4" />
                            <path d="M12 19a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2a.5.5 0 0 1 .5-.5" />
                            <path
                                d="M13 24.5c6.351 0 11.5-5.149 11.5-11.5S19.351 1.5 13 1.5S1.5 6.649 1.5 13S6.649 24.5 13 24.5m0 1c6.904 0 12.5-5.596 12.5-12.5S19.904.5 13 .5S.5 6.096.5 13S6.096 25.5 13 25.5" />
                        </g>
                    </svg>
                    {{ $orderDetail->product_price }}
                </li>
                <li class="list-group-item">
                    <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 576 512">
                        <path fill="currentColor"
                            d="m290.8 48.6l78.4 29.7l-81.2 31.2l-81.2-31.2l78.4-29.7c1.8-.7 3.8-.7 5.7 0zM136 92.5v112.2c-1.3.4-2.6.8-3.9 1.3l-96 36.4C14.4 250.6 0 271.5 0 294.7v119.2c0 22.2 13.1 42.3 33.5 51.3l96 42.2c14.4 6.3 30.7 6.3 45.1 0L288 457.5l113.5 49.9c14.4 6.3 30.7 6.3 45.1 0l96-42.2c20.3-8.9 33.5-29.1 33.5-51.3V294.7c0-23.3-14.4-44.1-36.1-52.4l-96-36.4c-1.3-.5-2.6-.9-3.9-1.3V92.5c0-23.3-14.4-44.1-36.1-52.4L308 3.7c-12.8-4.8-26.9-4.8-39.7 0l-96 36.4C150.4 48.4 136 69.3 136 92.5m256 118.1l-82.4 31.2v-89.2L392 121zm-237.2 40.3l78.4 29.7l-81.2 31.1l-81.2-31.1l78.4-29.7c1.8-.7 3.8-.7 5.7 0zm18.8 204.4V354.8l82.4-31.6v95.9zm247.6-204.4c1.8-.7 3.8-.7 5.7 0l78.4 29.7l-81.3 31.1l-81.2-31.1zm102 170.3l-77.6 34.1V354.8l82.4-31.6v90.7c0 3.2-1.9 6-4.8 7.3" />
                    </svg>
                    {{ $orderDetail->qty }} (qty)
                </li>
                <li class="list-group-item">
                    <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24">
                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2">
                            <path
                                d="M8.487 21h7.026a4 4 0 0 0 3.808-5.224l-1.706-5.306A5 5 0 0 0 12.855 7h-1.71a5 5 0 0 0-4.76 3.47l-1.706 5.306A4 4 0 0 0 8.487 21M15 3q-1 4-3 4T9 3z" />
                            <path d="M14 11h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3H10m2-7v1m0 6v1" />
                        </g>
                    </svg>
                    {{ $orderDetail->total }}
                </li>
                <li class="list-group-item">
                    <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 1024 1024">
                        <path fill="currentColor" fill-opacity=".15"
                            d="M712 304c0 4.4-3.6 8-8 8h-56c-4.4 0-8-3.6-8-8v-48H384v48c0 4.4-3.6 8-8 8h-56c-4.4 0-8-3.6-8-8v-48H184v136h656V256H712z" />
                        <path fill="currentColor"
                            d="M880 184H712v-64c0-4.4-3.6-8-8-8h-56c-4.4 0-8 3.6-8 8v64H384v-64c0-4.4-3.6-8-8-8h-56c-4.4 0-8 3.6-8 8v64H144c-17.7 0-32 14.3-32 32v664c0 17.7 14.3 32 32 32h736c17.7 0 32-14.3 32-32V216c0-17.7-14.3-32-32-32m-40 656H184V460h656zm0-448H184V256h128v48c0 4.4 3.6 8 8 8h56c4.4 0 8-3.6 8-8v-48h256v48c0 4.4 3.6 8 8 8h56c4.4 0 8-3.6 8-8v-48h128z" />
                    </svg>
                    {{ $orderDetail->created_at->format('j / F / Y') }}
                </li>
            </ul>
        </div>
    @endforeach
@endsection
