@extends('frontend.layout.main')
@section('title', 'Vision & Mission')
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
        <img src="assets/images/About-Us-Vision-Mission-Values(top-background).jpg" class="img-fluid pt-5  w-100"
            alt="">
        <div class="d-lg-flex d-md-flex d-none justify-content-between py-4 text-white w-100"
            style="position: relative;bottom: 88px;background-color: rgba(0, 0, 0, 0.6);">
            <div class="fs-3 fw-bold ps-5">About Us</div>
            <ul class="d-flex list-unstyled pe-5">
                <li><a href="{{ Route('index') }}" class="text-white text-decoration-none">Home / </a></li>
                <li><a href="#" class="text-white text-decoration-none"> About Us / </a></li>
                <li><a href="{{ Route('vision') }}" class="text-white text-decoration-none"> Vision & Mission</a></li>
            </ul>
        </div>
    </div>
    <div class="container-fluid">
        <div class="justify-content-center row pt-lg-3 pt-md-3 pt-0">
            <!-- side columns -->
            @include('frontend.layout.about_sidebar')
            <!-- text -->
            <div class="col-lg-8 col-md-8 col-sm-12 px-lg-5 px-md-5 px-0 rightheritagesd text-center">
                <div class="img-sec2 my-0 my-lg-5 my-md-5 w-100 mx-auto">
                    <div class="text-start px-5 py-5 text-white">
                        <h4>Our Vision</h4>
                        <hr class="w-25">
                        <ul>
                            <li>
                                <p>MRB Solar Enterprises stive to deliver innovative and efficient solar solutions that not only meet but
                                    exceed their customers satisfactions.</p>
                            </li>
                            <li>
                                <p>
                                    This company is dedicated to the development, manufacturing and implementation of
                                    advanced solar technologies.
                                </p>
                            </li>
                        </ul>
                        <h4>Our Mission</h4>
                        <hr class="w-25">
                        <ul>
                            <li>
                                <p>Our mission is to accelerate the adoption of solar energy by delivering innovative,
                                    reliable, and cost-effective solutions to our customers. We aim to empower individuals,
                                    businesses, and communities to reduce their carbon footprint, decrease reliance on
                                    traditional energy sources, and contribute to a greener planet.</p>
                            </li>
                        </ul>
                        <h4>Expertise and Excellence</h4>
                        <hr class="w-25">
                        <ul>
                            <li>
                                <p>With years of experience in the solar industry, our team of experts brings unparalleled
                                    knowledge and skill to every project. We stay up to date with the latest technological
                                    advancements in solar energy and continuously strive for excellence in design,
                                    installation, and maintenance of solar systems.</p>
                            </li>
                        </ul>
                        <h4>Quality and Reliability</h4>
                        <hr class="w-25">
                        <ul>
                            <li>
                                <p>At Solar Solutions, we are committed to delivering the highest quality products and
                                    services to our customers. We partner with reputable manufacturers and suppliers to
                                    ensure that our solar panels, inverters, and other components meet the highest industry
                                    standards. Our installations are performed by certified technicians who adhere to
                                    rigorous quality control measures, ensuring reliability and longevity of your solar
                                    system.</p>
                            </li>
                        </ul>
                        <h4>Customer Satisfaction</h4>
                        <hr class="w-25">
                        <ul>
                            <li>
                                <p>Customer satisfaction is at the heart of everything we do. We believe in building
                                    long-term relationships with our customers based on trust, transparency, and exceptional
                                    service. From the initial consultation to post-installation support, we are dedicated to
                                    providing an outstanding customer experience. Our knowledgeable and friendly team is
                                    always available to address your questions and concerns, guiding you through every step
                                    of the process.</p>
                            </li>
                        </ul>
                        <h4>Join the Solar Revolution</h4>
                        <hr class="w-25">
                        <ul>
                            <li>
                                <p>By choosing Solar Solutions, you are joining the solar revolution and making a positive
                                    impact on the environment. Not only will you reduce your carbon footprint and save on
                                    energy costs, but you will also contribute to a more sustainable future for generations
                                    to come.
                                    Contact us today to schedule a consultation and discover how Solar Solutions can help
                                    you harness the power of the sun and embrace a cleaner, brighter future.
                                </p>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('customjs')

@endsection
