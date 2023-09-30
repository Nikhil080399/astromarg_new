@extends('frontend.layout.main')
@section('title', 'Rooftop Details')
@section('customcss')
    <style>
        .nav-white {
            background-color: white !important;
        }

        body {
            background-color: #f9f9f9;
        }

        h1 {
            margin-bottom: 30px;
        }

        .gallery-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .gallery-img:hover {
            transform: scale(1.05);
        }

        .carousel-item {
            height: auto;
            position: relative;
        }

        .carousel-item .carousel-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 10px;
            background-color: rgba(0, 0, 0, 0.7);
            color: #fff;
            text-align: center;
        }

        .carousel-control-prev:hover,
        .carousel-control-next:hover {
            opacity: 1;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid px-0 bg-body">
        <div class="backimg">
            <img src="assets/images/Solar-Pump-Banner.jpg" class="img-fluid pt-5  w-100" alt="">
            <div class="d-flex justify-content-between py-4 text-white w-100"
                style="position: relative;bottom: 88px;background-color: rgba(0, 0, 0, 0.6);">
                <div class="fs-3 fw-bold ps-5">RoofTops</div>
                <ul class="d-flex list-unstyled pe-5">
                    <li><a href="{{ Route('index') }}" class="text-white text-decoration-none">Home / </a></li>
                    <li><a href="#" class="text-white text-decoration-none"> RoofTop Details</a></li>
                </ul>
            </div>
        </div>

        <div class="container-fluid px-3">
            <div class="row justify-content-center">
                <h3 class="mb-4 ps-5">Why choose Rooftop Solar Power Systems?</h3>
                <div class="col-md-5 col-sm-12 col-lg-5">
                    <ol style="text-align: justify;">
                        <li><span class="fw-bold">Clean and Renewable Energy:-</span> Rooftop solar power systems utilize
                            sunlight, a clean and renewable energy source, to generate electricity. By choosing solar
                            energy, you help reduce greenhouse gas emissions and combat climate change. </li>
                        <li><span class="fw-bold">Energy Cost Savings:-</span> With a rooftop solar system, you can offset a
                            significant portion of your electricity consumption, leading to reduced reliance on the grid and
                            lower energy bills.</li>
                        <li><span class="fw-bold">Energy Independence:-</span>By generating your electricity, you become
                            less dependent on external energy sources, providing you with more control over your energy
                            needs. </li>
                        <li><span class="fw-bold">Net Metering Benefits:-</span>Our grid-tied rooftop solar systems often
                            come with net metering allowing you to export surplus electricity to the grid and receive
                            credits or compensation from your utility company.</li>
                    </ol>
                </div>
                <div class="col-md-5 col-lg-5 col-sm-12">
                    <img src="{{asset('assets/images/know more.png')}}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <h3 class="mb-4 pe-5 text-end">Our Rooftop Solar System Features</h3>
                <div class="col-md-5 col-lg-5 col-sm-12">
                    <img src="{{asset('assets/images/know more2.jpg')}}" alt="" class="img-fluid">
                </div>
                <div class="col-md-5 col-sm-12 col-lg-5">
                    <ol style="text-align: justify;">
                        <li><span class="fw-bold">High-Quality Solar Panels:- </span>We use top-quality solar panels
                            equipped with efficient photovoltaic cells to maximize energy capture and conversion. </li>
                        <li><span class="fw-bold">Professional Installation:- </span>Our team of experts ensures a smooth
                            and safe installation process, optimizing the placement of solar panels on your rooftop. </li>
                        <li><span class="fw-bold">Inverter Technology:-</span>Our advanced inverters efficiently convert DC
                            electricity to AC, ensuring optimal performance and seamless integration with your electrical
                            system.</li>
                        <li><span class="fw-bold">Monitoring and Maintenance:-</span>We offer monitoring solutions to track
                            your system's performance, and our maintenance services ensure your rooftop solar system
                            operates at its best for years to come.</li>
                    </ol>
                </div>
            </div>
            <div class="justify-content-center mt-5 row">
                <div class="col-md-10 col-sm-12 col-lg-10">
                    <h3 class="text-start">Residential and Commercial Solutions:</h3>
                    <p class="ps-3">Whether you own a residential property or run a commercial business, our rooftop solar power systems can be tailored to suit your specific needs. We design systems of varying capacities to accommodate your energy requirements.</p>
                </div>
                <div class="col-md-10 col-sm-12 col-lg-10">
                    <h3 class="text-start">Environmental Impact: </h3>
                    <p class="ps-3">By going solar, you contribute to a greener environment by reducing carbon emissions. Over the lifetime of your rooftop solar system, you can save tons of CO2, equivalent to planting hundreds of trees.</p>
                </div>
                <div class="col-md-10 col-sm-12 col-lg-10">
                    <h3 class="text-start">Cost and Savings Analysis: </h3>
                    <p class="ps-3">Explore the potential savings and payback period of your rooftop solar system with our personalized cost and savings analysis. We take into account your location, energy consumption, and applicable incentives to provide you with accurate projections.</p>
                </div>
                <div class="col-md-10 col-sm-12 col-lg-10">
                    <h3 class="text-start">Get Started with Rooftop Solar:</h3>
                    <p class="ps-3">Ready to harness clean and renewable energy from the sun? Contact our team today to schedule a consultation. We'll assess your rooftop's solar potential and guide you through the process, from design and installation to post-installation support.</p>
                </div>
                <div class="col-md-10 col-sm-12 col-lg-10">
                    <h3 class="text-start">Join the Solar Revolution: </h3>
                    <p class="ps-3">By choosing our rooftop solar power systems, you become part of the clean energy revolution, playing an active role in preserving our planet for future generations.</p>
                </div>
            </div>
            </div>
        </div>


    </div>
@endsection

@section('customjs')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var galleryImages = document.querySelectorAll('.gallery-img');
            var carouselItems = document.querySelectorAll('.carousel-item');

            galleryImages.forEach(function(galleryImage, index) {
                galleryImage.addEventListener('click', function() {
                    // Remove active class from all carousel items
                    carouselItems.forEach(function(carouselItem) {
                        carouselItem.classList.remove('active');
                    });

                    // Add active class to corresponding carousel item
                    carouselItems[index].classList.add('active');
                });
            });
        });
    </script>
@endsection
