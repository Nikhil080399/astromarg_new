@extends('frontend.main')

@section('body')
<style>
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

    .solution {
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

    .pictures .img-fluid {
        height: 17rem;
        width: 100%;
        object-fit: cover;

    }
</style>

<div class="solution" data-aos="fade-up">

    <!-- ============================ Heading =========================== -->

    <section class="heading">

        <h1 class="text-center mt-5 pt-5 text-light" style="font-size:3rem;">AstromarG Solution</h1>

    </section>

    <!-- ============================ about and title =========================== -->
    <section class="introduction px-5">

        <p class="text-light main-heading"><span style="font-size:2rem; color:#ff4a17;">
                AstromarG's </span>
            <span class="fs-4">astrology solutions likely involve providing guidance, insights, and advice based on the principles of
                astrology. Here are some of the common aspects that astrology services might cover: </span>
        </p>
    </section>

    <div class="container pictures">

        <!--=======================  Birth Chart Analysis: ===============================-->

        <section class="sec" data-aos="fade-right">

            <div class="card bg-transparent mb-5" data-aos="fade-right" style="border:none">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{asset('frontend/AstromarG/Pics/birth_chart_calculato.png')}}" class="img-fluid" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body p-5">
                            <h4 class="card-title fw-bolder f-3"> Birth Chart Analysis: </h4>
                            <p class="card-text text-light fw-bold">Astrologers create a birth chart (also
                                known as a natal chart or horoscope) using the exact date, time, and location of a
                                person's birth. This chart serves as a snapshot of the positions of the planets, the
                                sun, and the moon at the time of birth. Astrologers analyze this chart to provide
                                insights into an individual's personality traits, strengths, challenges, and
                                potential life paths.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- </section> -->

            <!--========================= Personalized Predictions: =========================-->

            <!-- <section class="sec personalized_predictions" data-aos="fade-left"> -->

            <div class="card bg-transparent mb-5" data-aos="fade-left" style="border:none">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{asset('frontend/AstromarG/Pics/birth_chart_calculato.png')}}" class="img-fluid " alt="...">
                    </div>
                    <div class="col-sm-12 col-md-8">
                        <div class="card-body p-5">
                            <h4 class="card-title fw-bolder f-3"> Personalized Predictions: </h4>
                            <p class="card-text text-light fw-bold"> Astrology can be used to make
                                predictions about various aspects of a person's life, such as relationships, career,
                                health, and more. Astrologers may offer insights into upcoming events or trends
                                based on the positions of celestial bodies.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- </section> -->

            <!--============================Compatibility Analysis: ==========================-->

            <!-- <section class="sec compatibility_analysis" data-aos="fade-right"> -->

            <div class="card bg-transparent mb-5" data-aos="fade-right" style="border:none">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{asset('frontend/AstromarG/Pics/birth_chart_calculato.png')}}" class="img-fluid " alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body p-5">
                            <h4 class="card-title fw-bolder f-3"> Compatibility Analysis: </h4>
                            <p class="card-text text-light fw-bold"> Astrology is often consulted to
                                assess compatibility between individuals, such as in romantic relationships or
                                business partnerships. By comparing the birth charts of two people, astrologers can
                                provide insights into areas of harmony and potential challenges.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- </section> -->

            <!--======================= Transits and Progressions: ============================-->

            <!-- <section class="sec transits_progressions" data-aos="fade-left"> -->

            <div class="card bg-transparent mb-5" data-aos="fade-left" style="border:none">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{asset('frontend/AstromarG/Pics/birth_chart_calculato.png')}}" class="img-fluid " alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body p-5">
                            <h4 class="card-title fw-bolder f-3"> Transits and Progressions: </h4>
                            <p class="card-text text-light fw-bold"> Astrologers track the movements of
                                planets in the current time and how they interact with an individual's birth chart.
                                These planetary transits and progressions are believed to influence life events and
                                experiences.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- </section> -->

            <!--=======================Astrological Remedies:=================================-->

            <!-- <section class="sec astrological_remedies" data-aos="fade-right"> -->
            <div class="card bg-transparent mb-5" data-aos="fade-right" style="border:none">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{asset('frontend/AstromarG/Pics/birth_chart_calculato.png')}}" class="img-fluid " alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body p-5">
                            <h4 class="card-title fw-bolder f-3"> Astrological Remedies: </h4>
                            <p class="card-text text-light fw-bold"> Some astrologers suggest remedies or
                                practices to mitigate challenges and enhance positive influences in a person's life.
                                These remedies can include wearing specific gemstones, performing rituals, reciting
                                mantras, and more</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- </section> -->

            <!--============================ Career Guidance: ==============================-->

            <!-- <section class="sec career_guidance" data-aos="fade-left"> -->

            <div class="card bg-transparent mb-5" data-aos="fade-left" style="border:none">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{asset('frontend/AstromarG/Pics/birth_chart_calculato.png')}}" class="img-fluid " alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body p-5">
                            <h4 class="card-title fw-bolder f-3"> Career Guidance: </h4>
                            <p class="card-text text-light fw-bold"> Astrology can offer insights into
                                suitable career paths and professions based on a person's strengths, weaknesses, and
                                planetary placements in their birth chart.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- </section> -->
    </div>

    @endsection