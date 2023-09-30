@extends('frontend.layout.main')
@section('title', 'Heritage')
@section('customcss')
    <link rel="stylesheet" href="/assets/css/About-Section.css">
    <style>
        .nav-white {
            background-color: white !important;
        }

        
    </style>
@endsection
@section('content')
    <div class="backimg">
        <img src="assets/images/heritage.jpg" class="img-fluid pt-5  w-100" alt="">
        <div class="d-lg-flex d-md-flex d-none justify-content-between py-4 text-white w-100"
            style="position: relative;bottom: 88px;background-color: rgba(0, 0, 0, 0.6);">
            <div class="fs-3 fw-bold ps-5">About Us</div>
            <ul class="d-flex list-unstyled pe-5">
                <li><a href="{{ Route('index') }}" class="text-white text-decoration-none">Home / </a></li>
                <li><a href="#" class="text-white text-decoration-none"> About Us / </a></li>
                <li><a href="{{ Route('about') }}" class="text-white text-decoration-none"> About</a></li>
            </ul>
        </div>
    </div>
    <div class="container-fluid">
        <div class="justify-content-center row pt-lg-3 pt-md-3 pt-0">
            <!-- side columns -->
            @include('frontend.layout.about_sidebar')
            <!-- text -->
            <div class="col-lg-8 col-md-8 col-sm-12 px-lg-5 px-md-5 px-2  rightheritagesd text-center">
                <h2 class="text-start mt-4">The MRB Solar Enterprises</h2>
                <p class="text-start">Welcome to the MRB Solar Enterprises, your trusted partner in renewable energy. At Solar
                    Solutions, we are passionate about harnessing the power of the sun to create a cleaner and more
                    sustainable future.</p>
                <p class="text-start">
                    As a leading solar company, we provide comprehensive solutions for residential, commercial, and
                    industrial customers, helping them transition to efficient and eco-friendly solar energy systems.
                </p>
                <div class="img-sec my-5 w-100">
                    <div class="row">
                        <div class="leftsideimg2 col col-lg-6 text-light text-center">
                            <img src="assets/images/operates-icon.png" class="mt-5" alt="">
                            <br>
                            <h4 class="">Operates in</h4>
                            <h1>100+ countries</h1>


                        </div>
                        <div class="leftsideimg2 col col-lg-6 text-light text-center ">
                            <img src="assets/images/export-products-icon.png" class="mt-5" alt="">
                            <br>
                            <h4 class="text-start">Export Products and services to</h4>
                            <h1 class="text-start">150 COUNTRIES</h1>
                        </div>

                    </div>
                </div>
                <div class="downcontaoned text-start">
                    <h3>What drives us forward?</h3>
                    <hr>
                    <p>
                        'To improve the quality of life of the communities we serve globally, through long-term
                    </p>
                    <hr>
                    <p>
                        stakeholder value creation based on Leadership with Trust'.
                    </p>
                    <br>
                    <h3>MRB Solar Enterprises: A century of powering Mumbai</h3>
                    <hr>
                    <p>MRB Solar Enterprises is the country's largest integrated power utility and our solutions are powering
                        change
                        in some of the biggest cities in the world.</p>
                    <br>
                    <p>
                    <ul>
                        <li>
                            Our reliable and innovative products have powered Mumbai to remain the commercial capital of
                            India.
                        </li>
                        <br>
                        <li>
                            Efficient transmission, distribution and innovation of energy ensures the power requirements
                            are easily met.
                        </li>
                    </ul>
                    </p>
                </div>
            </div>
            <br>
            <h3 class=" mt-5">Corporate Overview - MRB Solar Enterprises</h3>
            <iframe width="400" height="400" class="px-2 px-md-5 px-lg-5 py-5" src="https://www.youtube.com/embed/znNUQrhoLQU"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>
    </div>
@endsection

@section('customjs')

@endsection
