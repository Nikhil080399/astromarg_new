@extends('frontend.layout.main')
@section('title', 'Product Detail')
@section('customcss')
    <style>
        .nav-white {
            background-color: white !important;
        }

        .blog-cards a {
            text-decoration: none;
            font-size: 20px;
            font-weight: 500;
        }

        .widget-background {
            background-image: url(assets/images/widget-banner.jpg);
            background-size: cover;
        }

        @media screen and (max-width: 768px) {
            .user-img {
                display: none;
            }
        }

        .form-attribute-height {
            min-height: 35px;
        }

        .submit-button {
            background-color: #e6a519;
            border-radius: 20px;
        }

        .recent-blog img {
            width: 110px;
            height: 110px;
        }

        body {
            background-color: #f9f9f9;
        }

        .container {
            margin-top: 30px;
        }

        h1 {
            margin-bottom: 30px;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }

        ul,
        ol {
            list-style: square;
        }
    </style>
@endsection
@section('content')
    @foreach ($pump_detail as $item)
        <div class="container nav-white my-5 p-5" style="margin-top: 5rem!important;">
            <h1 class="pt-5 fs-3">Product Details :-</h1>
            <div class="row">
                <div>
                    <img src="{{ asset('storage/images/' . $item['banner_image']) }}" alt="" class="img-fluid w-100"
                        style="height:300px!important">
                </div>
                <div class="align-items-baseline d-flex py-3">
                    <h3 class="fs-5">Product Name :-</h3><span
                        class="fw-medium px-2 text-decoration-underline">{!! $item['title'] !!}</span>
                </div>
                <div class="py-3">
                    <h3 class="fs-5">Features: -</h3>
                    <div>
                        {!! $item['features'] !!}
                    </div>
                </div>
                <div class="py-3">
                    <h3 class="fs-5">Components: -</h3>
                    <div>
                        {!! $item['components'] !!}
                    </div>
                </div>
                <div class="py-3">
                    <h3 class="fs-5"> Benefits: -</h3>
                    <div>
                        {!! $item['benefits'] !!}
                    </div>
                </div>
                <div class="py-3">
                    <h3 class="fs-5">Specifications: -</h3>
                    <div>
                        <ol>
                            <li> Solar Module: {{ $item['solar_module'] }}Wp</li>
                            <li>Dynamic Pump Head: {{ $item['dynamic_pump_head'] }} m</li>
                            <li>Water Discharge: {{ $item['water_discharge'] }} LPD @ {{ $item['dynamic_pump_head'] }} m
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="bg-info container mb-5 px-0">
        <div class="fs-5 fw-bold ps-2 py-2 text-white">Tell Us Your Buy Requirement to Get Instant Response</div>
        <form action="{{ Route('requirement_form')}}" method="post" class="nav-white p-4" style="border: 2px solid var(--bs-info);">
            @csrf
            <div class="row">
                <div class="col-md-5 col-sm-12 col-lg-5">
                    <label for="loking" class="fw-bold py-1">Loking For</label><br>
                    <select name="product" id="title"
                        class="border-0 border-bottom border-dark form-attributes rounded-2 w-100" required>
                        <option value="select" disabled>Products</option>
                        @foreach ($pump_detail as $item)
                            <option value="{{ $item['title'] }}">{{ $item['title'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3 col-sm-12 col-lg-3">
                    <label for="quantity" class="fw-bold py-1">Quantity</label><br>
                    <input type="number" name="quantity" id="quantity" style="height: 35px;width: 100%;">
                </div>
                <div class="col-md-3 col-sm-12 col-lg-3">
                    <label for="piece" class="fw-bold py-1">Piece</label><br>
                    <input type="number" name="piece" id="piece" style="height: 35px;width: 100%;">
                </div>
                <div class="col-md-5 col-sm-12 col-lg-5">
                    <label for="mobile" class="fw-bold py-1">Your Mobile No.</label><br>
                    <input type="number" name="number" id="number" style="height: 35px;width: 100%;">
                </div>
            </div>
            <div class="pt-3 text-center">
                <button class="btn btn-warning px-4" type="submit" name="submit">Get Quote</button>
            </div>
        </form>
    </div>
    <div class="container mb-5 nav-white p-5">
        <div class="row">
            <div class="fs-5 fw-bold ps-2 py-2 pb-4">Find Similar Products :-</div>
            @foreach ($pumps as $item)
                <div class="col-lg-3 col-md-3 col-sm-12 text-center">
                    <div>
                        <img src="{{ asset('storage/images/' . $item->card_image) }}" alt="Product Image"
                            style="height: 200px;width: 200px;">
                    </div>
                    <div class="fs-6 fw-medium py-2">{{ $item->title }}</div>
                    <div class="card-text py-2">
                        <a href="#" class="text-decoration-none product" value="{{$item->id}}">
                            <div class="btn btn-outline-info btn-sm">View More</div>
                        </a>
                    </div>
                </div>
            @endforeach
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

@endsection
