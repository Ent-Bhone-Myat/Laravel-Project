@extends('layout')
@section('title', 'The Moon')
@section('content')
    <!-- ======= Home Section ======= -->
    <section id="hero" style="background-image: url('{{ asset('images/bgImage.png') }}');">
        <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
            <h1 class="mb-4 pb-0">Welcome To<br><span>Fantasy Moon</span> World</h1>
            <p class="mb-4 pb-0">Come And Find Your Favorite Consoles On Moon Website</p>
            <a href="https://www.youtube.com/watch?v=KI8wn9ib9nc" class="glightbox play-btn mb-4"></a>
            <a href="#events" class="about-btn scrollto">About The Event</a>
        </div>
    </section><!-- End Home Section -->
    <main id="main">
        <!-- ======= Products Section ======= -->
        <section id="menu" class="menu">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Products</h2>
                    <p>Check Our <span>Products List</span></p>
                </div>

                <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

                    <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#nintendo">
                            <h4>Nintendo</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#xbox">
                            <h4>Xbox</h4>
                        </a><!-- End tab nav item -->

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#ps4">
                            <h4>Ps-4</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#ps5">
                            <h4>Ps-5</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#sd">
                            <h4>Steam Deck</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#rog">
                            <h4>ROG Ally</h4>
                        </a>
                    </li><!-- End tab nav item -->
                </ul>

                {{-- Nintendo Products --}}
                <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
                    <div class="tab-pane fade active show" id="nintendo">
                        {{-- Brand --}}
                        <div class="tab-header text-center">
                            <p>Brand</p>
                            <h3>Nintendo</h3>
                        </div>
                        {{-- List --}}
                        <div class="row gy-5">
                            @foreach ($productData as $product)
                                @if ($product->category_id == 1)
                                    <div class="col-lg-4 menu-item">
                                        {{-- Product Image --}}
                                        <a href="{{ route('moon.shop', $product->id) }}">
                                            <img class="menu-img img-fluid"
                                                src="{{ asset('storage/products/' . $product->image) }}" alt="product img">
                                        </a>
                                        <h4>{{ $product->name }}</h4>
                                        <p class="ingredients fs-5">{{ $product->series }}</p>
                                        <p class="price"><i class="fa-solid fa-dollar-sign me-2"></i>{{ $product->price }}
                                        </p>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Xbox Products --}}
                <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
                    <div class="tab-pane fade" id="xbox">
                        {{-- Brand --}}
                        <div class="tab-header text-center">
                            <p>Brand</p>
                            <h3>Xbox</h3>
                        </div>
                        {{-- List --}}
                        <div class="row gy-5">
                            @foreach ($productData as $product)
                                @if ($product->category_id == 2)
                                    <div class="col-lg-4 menu-item">
                                        {{-- Product Image --}}
                                        <a href="{{ route('moon.shop', $product->id) }}">
                                            <img class="menu-img img-fluid"
                                                src="{{ asset('storage/products/' . $product->image) }}" alt="product img">
                                        </a>
                                        <h4>{{ $product->name }}</h4>
                                        <p class="ingredients fs-5">{{ $product->series }}</p>
                                        <p class="price"><i class="fa-solid fa-dollar-sign me-2"></i>{{ $product->price }}
                                        </p>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- PS-4 Products --}}
                <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
                    <div class="tab-pane fade" id="ps4">
                        {{-- Brand --}}
                        <div class="tab-header text-center">
                            <p>Brand</p>
                            <h3>Play Station 4</h3>
                        </div>
                        {{-- List --}}
                        <div class="row gy-5">
                            @foreach ($productData as $product)
                                @if ($product->category_id == 3)
                                    <div class="col-lg-4 menu-item">
                                        {{-- Product Image --}}
                                        <a href="{{ route('moon.shop', $product->id) }}">
                                            <img class="menu-img img-fluid"
                                                src="{{ asset('storage/products/' . $product->image) }}" alt="product img">
                                        </a>
                                        <h4>{{ $product->name }}</h4>
                                        <p class="ingredients fs-5">{{ $product->series }}</p>
                                        <p class="price"><i class="fa-solid fa-dollar-sign me-2"></i>{{ $product->price }}
                                        </p>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- PS-5 Products --}}
                <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
                    <div class="tab-pane fade" id="ps5">
                        {{-- Brand --}}
                        <div class="tab-header text-center">
                            <p>Brand</p>
                            <h3>Play Station 5</h3>
                        </div>
                        {{-- List --}}
                        <div class="row gy-5">
                            @foreach ($productData as $product)
                                @if ($product->category_id == 4)
                                    <div class="col-lg-4 menu-item">
                                        {{-- Product Image --}}
                                        <a href="{{ route('moon.shop', $product->id) }}">
                                            <img class="menu-img img-fluid"
                                                src="{{ asset('storage/products/' . $product->image) }}"
                                                alt="product img">
                                        </a>
                                        <h4>{{ $product->name }}</h4>
                                        <p class="ingredients fs-5">{{ $product->series }}</p>
                                        <p class="price"><i
                                                class="fa-solid fa-dollar-sign me-2"></i>{{ $product->price }}
                                        </p>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Steam Deck Products --}}
                <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
                    <div class="tab-pane fade" id="sd">
                        {{-- Brand --}}
                        <div class="tab-header text-center">
                            <p>Brand</p>
                            <h3>Steam Deck</h3>
                        </div>
                        {{-- List --}}
                        <div class="row gy-5">
                            @foreach ($productData as $product)
                                @if ($product->category_id == 5)
                                    <div class="col-lg-4 menu-item">
                                        {{-- Product Image --}}
                                        <a href="{{ route('moon.shop', $product->id) }}">
                                            <img class="menu-img img-fluid"
                                                src="{{ asset('storage/products/' . $product->image) }}"
                                                alt="product img">
                                        </a>
                                        <h4>{{ $product->name }}</h4>
                                        <p class="ingredients fs-5">{{ $product->series }}</p>
                                        <p class="price"><i
                                                class="fa-solid fa-dollar-sign me-2"></i>{{ $product->price }}
                                        </p>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- ROG Ally Products --}}
                <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
                    <div class="tab-pane fade" id="rog">
                        {{-- Brand --}}
                        <div class="tab-header text-center">
                            <p>Brand</p>
                            <h3>ROG Ally</h3>
                        </div>
                        {{-- List --}}
                        <div class="row gy-5">
                            @foreach ($productData as $product)
                                @if ($product->category_id == 6)
                                    <div class="col-lg-4 menu-item">
                                        {{-- Product Image --}}
                                        <a href="{{ route('moon.shop', $product->id) }}">
                                            <img class="menu-img img-fluid"
                                                src="{{ asset('storage/products/' . $product->image) }}"
                                                alt="product img">
                                        </a>
                                        <h4>{{ $product->name }}</h4>
                                        <p class="ingredients fs-5">{{ $product->series }}</p>
                                        <p class="price"><i
                                                class="fa-solid fa-dollar-sign me-2"></i>{{ $product->price }}
                                        </p>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Product Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>About Us</h2>
                    <p>Learn More <span>About Moon</span></p>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-7 position-relative about-img"
                        style="background-image: url('{{ asset('images/shop.png') }}') ;" data-aos="fade-up"
                        data-aos-delay="150">
                    </div>
                    <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
                        <div class="content ps-0 ps-lg-5">
                            <p class="fst-italic">
                                The Moon (Moon) is one of the best selling laptop shop in Myanmar and
                                the company is founded since 1980.
                                We have over 5,000 employees.
                                Our first priority is customer's satisfaction.
                                Royal Dragon laptop selling Showrooms are opening in U.S and around the world.
                                We are working together with many different suppliers.
                                We are trying the best for our customers.
                            </p>
                            <div class="position-relative mt-4">
                                <img src="{{ asset('images/console.png') }}" class="img-fluid" alt="">
                                <a href="https://www.youtube.com/watch?v=xuXHrHRZzLk" class="glightbox play-btn"></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Events Section ======= -->
        <section id="events" class="events">
            <div class="container-fluid" data-aos="fade-up">

                <div class="section-header">
                    <h2>Events</h2>
                    <p>Share <span>Your Moments</span> In Our Promotion</p>
                </div>

                <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide event-item d-flex flex-column justify-content-end"
                            style="background-image: url({{ asset('images/event1.png') }})">
                            <p class="description">
                                Quo corporis voluptas ea ad. Consectetur inventore sapiente ipsum voluptas eos omnis facere.
                                Enim facilis veritatis id est rem repudiandae nulla expedita quas.
                            </p>
                        </div><!-- End Event item -->

                        <div class="swiper-slide event-item d-flex flex-column justify-content-end"
                            style="background-image: url({{ asset('images/event2.png') }})">
                            <p class="description">
                                In delectus sint qui et enim. Et ab repudiandae inventore quaerat doloribus. Facere nemo
                                vero est ut dolores ea assumenda et. Delectus saepe accusamus aspernatur.
                            </p>
                        </div><!-- End Event item -->

                        <div class="swiper-slide event-item d-flex flex-column justify-content-end"
                            style="background-image: url({{ asset('images/event3.png') }})">
                            <p class="description">
                                Laborum aperiam atque omnis minus omnis est qui assumenda quos. Quis id sit quibusdam. Esse
                                quisquam ducimus officia ipsum ut quibusdam maxime. Non enim perspiciatis.
                            </p>
                        </div><!-- End Event item -->

                        <div class="swiper-slide event-item d-flex flex-column justify-content-end"
                            style="background-image: url({{ asset('images/event4.png') }})">
                            <p class="description">
                                Quo corporis voluptas ea ad. Consectetur inventore sapiente ipsum voluptas eos omnis facere.
                                Enim facilis veritatis id est rem repudiandae nulla expedita quas.
                            </p>
                        </div><!-- End Event item -->

                        <div class="swiper-slide event-item d-flex flex-column justify-content-end"
                            style="background-image: url({{ asset('images/event5.png') }})">
                            <p class="description">
                                Quo corporis voluptas ea ad. Consectetur inventore sapiente ipsum voluptas eos omnis facere.
                                Enim facilis veritatis id est rem repudiandae nulla expedita quas.
                            </p>
                        </div><!-- End Event item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section>
        <!-- End Events Section -->

        <!-- ======= Gallery Section ======= -->
        <section id="gallery">

            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Gallery</h2>
                    <p>Check our gallery from the recent events</p>
                </div>
            </div>

            <div class="gallery-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><a href="{{ asset('images/event1.png') }}" class="gallery-lightbox"><img
                                src="{{ asset('images/event1.png') }}" class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a href="{{ asset('images/event2.png') }}" class="gallery-lightbox"><img
                                src="{{ asset('images/event2.png') }}" class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a href="{{ asset('images/event3.png') }}" class="gallery-lightbox"><img
                                src="{{ asset('images/event3.png') }}" class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a href="{{ asset('images/event4.png') }}" class="gallery-lightbox"><img
                                src="{{ asset('images/event4.png') }}" class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a href="{{ asset('images/event5.png') }}" class="gallery-lightbox"><img
                                src="{{ asset('images/event5.png') }}" class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a href="{{ asset('images/event6.png') }}" class="gallery-lightbox"><img
                                src="{{ asset('images/event6.png') }}" class="img-fluid" alt=""></a></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </section><!-- End Gallery Section -->

        <!-- =======  F.A.Q Section ======= -->
        <section id="faq">

            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>F.A.Q </h2>
                </div>

                <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-9">

                        <ul class="faq-list">

                            <li>
                                <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non consectetur
                                    a erat nam at lectus urna duis? <i class="bi bi-chevron-down icon-show"></i><i
                                        class="bi bi-chevron-up icon-close"></i></div>
                                <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet
                                        non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor
                                        purus non.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Feugiat
                                    scelerisque varius morbi enim nunc faucibus a pellentesque? <i
                                        class="bi bi-chevron-down icon-show"></i><i
                                        class="bi bi-chevron-up icon-close"></i></div>
                                <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                                        velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend
                                        donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in
                                        cursus turpis massa tincidunt dui.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit amet
                                    consectetur adipiscing elit pellentesque habitant morbi? <i
                                        class="bi bi-chevron-down icon-show"></i><i
                                        class="bi bi-chevron-up icon-close"></i></div>
                                <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus
                                        pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit.
                                        Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis
                                        tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                    </p>
                                </div>
                            </li>

                            <li>
                                <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio tempor
                                    orci dapibus. Aliquam eleifend mi in nulla? <i
                                        class="bi bi-chevron-down icon-show"></i><i
                                        class="bi bi-chevron-up icon-close"></i></div>
                                <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                                        velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend
                                        donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in
                                        cursus turpis massa tincidunt dui.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam
                                    pellentesque nec nam aliquam sem et tortor consequat? <i
                                        class="bi bi-chevron-down icon-show"></i><i
                                        class="bi bi-chevron-up icon-close"></i></div>
                                <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in
                                        est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl
                                        suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                                    </p>
                                </div>
                            </li>

                            <li>
                                <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae
                                    purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i
                                        class="bi bi-chevron-down icon-show"></i><i
                                        class="bi bi-chevron-up icon-close"></i></div>
                                <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo
                                        integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc
                                        eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                                        Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus.
                                        Nibh tellus molestie nunc non blandit massa enim nec.
                                    </p>
                                </div>
                            </li>

                        </ul>

                    </div>
                </div>

            </div>

        </section><!-- End  F.A.Q Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="section-bg">

            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Contact Us</h2>
                    <p>If anything required, contact us</p>
                </div>

                <div class="row contact-info">

                    <div class="col-md-4">
                        <div class="contact-address">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Address</h3>
                            <address>Heldan Street Yangon, NY 5350 , Myanmar</address>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-phone">
                            <i class="bi bi-phone"></i>
                            <h3>Phone Number</h3>
                            <p><a href="tel:+155895548855">+959 234 234 987</a></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-email">
                            <i class="bi bi-envelope"></i>
                            <h3>Email</h3>
                            <p><a href="mailto:info@example.com">moon@gamil.com</a></p>
                        </div>
                    </div>

                </div>

                <!--Start Contact Form -->
                <div class="form-control mt-4">
                    <form action="{{ route('contact') }}" method="post" role="form" class=" p-3 p-md-4">
                        @csrf
                        <div class="row mt-4">
                            {{-- Name --}}
                            <div class="col-xl-6">
                                <input type="text" name="name" class="form-control"
                                    @error('name') is-invalid @enderror id="name" placeholder="your name">
                                {{-- Error Message --}}
                                @error('name')
                                    <div class="text-danger offset-xl-2 offset-3">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- Email --}}
                            <div class="col-xl-6">
                                <input type="text" class="form-control" name="email"
                                    @error('name') is-invalid @enderror id="email" placeholder="your email">
                                {{-- Error Message --}}
                                @error('email')
                                    <div class="text-danger offset-xl-2 offset-3">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        {{-- Phone --}}
                        <div class="mt-4">
                            <input type="text" class="form-control" name="phone" id="subject"
                                placeholder="your phone number">
                        </div>
                        {{-- Message --}}
                        <div class="mt-4">
                            <textarea class="form-control" name="message" @error('name') is-invalid @enderror rows="5"
                                placeholder="your message"></textarea>
                            {{-- Error Message --}}
                            @error('message')
                                <div class="text-danger offset-xl-2 offset-3">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- Button --}}
                        <div class="text-center mt-4"><button class="btn btn-danger text white" type="submit">Send
                                Message</button>
                        </div>
                    </form>
                </div>
                <!--End Contact Form -->

            </div>
        </section><!-- End Contact Section -->

        <!-- Start Google Maps -->
        <div class="mb-3">
            <iframe style="border:0; width: 100%; height: 350px;"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.007541120121!2d96.12766157497207!3d16.82598198396862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c194ca13fff6e3%3A0x1334ced7a53c5bbc!2sHledan%20Centre!5e0!3m2!1sen!2smm!4v1716011799864!5m2!1sen!2smm"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- End Google Maps -->
    </main>
@endsection

{{-- Cart Button --}}
@section('cartBtn')
    <a class="buy-tickets scrollto position-relative" href="{{ route('cart') }}">
        <i class="fa-solid fa-cart-shopping me-2"></i>
        Cart
        @if (count($cartData) != 0)
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
                {{ count($cartData) }}
            </span>
        @endif
    </a>
@endsection
