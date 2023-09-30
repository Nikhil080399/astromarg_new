@extends('frontend.layout.main')
@section('title', 'Health Safety')
@section('customcss')
    <style>
        .nav-white {
            background-color: white !important;
        }

        .img_back {
            background-image: url('{{ asset('assets/images/health-pic4.jpg') }}');
            background-size: cover;
            height: 300px;
            background-repeat: no-repeat;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid px-0">
        <div class="backimg">
            <img src="assets/images/health-safety-environment-header.jpg" class="img-fluid pt-5  w-100" alt="">
            <div class="d-flex justify-content-between py-4 text-white w-100"
                style="position: relative;bottom: 88px;background-color: rgba(0, 0, 0, 0.6);">
                <div class="fs-3 fw-bold ps-5">Sustainability</div>
                <ul class="d-flex list-unstyled pe-5">
                    <li><a href="{{ Route('index') }}" class="text-white text-decoration-none">Home / </a></li>
                    <li><a href="{{ Route('health') }}" class="text-white text-decoration-none">Health Safety</a></li>
                </ul>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <h2 class=" text-capitalize">Safety guaranteed by setting benchmarks</h2>
                    <p class="fs-5 fw-lighter ps-4">Ensuring the safety of our workforce is one of our priorities at MRB Solar Enterprises and we adhere to
                        all the Health, Safety, Security and Environment norms which serve as the benchmark globally.</p>
                    <p class="fs-5 fw-lighter ps-4">Our safety record has led to multiple national, regional and state level
                        safety awards that continue
                        to validate our commitment to the health and well-being of our employees and workers.</p>
                </div>
            </div>
            <div class="row px-2">
                <div class="img_back my-2 p-5">
                    <h2 class="fw-light text-white">FOOD FOR THOUGHT</h2>
                    <hr class="ms-1 text-white" style="width: 5%;">
                    <h3 class="fw-semibold text-warning">10.5 Million Safe Man Hours</h3>
                    <p class="fs-5 fw-lighter ps-3 pt-2 text-white w-25">Our remarkable safety record continued as we
                        clocked millions of safe man hours in 2017-18</p>
                </div>
            </div>
            <div class="row">
                <div class="align-self-center col-lg-7 col-md-7 col-sm-12 py-5">
                    <h2 class=" text-capitalize">How do we ensure safety all around?</h2>
                    <p class="fs-5 fw-lighter ps-4" style=" text-align: justify;">The Health, Safety and Environment
                        standards at MRB Solar Enterprises are
                        constantly updated to ensure greater safety as we implement a range of policies and practices.</p>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 py-5 text-center">
                    <img src="{{ asset('assets/images/safety-pic1.png') }}" alt="">
                </div>
            </div>
            <div class="row p-5">
                <div class="col-md-3 col-lg-3 col-sm-12">
                    <ul class="d-flex list-unstyled" style="flex-wrap: wrap;list-style: square;">
                        <li class=" p-3" style="border-bottom: 1px solid #dcdcdc;">Integrated HSE policy</li>
                        <li class=" p-3" style="border-bottom: 1px solid #dcdcdc;">Regular management review</li>
                        <li class=" p-3" style="border-bottom: 1px solid #dcdcdc;">Total employee involvement</li>
                        <li class=" p-3" style="border-bottom: 1px solid #dcdcdc;">Permit to work systems</li>
                        <li class=" p-3" style="border-bottom: 1px solid #dcdcdc;">Golden rules for safety</li>
                        <li class=" p-3" style="border-bottom: 1px solid #dcdcdc;">Reward and recognition</li>
                        <li class=" p-3" style="border-bottom: 1px solid #dcdcdc;">Proactive reporting culture</li>
                    </ul>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-12">
                    <ul class="d-flex list-unstyled" style="flex-wrap: wrap;list-style: square;">
                        <li class=" p-3" style="border-bottom: 1px solid #dcdcdc;">Certified installers</li>
                        <li class=" p-3" style="border-bottom: 1px solid #dcdcdc;">Risk assessment of all activities</li>
                        <li class=" p-3" style="border-bottom: 1px solid #dcdcdc;">Sharing of lessons learnt</li>
                        <li class=" p-3" style="border-bottom: 1px solid #dcdcdc;">Crisis and emergency response plan
                        </li>
                        <li class=" p-3" style="border-bottom: 1px solid #dcdcdc;">Contractor management</li>
                        <li class=" p-3" style="border-bottom: 1px solid #dcdcdc;">Environmental aspect / impact of all
                            activities</li>
                    </ul>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-12">
                    <ul class="d-flex list-unstyled" style="flex-wrap: wrap;list-style: square;">
                        <li class=" p-3" style="border-bottom: 1px solid #dcdcdc;">Legal requirements</li>
                        <li class=" p-3" style="border-bottom: 1px solid #dcdcdc;">Driving safety standards</li>
                        <li class=" p-3" style="border-bottom: 1px solid #dcdcdc;">Sustaining best practices</li>
                        <li class=" p-3" style="border-bottom: 1px solid #dcdcdc;">ISO 14001:2004 certification</li>
                        <li class=" p-3" style="border-bottom: 1px solid #dcdcdc;">Continuous improvement in process</li>
                        <li class=" p-3" style="border-bottom: 1px solid #dcdcdc;">Training and re-training</li>
                    </ul>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-12">
                    <ul class="d-flex list-unstyled" style="flex-wrap: wrap;list-style: square;">
                        <li class=" p-3" style="border-bottom: 1px solid #dcdcdc;">Environmental & social screening
                            process for any new projects</li>
                        <li class=" p-3" style="border-bottom: 1px solid #dcdcdc;">Job safety analysis</li>
                        <li class=" p-3" style="border-bottom: 1px solid #dcdcdc;">Climate change initiatives</li>
                        <li class=" p-3" style="border-bottom: 1px solid #dcdcdc;">Regular audits</li>
                        <li class=" p-3" style="border-bottom: 1px solid #dcdcdc;">Regular GHG monitoring & reporting
                        </li>
                        <li class=" p-3" style="border-bottom: 1px solid #dcdcdc;">Ergonomic assessments</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('customjs')
@endsection
