@extends('admin.layout')
@section('title', 'Category Page')
@section('breadc')
    {{-- Page Title --}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Home</a></li>
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Category</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Create Category</li>
        </ol>
        <h6 class="font-weight-bolder mb-0">Category Create</h6>
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

    {{-- Category Create Card --}}
    <div class="container-fluid mb-5">
        <div class="col-lg-6 offset-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4 class="text-center">Create New Category</h4>
                    </div>
                    <hr>
                    {{-- Category Form --}}
                    <form action="{{ route('category.create') }}" method="POST">
                        @csrf
                        {{-- Category Name --}}
                        <div class="form-group mb-3">
                            <input type="text" name="categoryName"
                                class="form-control @error('categoryName') is-invalid @enderror" placeholder="Category Name"
                                value="{{ old('categoryName') }}">
                            @error('categoryName')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        {{-- Category Description --}}
                        <div class="form-group mb-4">
                            <textarea name="categoryDescription" id="categoryDescription" cols="30" rows="3"
                                class="form-control @error('categoryDescription') is-invalid @enderror" placeholder="category description">{{ old('categoryDescription') }}</textarea>
                            @error('categoryDescription')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        {{-- Button --}}
                        <div class="text-center">
                            <input type="submit" value="create" class="btn btn-info px-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
