@extends('admin.layout')
@section('title', 'Admin Detail')
@section('breadc')
    {{-- Page Title --}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Home</a></li>
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Account</a></li>
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Admin List</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Admin Detail</li>
        </ol>
        <h6 class="font-weight-bolder mb-0">Admin Detail</h6>
    </nav>
@endsection
@section('content')
    <div class="card mx-auto my-4 col-xl-5 col-md-6 p-3">
        {{-- Admin Image --}}
        @if ($data->image == null)
            <div class="m-3 text-center">
                <img src="{{ asset('images/noimage.png') }}" alt="noImage" width="250" height="250"
                    class="rounded img-thumbnail">
            </div>
        @else
            <div class="m-3 text-center">
                <img src="{{ asset('storage/profile/' . $data->image) }}" alt="Product Image" width="250"
                    class="rounded img-thumbnail">
            </div>
        @endif

        <div class="card-body">
            <h5 class="card-title text-center">
                <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M12 12q-1.65 0-2.825-1.175T8 8t1.175-2.825T12 4t2.825 1.175T16 8t-1.175 2.825T12 12m-8 8v-2.8q0-.85.438-1.562T5.6 14.55q1.55-.775 3.15-1.162T12 13t3.25.388t3.15 1.162q.725.375 1.163 1.088T20 17.2V20z" />
                </svg>
                {{ $data->name }}
            </h5>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                    <g fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m16.719 19.752l-.64-5.124A3 3 0 0 0 13.101 12h-2.204a3 3 0 0 0-2.976 2.628l-.641 5.124A2 2 0 0 0 9.266 22h5.468a2 2 0 0 0 1.985-2.248" />
                        <circle cx="12" cy="5" r="3" />
                        <circle cx="4" cy="9" r="2" />
                        <circle cx="20" cy="9" r="2" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4 14h-.306a2 2 0 0 0-1.973 1.671l-.333 2A2 2 0 0 0 3.361 20H7m13-6h.306a2 2 0 0 1 1.973 1.671l.333 2A2 2 0 0 1 20.639 20H17" />
                    </g>
                </svg>
                {{ $data->age }}
            </li>
            <li class="list-group-item">
                <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 256 256">
                    <path fill="currentColor"
                        d="M208 24h-40a8 8 0 0 0 0 16h20.69l-25.15 25.15A64 64 0 1 0 112 175.48V192H88a8 8 0 0 0 0 16h24v24a8 8 0 0 0 16 0v-24h24a8 8 0 0 0 0-16h-24v-16.52a63.92 63.92 0 0 0 45.84-98L200 51.31V72a8 8 0 0 0 16 0V32a8 8 0 0 0-8-8m-88 136a48 48 0 1 1 48-48a48.05 48.05 0 0 1-48 48" />
                </svg>
                {{ $data->gender }}
            </li>
            <li class="list-group-item">
                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M4 20q-.825 0-1.412-.587T2 18V6q0-.825.588-1.412T4 4h16q.825 0 1.413.588T22 6v12q0 .825-.587 1.413T20 20zm8-7L4 8v10h16V8zm0-2l8-5H4zM4 8V6v12z" />
                </svg>
                {{ $data->email }}
            </li>
            <li class="list-group-item">
                <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M7 23q-.825 0-1.412-.587T5 21V3q0-.825.588-1.412T7 1h10q.825 0 1.413.588T19 3v18q0 .825-.587 1.413T17 23zm0-5h10V6H7z" />
                </svg>
                {{ $data->phone }}
            </li>
            <li class="list-group-item">
                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 512 512">
                    <path fill="currentColor"
                        d="M384 48c8.8 0 16 7.2 16 16v384c0 8.8-7.2 16-16 16H96c-8.8 0-16-7.2-16-16V64c0-8.8 7.2-16 16-16zM96 0C60.7 0 32 28.7 32 64v384c0 35.3 28.7 64 64 64h288c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64zm144 256a64 64 0 1 0 0-128a64 64 0 1 0 0 128m-32 32c-44.2 0-80 35.8-80 80c0 8.8 7.2 16 16 16h192c8.8 0 16-7.2 16-16c0-44.2-35.8-80-80-80zM512 80c0-8.8-7.2-16-16-16s-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16zm-16 112c-8.8 0-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16v-64c0-8.8-7.2-16-16-16m16 144c0-8.8-7.2-16-16-16s-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16z" />
                </svg>
                {{ $data->address }}
            </li>
            {{-- Change to User --}}
            @if (Auth::user()->id != $data->id)
                <li class="list-group-item text-center">
                    <a href="{{ route('change.user', $data->id) }}">
                        <button class="btn btn-warning">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="20" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M4 20v-2.8q0-.85.438-1.562T5.6 14.55q1.55-.775 3.15-1.162T12 13q.925 0 1.825.113t1.8.362l-1.675 1.7q-.5-.075-.975-.125T12 15q-1.4 0-2.775.338T6.5 16.35q-.225.125-.363.35T6 17.2v.8h6v2zm10 1v-3.075l5.525-5.5q.225-.225.5-.325t.55-.1q.3 0 .575.113t.5.337l.925.925q.2.225.313.5t.112.55t-.1.563t-.325.512l-5.5 5.5zm7.5-6.575l-.925-.925zm-6 5.075h.95l3.025-3.05l-.45-.475l-.475-.45l-3.05 3.025zm3.525-3.525l-.475-.45l.925.925zM12 12q-1.65 0-2.825-1.175T8 8t1.175-2.825T12 4t2.825 1.175T16 8t-1.175 2.825T12 12m0-2q.825 0 1.413-.587T14 8t-.587-1.412T12 6t-1.412.588T10 8t.588 1.413T12 10m0-2" />
                            </svg>
                            Change to User
                        </button>
                    </a>
                </li>
            @endif
        </ul>
    </div>
@endsection
