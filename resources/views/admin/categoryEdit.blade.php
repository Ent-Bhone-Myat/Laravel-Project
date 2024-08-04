@extends('admin.layout')
@section('title', 'Category Edit Page')
@section('breadc')
    {{-- Page Title --}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Home</a></li>
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Category</a></li>
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Category List</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Edit Category</li>
        </ol>
        <h6 class="font-weight-bolder mb-0">Category Edit</h6>
    </nav>
@endsection
@section('content')

    {{-- Category Edit Card --}}
    <div class="container-fluid mb-5">
        <div class="col-lg-6 offset-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4 class="text-center">Edit Category</h4>
                    </div>
                    <hr>
                    {{-- Category Form --}}
                    <form action="{{ route('category.update', $data->id) }}" method="POST">
                        @csrf
                        {{-- Category Name --}}
                        <div class="form-group mb-3">
                            <input type="text" name="categoryName"
                                class="form-control @error('categoryName') is-invalid @enderror"
                                value="{{ old('categoryName', $data->name) }}">
                            @error('categoryName')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        {{-- Category Description --}}
                        <div class="form-group mb-4">
                            <textarea name="categoryDescription" id="categoryDescription" cols="30" rows="3"
                                class="form-control @error('categoryDescription') is-invalid @enderror">{{ old('categoryDescription', $data->description) }}</textarea>
                            @error('categoryDescription')
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
