@extends('frontend.layout.main')
@section('title', 'Pumps')
@section('customcss')
    <link rel="stylesheet" href="/assets/css/About-Section.css">
    <style>
        .nav-white {
            background-color: white !important;
        }

        .list-group-item {
            list-style-type: circle;
        }

        .active {
            color: black !important;
            font-weight: bold !important;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid px-0">
        <div class="backimg">
            <img src="assets/images/Solar-Pump-Banner.jpg" class="img-fluid pt-5  w-100" alt="">
            <div class="d-lg-flex d-md-flex d-none justify-content-between py-4 text-white w-100"
                style="position: relative;bottom: 88px;background-color: rgba(0, 0, 0, 0.6);">
                <div class="fs-3 fw-bold ps-5">Solar Pumps</div>
                <ul class="d-flex list-unstyled pe-5">
                    <li><a href="#" class="text-white text-decoration-none">Home / </a></li>
                    <li><a href="#" class="text-white text-decoration-none"> Products / </a></li>
                    <li><a href="#" class="text-white text-decoration-none"> Solar Pumps</a></li>
                </ul>
            </div>
        </div>
        <div class="container-fluid">
            <div class="my-3 row">
                <div class="col-md-5 col-lg-5 col-sm-12">
                    <div class="bg-info fs-medium rounded-end-5 row text-center text-white">
                        <a href="#"
                            class="text-decoration-none text-white active col-lg-4 col-md-4 col-4  py-2 filter-button"
                            style="border-right: 2px dashed lightyellow;" data-category="all">All
                        </a>
                        <a href="#"
                            class="text-decoration-none text-white  col-lg-4 col-md-4 col-4  py-2 filter-button"
                            style="border-right: 2px dashed lightyellow;" data-category="Ac">Ac Pumps
                        </a>
                        <a href="#"
                            class="text-decoration-none text-white  col-lg-4 col-md-4 col-4  py-2 filter-button"
                            style="border-right: 2px dashed lightyellow;" data-category="Dc">Dc Pumps
                        </a>
                    </div>
                </div>
            </div>
            <div class="row px-5 justify-content-around">
                @foreach ($pumps as $pump)
                    <div class="col-lg-5 col-md-5 col-sm-12 filter" data-filter="{{ $pump->type }}">
                        <div class="border-0 card mb-3 shadow " style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('storage/images/' . $pump->card_image) }}"
                                        class="rounded-start w-100 h-" alt="..."
                                        style="max-width: 100%!important;height:250px;min-height: 100%;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $pump->title }}</h5>
                                        <h6 class="card-title">Specifications: -</h6>
                                        <ul class="list-group-item ps-4">
                                            <li>Solar Module:{{ $pump->solar_module }}Wp</li>
                                            <li>Dynamic Pump Head: {{ $pump->dynamic_pump_head }} m</li>
                                            <li>Water Discharge: {{ $pump->water_discharge }} LPD @
                                                {{ $pump->dynamic_pump_head }}m</li>
                                        </ul>
                                        <div class="card-text ms-4">
                                            <a href="#" class="text-decoration-none  product"
                                                value="{{ $pump->id }}">
                                                <div class="btn btn-outline-info py-1">View
                                                    More
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('customjs')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $(document).on('click', '.product', function(e) {
                e.preventDefault();
                let pumpclick = $(this).attr('value');
                // console.log(pumpclick);

                $.ajax({
                    url: '/get_pump_id',
                    type: 'GET',
                    data: {
                        'pumpclick': pumpclick,
                    },

                    success: function(result) {
                        var pump_detail = JSON.stringify(result['pump_detail']);

                        // Use encodeURIComponent to ensure data is properly encoded in the URL
                        var encoded_pump_detail = encodeURIComponent(pump_detail);

                        // Pass the encoded data as a query parameter in the URL
                        window.location.href = '/product_detail?pump_detail=' +
                            encoded_pump_detail;
                    }



                });
            });
        });
    </script>

    <script>
        // Get all the filter buttons
        const filterButtons = document.querySelectorAll('.filter-button');

        // Get all the image containers
        const imageContainers = document.querySelectorAll('.filter');

        // Add click event listeners to the filter buttons
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                const category = this.getAttribute('data-category');

                // Hide all image containers initially
                imageContainers.forEach(container => {
                    container.style.display = 'none';
                });

                // Remove active class from all filter buttons
                filterButtons.forEach(button => {
                    button.classList.remove('active');
                });

                // Show image containers based on selected category
                if (category === 'all') {
                    imageContainers.forEach(container => {
                        container.style.display = 'block';
                    });
                } else {
                    const filteredContainers = document.querySelectorAll(`[data-filter="${category}"]`);
                    filteredContainers.forEach(container => {
                        container.style.display = 'block';
                    });
                }

                // Add active class to the clicked filter button
                this.classList.add('active');
            });
        });
    </script>

@endsection
