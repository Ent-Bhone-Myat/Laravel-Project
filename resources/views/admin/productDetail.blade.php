@extends('admin.layout')
@section('title', 'Product Detail')
@section('breadc')
    {{-- Page Title --}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Home</a></li>
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Product</a></li>
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Product List</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Product Detail</li>
        </ol>
        <h6 class="font-weight-bolder mb-0">Product Detail</h6>
    </nav>
@endsection
@section('content')
    <div class="card mx-auto my-4 col-xl-5 col-md-6 p-3">
        {{-- Product Image --}}
        @if ($data->image == null)
            <div class="m-3 text-center">
                <img src="{{ asset('images/noimage.png') }}" alt="noImage" width="250" height="250"
                    class="rounded img-thumbnail">
            </div>
        @else
            <div class="m-3 text-center">
                <img src="{{ asset('storage/products/' . $data->image) }}" alt="Product Image" width="350"
                    class="rounded img-thumbnail">
            </div>
        @endif

        <div class="card-body">
            <h5 class="card-title text-center">
                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512">
                    <path fill="currentColor"
                        d="M380.95 114.46c-62.946-13.147-63.32 32.04-124.868 32.04c-53.25 0-55.247-44.675-124.87-32.04C17.207 135.072-.32 385.9 60.16 399.045c33.578 7.295 50.495-31.644 94.89-59.593a51.562 51.562 0 0 0 79.77-25.78a244 244 0 0 1 21.24-.91c7.466 0 14.44.32 21.126.898a51.573 51.573 0 0 0 79.82 25.717c44.45 27.95 61.367 66.93 94.955 59.626c60.47-13.104 42.496-260.845-71.01-284.543zM147.47 242.703h-26.144V216.12H94.73v-26.143h26.594v-26.593h26.144v26.582h26.582v26.144h-26.582v26.582zm38.223 89.615a34.336 34.336 0 1 1 34.337-34.336a34.336 34.336 0 0 1-34.325 34.346zm140.602 0a34.336 34.336 0 1 1 34.367-34.325a34.336 34.336 0 0 1-34.368 34.335zM349.98 220.36a17.323 17.323 0 1 1 17.32-17.32a17.323 17.323 0 0 1-17.323 17.323zm37.518 37.52a17.323 17.323 0 1 1 17.322-17.324a17.323 17.323 0 0 1-17.365 17.334zm0-75.048a17.323 17.323 0 1 1 17.322-17.323a17.323 17.323 0 0 1-17.365 17.333zm37.518 37.518a17.323 17.323 0 1 1 17.323-17.323a17.323 17.323 0 0 1-17.367 17.334z" />
                </svg>
                {{ $data->name }}
            </h5>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 512 512">
                    <path fill="currentColor"
                        d="m192.615 41l-4.375 14h135.518l-4.375-14zM185 73v73.102c46.991 6.329 94.285 6.5 142 .008V73zm-83.777 32l-53.715 94h416.984l-53.715-94H345v4.615c1.065.187 2.134.375 3.168.569c11.99 2.248 21.832 4.882 29.42 8.246c3.794 1.681 7.063 3.505 9.892 6.097c2.83 2.593 5.52 6.574 5.52 11.473s-2.69 8.88-5.52 11.473s-6.098 4.415-9.892 6.097c-7.588 3.364-17.43 5.998-29.42 8.246C324.19 166.312 291.802 169 256 169l-.361-.002c-35.658-.018-67.91-2.7-91.807-7.182c-11.99-2.248-21.832-4.882-29.42-8.246c-3.794-1.682-7.063-3.505-9.892-6.097c-2.83-2.593-5.52-6.574-5.52-11.473s2.69-8.88 5.52-11.473s6.098-4.416 9.892-6.097c7.588-3.364 17.43-5.998 29.42-8.246a279 279 0 0 1 3.168-.569V105zM167 127.904c-11.103 2.09-19.95 4.615-25.293 6.983c-1.026.455-1.18.695-1.922 1.113c.742.418.896.658 1.922 1.113c5.342 2.368 14.19 4.893 25.293 6.983zm178 0v16.192c11.103-2.09 19.95-4.615 25.293-6.983c1.026-.455 1.18-.695 1.922-1.113c-.742-.418-.896-.658-1.922-1.113c-5.342-2.368-14.19-4.893-25.293-6.983M96 167h64v18H96zm256 0h64v18h-64zM41 217v94h67.885c8.05 13.442 17.974 26.493 31.09 33.05c52.212 26.107 135.093 19.044 205.59 14.102c35.248-2.47 67.397-4.617 89.683-2.859c11.143.879 19.762 2.88 24.49 5.34s5.543 3.69 5.584 7.465c.098 9.007-1.966 13.353-5.138 16.345c-3.173 2.993-8.698 5.159-17.172 5.948c-16.949 1.577-43.677-2.843-74.133-7.547c-57.137-8.826-129.198-18.381-187.076 18.156h43.316c44.854-13.696 96.046-7.313 141.012-.367c30.24 4.671 57.148 9.671 78.549 7.68c10.7-.996 20.528-3.861 27.857-10.776s10.916-17.353 10.783-29.635c-.109-10.108-6.73-18.79-15.273-23.236c-8.544-4.445-19.032-6.342-31.385-7.316c-24.705-1.949-57.098.376-92.355 2.847c-70.515 4.943-152.494 9.646-196.282-12.248c-5.03-2.515-11.183-8.969-17.113-16.949H471v-94zm14 14h82v66h-15.354a168 168 0 0 1-3.373-5.973A268 268 0 0 1 112.211 279H119v-30H73v30h19.418a306 306 0 0 0 8.674 18H55v-57zm107.168 0h82v66h-82v-57zm106.592 0h82v66h-82v-57zM375 231h82v66h-82v-57zm-194.832 18v30h46v-30zm106.592 0v30h46v-30zM393 249v30h46v-30zM110 419c-3.875 0-6.759 2.192-9.902 8.676C96.954 434.16 95 444.09 95 454s1.954 19.84 5.098 26.324C103.24 486.808 106.125 489 110 489h144c3.875 0 6.759-2.192 9.902-8.676C267.046 473.84 269 463.91 269 454s-1.954-19.84-5.098-26.324C260.76 421.192 257.875 419 254 419zm118.104 10a9 9 0 1 1 0 18a9 9 0 0 1 0-18M125 432h18v13h13v18h-13v13h-18v-13h-13v-18h13zm87.104 13a9 9 0 1 1 0 18a9 9 0 0 1 0-18m32 0a9 9 0 1 1 0 18a9 9 0 0 1 0-18m-16 13.637a9 9 0 1 1 0 18a9 9 0 0 1 0-18" />
                </svg>
                {{ $data->series }}
            </li>
            <li class="list-group-item">
                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 14 14">
                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9.5 1.5H11a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-10a1 1 0 0 1 1-1h1.5" />
                        <rect width="5" height="2.5" x="4.5" y=".5" rx="1" />
                        <path d="M4.5 5.5h5M4.5 8h5m-5 2.5h5" />
                    </g>
                </svg>
                {{ $data->category_name }}
            </li>
            <li class="list-group-item">{{ $data->description }}</li>
            <li class="list-group-item">
                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 26 26">
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
                {{ $data->price }}
            </li>
            <li class="list-group-item">
                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 1024 1024">
                    <path fill="currentColor" fill-opacity=".15"
                        d="M712 304c0 4.4-3.6 8-8 8h-56c-4.4 0-8-3.6-8-8v-48H384v48c0 4.4-3.6 8-8 8h-56c-4.4 0-8-3.6-8-8v-48H184v136h656V256H712z" />
                    <path fill="currentColor"
                        d="M880 184H712v-64c0-4.4-3.6-8-8-8h-56c-4.4 0-8 3.6-8 8v64H384v-64c0-4.4-3.6-8-8-8h-56c-4.4 0-8 3.6-8 8v64H144c-17.7 0-32 14.3-32 32v664c0 17.7 14.3 32 32 32h736c17.7 0 32-14.3 32-32V216c0-17.7-14.3-32-32-32m-40 656H184V460h656zm0-448H184V256h128v48c0 4.4 3.6 8 8 8h56c4.4 0 8-3.6 8-8v-48h256v48c0 4.4 3.6 8 8 8h56c4.4 0 8-3.6 8-8v-48h128z" />
                </svg>
                {{ $data->created_at->format('j / F / Y') }}
            </li>
        </ul>
    </div>
@endsection
