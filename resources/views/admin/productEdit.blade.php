@extends('admin.layout')
@section('title', 'Product Edit Page')
@section('breadc')
    {{-- Page Title --}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Home</a></li>
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Product</a></li>
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Product List</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Product Edit</li>
        </ol>
        <h6 class="font-weight-bolder mb-0">Product Edit</h6>
    </nav>
@endsection
@section('content')
    {{-- Product Update Success Message --}}
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

    {{-- Product Create Card --}}
    <div class="container-fluid mb-5">
        <div class="col-lg-6 offset-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4 class="text-center">Product Edit</h4>
                    </div>
                    {{-- Product Image --}}
                    @if ($productData->image == null)
                        <div class="m-3 text-center">
                            <img src="{{ asset('images/noimage.png') }}" alt="noImage" width="250" height="250"
                                class="rounded img-thumbnail">
                        </div>
                    @else
                        <div class="m-3 text-center">
                            <img src="{{ asset('storage/products/' . $productData->image) }}" alt="Product Image"
                                width="350" class="rounded img-thumbnail">
                        </div>
                    @endif

                    {{-- Product Form --}}
                    <form action="{{ route('product.update', $productData->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        {{-- Product Image --}}
                        <div class="form-group mb-3">
                            <label for="productImage" class="form-label fs-6">Image</label>
                            <input type="file" name="productImage" id="productImage"
                                class="form-control @error('productImage') is-invalid @enderror">
                            @error('productImage')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        {{-- Product Name --}}
                        <div class="form-group mb-3">
                            <label for="productName" class="form-label fs-6">Name</label>
                            <input type="text" name="productName" id="productName"
                                class="form-control @error('productName') is-invalid @enderror" placeholder="product name"
                                value="{{ old('productName', $productData->name) }}">
                            @error('productName')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        {{-- Product Series --}}
                        <div class="form-group mb-3">
                            <label for="productSeries" class="form-label fs-6">Series</label>
                            <input type="text" name="productSeries" id="productSeries"
                                class="form-control @error('productSeries') is-invalid @enderror"
                                placeholder="product series" value="{{ old('productSeries', $productData->series) }}">
                            @error('productSeries')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Category --}}
                        <div class="form-group mb-3">
                            <label class="form-label fs-6">Category</label>
                            <select class="form-select @error('categoryId') is-invalid @enderror" name="categoryId"
                                aria-label="Default select example">
                                <option value="">choose category</option>
                                @foreach ($categoryData as $category)
                                    <option value="{{ $category->id }}" @if ($productData->category_id == $category->id) selected @endif>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('categoryId')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        {{-- Product Description --}}
                        <div class="form-group mb-4">
                            <label for="productDescription" class="form-label fs-6">Description</label>
                            <textarea name="productDescription" id="productDescription" cols="30" rows="3"
                                class="form-control @error('productDescription') is-invalid @enderror" placeholder="product description">{{ old('productDescription', $productData->description) }}</textarea>
                            @error('productDescription')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        {{-- Product Price --}}
                        <div class="form-group mb-3">
                            <label for="productPrice" class="form-label fs-6">Price</label>
                            <input type="number" name="productPrice" id="productPrice"
                                class="form-control @error('productPrice') is-invalid @enderror"
                                placeholder="product price" value="{{ old('productPrice', $productData->price) }}">
                            @error('productPrice')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Button --}}
                        <div class="text-center">
                            <input type="submit" value="update" class="btn btn-info px-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
