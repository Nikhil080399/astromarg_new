@extends('frontend.main')

@section('body')
    <style>
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: auto;
            background: url(AstromarG/bg.jpg) no-repeat 50% 50%;
            background-size: cover;
        }

        #loader {
            position: fixed;
            width: 100%;
            height: auto;
            z-index: 1;
            overflow: visible;
            background: #000 url('AstromarG/loader.mp4') no-repeat center center;
        }

        .card-img img {
            height: 100px;
            width: 100px;
        }

        .card p {
            color: white;
        }

        .card h5 {
            color: white;
        }

        .row {
            display: flex;
            widows: 50%;
            margin: auto;
            flex-wrap: wrap;
        }

        .card {
            height: 100%;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.1);
            border: solid #FF4A17 1px;
            box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
            flex: 1 1 200px;
            margin: 10px;
            display: none;
            position: relative;
        }

        .footer {
            position: absolute;
            bottom: 0%;
            left: 50%;
            transform: translate(-50%, -50%);
        }


        .pmd-card-media img {
            height: 15rem;
        }

        .card:nth-child(1) {
            display: block;
        }

        .card:nth-child(2) {
            display: block;
        }

        .card:nth-child(3) {
            display: block;
        }

        .card:nth-child(4) {
            display: block;
        }

        .btncontainer {
            display: flex;
            justify-content: center;
            align-content: center;
        }

        button {
            border: none;
            border-radius: 5px;
            width: 150px;
            padding: 6px;
            font-size: 20px;
            background-color: #FF4A17;
            color: white;
            cursor: pointer;
        }

        /* CSS */
        .button-21 {
            align-items: center;
            appearance: none;
            background-color: #FF4A17;
            background-image: linear-gradient(1deg, #FF4A17%);
            background-size: calc(100% + 20px) calc(100% + 20px);
            border-radius: 100px;
            border-width: 0;
            box-shadow: none;
            box-sizing: border-box;
            color: #FFFFFF;
            cursor: pointer;
            /* display: inline-flex; */
            font-family: CircularStd, sans-serif;
            font-size: 1rem;
            height: auto;
            justify-content: center;
            line-height: 1.5;
            padding: 6px 20px;
            position: relative;
            text-align: center;
            text-decoration: none;
            transition: background-color .2s, background-position .2s;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            vertical-align: top;
            white-space: nowrap;

        }

        .button-21:active,
        .button-21:focus {
            outline: none;
        }

        .button-21:hover {
            background-position: -20px -20px;
        }

        .button-21:focus:not(:active) {
            box-shadow: rgba(40, 170, 255, 0.25) 0 0 0 .125em;
        }

        h1 {
            position: relative;
            padding: 0;
            margin: 0;
            font-family: "Raleway", sans-serif;
            font-weight: 300;
            font-size: 40px;
            color: white;
            -webkit-transition: all 0.4s ease 0s;
            -o-transition: all 0.4s ease 0s;
            transition: all 0.4s ease 0s;
        }

        h1 span {
            display: block;
            font-size: 0.5em;
            line-height: 1.3;
        }

        h1 em {
            font-style: normal;
            font-weight: 600;
        }


        .twelve h1 {
            font-size: 26px;
            font-weight: 700;
            font-family: "Playfair Display";
            letter-spacing: 1px;
            text-transform: uppercase;
            width: 160px;
            text-align: center;
            margin: auto;
            white-space: nowrap;
            padding-bottom: 13px;
        }

        .twelve h1:before {
            background-color: #c50000;
            content: '';
            display: block;
            height: 3px;
            width: 75px;
            margin-bottom: 5px;
        }

        .twelve h1:after {
            background-color: #c50000;
            content: '';
            display: block;
            position: absolute;
            right: 0;
            bottom: 0;
            height: 3px;
            width: 75px;
            margin-bottom: 0.25em;
        }

        /* Bootstrap css */
        @import "https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css";

        /* Google Material Icons */
        @import "http://fonts.googleapis.com/icon?family=Material+Icons";

        /* Propeller CSS */
        @import "dist/css/propeller.min.css";

        /* Owl Carousel CSS */
        @import "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css";

        /* Propeller Carousel */
        @import "carousel/css/pmd-carousel.css";
        /* body {
                background-color: #031d2e;
                color: white;
            } */

        .for-img {
            width: 18rem;
            position: relative;
        }

        .for-subheading {
            color: #ff7010;
        }

        .as_btn {
            position: absolute;
            bottom: -14px;
            right: 25px;
            border-radius: 15px 0px;
            width: 8rem;
            height: 2.5rem;
            border: 0;
        }

        .for-content {
            width: 18rem;
        }

        .card2 {
            background-color: #031d2e;
            color: white;

        }
        .cardv {
        background-color: #07273c;
        border: 1px solid #07273c;
        box-shadow: 0 0.5rem 1rem rgba(7, 7, 8, 1.15);
    }
    </style>



    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
            <div class="row">
                {{-- nick --}}
                <div class="col-md-6 mt-5">

                    <div id="demo" class="carousel slide" data-ride="carousel" style="min-height:450px">

                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                        </ul>

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active text-center mt-5 px-4" style="padding:50px">
                                <h1 style="text-shadow: 0 0.5rem 1rem rgba(250, 250, 250, 0.5);">AstromarG Solution</h1>
                                <p class="text-white fs-4">AstromarG's astrology solutions likely involve providing
                                    guidance, insights, and advice based on the principles of astrology. Here are some
                                    of the common aspects that astrology services might cover.</p>
                            </div>
                            <div class="carousel-item text-center mt-5 px-4" style="padding:50px">
                                <h1 style="text-shadow: 0 0.5rem 1rem rgba(250, 250, 250, 0.5);">Vastu Shastra</h1>
                                <p class="text-white fs-4">Vastu Shastra is an ancient Indian architectural and spatial
                                    planning system that guides the design and layout of buildings, homes, and other
                                    structures to create harmonious and balanced living environments. Vastu Shastra is
                                    based on the belief that the design and arrangement of spaces can influence the
                                    well-being, prosperity, and happiness of the occupants.</p>
                            </div>
                            <div class="carousel-item text-center mt-5 px-4" style="padding:50px">
                                <h1 style="text-shadow: 0 0.5rem 1rem rgba(250, 250, 250, 0.5);">Numerological Solution
                                </h1>
                                <p class="text-white fs-4">AstromarG's Numerology solutions likely involve providing
                                    insights, guidance, and advice based on the principles of numerology. Here's what
                                    you might expect from their numerology consulting services.</p>
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <!-- <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                  </a>
                                  <a class="carousel-control-next" href="#demo" data-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                  </a> -->

                    </div>
                </div>


                <div class="col-md-6 col-sm-6 col-12 mt-5">
                    <img class="spinner" src="{{ asset('frontend/assets/image/horoscope.png') }}" width="70%"
                        class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    {{-- Blog Start --}}
    <div class="container-fluid justify-content-around text-center section-5-background pt-5 px-0 section"
        style="background-color: #07273c">
        <!-- section 5 -->
        <!-- headings -->
        <div class="row text-dark mt-5">
            <div class="twelve py-3">
                <h1>Blog's</h1>
            </div>

            <br />
        </div>


        <div class="container">
           
            


{{-- Blog Start --}}

    
    <div class="row p-5 justify-content-center">
        @foreach ($blog_latest as $item)
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
                                <p class="card-text fw-medium mb-0 text-light"><small
                                        class="">{{ $item->date }}</small>
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
{{-- Blog End --}}
        {{-- Blog End --}}

        {{-- slider start --}}

        <!--========================================= Rudraksha =========================================-->
        <div class="container-fluid" style="background-color: rgb(7,39,60)">
            <div class="twelve py-3">
                <h1>RUDRAKSHA</h1>
            </div>

            <div class="1st row px-3">

                <!--=========================== One Mukhi Rudraksha ==============================-->

                <div class="col-md-6 col-lg-3 col-sm-12 mb-4">
                    <div class="card text-center">
                        <div class="card-img">
                            <img src="{{ asset('frontend/gems/one mukhi.png') }}" alt="">
                        </div>
                        <div class="card-body mb-2">
                            <h5 class="fw-bold">One Mukhi Rudraksha</h5>
                            <hr class="m-0 mx-auto my-2 w-75" style=" border-top:solid #FF4A17 3px; opacity:0.6;">
                            <p>One Mukhi Rudraksha represents Lord Shiva himself and symbolizes the attainment of the
                                godhood,
                                supreme truth and super consciousness.</p>
                        </div>
                        <div class="footer">
                            <button class="button-21" role="button" data-bs-toggle="modal" data-bs-target="#myModal_1">Read
                                More</button>
                        </div>

                    </div>


                </div>
                <!-- The Modal -->
                <div class="modal fade" id="myModal_1">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">One Mukhi Rudraksha</h4>

                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <img class="img-fluid" src="{{ asset('frontend/AstromarG/Kiran Sir/1.jpg') }}"
                                    alt="">


                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer d-flex">
                                <a href="{{ asset('frontend/AstromarG/Kiran Sir/1.jpg') }}" Download="test_image">
                                    <button type="button" class="btn btn-danger" src=""
                                        download>Download</button>
                                </a>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                            </div>

                        </div>
                    </div>
                </div>

                <!--=========================== Two Mukhi Rudraksha ==============================-->

                <div class="col-md-6 col-lg-3 col-sm-12 mb-4">
                    <div class="card ">
                        <div class="card-img">
                            <img src="{{ asset('frontend/gems/two mukhi.png') }}" alt="">
                        </div>
                        <div class="card-body mb-2">
                            <h5 class="fw-bold">Two Mukhi Rudraksha</h5>
                            <hr class="m-0 mx-auto my-2 w-75" style=" border-top:solid #FF4A17 3px; opacity:0.6;">
                            <p>Two Mukhi Rudraksha harbors immense mystical powers and controls the bad effects of Moon.</p>
                        </div>
                        <div class="footer">
                            <button class="button-21" role="button" data-bs-toggle="modal"
                                data-bs-target="#myModal_2">Read
                                More</button>
                        </div>
                    </div>
                </div>
                <!-- The Modal -->
                <div class="modal fade" id="myModal_2">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Two Mukhi Rudraksha</h4>

                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <img class="img-fluid" src="{{ asset('frontend/AstromarG/Kiran Sir/2.jpg') }}"
                                    alt="">


                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <a href="{{ asset('frontend/AstromarG/Kiran Sir/2.jpg') }}" Download="test_image">
                                    <button type="button" class="btn btn-danger" src=""
                                        download>Download</button>
                                </a>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>

                <!--=========================== Three Mukhi Rudraksha ==============================-->

                <div class="col-md-6 col-lg-3 col-sm-12 mb-4">
                    <div class="card ">
                        <div class="card-img">
                            <img src="{{ asset('frontend/gems/three mukhi.png') }}" alt="">
                        </div>
                        <div class="card-body mb-2">
                            <h5 class="fw-bold">Three Mukhi Rudraksha</h5>
                            <hr class="m-0 mx-auto my-2 w-75" style=" border-top:solid #FF4A17 3px; opacity:0.6;">
                            <p>Three Mukhi Rudraksha beads are round or oval in shape with three lines or faces.</p>
                        </div>
                        <div class="footer">
                            <button class="button-21" role="button" data-bs-toggle="modal"
                                data-bs-target="#myModal_3">Read
                                More</button>
                        </div>
                    </div>
                </div>
                <!-- The Modal -->
                <div class="modal fade" id="myModal_3">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Three Mukhi Rudraksha</h4>

                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <img class="img-fluid" src="{{ asset('frontend/AstromarG/Kiran Sir/3.jpg') }}"
                                    alt="">


                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <a href="{{ asset('frontend/AstromarG/Kiran Sir/3.jpg') }}" Download="test_image">
                                    <button type="button" class="btn btn-danger" src=""
                                        download>Download</button>
                                </a>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>

                <!--=========================== Four Mukhi Rudraksha ==============================-->

                <div class="col-md-6 col-lg-3 col-sm-12 mb-4">
                    <div class="card ">
                        <div class="card-img">
                            <img src="{{ asset('frontend/gems/four mukhi.png') }}" alt="">
                        </div>
                        <div class="card-body mb-2">
                            <h5 class="fw-bold">Four Mukhi Rudraksha</h5>
                            <hr class="m-0 mx-auto my-2 w-75" style=" border-top:solid #FF4A17 3px; opacity:0.6;">

                            <p>Four Mukhi Rudraksha symbolizes Lord Brahma and is also called Brahma Rupam or Chaturanan.
                            </p>
                        </div>
                        <div class="footer">
                            <button class="button-21" role="button" data-bs-toggle="modal"
                                data-bs-target="#myModal_4">Read
                                More</button>
                        </div>


                    </div>
                </div>
                <!-- The Modal -->
                <div class="modal fade" id="myModal_4">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Four Mukhi Rudraksha</h4>

                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <img class="img-fluid" src="{{ asset('frontend/AstromarG/Kiran Sir/4.jpg') }}"
                                    alt="">


                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <a href="{{ asset('frontend/AstromarG/Kiran Sir/4.jpg') }}" Download="test_image">
                                    <button type="button" class="btn btn-danger" src=""
                                        download>Download</button>
                                </a>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row px-3" id="2nd_row" style="display:none;">
                <!--=========================== Five Mukhi Rudraksha ==============================-->

                <div class="col-md-6 col-lg-3 col-sm-12 mb-4">
                    <div class="card ">
                        <div class="card-img">
                            <img src="{{ asset('frontend/gems/five mukhi.png') }}" alt="">
                        </div>
                        <div class="card-body mb-2">
                            <h5 class="fw-bold">Five Mukhi Rudraksha</h5>
                            <hr class="m-0 mx-auto my-2 w-75" style=" border-top:solid #FF4A17 3px; opacity:0.6;">

                            <p>Five Mukhi Rudraksha symbolizes Pancheswar and also represents another form of Shiva-
                                KaalAgni.
                            </p>
                        </div>
                        <div class="footer">
                            <button class="button-21" role="button" data-bs-toggle="modal"
                                data-bs-target="#myModal_5">Read
                                More</button>
                        </div>

                    </div>
                </div>
                <!-- The Modal -->
                <div class="modal fade" id="myModal_5">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Five Mukhi Rudraksha</h4>

                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <img class="img-fluid" src="{{ asset('frontend/AstromarG/Kiran Sir/5.jpg') }}"
                                    alt="">


                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <a href="{{ asset('frontend/AstromarG/Kiran Sir/5.jpg') }}" Download="test_image">
                                    <button type="button" class="btn btn-danger" src=""
                                        download>Download</button>
                                </a>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>


                <!--=========================== Six Mukhi Rudraksha ==============================-->

                <div class="col-md-6 col-lg-3 col-sm-12 mb-4">
                    <div class="card ">
                        <div class="card-img">
                            <img src="{{ asset('frontend/gems/six mukhi.png') }}" alt="">
                        </div>
                        <div class="card-body mb-2">
                            <h5 class="fw-bold">Six Mukhi Rudraksha</h5>
                            <hr class="m-0 mx-auto my-2 w-75" style=" border-top:solid #FF4A17 3px; opacity:0.6;">

                            <p>Six Mukhi Rudraksha symbolizes Lord Shiva's second son Kumar Kartikeya and impacts
                                learning,wisdom, knowledge and an increase in an individual's will power.</p>
                        </div>
                        <div class="footer">
                            <button class="button-21" role="button" data-bs-toggle="modal"
                                data-bs-target="#myModal_6">Read
                                More</button>
                        </div>


                    </div>
                </div>
                <!-- The Modal -->
                <div class="modal fade" id="myModal_6">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Six Mukhi Rudraksha</h4>

                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <img class="img-fluid" src="{{ asset('frontend/AstromarG/Kiran Sir/6.jpg') }}"
                                    alt="">


                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <a href="{{ asset('frontend/AstromarG/Kiran Sir/6.jpg') }}" Download="test_image">
                                    <button type="button" class="btn btn-danger" src=""
                                        download>Download</button>
                                </a>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>


                <!--=========================== Seven Mukhi Rudraksha ==============================-->

                <div class="col-md-6 col-lg-3 col-sm-12 mb-4">
                    <div class="card ">
                        <div class="card-img">
                            <img src="{{ asset('frontend/gems/seven mukhi.png') }}" alt="">
                        </div>
                        <div class="card-body mb-2">
                            <h5 class="fw-bold">Seven Mukhi Rudraksha</h5>
                            <hr class="m-0 mx-auto my-2 w-75" style=" border-top:solid #FF4A17 3px; opacity:0.6;">

                            <p>Seven Mukhi Rudraksha represents the Godess Mahalaxmi, ruled by the planet Saturn and has a
                                life
                                of a thousands year if well taken care of.</p>
                        </div>
                        <div class="footer">
                            <button class="button-21" role="button" data-bs-toggle="modal"
                                data-bs-target="#myModal_7">Read
                                More</button>
                        </div>


                    </div>
                </div>
                <!-- The Modal -->
                <div class="modal fade" id="myModal_7">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Seven Mukhi Rudraksha</h4>

                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <img class="img-fluid" src="{{ asset('frontend/AstromarG/Kiran Sir/7.jpg') }}"
                                    alt="">


                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <a href="{{ asset('frontend/AstromarG/Kiran Sir/7.jpg') }}" Download="test_image">
                                    <button type="button" class="btn btn-danger" src=""
                                        download>Download</button>
                                </a>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>
                <!--=========================== Eight Mukhi Rudraksha ==============================-->

                <div class="col-md-6 col-lg-3 col-sm-12 mb-4">
                    <div class="card ">
                        <div class="card-img">
                            <img src="{{ asset('frontend/gems/eight mukhi.png') }}" alt="">
                        </div>
                        <div class="card-body mb-2">
                            <h5 class="fw-bold">Eight Mukhi Rudraksha</h5>
                            <hr class="m-0 mx-auto my-2 w-75" style=" border-top:solid #FF4A17 3px; opacity:0.6;">

                            <p>Eight Mukhi Rudraksha is the reflection of Lord Ganesha, Lord Shiva's second son who is
                                worshipped before all the other gods its wearer becomes unaffected by all miseries- physical
                                or
                                mental.</p>
                        </div>
                        <div class="footer">
                            <button class="button-21" role="button" data-bs-toggle="modal"
                                data-bs-target="#myModal_8">Read
                                More</button>
                        </div>

                    </div>
                </div>
                <!-- The Modal -->
                <div class="modal fade" id="myModal_8">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Eight Mukhi Rudraksha</h4>

                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <img class="img-fluid" src="{{ asset('frontend/AstromarG/Kiran Sir/8.jpg') }}"
                                    alt="">


                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <a href="{{ asset('frontend/AstromarG/Kiran Sir/8.jpg') }}" Download="test_image">
                                    <button type="button" class="btn btn-danger" src=""
                                        download>Download</button>
                                </a>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>

                <!--=========================== Nine Mukhi Rudraksha ==============================-->

                <div class="col-md-6 col-lg-3 col-sm-12 mb-4">
                    <div class="card ">
                        <div class="card-img">
                            <img src="{{ asset('frontend/gems/nine mukhi.png') }}" alt="">
                        </div>
                        <div class="card-body mb-2">
                            <h5 class="fw-bold">Nine Mukhi Rudraksha</h5>
                            <hr class="m-0 mx-auto my-2 w-75" style=" border-top:solid #FF4A17 3px; opacity:0.6;">
                            <p>Nine Mukhi Rudraksha is the form of Godess Durga (Shakti). It contains the power of Nine
                                Deities
                                or NavDurga.</p>
                        </div>
                        <div class="footer">
                            <button class="button-21" role="button" data-bs-toggle="modal"
                                data-bs-target="#myModal_9">Read
                                More</button>
                        </div>

                    </div>
                </div>
                <!-- The Modal -->
                <div class="modal fade" id="myModal_9">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Nine Mukhi Rudraksha</h4>

                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <img class="img-fluid" src="{{ asset('frontend/AstromarG/Kiran Sir/9.jpg') }}"
                                    alt="">


                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <a href="{{ asset('frontend/AstromarG/Kiran Sir/9.jpg') }}" Download="test_image">
                                    <button type="button" class="btn btn-danger" src=""
                                        download>Download</button>
                                </a>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>

                <!--=========================== Ten Mukhi Rudraksha ==============================-->
                <div class=" col-md-6 col-lg-3 col-sm-12 mb-4">
                    <div class="card ">
                        <div class="card-img">
                            <img src="{{ asset('frontend/gems/ten mukhi.png') }}" alt="">
                        </div>
                        <div class="card-body mb-2">
                            <h5 class="fw-bold">Ten Mukhi Rudraksha</h5>
                            <hr class="m-0 mx-auto my-2 w-75" style=" border-top:solid #FF4A17 3px; opacity:0.6;">

                            <p>Ten Mukhi Rudraksha is a symbol of Lord Vishnu who, according to Indian mythology, is the
                                Preserver of this Universe.</p>
                        </div>
                        <div class="footer">
                            <button class="button-21" role="button" data-bs-toggle="modal"
                                data-bs-target="#myModal_10">Read
                                More</button>
                        </div>

                    </div>
                </div>
                <!-- The Modal -->
                <div class="modal fade" id="myModal_10">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Ten Mukhi Rudraksha</h4>

                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <img class="img-fluid" src="{{ asset('frontend/AstromarG/Kiran Sir/10.jpg') }}"
                                    alt="">


                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <a href="{{ asset('frontend/AstromarG/Kiran Sir/10.jpg') }}" Download="test_image">
                                    <button type="button" class="btn btn-danger" src=""
                                        download>Download</button>
                                </a>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>

                <!--=========================== Eleven Mukhi Rudraksha ==============================-->
                <div class=" col-md-6 col-lg-3 col-sm-12 mb-4">
                    <div class="card ">
                        <div class="card-img">
                            <img src="{{ asset('frontend/gems/eleven mukhi.png') }}" alt="">
                        </div>
                        <div class="card-body mb-2">
                            <h5 class="fw-bold">Eleven Mukhi Rudraksha</h5>
                            <hr class="m-0 mx-auto my-2 w-75" style=" border-top:solid #FF4A17 3px; opacity:0.6;">

                            <p>Vedic Scriptures state that Eleven Mukhi Rudraksha is the symbol of Ekadash Rudra(Eleven form
                                of
                                Lord Shiva).</p>
                        </div>
                        <div class="footer">
                            <button class="button-21" role="button" data-bs-toggle="modal"
                                data-bs-target="#myModal_11">Read
                                More</button>
                        </div>
                    </div>
                </div>
                <!-- The Modal -->
                <div class="modal fade" id="myModal_11">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Eleven Mukhi Rudraksha</h4>

                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <img class="img-fluid" src="{{ asset('frontend/AstromarG/Kiran Sir/11.jpg') }}"
                                    alt="">


                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <a href="{{ asset('frontend/AstromarG/Kiran Sir/11.jpg') }}" Download="test_image">
                                    <button type="button" class="btn btn-danger" src=""
                                        download>Download</button>
                                </a>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>


                <!--=========================== Twelve Mukhi Rudraksha ==============================-->

                <div class=" col-md-6 col-lg-3 col-sm-12 mb-4">
                    <div class="card ">
                        <div class="card-img">
                            <img src="{{ asset('frontend/gems/twelve mukhi.png') }}" alt="">
                        </div>
                        <div class="card-body mb-2">
                            <h5 class="fw-bold">Twelve Mukhi Rudraksha</h5>
                            <hr class="m-0 mx-auto my-2 w-75" style=" border-top:solid #FF4A17 3px; opacity:0.6;">

                            <p>Twelve Mukhi Rudraksha is the symbol of twelve virtues of Lord Sun. It is an embodiment of
                                twelve
                                facets of Lord Surya.</p>
                        </div>
                        <div class="footer">
                            <button class="button-21" role="button" data-bs-toggle="modal"
                                data-bs-target="#myModal_12">Read
                                More</button>
                        </div>
                    </div>
                </div>
                <!-- The Modal Body -->
                <div class="modal fade" id="myModal_12">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Twelve Mukhi Rudraksha</h4>

                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <img class="img-fluid" src="{{ asset('frontend/AstromarG/Kiran Sir/12.jpg') }}"
                                    alt="">


                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <a href="{{ asset('frontend/AstromarG/Kiran Sir/12.jpg') }}" Download="test_image">
                                    <button type="button" class="btn btn-danger" src=""
                                        download>Download</button>
                                </a>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>

                <!--=========================== Thirteen Mukhi Rudraksha ==============================-->

                <div class="col-md-6 col-lg-3 col-sm-12 mb-4">
                    <div class="card ">
                        <div class="card-img">
                            <img src="{{ asset('frontend/gems/thirteen mukhi.png') }}" alt="">
                        </div>
                        <div class="card-body mb-2">
                            <h5 class="fw-bold">Thirteen Mukhi Rudraksha</h5>
                            <hr class="m-0 mx-auto my-2 w-75" style=" border-top:solid #FF4A17 3px; opacity:0.6;">

                            <p>Thirteen Mukhi Rudraksha represents Lord Indra (Lord of all gods). This Rudraksha fulfills
                                all
                                earthly desires and helps in attainment of eight Siddhis.</p>
                        </div>
                        <div class="footer">
                            <button class="button-21" role="button" data-bs-toggle="modal"
                                data-bs-target="#myModal_13">Read
                                More</button>
                        </div>
                    </div>
                </div>
                <!-- The Modal Body -->
                <div class="modal fade" id="myModal_13">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Thirteen Mukhi Rudraksha</h4>

                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <img class="img-fluid" src="{{ asset('frontend/AstromarG/Kiran Sir/13.jpg') }}"
                                    alt="">


                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <a href="{{ asset('frontend/AstromarG/Kiran Sir/13.jpg') }}" Download="test_image">
                                    <button type="button" class="btn btn-danger" src=""
                                        download>Download</button>
                                </a>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>

                <!--=========================== Fourteen Mukhi Rudraksha ==============================-->
                <div class="col-md-6 col-lg-3 col-sm-12 mb-4">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('frontend/gems/fourteen mukhi.png') }}" alt="">
                        </div>
                        <div class="card-body mb-2">
                            <h5 class="fw-bold">Fourteen Mukhi Rudraksha</h5>
                            <hr class="m-0 mx-auto my-2 w-75" style=" border-top:solid #FF4A17 3px; opacity:0.6;">

                            <p>Fourteen Mukhi Rudraksha is called the "Deva Mani"(precious divine thing) and is also one of
                                the
                                rarest Rudraksha to be found.</p>
                        </div>
                        <div class="footer">
                            <button class="button-21" role="button" data-bs-toggle="modal"
                                data-bs-target="#myModal_14">Read
                                More</button>
                        </div>

                    </div>
                </div>
                <!-- The Modal Body -->
                <div class="modal fade" id="myModal_14">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Fourteen Mukhi Rudraksha</h4>

                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <img class="img-fluid" src="{{ asset('frontend/AstromarG/Kiran Sir/14.jpg') }}"
                                    alt="">


                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <a href="{{ asset('frontend/AstromarG/Kiran Sir/14.jpg') }}" Download="test_image">
                                    <button type="button" class="btn btn-danger" src=""
                                        download>Download</button>
                                </a>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>
                <!--=========================== Fifteen Mukhi Rudraksha ==============================-->
                <div class="col-md-6 col-lg-3 col-sm-12 mb-4">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('frontend/gems/fifteen_mukhi.png') }}" alt="">
                        </div>
                        <div class="card-body mb-2">
                            <h5 class="fw-bold">Fifteen Mukhi Rudraksha</h5>
                            <hr class="m-0 mx-auto my-2 w-75" style="border-top:solid #FF4A17 3px; opacity:0.6;">

                            <p>Fifteen Mukhi Rudraksha is a rare Rudraksha bead and it represents Lord Pashupatinath.</p>
                        </div>
                        <div class="footer">
                            <button class="button-21" role="button" data-bs-toggle="modal"
                                data-bs-target="#myModal_15">Read
                                More</button>
                        </div>


                    </div>
                </div>
                <!-- The Modal Body -->
                <div class="modal fade" id="myModal_15">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Fourteen Mukhi Rudraksha</h4>

                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <img class="img-fluid" src="{{ asset('frontend/AstromarG/Kiran Sir/15.jpg') }}"
                                    alt="">


                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <a href="{{ asset('frontend/AstromarG/Kiran Sir/15.jpg') }}" Download="test_image">
                                    <button type="button" class="btn btn-danger" src=""
                                        download>Download</button>
                                </a>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>

                <!--=========================== Sixteen Mukhi Rudraksha ==============================-->
                <div class="col-md-6 col-lg-3 col-sm-12 mb-4">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('frontend/gems/Sixteen_mukhi.png') }}" alt="">
                        </div>
                        <div class="card-body mb-2">
                            <h5 class="fw-bold">Sixteen Mukhi Rudraksha</h5>
                            <hr class="m-0 mx-auto my-2 w-75" style=" border-top:solid #FF4A17 3px; opacity:0.6;">

                            <p>Sixteen Mukhi Rudraksha is the combined form of Vishnu and Shiva and thus it represents
                                victory.
                            </p>
                        </div>
                        <div class="footer">
                            <button class="button-21" role="button" data-bs-toggle="modal"
                                data-bs-target="#myModal_16">Read
                                More</button>
                        </div>
                    </div>
                </div>
                <!-- The Modal Body -->
                <div class="modal fade" id="myModal_16">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Sixteen Mukhi Rudraksha</h4>

                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <img class="img-fluid" src="{{ asset('frontend/AstromarG/Kiran Sir/16.jpg') }}"
                                    alt="">


                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <a href="{{ asset('frontend/AstromarG/Kiran Sir/16.jpg') }}" Download="test_image">
                                    <button type="button" class="btn btn-danger" src=""
                                        download>Download</button>
                                </a>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>
                <!--=========================== Seventeen Mukhi Rudraksha ==============================-->
                <div class="col-md-6 col-lg-3 col-sm-12 mb-4">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('frontend/gems/Seventeen_mukhi.png') }}" alt="">
                        </div>
                        <div class="card-body mb-2">
                            <h5 class="fw-bold">Seventeen Mukhi Rudraksha</h5>
                            <hr class="m-0 mx-auto my-2 w-75" style=" border-top:solid #FF4A17 3px; opacity:0.6;">

                            <p>Seventeen Mukhi Rudraksha represents Lord Vishvakarma, the builder of this materialistic
                                world.
                            </p>
                        </div>
                        <div class="footer">
                            <button class="button-21" role="button" data-bs-toggle="modal"
                                data-bs-target="#myModal_17">Read
                                More</button>
                        </div>
                    </div>
                </div>
                <!-- The Modal Body -->
                <div class="modal fade" id="myModal_17">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Seventeen Mukhi Rudraksha</h4>

                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <img class="img-fluid" src="{{ asset('frontend/AstromarG/Kiran Sir/17.jpg') }}"
                                    alt="">


                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <a href="{{ asset('frontend/AstromarG/Kiran Sir/17.jpg') }}" Download="test_image">
                                    <button type="button" class="btn btn-danger" src=""
                                        download>Download</button>
                                </a>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>

                <!--=========================== Eighteen Mukhi Rudraksha ==============================-->
                <div class="col-md-6 col-lg-3 col-sm-12 mb-4">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('frontend/gems/eighteen_mukhi.png') }}" alt="">
                        </div>
                        <div class="card-body mb-2">
                            <h5 class="fw-bold">Eighteen Mukhi Rudraksha</h5>
                            <hr class="m-0 mx-auto my-2 w-75" style=" border-top:solid #FF4A17 3px; opacity:0.6;">

                            <p>Eighteen Mukhi Rudraksha represents Mother Earth, who is the divine wife of Lord Vishnu.</p>
                        </div>
                        <div class="footer">
                            <button class="button-21" role="button" data-bs-toggle="modal"
                                data-bs-target="#myModal_18">Read
                                More</button>
                        </div>
                    </div>
                </div>
                <!-- The Modal Body -->
                <div class="modal fade" id="myModal_18">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Eighteen Mukhi Rudraksha</h4>

                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <img class="img-fluid" src="{{ asset('frontend/AstromarG/Kiran Sir/18.jpg') }}"
                                    alt="">


                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <a href="{{ asset('frontend/AstromarG/Kiran Sir/18.jpg') }}" Download="test_image">
                                    <button type="button" class="btn btn-danger" src=""
                                        download>Download</button>
                                </a>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>

                <!--=========================== Ganesh Rudraksha ==============================-->
                <div class="col-md-6 col-lg-3 col-sm-12 mb-4">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('frontend/gems/Ganesh-removebg.png') }}" alt="">
                        </div>
                        <div class="card-body mb-2">
                            <h5 class="fw-bold">Ganesh Rudraksha</h5>
                            <hr class="m-0 mx-auto my-2 w-75" style=" border-top:solid #FF4A17 3px; opacity:0.6;">

                            <p>Ganesh Rudraksha has a natural trunk like protrusian similiar to the trunk of Lord Ganesh ,
                                the
                                son of Lord Shiva</p>
                        </div>
                        <div class="footer">
                            <button class="button-21" role="button" data-bs-toggle="modal"
                                data-bs-target="#myModal_19">Read
                                More</button>
                        </div>
                    </div>
                </div>
                <!-- The Modal Body -->
                <div class="modal fade" id="myModal_19">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Ganesh Rudraksha</h4>

                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <img class="img-fluid" src="{{ asset('frontend/AstromarG/Kiran Sir/Ganesh.jpg') }}"
                                    alt="">


                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <a href="{{ asset('frontend/AstromarG/Kiran Sir/Ganesh.jpg') }}" Download="test_image">
                                    <button type="button" class="btn btn-danger" src=""
                                        download>Download</button>
                                </a>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>
                <!--=========================== Garbhgauri Rudraksha ==============================-->
                <div class="col-md-6 col-lg-3 col-sm-12 mb-4">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('frontend/gems/Garbh_Gauri.png') }}" alt="">
                        </div>
                        <div class="card-body mb-2">
                            <h5 class="fw-bold">Garbh Gauri Rudraksha</h5>
                            <hr class="m-0 mx-auto my-2 w-75" style=" border-top:solid #FF4A17 3px; opacity:0.6;">

                            <p>Garbhgauri Rudraksha is the smaller form of Gaurishankar both the conjoined beads are of
                                similar
                                size but in Garbhgauri rudraksha.</p>
                        </div>
                        <div class="footer">
                            <button class="button-21" role="button" data-bs-toggle="modal"
                                data-bs-target="#myModal_20">Read
                                More</button>
                        </div>
                    </div>
                </div>
                <!-- The Modal Body -->
                <div class="modal fade" id="myModal_20">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Fourteen Mukhi Rudraksha</h4>

                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <img class="img-fluid" src="{{ asset('frontend/AstromarG/Kiran Sir/GG.jpg') }}"
                                    alt="">


                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <a href="{{ asset('frontend/AstromarG/Kiran Sir/GG.jpg') }}" Download="test_image">
                                    <button type="button" class="btn btn-danger" src=""
                                        download>Download</button>
                                </a>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>
                <!--=========================== Gauri Shankar Rudraksha ==============================-->
                <div class="col-md-6 col-lg-3 col-sm-12 mb-4">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('frontend/gems/gauri_shankhar.png') }}" alt="">
                        </div>
                        <div class="card-body mb-2">
                            <h5 class="fw-bold">Gauri Shankar Rudraksha</h5>
                            <hr class="m-0 mx-auto my-2 w-75" style=" border-top:solid #FF4A17 3px; opacity:0.6;">

                            <p>Gaurishankar Rudraksha is a conjoined form of Lord Shiva and Mother Parvati.</p>
                        </div>
                        <div class="footer">
                            <button class="button-21" role="button" data-bs-toggle="modal"
                                data-bs-target="#myModal_21">Read
                                More</button>
                        </div>
                    </div>
                </div>
                <!-- The Modal Body -->
                <div class="modal fade" id="myModal_21">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Gauri Shankar Rudraksha</h4>

                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <img class="img-fluid" src="{{ asset('frontend/AstromarG/Kiran Sir/GS.jpg') }}"
                                    alt="">


                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <a href="{{ asset('frontend/AstromarG/Kiran Sir/GS.jpg') }}" Download="test_image">
                                    <button type="button" class="btn btn-danger" src=""
                                        download>Download</button>
                                </a>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="text-center" id="div_more">
                <button class="btn btn-outline-warning" id="view_more" onclick="more();">View More <span><i
                            class="fa-solid fa-caret-down"></i></span></button>
            </div>
            <div class="text-center" id="div_less" style="display:none;">
                <button class="btn btn-outline-warning" id="view_less" onclick="less();">View Less <span><i
                            class="fa-solid fa-caret-up"></i></span> </button>
            </div>
        </div>

        <!--========================================= Gemstones =========================================-->
        <div class="container-fluid" style="background-color: rgb(7,39,60)">

            <div class="twelve pt-5">
                <h1>Gemstones</h1>
            </div>

            <div class="row px-3">

                <!--=========================== Amethyst ==============================-->

                <div class="col-md-6 col-lg-3 col-sm-12 mb-4">
                    <div class="card ">
                        <div class="card-img">
                            <img src="{{ asset('frontend/gems/Ametyst.png') }}" alt="">
                        </div>
                        <div class="card-body mb-2">
                            <h5 class="fw-bold">Amethyst</h5>
                            <hr class="m-0 mx-auto my-2 w-75" style=" border-top:solid #FF4A17 3px; opacity:0.6;">
                            <p>Amethyst represents Saturn(Shani). Amethyst are found in any shade of purple to violet.</p>
                        </div>
                        <div class="footer">
                            <button class="button-21" role="button" data-bs-toggle="modal" data-bs-target="#gem_1">Read
                                More</button>
                        </div>

                    </div>


                </div>
                <!-- The Modal -->
                <div class="modal fade" id="gem_1">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Amethyst</h4>

                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <img class="img-fluid" src="{{ asset('frontend/AstromarG/Kiran Sir/Amethyst.jpg') }}"
                                    alt="">


                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <a href="{{ asset('frontend/AstromarG/Kiran Sir/Amethyst.jpg') }}" Download="test_image">
                                    <button type="button" class="btn btn-danger" src=""
                                        download>Download</button>
                                </a>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>

                <!--=========================== Blue Sapphire ==============================-->

                <div class="col-md-6 col-lg-3 col-sm-12 mb-4">
                    <div class="card ">
                        <div class="card-img">
                            <img src="{{ asset('frontend/gems/blue_sapphire.png') }}" alt="">
                        </div>
                        <div class="card-body mb-2">
                            <h5 class="fw-bold">Blue Sapphire</h5>
                            <hr class="m-0 mx-auto my-2 w-75" style=" border-top:solid #FF4A17 3px; opacity:0.6;">

                            <p>Blue Sapphire represents Saturn(Shani). Blue Sapphires are found in any shade of blue, from
                                light
                                blue to dark blue.</p>
                        </div>
                        <div class="footer">
                            <button class="button-21" role="button" data-bs-toggle="modal" data-bs-target="#gem_2">Read
                                More</button>
                        </div>

                    </div>
                </div>
                <!-- The Modal -->
                <div class="modal fade" id="gem_2">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Blue Sapphire</h4>

                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <img class="img-fluid"
                                    src="{{ asset('frontend/AstromarG/Kiran Sir/Blue Sapphire.jpg') }}" alt="">


                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <a href="{{ asset('frontend/AstromarG/Kiran Sir/Blue Sapphire.jpg') }}"
                                    Download="test_image">
                                    <button type="button" class="btn btn-danger" src=""
                                        download>Download</button>
                                </a>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>

                <!--=========================== Cat Eye ==============================-->

                <div class="col-md-6 col-lg-3 col-sm-12 mb-4">
                    <div class="card ">
                        <div class="card-img">
                            <img src="{{ asset('frontend/gems/Cat_Eye.png') }}" alt="">
                        </div>
                        <div class="card-body mb-2">
                            <h5 class="fw-bold">Cat's Eye</h5>
                            <hr class="m-0 mx-auto my-2 w-75" style=" border-top:solid #FF4A17 3px; opacity:0.6;">

                            <p>Cat's eye represents Ketu. Cat's eye is found in any shade of light green, from light yellow
                                to
                                light
                                brown and the only thing common to all shades.</p>
                        </div>
                        <div class="footer">
                            <button class="button-21" role="button" data-bs-toggle="modal" data-bs-target="#gem_3">Read
                                More</button>
                        </div>
                    </div>
                </div>
                <!-- The Modal -->
                <div class="modal fade" id="gem_3">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Cat's Eye</h4>

                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <img class="img-fluid" src="{{ asset('frontend/AstromarG/Kiran Sir/Cats Eye.jpg') }}"
                                    alt="">


                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <a href="{{ asset('frontend/AstromarG/Kiran Sir/Cats Eye.jpg') }}" Download="test_image">
                                    <button type="button" class="btn btn-danger" src=""
                                        download>Download</button>
                                </a>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>

                <!--=========================== Citrine ==============================-->

                <div class="col-md-6 col-lg-3 col-sm-12 mb-4">
                    <div class="card ">
                        <div class="card-img">
                            <img src="{{ asset('frontend/gems/citrine_stone.png') }}" alt="">
                        </div>
                        <div class="card-body mb-2">
                            <h5 class="fw-bold">Citrine</h5>
                            <hr class="m-0 mx-auto my-2 w-75" style=" border-top:solid #FF4A17 3px; opacity:0.6;">

                            <p>Citrine represents jupiter(Guru) are found in any shade of yellow , from light yellow to dark
                                golden
                                yellow.</p>
                        </div>
                        <div class="footer">
                            <button class="button-21" role="button" data-bs-toggle="modal" data-bs-target="#gem_4">Read
                                More</button>
                        </div>
                    </div>
                </div>
                <!-- The Modal -->
                <div class="modal fade" id="gem_4">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Citrine</h4>

                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <img class="img-fluid" src="{{ asset('frontend/AstromarG/Kiran Sir/Citrine.jpg') }}"
                                    alt="">


                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <a href="{{ asset('frontend/AstromarG/Kiran Sir/Citrine.jpg') }}" Download="test_image">
                                    <button type="button" class="btn btn-danger" src=""
                                        download>Download</button>
                                </a>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row px-3" id="row2" style="display:none;">

                <!--=========================== Coral ==============================-->

                <div class="col-md-6 col-lg-3 col-sm-12 mb-4">
                    <div class="card ">
                        <div class="card-img">
                            <img src="{{ asset('frontend/gems/coral.png') }}" alt="">
                        </div>
                        <div class="card-body mb-2">
                            <h5 class="fw-bold">Coral</h5>
                            <hr class="m-0 mx-auto my-2 w-75" style=" border-top:solid #FF4A17 3px; opacity:0.6;">

                            <p>Coral represents Mars(Mangal). It is found throughout the Mediterranean Sea and Red Sea
                                areas,
                                Spain,
                                Morroco, Malaysia and Japan.
                            </p>
                        </div>
                        <div class="footer">
                            <button class="button-21" role="button" data-bs-toggle="modal" data-bs-target="#gem_5">Read
                                More</button>
                        </div>
                    </div>
                </div>
                <!-- The Modal -->
                <div class="modal fade" id="gem_5">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Coral</h4>

                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <img class="img-fluid" src="{{ asset('frontend/AstromarG/Kiran Sir/Coral.jpg') }}"
                                    alt="">


                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <a href="{{ asset('frontend/AstromarG/Kiran Sir/Coral.jpg') }}" Download="test_image">
                                    <button type="button" class="btn btn-danger" src=""
                                        download>Download</button>
                                </a>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>


                <!--=========================== Diamond ==============================-->

                <div class="col-md-6 col-lg-3 col-sm-12 mb-4">
                    <div class="card ">
                        <div class="card-img">
                            <img src="{{ asset('frontend/gems/diamond_stone.png') }}" alt="">
                        </div>
                        <div class="card-body mb-2">
                            <h5 class="fw-bold">Diamond</h5>
                            <hr class="m-0 mx-auto my-2 w-75" style=" border-top:solid #FF4A17 3px; opacity:0.6;">

                            <p>Diamond represents Venus(Shukra). Diamonds are chemically solid carbon. Diamond color is
                                white as
                                well as of other colors.</p>
                        </div>
                        <div class="footer">
                            <button class="button-21" role="button" data-bs-toggle="modal" data-bs-target="#gem_6">Read
                                More</button>
                        </div>
                    </div>

                </div>

                <!-- The Modal -->
                <div class="modal fade" id="gem_6">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Diamond</h4>

                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <img class="img-fluid" src="{{ asset('frontend/AstromarG/Kiran Sir/Diamond.jpg') }}"
                                    alt="">


                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <a href="{{ asset('frontend/AstromarG/Kiran Sir/Diamond.jpg') }}" Download="test_image">
                                    <button type="button" class="btn btn-danger" src=""
                                        download>Download</button>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>


                <!--=========================== Emrald ==============================-->

                <div class="col-md-6 col-lg-3 col-sm-12 mb-4">
                    <div class="card ">
                        <div class="card-img">
                            <img src="{{ asset('frontend/gems/emrald.png') }}" alt="">
                        </div>
                        <div class="card-body mb-2">
                            <h5 class="fw-bold">Emerald</h5>
                            <hr class="m-0 mx-auto my-2 w-75" style=" border-top:solid #FF4A17 3px; opacity:0.6;">
                            <p>Emrald represents the planet Mercury(Buddha). Buddha mercury is the "prince" in jyotish and
                                is
                                influenced by Surya and Chandra.</p>
                        </div>
                        <div class="footer">
                            <button class="button-21" role="button" data-bs-toggle="modal" data-bs-target="#gem_7">Read
                                More</button>
                        </div>
                    </div>
                </div>
                <!-- The Modal -->
                <div class="modal fade" id="gem_7">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Emerald</h4>

                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <img class="img-fluid" src="{{ asset('frontend/AstromarG/Kiran Sir/Emerald.jpg') }}"
                                    alt="">


                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <a href="{{ asset('frontend/AstromarG/Kiran Sir/Emerald.jpg') }}"
                                    Download="test_image">
                                    <button type="button" class="btn btn-danger" src=""
                                        download>Download</button>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <!--=========================== Hessonite ==============================-->

                <div class="col-md-6 col-lg-3 col-sm-12 mb-4">
                    <div class="card ">
                        <div class="card-img">
                            <img src="{{ asset('frontend/gems/hessonite_stone.png') }}" alt="">
                        </div>
                        <div class="card-body mb-2">
                            <h5 class="fw-bold">Hessonite</h5>
                            <hr class="m-0 mx-auto my-2 w-75" style=" border-top:solid #FF4A17 3px; opacity:0.6;">

                            <p>Hessonite(Gomed) represents Rahu. Hessonites are found in any shade from light brown to dark
                                brown
                                like the colour of cow's urine or shade of honey tinged with blackish colour.</p>
                        </div>
                        <div class="footer">
                            <button class="button-21" role="button" data-bs-toggle="modal"
                                data-bs-target="#myModal_8">Read
                                More</button>
                        </div>
                    </div>
                </div>
                <!-- The Modal -->
                <div class="modal fade" id="myModal_8">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Hessonite</h4>

                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <img class="img-fluid" src="{{ asset('frontend/AstromarG/Kiran Sir/Hessonite.jpg') }}"
                                    alt="">


                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <a href="{{ asset('frontend/AstromarG/Kiran Sir/Hessonite.jpg') }}"
                                    Download="test_image">
                                    <button type="button" class="btn btn-danger" src=""
                                        download>Download</button>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>


                <!--=========================== Opal ==============================-->

                <div class="col-md-6 col-lg-3 col-sm-12 mb-4">
                    <div class="card ">
                        <div class="card-img">
                            <img src="{{ asset('frontend/gems/opal.png') }}" alt="">
                        </div>
                        <div class="card-body mb-2">
                            <h5 class="fw-bold">Opal</h5>
                            <hr class="m-0 mx-auto my-2 w-75" style=" border-top:solid #FF4A17 3px; opacity:0.6;">
                            <p>Opal is derived from the sanskrit name "upala". Opal represents Venus(Shukra).</p>
                        </div>
                        <div class="footer">
                            <button class="button-21" role="button" data-bs-toggle="modal"
                                data-bs-target="#gem_9">Read
                                More</button>
                        </div>
                    </div>
                </div>
                <!-- The Modal -->
                <div class="modal fade" id="gem_9">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Opal</h4>

                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <img class="img-fluid" src="{{ asset('frontend/AstromarG/Kiran Sir/Opal.jpg') }}"
                                    alt="">


                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <a href="{{ asset('frontend/AstromarG/Kiran Sir/Opal.jpg') }}" Download="test_image">
                                    <button type="button" class="btn btn-danger" src=""
                                        download>Download</button>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

                <!--=========================== Pearl ==============================-->
                <div class=" col-md-6 col-lg-3 col-sm-12 mb-4">
                    <div class="card ">
                        <div class="card-img">
                            <img src="{{ asset('frontend/gems/pearl_stone.png') }}" alt="">
                        </div>
                        <div class="card-body mb-2">
                            <h5 class="fw-bold">Pearl Stone</h5>
                            <hr class="m-0 mx-auto my-2 w-75" style=" border-top:solid #FF4A17 3px; opacity:0.6;">

                            <p>Pearl represents the Moon </p>
                        </div>
                        <div class="footer">
                            <button class="button-21" role="button" data-bs-toggle="modal"
                                data-bs-target="#gem_10">Read
                                More</button>
                        </div>
                    </div>
                </div>

                <!-- The Modal -->
                <div class="modal fade" id="gem_10">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Pearl Stone</h4>

                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <img class="img-fluid" src="{{ asset('frontend/AstromarG/Kiran Sir/pearl.jpg') }}"
                                    alt="">


                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <a href="{{ asset('frontend/AstromarG/Kiran Sir/pearl.jpg') }}" Download="test_image">
                                    <button type="button" class="btn btn-danger" src=""
                                        download>Download</button>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

                <!--=========================== Ruby Stone ==============================-->
                <div class="col-md-6 col-lg-3 col-sm-12 mb-4">
                    <div class="card ">
                        <div class="card-img">
                            <img src="{{ asset('frontend/gems/ruby_stone.png') }}" alt="">
                        </div>
                        <div class="card-body mb-2">
                            <h5 class="fw-bold">Ruby</h5>
                            <hr class="m-0 mx-auto my-2 w-75" style=" border-top:solid #FF4A17 3px; opacity:0.6;">

                            <p>Ruby represents the planet sun.</p>
                        </div>
                        <div class="footer">
                            <button class="button-21" role="button" data-bs-toggle="modal"
                                data-bs-target="#gem_11">Read
                                More</button>
                        </div>
                    </div>

                </div>

                <!-- The Modal -->
                <div class="modal fade" id="gem_11">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Ruby</h4>

                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <img class="img-fluid" src="{{ asset('frontend/AstromarG/Kiran Sir/ruby.jpg') }}"
                                    alt="">


                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <a href="{{ asset('frontend/AstromarG/Kiran Sir/ruby.jpg') }}" Download="test_image">
                                    <button type="button" class="btn btn-danger" src=""
                                        download>Download</button>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

                <!--=========================== Yellow Sapphire ==============================-->

                <div class=" col-md-6 col-lg-3 col-sm-12 mb-4">
                    <div class="card ">
                        <div class="card-img">
                            <img src="{{ asset('frontend/gems/yellow_sapphire_.png') }}" alt="">
                        </div>
                        <div class="card-body mb-2">
                            <h5 class="fw-bold">Yellow Sapphire</h5>
                            <hr class="m-0 mx-auto my-2 w-75" style=" border-top:solid #FF4A17 3px; opacity:0.6;">

                            <p>Yellow Sapphire represents Jupiter(Guru).</p>
                        </div>
                        <div class="footer">
                            <button class="button-21" role="button" data-bs-toggle="modal"
                                data-bs-target="#gem_12">Read
                                More</button>
                        </div>
                    </div>

                </div>

                <!-- The Modal Body -->
                <div class="modal fade" id="gem_12">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Yellow Sapphire</h4>

                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <img class="img-fluid"
                                    src="{{ asset('frontend/AstromarG/Kiran Sir/Yellow Sapphire.jpg') }}"
                                    alt="">


                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <a href="{{ asset('frontend/AstromarG/Kiran Sir/Yellow Sapphire.jpg') }}"
                                    Download="test_image">
                                    <button type="button" class="btn btn-danger" src=""
                                        download>Download</button>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center" id="for_more" style="background-color: hsl(204, 79%, 13%);">
            <button class="btn btn-outline-warning" onclick="more1();">View More <span><i
                        class="fa-solid fa-caret-down"></i></span></button>
        </div>
        <div class="text-center" id="for_less" style="display:none; background-color: #07273c;">
            <button class="btn btn-outline-warning" onclick="less1();">View Less <span><i
                        class="fa-solid fa-caret-up"></i></span></button>
        </div>


        {{-- slider end --}}

        <!--start zodiac sign -->
        <!-- =========================== stotra =================================-->
        <div class="container-fluid" style="background-color: rgb(7,39,60)">
            <div class="twelve  pt-5">
                <h1>STOTRA</h1>
            </div>
            <div id="autoplay-carousel" class="autoplay-carousel owl-carousel pmd-card-carousel owl-theme text-center"
                style="background-color: rgb(7,39,60);">

                <div class="item">
                    <div class="card pmd-card">
                        <!-- Card Media -->
                        <div class="pmd-card-media">
                            <img src="{{ asset('frontend/stotra/ganpati.jpg') }}" width="1184" height="666"
                                class="img-fluid">
                        </div>

                        <!-- Card Body -->
                        <div class="card-body">
                            <h5 class="card-title">॥ श्री गणेश स्तोत्र ॥</h5>

                        </div>

                        <!-- Card Footer -->
                        <div class="card-footer">
                            <button class="button-21" role="button" data-bs-toggle="modal"
                                data-bs-target="#ganesh">Read
                                More</button>
                        </div>
                    </div>
                </div>


                <div class="item">
                    <div class="card pmd-card">
                        <!-- Card Media -->
                        <div class="pmd-card-media">
                            <img src="{{ asset('frontend/stotra/mahadev.jpeg') }}" width="1184" height="666"
                                class="img-fluid">
                        </div>

                        <!-- Card Body -->
                        <div class="card-body">
                            <h5 class="card-title">॥ श्रीरुद्राष्टकम् ॥</h5>

                        </div>

                        <!-- Card Footer -->
                        <div class="card-footer">
                            <button class="button-21" role="button" data-bs-toggle="modal"
                                data-bs-target="#rudra">Read
                                More</button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card pmd-card">
                        <!-- Card Media -->
                        <div class="pmd-card-media">
                            <img src="{{ asset('frontend/stotra/hanuman1.jpg') }}" width="1184" height="666"
                                class="img-fluid">
                        </div>

                        <!-- Card Body -->
                        <div class="card-body">
                            <h5 class="card-title">॥ हनुमान चालीसा ॥</h5>

                        </div>

                        <!-- Card Footer -->
                        <div class="card-footer">
                            <button class="button-21" role="button" data-bs-toggle="modal"
                                data-bs-target="#hanuman_chalisa">Read
                                More</button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card pmd-card">
                        <!-- Card Media -->
                        <div class="pmd-card-media">
                            <img src="{{ asset('frontend/stotra/mahalaxmi.jpg') }}" width="1184" height="666"
                                class="img-fluid">
                        </div>

                        <!-- Card Body -->
                        <div class="card-body">
                            <h5 class="card-title">॥ श्री महालक्ष्म्यष्टकम् ॥</h5>

                        </div>

                        <!-- Card Footer -->
                        <div class="card-footer">
                            <button class="button-21" role="button" data-bs-toggle="modal"
                                data-bs-target="#mahalakshmi">Read
                                More</button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card pmd-card">
                        <!-- Card Media -->
                        <div class="pmd-card-media">
                            <img src="{{ asset('frontend/stotra/kaal_bhairav.jpg') }}" width="1184" height="666"
                                class="img-fluid">
                        </div>

                        <!-- Card Body -->
                        <div class="card-body">
                            <h5 class="card-title">॥ काल भैरव अष्टक ॥</h5>

                        </div>

                        <!-- Card Footer -->
                        <div class="card-footer">
                            <button class="button-21" role="button" data-bs-toggle="modal"
                                data-bs-target="#kalbhairav">Read
                                More</button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card pmd-card">
                        <!-- Card Media -->
                        <div class="pmd-card-media">
                            <img src="{{ asset('frontend/stotra/aditya_suryadev.jpg') }}" width="1184"
                                height="666" class="img-fluid">
                        </div>

                        <!-- Card Body -->
                        <div class="card-body">
                            <h5 class="card-title">॥ आदित्य हृदयस्तोत्र ॥</h5>

                        </div>

                        <!-- Card Footer -->
                        <div class="card-footer">
                            <button class="button-21" role="button" data-bs-toggle="modal"
                                data-bs-target="#aaditya">Read
                                More</button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card pmd-card">
                        <!-- Card Media -->
                        <div class="pmd-card-media">
                            <img src="{{ asset('frontend/stotra/mahadev2.jpg') }}" width="1184" height="666"
                                class="img-fluid">
                        </div>

                        <!-- Card Body -->
                        <div class="card-body">
                            <h5 class="card-title">॥ दारिद्र्य दहन शिवस्तोत्रं ॥</h5>

                        </div>

                        <!-- Card Footer -->
                        <div class="card-footer">
                            <button class="button-21" role="button" data-bs-toggle="modal"
                                data-bs-target="#shivstotra">Read
                                More</button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card pmd-card">
                        <!-- Card Media -->
                        <div class="pmd-card-media">
                            <img src="{{ asset('frontend/stotra/hanuman2.jpg') }}" width="1184" height="666"
                                class="img-fluid">
                        </div>

                        <!-- Card Body -->
                        <div class="card-body">
                            <h5 class="card-title">॥ हनुमान वडवानल स्त्रोत ॥</h5>

                        </div>

                        <!-- Card Footer -->
                        <div class="card-footer">
                            <button class="button-21" role="button" data-bs-toggle="modal"
                                data-bs-target="#wadwanal_stotra">Read
                                More</button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card pmd-card">
                        <!-- Card Media -->
                        <div class="pmd-card-media">
                            <img src="{{ asset('frontend/stotra/bhavani_maa.jpeg') }}" width="1184" height="666"
                                class="img-fluid">
                        </div>

                        <!-- Card Body -->
                        <div class="card-body">
                            <h5 class="card-title">॥ भवानी अष्टकम ॥</h5>

                        </div>

                        <!-- Card Footer -->
                        <div class="card-footer">
                            <button class="button-21" role="button" data-bs-toggle="modal"
                                data-bs-target="#bhavani">Read
                                More</button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card pmd-card">
                        <!-- Card Media -->
                        <div class="pmd-card-media">
                            <img src="{{ asset('frontend/stotra/navgraha.jpg') }}" width="1184" height="666"
                                class="img-fluid">
                        </div>

                        <!-- Card Body -->
                        <div class="card-body">
                            <h5 class="card-title">॥ नवग्रह स्तोत्र ॥</h5>

                        </div>

                        <!-- Card Footer -->
                        <div class="card-footer">
                            <button class="button-21" role="button" data-bs-toggle="modal"
                                data-bs-target="#navgrah">Read
                                More</button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card pmd-card">
                        <!-- Card Media -->
                        <div class="pmd-card-media">
                            <img src="{{ asset('frontend/stotra/mahadev3.jpg') }}" width="1184" height="666"
                                class="img-fluid">
                        </div>

                        <!-- Card Body -->
                        <div class="card-body">
                            <h5 class="card-title">॥ निर्वाणषट्कम् ॥</h5>

                        </div>

                        <!-- Card Footer -->
                        <div class="card-footer">
                            <button class="button-21" role="button" data-bs-toggle="modal"
                                data-bs-target="#nirvanshatkam">Read
                                More</button>
                        </div>
                    </div>
                </div>


            </div>




            <div class="modal fade" id="ganesh">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">॥ श्री गणेश स्तोत्र ॥</h4>

                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <img class="img-fluid" src="{{ asset('frontend/stotra/ganesh.jpg') }}" alt="">


                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <a href="{{ asset('frontend/stotra/ganesh.jpg') }}" Download="test_image">
                                <button type="button" class="btn btn-danger" src=""
                                    download>Download</button>
                            </a>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="modal fade" id="rudra">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">॥ श्रीरुद्राष्टकम् ॥</h4>

                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <img class="img-fluid" src="{{ asset('frontend/stotra/rudra.jpg') }}" alt="">


                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <a href="{{ asset('frontend/stotra/rudra.jpg') }}" Download="test_image">
                                <button type="button" class="btn btn-danger" src=""
                                    download>Download</button>
                            </a>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="modal fade" id="hanuman_chalisa">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">॥ हनुमान चालीसा ॥</h4>

                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="row">
                                <div class="col">
                                    <img class="img-fluid" src="{{ asset('frontend/stotra/hanuman_chalisa-1.jpg') }}"
                                        alt="">
                                    <div class="text-center mt-2">
                                        <a href="{{ asset('frontend/stotra/hanuman_chalisa-1.jpg') }}"
                                            download="hanuman_chalisa-1.jpg" class="btn btn-danger">Download </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <img class="img-fluid" src="{{ asset('frontend/stotra/hanuman_chalisa-2.jpg') }}"
                                        alt="">
                                    <div class="text-center mt-2">
                                        <a href="{{ asset('frontend/stotra/hanuman_chalisa-2.jpg') }}"
                                            download="hanuman_chalisa-2.jpg" class="btn btn-danger">Download </a>

                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <!-- Add any footer content you need -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="mahalakshmi">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">॥ श्री महालक्ष्म्यष्टकम् ॥</h4>

                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <img class="img-fluid" src="{{ asset('frontend/stotra/mahalakshmi.jpg') }}"
                                alt="">


                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <a href="{{ asset('frontend/stotra/mahalakshmi.jpg') }}" Download="test_image">
                                <button type="button" class="btn btn-danger" src=""
                                    download>Download</button>
                            </a>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="modal fade" id="kalbhairav">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">॥ काल भैरव अष्टक ॥</h4>

                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <img class="img-fluid" src="{{ asset('frontend/stotra/kalbhairav.jpg') }}"
                                alt="">


                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <a href="{{ asset('frontend/stotra/kalbhairav.jpg') }}" Download="test_image">
                                <button type="button" class="btn btn-danger" src=""
                                    download>Download</button>
                            </a>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="modal fade" id="aaditya">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">॥ आदित्य हृदयस्तोत्र ॥</h4>

                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-6">
                                    <img class="img-fluid" src="{{ asset('frontend/stotra/aaditya-1.jpg') }}"
                                        alt="">
                                    <div class="text-center mt-2">
                                        <a href="{{ asset('frontend/stotra/aaditya-1.jpg') }}"
                                            download="hanuman_chalisa-1.jpg" class="btn btn-danger">Download </a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <img class="img-fluid" src="{{ asset('frontend/stotra/aaditya-2.jpg') }}"
                                        alt="">
                                    <div class="text-center mt-2">
                                        <a href="{{ asset('frontend/stotra/ganesh.jpg') }}" download="aaditya-2.jpg"
                                            class="btn btn-danger">Download </a>

                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <!-- Add any footer content you need -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="shivstotra">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">॥ दारिद्र्य दहन शिवस्तोत्रं ॥</h4>

                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <img class="img-fluid" src="{{ asset('frontend/stotra/shivstotra.jpg') }}"
                                alt="">


                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <a href="{{ asset('frontend/stotra/shivstotra.jpg') }}" Download="test_image">
                                <button type="button" class="btn btn-danger" src=""
                                    download>Download</button>
                            </a>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="modal fade" id="wadwanal_stotra">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">॥ दारिद्र्य दहन शिवस्तोत्रं ॥</h4>

                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <img class="img-fluid" src="{{ asset('frontend/stotra/wadwanal_stotra.jpg') }}"
                                alt="">


                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <a href="{{ asset('frontend/stotra/wadwanal_stotra.jpg') }}" Download="test_image">
                                <button type="button" class="btn btn-danger" src=""
                                    download>Download</button>
                            </a>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="modal fade" id="bhavani">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">॥ भवानी अष्टकम ॥</h4>

                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <img class="img-fluid" src="{{ asset('frontend/stotra/bhavani.jpg') }}" alt="">


                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <a href="{{ asset('frontend/stotra/bhavani.jpg') }}" Download="test_image">
                                <button type="button" class="btn btn-danger" src=""
                                    download>Download</button>
                            </a>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="modal fade" id="navgrah">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">॥ नवग्रह स्तोत्र ॥</h4>

                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <img class="img-fluid" src="{{ asset('frontend/stotra/navgrah.jpg') }}" alt="">


                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <a href="{{ asset('frontend/stotra/navgrah.jpg') }}" Download="test_image">
                                <button type="button" class="btn btn-danger" src=""
                                    download>Download</button>
                            </a>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="modal fade" id="nirvanshatkam">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">॥ निर्वाणषट्कम् ॥</h4>

                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <img class="img-fluid" src="{{ asset('frontend/stotra/nirvanshatkam.jpg') }}"
                                alt="">


                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <a href="{{ asset('frontend/stotra/nirvanshatkam.jpg') }}" Download="test_image">
                                <button type="button" class="btn btn-danger" src=""
                                    download>Download</button>
                            </a>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>


        </div>
        <!--end zodiac sign -->

        <!-- our expert -->
        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="zoom-in">
                <div class="twelve  pt-5">
                    <h1>VIDEO'S</h1>
                </div>
                        <div class="row">
                            @foreach ($video_latest as $item)
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="cardv m-5">
                                        <div class="card-body">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item"
                                                    src="https://www.youtube.com/embed/{{ $item->video }}"
                                                    allowfullscreen></iframe>
                                            </div>
                                        </div>
        
                                    </div>
                                </div>
                            @endforeach
        
                        </div>
        
        
               

            </div>






        </section><!-- End Testimonials Section -->

        <script>
            function more1() {
                document.getElementById("row2").style.display = "flex";
                document.getElementById("for_more").style.display = "none";
                document.getElementById("for_less").style.display = "block";
            }

            function less1() {
                document.getElementById("row2").style.display = "none";
                document.getElementById("for_more").style.display = "block";
                document.getElementById("for_less").style.display = "none";
            }
        </script>

        <script>
            function more() {
                document.getElementById("2nd_row").style.display = "flex";
                document.getElementById("div_more").style.display = "none";
                document.getElementById("div_less").style.display = "block";
            }

            function less() {
                document.getElementById("2nd_row").style.display = "none";
                document.getElementById("div_more").style.display = "block";
                document.getElementById("div_less").style.display = "none";
            }

            function more1() {
                document.getElementById("row2").style.display = "flex";
                document.getElementById("for_more").style.display = "none";
                document.getElementById("for_less").style.display = "block";
            }

            function less1() {
                document.getElementById("row2").style.display = "none";
                document.getElementById("for_more").style.display = "block";
                document.getElementById("for_less").style.display = "none";
            }
        </script>
        <!-- Jquery js -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

        <!-- Owl Carousel js -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js">
        </script>

        <script>
            /* autoplay js*/
            var owl = $('#autoplay-carousel');
            owl.owlCarousel({
                items: 3,
                dots: false,
                loop: true,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }
            });
            $('.play').on('click', function() {
                owl.trigger('play.owl.autoplay', [1000])
            })
            $('.stop').on('click', function() {
                owl.trigger('stop.owl.autoplay')
            });
        </script>
    @endsection
