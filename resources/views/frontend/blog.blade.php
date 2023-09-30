@extends('frontend.main')

@section('body')

<style>
    .for-cards p {
        color: white;
        /* font-weight: bold; */
    }

    .heading {
        background-color: #07273c;
        background-image: url({{asset('frontend/AstromarG/bg.jpg')}});
        transition-duration: 1ms;
        background-size: cover;
        margin: 0;
        width: 100%;
        height: 21rem;
    }

    .main-heading h2 {
        color: #ff4a17;
        background-color: #07273c;
    }

    .astro_service {
        background-color: #07273c;
    }

    .card {
        box-shadow: 0 0.5rem 1rem rgba(7, 7, 8, 1.15);
    }

    .card .card-title {
        color: #ff4a17;
    }

    .main-heading .card {
        margin-bottom: 15rem;
    }

    .for-head .for-info {
        color: #ff4a17;
    }

    .for-cards .img-fluid {
        height: 12rem;
        width: 100%;

    }

    .heading h1 {
        text-shadow: 0 0.5rem 1rem rgba(250, 250, 250, 0.6);
    }

    .for-cards .card {
        /* max-width: 650px; */
        /* max-height: 700px; */
        margin-bottom: 15rem;
    }
</style>

<div class="astro_service">

    <!-------------------------------------------- Heading ------------------------------------------------------------>
    <section class="heading">
        <h1 class="text-center text-light pt-5 mt-5 " style="font-size:3rem; ">Blog</h1>
    </section>

    <!------------------------------------------ Title---------------------------------------- -->
    {{-- <section id="for-body" class="for-head pb-0 px-3">
        <h4 class="for-head fw-bold fs-1 text-center" style="color: #ff4a17;">Astrological Services</h4>


        <p class="desc fs-5 text-light"><span class="for-info fs-2 fw-bold">Info:</span>
            encompass a wide range of offerings provided by astrologers and astrology practitioners to individuals
            seeking insights, guidance, and advice based on their birth charts and astrological factors. These
            services are intended to help individuals gain a deeper understanding of various aspects of their lives
            and make informed decisions. Here are some common types of astrological services:</p>
    </section> --}}

    <section id="for-title" class="main-heading px-3">
        <!------------------------------------------ Birth Chart Analysis --------------------------------------------------->
        <div class="for-cards">
            <div class="row px-2">
                <div class="col-md-6 col-sm-12 ps-5">

                    <div class="card mb-3 bg-transparent">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{asset('frontend/AstromarG/Pics/birth_chart_calculato.png')}}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Birth Chart Analysis: </h5>
                                    <p class="card-text">Astrologers analyze an individual's birth chart (natal
                                        chart) to provide insights into their personality traits, strengths,
                                        challenges, career potential, relationships, and more.</p>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!---------------------------------------- Horoscope Readings ---------------------------------------------->

                    <div class="card mb-3 bg-transparent">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{asset('frontend/AstromarG/Pics/birth_chart_calculato.png')}}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Horoscope Readings: </h5>
                                    <p class="card-text">Astrologers create horoscopes for specific time periods
                                        (daily, weekly, monthly, yearly) to offer guidance on upcoming events and
                                        trends in a person's life.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!----------------------------------- Compatibility Analysis ------------------------------------------>
                    <div class="card mb-3 bg-transparent">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{asset('frontend/AstromarG/Pics/birth_chart_calculato.png')}}" class="img-fluid rounded-start" alt="...">

                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Compatibility Analysis: </h5>
                                    <p class="card-text">Astrologers assess the compatibility between individuals,
                                        especially in the context of romantic relationships or partnerships, based
                                        on their birth charts.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!---------------------------- Career and Finance Guidance ---------------------------------------->
                    <div class="card mb-3 bg-transparent">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{asset('frontend/AstromarG/Pics/birth_chart_calculato.png')}}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold ">Career and Finance Guidance: </h5>
                                    <p class="card-text"> Astrologers offer insights into suitable career paths,
                                        potential challenges in the workplace, and financial prospects based on
                                        astrological factors.</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!----------------------------------- Marriage and Relationship Consultations ---------------------------------------------->

                    <div class="card mb-3 bg-transparent">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{asset('frontend/AstromarG/Pics/birth_chart_calculato.png')}}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold ">Marriage and Relationship Consultations:
                                    </h5>
                                    <p class="card-text">Astrologers analyze birth charts to provide insights into
                                        marriage timing, potential partners, and relationship dynamics.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--------------------------------------- Health and Well-Being Insights ------------------------------------------------>
                    <div class="card mb-3 bg-transparent">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{asset('frontend/AstromarG/Pics/birth_chart_calculato.png')}}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Health and Well-Being Insights:</h5>
                                    <p class="card-text">Astrologers may provide insights into potential health
                                        vulnerabilities or areas of well-being to focus on based on planetary
                                        positions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 pe-5">

                    <!-----------------------------------------Remedies and Solutions----------------------------------->
                    <div class="card mb-3 bg-transparent">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{asset('frontend/AstromarG/Pics/birth_chart_calculato.png')}}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Remedies and Solutions: </h5>
                                    <p class="card-text">Astrologers offer suggestions for astrological remedies,
                                        rituals, gemstones, and other practices to mitigate challenging planetary
                                        influences.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!----------------------------------------- Education and Learning Guidance -------------------------------------------------->
                    <div class="card mb-3 bg-transparent">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{asset('frontend/AstromarG/Pics/birth_chart_calculato.png')}}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Education and Learning Guidance: </h5>
                                    <p class="card-text">Astrologers provide insights into suitable educational
                                        paths, learning styles, and potential obstacles related to education.</p>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!------------------------------- Muhurtha and Timing ------------------------------------>
                    <div class="card mb-3 bg-transparent">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{asset('frontend/AstromarG/Pics/birth_chart_calculato.png')}}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold ">Muhurtha and Timing: </h5>
                                    <p class="card-text">suggest auspicious timings for important life events, such
                                        as weddings, housewarming ceremonies, and business launches.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!------------------------------------------- Career Counseling ------------------------------------------>
                    <div class="card mb-3 bg-transparent">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{asset('frontend/AstromarG/Pics/birth_chart_calculato.png')}}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold ">Career Counseling: </h5>
                                    <p class="card-text">Combining astrology with counseling, astrologers help
                                        individuals make career decisions aligned with their strengths and
                                        aspirations.</p>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-------------------------------------------- Child Birth Timing ------------------------------------------------->
                    <div class="card mb-3 bg-transparent">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{asset('frontend/AstromarG/Pics/birth_chart_calculato.png')}}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Child Birth Timing: </h5>
                                    <p class="card-text">Astrologers analyze birth charts to suggest auspicious
                                        times for childbirth and parenthood-related activities.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!------------------------------------ Name and Business Consultations ----------------------------------------->
                    <div class="card mb-3 bg-transparent">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{asset('frontend/AstromarG/Pics/birth_chart_calculato.png')}}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Name and Business Consultations:</h5>
                                    <p class="card-text">Astrologers provide guidance on choosing auspicious names
                                        for individuals, babies, and businesses based on astrological
                                        considerations.
                                        Astrological services can be offered through various mediums, including
                                        in-person consultations, phone calls, online video calls, and written
                                        reports.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection