@extends('layout')

@section('title', 'Profile Page')
@section('content')
    <section class="section profile mt-5 px-3">
        {{-- Profile Update Success Message --}}
        <div class="text-center mx-2">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fa-solid fa-circle-check me-2"></i><strong>{{ session('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
        {{-- Profile Update Error Message --}}
        <div class="text-center mx-2">
            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="fa-solid fa-circle-exclamation me-2"></i><strong>{{ session('error') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
        <div class="row justify-content-center">
            {{-- Profile Left Side --}}
            <div class="col-xl-3 col-12 mx-2">
                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        {{-- Profile Image --}}
                        @if (Auth::user()->image == null)
                            <div class="m-3">
                                <img src="{{ asset('images/noimage.png') }}" alt="noImage" width="250" height="250"
                                    class="rounded-circle img-thumbnail">
                            </div>
                        @else
                            <div class="m-3">
                                <img src="{{ asset('storage/profile/' . Auth::user()->image) }}" alt="noImage"
                                    width="250" height="250" class="rounded-circle img-thumbnail">
                            </div>
                        @endif
                        <h2>{{ Auth::user()->name }}</h2>
                        <div class="social-link mt-2">
                            <a href="#" class="me-2"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#" class="me-2"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#" class="me-2"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#" class="me-2"><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Profile Right Side --}}
            <div class="col-xl-8 mt-xl-0 mt-lg-3 mt-3">
                <div class="card">
                    <div class="card-body pt-3">

                        <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab"
                                    data-bs-target="#profile-overview">Overview</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit
                                    Profile</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab"
                                    data-bs-target="#profile-change-password">Change
                                    Password</button>
                            </li>

                        </ul>

                        <div class="tab-content pt-2">
                            <!-- Overview Tab -->
                            <div class="tab-pane fade show active profile-overview" id="profile-overview">

                                <h5 class="card-title my-3">Profile Details</h5>

                                <div class="row mt-3">
                                    <div class="col-lg-3 col-md-4 label "><i class="fa-solid fa-user me-2"></i>Name:</div>
                                    <div class="col-lg-9 col-md-8">{{ Auth::user()->name }}</div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-3 col-md-4 label "><i class="fa-solid fa-person me-2"></i>Role:</div>
                                    <div class="col-lg-9 col-md-8">{{ Auth::user()->role }}</div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-3 col-md-4 label "><i class="fa-solid fa-venus-mars me-2"></i>Gender:
                                    </div>
                                    <div class="col-lg-9 col-md-8">{{ Auth::user()->gender }}</div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-3 col-md-4 label "><i class="fa-solid fa-heart me-2"></i>Age:</div>
                                    <div class="col-lg-9 col-md-8">{{ Auth::user()->age }}</div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-3 col-md-4 label "><i class="fa-solid fa-envelope me-2"></i>Email:
                                    </div>
                                    <div class="col-lg-9 col-md-8">{{ Auth::user()->email }}</div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-3 col-md-4 label "><i class="fa-solid fa-phone me-2"></i>Phone:</div>
                                    <div class="col-lg-9 col-md-8">{{ Auth::user()->phone }}</div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-3 col-md-4 label "><i
                                            class="fa-solid fa-address-card me-2"></i>Address:</div>
                                    <div class="col-lg-9 col-md-8">{{ Auth::user()->address }}</div>
                                </div>
                            </div>
                            <!-- End Overview Tab -->

                            <!-- Edit Profile Tab -->
                            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                                {{-- Profile Image --}}
                                @if (Auth::user()->image == null)
                                    <div class="m-3">
                                        <img src="{{ asset('images/noimage.png') }}" alt="noImage" width="150"
                                            height="150" class="rounded-circle img-thumbnail">
                                    </div>
                                @else
                                    <div class="m-3">
                                        <img src="{{ asset('storage/profile/' . Auth::user()->image) }}" alt="noImage"
                                            width="150" height="150" class="rounded-circle img-thumbnail">
                                    </div>
                                @endif

                                {{-- Profile Edit Form --}}
                                <form action="{{ route('profile.edit') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    {{-- Image Upload --}}
                                    <div class="mb-3 row">
                                        <label for="image" class="form-label col-xl-2 col-3">Image Upload: </label>
                                        <div class="col-md-6 col-8">
                                            <input type="file"
                                                class="form-control @error('image') is-invalid @enderror" name="image"
                                                id="image">
                                        </div>
                                        {{-- Error Message --}}
                                        @error('image')
                                            <div class="text-danger offset-xl-2 offset-3">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    {{-- Name --}}
                                    <div class="mb-3 row">
                                        <label for="name" class="form-label col-xl-2 col-3">Name: </label>
                                        <div class="col-md-6 col-8">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                name="name" id="name"
                                                value="{{ old('name', Auth::user()->name) }}">
                                        </div>
                                        {{-- Error Message --}}
                                        @error('name')
                                            <div class="text-danger offset-xl-2 offset-3">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    {{-- Gender --}}
                                    <div class="mb-3 row">
                                        <label for="gender" class="form-label col-xl-2 col-3">Gender: </label>
                                        <div class="col-md-6 col-8">
                                            <select class="form-select" aria-label="Default select example"
                                                name="gender">
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    {{-- Age --}}
                                    <div class="mb-3 row">
                                        <label for="age" class="form-label col-xl-2 col-3">Age: </label>
                                        <div class="col-md-6 col-8">
                                            <input type="text" class="form-control @error('age') is-invalid @enderror"
                                                name="age" id="age"
                                                value="{{ old('age', Auth::user()->age) }}">
                                        </div>
                                        {{-- Error Message --}}
                                        @error('age')
                                            <div class="text-danger offset-xl-2 offset-3">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    {{-- Phone --}}
                                    <div class="mb-3 row">
                                        <label for="phone" class="form-label col-xl-2 col-3">Phone: </label>
                                        <div class="col-md-6 col-8">
                                            <input type="text"
                                                class="form-control @error('phone') is-invalid @enderror" name="phone"
                                                id="phone" value="{{ old('phone', Auth::user()->phone) }}">
                                        </div>
                                        {{-- Error Message --}}
                                        @error('phone')
                                            <div class="text-danger offset-xl-2 offset-3">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    {{-- Address --}}
                                    <div class="mb-3 row">
                                        <label for="address" class="form-label col-xl-2 col-3">Address: </label>
                                        <div class="col-md-6 col-8">
                                            <textarea class="form-control" name="address" id="address" cols="30" rows="3">{{ old('address', Auth::user()->address) }}</textarea>
                                        </div>
                                    </div>
                                    {{-- Edit Button --}}
                                    <div class="text-center">
                                        <input type="submit" value="save" class="btn btn-info text-white px-4">
                                    </div>
                                </form>
                            </div>

                            <!-- End Edit Profile Tab -->

                            <!-- Change Password Tab -->
                            <div class="tab-pane fade pt-3" id="profile-change-password">
                                <form action="{{ route('profile.password') }}" method="POST">
                                    @csrf
                                    {{-- Old Password --}}
                                    <div class="mb-3 row">
                                        <label for="oldPassword" class="form-label col-xl-2 col-3">Old Password: </label>
                                        <div class="col-md-6 col-8">
                                            <input type="password"
                                                class="form-control @error('oldPassword') is-invalid @enderror"
                                                name="oldPassword" id="oldPassword">
                                        </div>
                                        {{-- Error Message --}}
                                        @error('oldPassword')
                                            <div class="text-danger offset-xl-2 offset-3">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    {{-- New Password --}}
                                    <div class="mb-3 row">
                                        <label for="newPassword" class="form-label col-xl-2 col-3">New Password: </label>
                                        <div class="col-md-6 col-8">
                                            <input type="password"
                                                class="form-control @error('newPassword') is-invalid @enderror"
                                                name="newPassword" id="newPassword">
                                        </div>
                                        {{-- Error Message --}}
                                        @error('newPassword')
                                            <div class="text-danger offset-xl-2 offset-3">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    {{-- Confirm Password --}}
                                    <div class="mb-3 row">
                                        <label for="confirmPassword" class="form-label col-xl-2 col-3">Confirm Password:
                                        </label>
                                        <div class="col-md-6 col-8">
                                            <input type="password"
                                                class="form-control @error('confirmPassword') is-invalid @enderror"
                                                name="confirmPassword" id="confirmPassword">
                                        </div>
                                        {{-- Error Message --}}
                                        @error('confirmPassword')
                                            <div class="text-danger offset-xl-2 offset-3">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    {{-- Save Button --}}
                                    <div class="text-center">
                                        <input type="submit" value="save" class="btn btn-info text-white px-4">
                                    </div>
                                </form>
                            </div>
                            <!-- End Change Password Tab -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
