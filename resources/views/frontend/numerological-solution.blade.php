@extends('frontend.main')

@section('body')

<style>
    p {
        color: white;
    }

    .header-bg-img {
        background-image: url({{asset('frontend/AstromarG/bg.jpg')}});
        background-size: cover;
        background-repeat: no-repeat;
        height: 55vh;
        padding-top: 12rem;
    }

    .card {
        background-color: #07273c;
        border: 1px solid #07273c;
        box-shadow: 0 0.5rem 1rem rgba(7, 7, 8, 1.15);
    }

    .cad {
        background-color: #07273c;
        border: 1px solid #07273c;
        box-shadow: 0 0.5rem 1rem rgba(7, 7, 8, 1.15);
    }

    .sec-1 .card {
        max-width: 100%;
        /* padding: 10px; */
    }

    .sec-1 .card-body {
        min-height: 330px;
        /* padding: rem ; */
    }

    .sec-1 .img-fluid {
        height: 100%;
        width: 100%;
        /* padding: 1.5rem 0px; */
    }
</style>


<main style="background-color:#07273c;">
    <div class="header-bg-img">
        <h1 class="text-light text-center header-content align-item-center">Numerological Solution</h1>
    </div>

    <section class="container">
        <div class="">
            <h3><span style="color:#ff4a17; ">AstromarG's Numerology</span></h3>
            <p>AstromarG's Numerology solutions likely involve providing insights, guidance, and advice based on the
                principles of numerology. Here's what you might expect from their numerology consulting services.
            </p>
        </div>
        <div class="px-4">
            <div class="row justify-content-around">
                <!--=========================================== Name Analysis ====================================================-->

                <div class="card p-3 m-4 col-md-5 col-sm-12">
                    <div class="card-item p-3">
                        <img src="{{asset('frontend/AstromarG/name_analysis.jpg')}}" class="img-fluid" alt="" style="height:15rem; width:100%;">
                    </div>
                    <div class="card-body pt-3">
                        <h5 class="card-title" style="color:#ff4a17;">Name Analysis</h5>
                        <p class="card-text">Numerologists often analyze the letters in a person's name
                            and assign numerical values to each letter based on a specific numerology system
                            (such as Pythagorean or Chaldean). These numerical values are then added up to
                            derive a "destiny" or "expression" number, which is believed to represent certain
                            personality traits and qualities associated with the individual.</p>
                    </div>
                </div>
                <!--=========================================== Birthdate Analysis ====================================================-->
                <div class="card p-3 m-4 col-md-5 col-sm-12">
                    <div class="card-item p-3">
                        <img src="{{asset('frontend/AstromarG/Pics/birth_chart_calculato.png')}}" class="img-fluid" alt="" style="height:15rem; width:100%;">
                    </div>
                    <div class="card-body pt-3">
                        <h5 class="card-title" style="color:#ff4a17;">Birthdate Analysis</h5>
                        <p class="card-text">Numerologists also analyze a person's birthdate to
                            calculate what
                            is often called a "life path" number. This number is believed to reveal key
                            aspects
                            of a person's life purpose, tendencies, and potential challenges.</p>
                    </div>
                </div>


                <!--======================================== Personality Traits and Characteristics ==============================================-->

                <div class="card p-3 m-4 col-md-5 col-sm-12">
                    <div class="card-item p-3">
                        <img src="{{asset('frontend/AstromarG/zodiac_traits.jpg')}}" class="img-fluid" alt="" style="height:15rem; width:100%;">
                    </div>
                    <div class="card-body pt-3">
                        <h5 class="card-title" style="color:#ff4a17;">Personality Traits and
                            Characteristics
                        </h5>
                        <p class="card-text">Numerology consultants might provide insights into a
                            person's
                            personality traits, strengths, weaknesses, and overall tendencies based on
                            the
                            numerical analysis of their name and birthdate.</p>
                    </div>
                </div>

                <!--=========================================== Compatibility Analysis Remedies ===============================================-->

                <div class="card p-3 m-4 col-md-5 col-sm-12">
                    <div class="card-item p-3">
                        <img src="{{asset('frontend/AstromarG/zodiac_traits.jpg')}}" class="img-fluid" alt="" style="height:15rem; width:100%;">
                    </div>
                    <div class="card-body pt-3">
                        <h5 class="card-title" style="color:#ff4a17;">Compatibility Analysis</h5>
                        <p class="card-text">Similar to astrology, numerology can be used to assess
                            compatibility between individuals. Numerologists might compare the life path
                            or
                            destiny numbers of two people to determine potential areas of harmony and
                            challenge
                            in their relationship.</p>
                    </div>
                </div>



                <!--==================================== Timing and Events ================================-->

                <div class="card p-3 m-4 col-md-5 col-sm-12">
                    <div class="card-item p-3">
                        <img src="{{asset('frontend/AstromarG/event_timing.jpg')}}" class="img-fluid" alt="" style="height:15rem; width:100%;">
                    </div>
                    <div class="card-body pt-3">
                        <h5 class="card-title" style="color:#ff4a17;">Timing and Events</h5>
                        <p class="card-text">Numerology can offer insights into favorable times for
                            certain life
                            events or decisions. This might include guidance on when to make career
                            changes,
                            start a new project, or make important personal choices.</p>

                    </div>
                </div>
                <!--==================================== >Name Changes ================================-->
                <div class="card p-3 m-4 col-md-5 col-sm-12">
                    <div class="card-item p-3">
                        <img src="{{asset('frontend/AstromarG/event_timing.jpg')}}" class="img-fluid" alt="" style="height:15rem; width:100%;">
                    </div>
                    <div class="card-body pt-3">
                        <h5 class="card-title" style="color:#ff4a17;">Name Changes</h5>
                        <p class="card-text">: In some cases, numerologists might suggest changes to a person's
                            name (such as altering the spelling) to align it more harmoniously with their
                            numerological profile. The belief is that such changes could bring positive energy
                            and outcomes.</p>
                    </div>
                </div>
                <!--==================================== Business and Branding. ================================-->
                <div class=" col-md-10 col-sm-12 mt-4 px-5"></div>
                <div class="cad d-flex p-5">
                    <div class="card-item " style="width:120rem;">
                        <img src="{{asset('frontend/AstromarG/event_timing.jpg')}}" alt="" style="height:15rem; width:100%;">
                    </div>
                    <div class="card-body ms-4">
                        <h5 class="card-title" style="color:#ff4a17;">Business and Branding</h5>
                        <p class="card-text">Numerology can also be applied to business names and branding.
                            Entrepreneurs might seek numerological insights to choose a business name that
                            resonates with their goals and values.
                            It's important to approach numerology with an open mind and a willingness to explore
                            the potential insights it might provide. Like astrology and Vastu, numerology is
                            often considered a belief system and might not be supported by scientific evidence.
                            If you're interested in AstromarG's numerology solutions, you can research their
                            approach, read reviews or testimonials, and make an informed decision based on your
                            own comfort level and curiosity.
                        </p>
                    </div>
                </div>
            </div>
        </div>









    </section>

</main>



@endsection