@extends('frontend.layout.main')
@section('title', 'Home')
@section('customcss')

@endsection
@section('content')

    <main>
        <!-- button slider -->
        <div id="carouselExampleCaptions" class="carousel slide" style="scroll-snap-align: start" data-bs-ride="carousel">
            <div class="carousel-indicators" id="win-slider">
                @foreach ($sliders as $key => $slider)
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $key }}"
                        class="{{ $key === 0 ? 'active' : '' }}" aria-current="true"
                        aria-label="Slide {{ $key + 1 }}"></button>
                @endforeach
            </div>
            <div class="carousel-inner">
                @foreach ($sliders as $key => $slider)
                    <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                        <img src="{{ asset($slider->image) }}" class="d-block w-100" alt="..." style="height: 100vh" />
                        <div class="carousel-caption d-none d-md-block">
                            <!-- Add any caption or content here if needed -->
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- section 3 -->
        <div class="container-fluid">
            <div class="row text-light section">
                <!-- Left hand side -->
                <div class="col-lg-6 col-md-6 col-sm-12 section-3-lefthandside text-center section p-5">
                    <h2 class="pt-5 text-start">SOLAR WATER PUMPS</h2>
                    <hr class="w-25" />
                    <div class="p-0 p-lg-5 p-md-5">
                        <div id="carouselExample1" class="carousel slide">
                            <div class="carousel-inner">
                                @foreach ($indexLatest as $key => $latest)
                                    <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                        <h3 class="fs-4 text-start">
                                            {{ $latest->title }}
                                        </h3>
                                        <div class="text-start">
                                            <h4 class="fs-5 fw-normal">- Solar Module: {{ $latest->solar_module }}</h4>
                                            <h4 class="fs-5 fw-normal">- Dynamic Pump Head: {{ $latest->dynamic_pump_head }}
                                                m</h4>
                                            <h4 class="fs-5 fw-normal">- Water Discharge: {{ $latest->water_discharge }} LPD
                                                @ {{ $latest->dynamic_pump_head }} m</h4>
                                        </div>
                                        <hr />
                                        <div class="d-flex justify-content-around">
                                            <div class="d-flex">
                                                <i class="fa-award fa-solid fs-1 px-2" style="color: #eae32a"></i>
                                                <div class="text-start">
                                                    <p class="fs-5 fw-bold mb-0">IEC Certified</p>
                                                    <p class="fst-italic">Modules</p>
                                                </div>
                                            </div>

                                            <div>
                                                <div class="d-flex">
                                                    <i class="fa-regular fa-thumbs-up fs-1 px-2" style="color: #eae32a"></i>
                                                    <div class="text-start">
                                                        <p class="fs-5 fw-bold mb-0">25 Years</p>
                                                        <p class="fst-italic">Warrenty on Modules</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr />
                                    </div>
                                @endforeach
                            </div>
                            <div class="">
                                <div class="text-start">
                                    <p class="mb-0">
                                        ➙<a href="{{ Route('pump') }}" class="fs-5 fst-italic fw-bold text-white">Know
                                            more</a>
                                    </p>
                                </div>
                                <div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample1"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample1"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right hand side -->
                <div class="col-lg-6 col-md-6 col-sm-12 px-0">
                    <img src="assets/images/carousel2-rhs-image.jpg" alt="" class="w-100 h-100 img-fluid" />
                </div>
            </div>
        </div>
        <!-- section 4 -->
        <div class="container-fluid">
            <div class="row text-light section">
                <!-- Left hand side -->
                <div class="col-lg-6 col-md-6 col-sm-12 px-0">
                    <img src="assets/images/rooftop_parallax.jpg" alt="" class="w-100 h-100 img-fluid" />
                </div>
                <!-- Right hand side -->
                <div class="col-lg-6 col-md-6 col-sm-12  text-center section p-5 section-3-lefthandside">
                    <h2 class="pt-5 text-start">SOLAR ROOFTOPS</h2>
                    <hr class="w-25" />
                    <div class="p-0 p-lg-5 p-md-5">
                        <div id="carouselExample" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="fs-5 text-start">MRB Solar Enterprises are passionate about promoting
                                        sustainable and eco-friendly
                                        solutions for clean energy generation. Our rooftop solar PV systems harness the
                                        power of the sun to produce electricity, reducing your carbon footprint and
                                        providing significant savings on your energy bills. Discover how our rooftop solar
                                        solutions can benefit your home or business and contribute to a greener future.
                                    </div>
                                    <a href="{{ Route('rooftop_details') }}" class="float-start">Know more</a>
                                </div>
                                @foreach ($gridLatest as $key => $latest)
                                    <div class="carousel-item">
                                        <h3 class="fs-4 text-start">
                                            {{ $latest->title }}
                                        </h3>
                                        <h5 class=" text-start">
                                            {{ $latest->roof_of_area }}
                                        </h5>
                                        <div class="text-start">
                                            {!! $latest->points !!}
                                        </div>
                                        <hr />
                                        <div class="d-flex justify-content-around">
                                            <div class="d-flex">
                                                <i class="fa-award fa-solid fs-1 px-2" style="color: #eae32a"></i>
                                                <div class="text-start">
                                                    <p class="fs-5 fw-bold mb-0">IEC Certified</p>
                                                    <p class="fst-italic">Modules</p>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="d-flex">
                                                    <i class="fa-regular fa-thumbs-up fs-1 px-2"
                                                        style="color: #eae32a"></i>
                                                    <div class="text-start">
                                                        <p class="fs-5 fw-bold mb-0">25 Years</p>
                                                        <p class="fst-italic">Warrenty on Modules</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr />
                                    </div>
                                @endforeach
                            </div>
                            <div class="">

                                <div>
                                    <button class="carousel-control-prev mt-4" type="button"
                                        data-bs-target="#carouselExample" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next mt-4" type="button"
                                        data-bs-target="#carouselExample" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid justify-content-around text-center section-5-background py-5 section">
            <!-- section 5 -->
            <!-- headings -->
            <div class="row text-dark mt-5">
                <h1><u>Blogs</u></h1>
                <p style="font-size: 25px">
                    Here are all the latest happenings from the world of MRB Solar Enterprises
                </p>
                <br />
            </div>
            <div class="row p-5 justify-content-center">
                @foreach ($blogLatest as $item)
                    <div class="col-md- col-lg-4 col-sm-12">
                        <div class="card mb-3 mx-auto" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <a href="{{ route('blog_page', ['id' => $item->id]) }}">
                                        <img src="{{ asset($item->image) }}" class="img-fluid rounded-start"
                                            alt="{{ $item->title }}" style="height:160px!important;object-fit: cover;min-width: 100%;">
                                    </a>
                                </div>
                                <div class="align-self-center col-md-8">
                                    <div class="card-body text-start">
                                        <p class="card-text fw-medium mb-0 text-secondary-emphasis"><small
                                                class="text-body-secondary">{{ $item->date }}</small>
                                        </p>
                                        <a class="text-decoration-none text-dark" href="{{ route('blog_page', ['id' => $item->id]) }}">
                                            <p class="card-text fw-medium">{{ $item->title }}</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>



    @endsection

    @section('customjs')

    @endsection
