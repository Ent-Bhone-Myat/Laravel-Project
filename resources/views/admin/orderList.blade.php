@extends('admin.layout')
@section('title', 'Order Lsit')
@section('breadc')
    {{-- Page Title --}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Home</a></li>
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Order</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Order List</li>
        </ol>
        <h6 class="font-weight-bolder mb-0">Order List - {{ $data->total() }}</h6>
    </nav>
@endsection
@section('content')
    {{-- Order Success Message --}}
    <div class="col-lg-6 offset-lg-3">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show d-flex align-items-center justify-content-center"
                role="alert">
                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 20 20">
                    <path fill="currentColor" fill-rule="evenodd"
                        d="M6.267 3.455a3.066 3.066 0 0 0 1.745-.723a3.066 3.066 0 0 1 3.976 0a3.066 3.066 0 0 0 1.745.723a3.066 3.066 0 0 1 2.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 0 1 0 3.976a3.066 3.066 0 0 0-.723 1.745a3.066 3.066 0 0 1-2.812 2.812a3.066 3.066 0 0 0-1.745.723a3.066 3.066 0 0 1-3.976 0a3.066 3.066 0 0 0-1.745-.723a3.066 3.066 0 0 1-2.812-2.812a3.066 3.066 0 0 0-.723-1.745a3.066 3.066 0 0 1 0-3.976a3.066 3.066 0 0 0 .723-1.745a3.066 3.066 0 0 1 2.812-2.812m7.44 5.252a1 1 0 0 0-1.414-1.414L9 10.586L7.707 9.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0z"
                        clip-rule="evenodd" />
                </svg>
                <strong>
                    {{ session('success') }}
                </strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 20 20">
                        <path fill="currentColor" fill-rule="evenodd"
                            d="M6.707 4.879A3 3 0 0 1 8.828 4H15a3 3 0 0 1 3 3v6a3 3 0 0 1-3 3H8.828a3 3 0 0 1-2.12-.879l-4.415-4.414a1 1 0 0 1 0-1.414zm4 2.414a1 1 0 0 0-1.414 1.414L10.586 10l-1.293 1.293a1 1 0 1 0 1.414 1.414L12 11.414l1.293 1.293a1 1 0 0 0 1.414-1.414L13.414 10l1.293-1.293a1 1 0 0 0-1.414-1.414L12 8.586z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        @endif
    </div>

    @if (count($data) == 0)
        <h4 class="text-center">There is no <span class="text-info">Order Data !</span></h4>
        <hr class="horizontal dark mt-0">
    @else
        {{-- Order List --}}
        <div class="container-fluid my-5">
            <table class="table table-striped shadow p-3 mb-5 bg-white rounded text-center">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Order Number</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Total Amount</th>
                        <th scope="col">Order Date</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $order)
                        <tr>
                            <th scope="row" class="col-lg-1">{{ $order->id }}</th>
                            <td class="col-lg-1">{{ $order->order_number }}</td>
                            <td class="col-lg-1">{{ $order->user_name }}</td>
                            <td class="col-lg-1">{{ $order->total_amount }}</td>
                            <td class="col-lg-1">{{ $order->created_at->format('j / F / Y') }}</td>
                            <td class="col-lg-1">
                                <a href="{{ route('order.detail', $order->order_number) }}">
                                    <button class="btn me-2" title="detail order" style="background-color: blue">
                                        <svg class="text-white" xmlns="http://www.w3.org/2000/svg" width="25"
                                            height="25" viewBox="0 0 24 24">
                                            <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <g stroke-width="2">
                                                    <path stroke-dasharray="66" stroke-dashoffset="66"
                                                        d="M12 3H19V21H5V3H12Z">
                                                        <animate fill="freeze" attributeName="stroke-dashoffset"
                                                            dur="0.6s" values="66;0" />
                                                    </path>
                                                    <path stroke-dasharray="5" stroke-dashoffset="5" d="M9 10H12">
                                                        <animate fill="freeze" attributeName="stroke-dashoffset"
                                                            begin="1s" dur="0.2s" values="5;0" />
                                                    </path>
                                                    <path stroke-dasharray="6" stroke-dashoffset="6" d="M9 13H14">
                                                        <animate fill="freeze" attributeName="stroke-dashoffset"
                                                            begin="1.2s" dur="0.2s" values="6;0" />
                                                    </path>
                                                    <path stroke-dasharray="7" stroke-dashoffset="7" d="M9 16H15">
                                                        <animate fill="freeze" attributeName="stroke-dashoffset"
                                                            begin="1.4s" dur="0.2s" values="7;0" />
                                                    </path>
                                                </g>
                                                <path stroke-dasharray="12" stroke-dashoffset="12"
                                                    d="M14.5 3.5V6.5H9.5V3.5">
                                                    <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.7s"
                                                        dur="0.2s" values="12;0" />
                                                </path>
                                            </g>
                                        </svg>
                                    </button>
                                </a>
                                {{-- Check Delivery --}}
                                @if ($order->order_delivered == 0)
                                    <a href="{{ route('order.deliver', $order->order_number) }}">
                                        <button class="btn btn-warning me-2" title="order delivery">
                                            <svg class="text-white" xmlns="http://www.w3.org/2000/svg" width="25"
                                                height="25" viewBox="0 0 26 26">
                                                <path fill="currentColor"
                                                    d="M22.25 2.031a6.52 6.52 0 0 0-2.063.563L4.908 9.406c-.453.203-.766-.03-1.188-.344c-.735-.54-1.823-1.304-2.156-1.562c-.526-.403-1.83-.154-1.47.656L2 12.437c.626 1.4 3.88 1.066 9.563-1.468c.483-.216 1.112-.507 1.656-.75l-1.438 7.656c-.185.743.005.952.25.844l.844-.375c.436-.195 1.04-.873 1.344-1.532l4.125-8.906c4.11-1.92 7.871-3.846 7.593-4.468C25.61 2.7 24.186 1.85 22.25 2.03zM7.031 3.062c-.37-.006-.688.029-.906.126l-.844.374c-.244.11-.208.39.469.75l3.406 2.063l3.781-1.688l-4.78-1.468a4.241 4.241 0 0 0-1.126-.156zM.813 24A1.001 1.001 0 0 0 1 26h24a1 1 0 1 0 0-2H1a1 1 0 0 0-.094 0a1.001 1.001 0 0 0-.094 0zM902 1469v2h26v-2zm4 5v2h18v-2zm-4 5v2h26v-2zm4 5v2h18v-2zm-4 5v2h26v-2z" />
                                            </svg>
                                        </button>
                                    </a>
                                @else
                                    <a href="{{ route('order.delete', $order->order_number) }}">
                                        <button class="btn btn-danger" title="delete order">
                                            <svg class="text-white" xmlns="http://www.w3.org/2000/svg" width="25"
                                                height="25" viewBox="0 0 24 24">
                                                <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke-dasharray="64" stroke-dashoffset="64" stroke-width="2"
                                                        d="M13 3L19 9V21H5V3H13">
                                                        <animate fill="freeze" attributeName="stroke-dashoffset"
                                                            dur="0.6s" values="64;0" />
                                                    </path>
                                                    <path stroke-dasharray="14" stroke-dashoffset="14" d="M12.5 3V8.5H19">
                                                        <animate fill="freeze" attributeName="stroke-dashoffset"
                                                            begin="0.7s" dur="0.2s" values="14;0" />
                                                    </path>
                                                    <path stroke-dasharray="8" stroke-dashoffset="8" stroke-width="2"
                                                        d="M9 14H15">
                                                        <animate fill="freeze" attributeName="stroke-dashoffset"
                                                            begin="1s" dur="0.2s" values="8;0" />
                                                    </path>
                                                </g>
                                            </svg>
                                        </button>
                                    </a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div>
                {{ $data->links() }}
            </div>
        </div>
    @endif


@endsection
