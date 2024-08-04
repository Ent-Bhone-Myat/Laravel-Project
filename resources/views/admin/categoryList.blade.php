@extends('admin.layout')
@section('title', 'Category Lsit')
@section('breadc')
    {{-- Page Title --}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Home</a></li>
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Category</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Category List</li>
        </ol>
        <h6 class="font-weight-bolder mb-0">Category List - {{ $data->total() }}</h6>
    </nav>
@endsection
@section('content')
    {{-- Category Success Message --}}
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
        <h4 class="text-center">There is no <span class="text-info">Category Data !</span></h4>
        <hr class="horizontal dark mt-0">
    @else
        {{-- Category List --}}
        <div class="container-fluid my-5">
            <table class="table table-striped shadow p-3 mb-5 bg-white rounded text-center">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Created Date</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $category)
                        <tr>
                            <th scope="row" class="col-lg-1">{{ $category->id }}</th>
                            <td class="col-lg-1">{{ $category->name }}</td>
                            <td class="col-lg-3 text-justify">{{ $category->description }}</td>
                            <td class="col-lg-1">{{ $category->created_at->format('j / F / Y') }}</td>
                            <td class="col-lg-1">
                                <a href="{{ route('category.edit', $category->id) }}">
                                    <button class="btn btn-warning me-2" title="edit cateory">
                                        <svg class="text-white" xmlns="http://www.w3.org/2000/svg" width="25"
                                            height="25" viewBox="0 0 24 24">
                                            <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2">
                                                <path stroke-dasharray="56" stroke-dashoffset="56"
                                                    d="M3 21L4.99998 15L16 4C17 3 19 3 20 4C21 5 21 7 20 8L8.99998 19L3 21">
                                                    <animate fill="freeze" attributeName="stroke-dashoffset"
                                                        dur="0.6s" values="56;0" />
                                                </path>
                                                <g stroke-dasharray="6" stroke-dashoffset="6">
                                                    <path d="M15 5L19 9">
                                                        <animate fill="freeze" attributeName="stroke-dashoffset"
                                                            begin="0.6s" dur="0.2s" values="6;0" />
                                                    </path>
                                                    <path stroke-width="1" d="M6 15L9 18">
                                                        <animate fill="freeze" attributeName="stroke-dashoffset"
                                                            begin="0.6s" dur="0.2s" values="6;0" />
                                                    </path>
                                                </g>
                                            </g>
                                        </svg>
                                    </button>
                                </a>
                                <a href="{{ route('category.delete', $category->id) }}">
                                    <button class="btn btn-danger" title="delete cateory">
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
