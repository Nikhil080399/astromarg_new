@extends('frontend.layout.main')
@section('title', 'Learn')
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
    <img src="assets/images/About-Us-Learn-About-Solar-Power(top-background).jpg" class="img-fluid pt-5  w-100"
        alt="">
    <div class="d-lg-flex d-md-flex d-none justify-content-between py-4 text-white w-100"
        style="position: relative;bottom: 88px;background-color: rgba(0, 0, 0, 0.6);">
        <div class="fs-3 fw-bold ps-5">About Us</div>
        <ul class="d-flex list-unstyled pe-5">
            <li><a href="{{ Route('index') }}" class="text-white text-decoration-none">Home / </a></li>
            <li><a href="#" class="text-white text-decoration-none"> About Us / </a></li>
            <li><a href="{{ Route('learn') }}" class="text-white text-decoration-none"> Learn About Solar</a></li>
        </ul>
    </div>
</div>
    <div class="container-fluid">
        <div class="justify-content-center row pt-lg-3 pt-md-3 pt-0 ">
            <!-- side columns -->
            @include('frontend.layout.about_sidebar')
            <!-- text -->
            <div class="col-lg-8 col-md-8 col-sm-12 px-lg-5 px-md-5 px-0 rightheritagesd text-center" >
                <div class=" w-100 mx-auto">
                    <div class="text-start px-lg-5 px-md-5 px-2 py-lg-5 py-md-5 py-2 text-dark">
                        <h4>What is solar power?</h4>
                        <hr class="w-25">
                        <ul class="para-text">
                            <li>
                                <p>The sun has been burning and providing heat and light for thousands of years. The ability
                                    to harness this energy from the sun to generate heat or electricity basically is solar
                                    power.</p>
                            </li>
                            <li>
                                <p>This form of energy offers numerous benefits when compared to more traditional forms of
                                    power.</p>
                            </li>
                        </ul>
                        <div class="img-sec3 my-5 w-100">
                            <div class="row">
                                <div class="leftsideimg2 col col-lg-4 text-light text-center">
                                    <img src="assets/images/clean-icon.png" class="mt-5" alt="">
                                    <br>
                                    <h5 class="">Clean</h5>
                                    <p>Produces no fumes</p>
                                </div>
                                <div class="leftsideimg2 col col-lg-4 text-light text-center ">
                                    <img src="assets/images/clean-icon.png" class="mt-5" alt="">
                                    <br>
                                    <h5>Quiet</h5>
                                    <p>Less sound pollution unlike diesel generators</p>
                                </div>
                                <div class="leftsideimg2 col col-lg-4 text-light text-center ">
                                    <img src="assets/images/clean-icon.png" class="mt-5" alt="">
                                    <br>
                                    <h5>Renewable</h5>
                                    <p>Unlike coal and other fossil fuels</p>
                                </div>
                            </div>
                        </div>
                        <h4>How can we use the suns energy?</h4>
                        <hr class="w-25">
                        <ul class="para-text">
                            <li>
                                <p>Our mission is to accelerate the adoption of solar energy by delivering innovative,
                                    reliable, and cost-effective solutions to our customers. We aim to empower individuals,
                                    businesses, and communities to reduce their carbon footprint, decrease reliance on
                                    traditional energy sources, and contribute to a greener planet.</p>
                            </li>
                        </ul>
                        <div class="row text-center justify-content-around">
                            <!-- card 1 -->
                            <div class="col-lg-6 text-center py-2">
                                <div class="card" style="border: none;">
                                    <div class="row">
                                        <img src="assets/images/water-pumps-img.png" class="col-lg-6 col-sm-4 col-md-12"
                                            alt="...">
                                        <div class="card-body col-lg-6 col-sm-8 col-md-12">
                                            <h6 class="card-title card-heading">Potable water or Irrigation</h6>
                                            <p class="card-text" style="font-size: 12px;">(e.g. solar water pumps)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- card 2 -->
                            <div class="col-lg-6 text-center py-2">
                                <div class="card" style="border: none;">
                                    <div class="row">
                                        <img src="assets/images/photovoltaic-power-img.png"
                                            class="col-lg-6 col-sm-4 col-md-12" alt="...">
                                        <div class="card-body col-lg-6 col-sm-8 col-md-12">
                                            <h6 class="card-title card-heading">Light or photovoltaic power</h6>
                                            <p class="card-text" style="font-size: 12px;">(eg. a solar cells)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h4>Why use solar power?</h4>
                        <hr class="w-25">
                        <ul class="para-text">
                            <li>
                                <p>Unlike traditional energy sources, the sun produces enough energy each second to sustain
                                    our power needs for 500,000 years!</p>
                            </li>
                            <li>
                                <p>The continuous emission of energy isn’t the only positive aspect of incorporating solar
                                    power for your requirements.</p>
                            </li>
                        </ul>
                        <div class="row text-center">
                            <!-- card 1 -->
                            <div class="col text-start py-2">
                                <div class="card" style="border: none;">
                                    <div class="row">
                                        <img src="assets/images/economically-sensible-icon.png" style="width: 25%;"
                                            alt="...">
                                        <div>
                                            <h6 class="card-title card-heading">Economically sensible</h6>
                                            <p class="card-text" style="font-size: 12px;">There are 0 recurring costs on
                                                solar power supply.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- card 2 -->
                            <div class="col text-start py-2">
                                <div class="card" style="border: none;">
                                    <div class="row">
                                        <img src="assets/images/environmentally-sustainable-icon.png" style="width: 25%;"
                                            alt="...">
                                        <div>
                                            <h6 class="card-title card-heading">Environmentally sustainable</h6>
                                            <p class="card-text" style="font-size: 12px;">Solar power will not run-out like
                                                traditional power sources such as fossil fuels.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="img-sec4 my-5 w-100 px-5 py-5">
                            <div class="row">
                                <div class="leftsideimg2 col col-lg-3 text-light text-center">
                                    <h5 style="color: yellow;">Food for thought</h5>
                                    <p>1kW Solar power saves</p>
                                </div>
                                <div class="leftsideimg2 col col-lg-3 text-light text-center ">
                                    <h5>77 kg coal</h5>
                                    <p>from being burned</p>
                                </div>
                                <div class="leftsideimg2 col col-lg-3 text-light text-center ">
                                    <h5>397 litres</h5>
                                    <p>of water consumption</p>
                                </div>
                                <div class="leftsideimg2 col col-lg-3 text-light text-center ">
                                    <h5>136 kg of CO2</h5>
                                    <p>being released into
                                        the atmosphere</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection

@section('customjs')

@endsection
