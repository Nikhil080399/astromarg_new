@extends('frontend.main')

@section('body')

<style>
        .header-bg-img {
            background-image: url({{asset('frontend/AstromarG/bg.jpg')}});
            background-size: cover;
            background-repeat: no-repeat;
            height: 23rem;
            padding-top: 13rem;
        }

        .card {
            background-color: #07273c;
            border: 1px solid #07273c;
            box-shadow: 0 0.5rem 1rem rgba(7, 7, 8, 1.15);
        }

        .crad-title {
            color: #ff4a17;
            font-weight: bold;
        }

        p {
            text-align: justify;
            /* padding: 10px; */
            color: white;
            font-weight: bold;
        }
    </style>

<main style="background-color:#07273c;">

<!--================================== Heading:  ===============================-->
<div class="header-bg-img">
    <h1 class="text-light text-center header-content align-item-center">Chandal Yoga</h1>
</div>

<!--=========================================== Chandal Yoga =========================================-->

<section class="content px-3">
    <div class="">
        <h3><span style="color:#ff4a17; ">Chandal Yoga :</span></h3>
        <p class="px-4"><span style="font-weight: bold;">"Chandal Yoga,"</span> also known as also known as
            <span style="font-weight: bold;"> "Chandal Dosha," </span> is a term used in Vedic astrology to
            describe a planetary combination that is considered unfavorable or inauspicious. It is associated
            with the presence of the planet Rahu (the north lunar node) in conjunction with the planet Jupiter
            (Guru). Chandal Yoga is often believed to bring challenges and negative effects.
        </P>
        <h3><span style="color:#ff4a17; ">Key features of Chandal Yoga include:</span></h3>
    </div>

    <!--=============================== Planetary Combination ====================================-->

    <div class="px-4">
        <div class="row justify-content-around">
            <div class="card p-3 m-4 col-md-5 col-sm-12">
                <div class="card-item p-3">
                    <img src="{{asset('frontend/AstromarG/Planertary_combination.png')}}" alt="" style="height:15rem; width:100%;">
                </div>
                <div class="card-body pt-3">
                    <h4 class="crad-title text-center">Planetary Combination:</h5>
                        <p> Chandal Yoga occurs when Rahu (North Node) is in conjunction with Jupiter (Guru) in
                            a birth
                            chart. Jupiter is considered a benefic planet, but when it comes into close
                            conjunction with
                            Rahu, the combination is said to create a challenging influence.</p>
                </div>
            </div>
            <!--=========================================== Effects ====================================================-->
            <div class="card p-3 m-4 col-md-5 col-sm-12">
                <div class="card-item p-3">
                    <img src="{{asset('frontend/AstromarG/chandal_effect.jpg')}}" alt="" style="height:15rem; width:100%;">
                </div>
                <div class="card-body pt-3">
                    <h4 class="crad-title text-center">Effects: </h5>
                        <p> Chandal Yoga is believed to bring negative effects, particularly related to a
                            person's
                            spirituality, morality, and ethical values. It is said to influence one's ability to
                            make
                            wise decisions and to lead a righteous life.</p>
                </div>
            </div>


            <!--======================================== Characteristics ==============================================-->
            <!-- <div class="row justify-content-around"> -->
            <div class="card p-3 m-4 col-md-5 col-sm-12">
                <div class="card-item p-3">
                    <img src="{{asset('frontend/AstromarG/chandal_characteristics.jpeg')}}" alt="" style="height:15rem; width:100%;">
                </div>
                <div class="card-body pt-3">
                    <h4 class="crad-title text-center">Characteristics:</h5>

                        <p> Those with Chandal Yoga in their charts are said to possess characteristics
                            associated with
                            Rahu, such as ambition, materialism, restlessness, and a desire for unconventional
                            experiences. Jupiter's qualities of wisdom and spirituality may be distorted by the
                            influence of Rahu.</p>
                </div>
            </div>

            <!--=========================================== Remedies ===============================================-->

            <div class="card p-3 m-4 col-md-5 col-sm-12">
                <div class="card-item p-3">
                    <img src="{{asset('frontend/AstromarG/chandal_remedies.jpeg')}}" alt="" style="height:15rem; width:100%;">
                </div>
                <div class="card-body pt-3">
                    <h4 class="crad-title text-center">Remedies:</h5>

                        <p> Remedies for Chandal Yoga often include performing rituals, reciting specific
                            mantras,
                            engaging in acts of charity, and pursuing spiritual practices to mitigate the
                            negative
                            effects of the yoga.</p>
                </div>
            </div>

            <!-- <div class="row justify-content-around"> -->

            <!--==================================== Astrological Analysis ================================-->

            <div class="card p-3 m-4 col-md-5 col-sm-12">
                <div class="card-item p-3">
                    <img src="{{asset('frontend/AstromarG/chandal_analysis.jpeg')}}" alt="" style="height:15rem; width:100%;">
                </div>
                <div class="card-body pt-3">
                    <h4 class="crad-title text-center">Astrological Analysis:</h5>

                        <p> The interpretation of Chandal Yoga is based on the specific placement of Rahu
                            and Jupiter in
                            relation to the houses they occupy. Astrologers analyze the birth chart to
                            provide insights
                            into potential effects.</p>
                </div>

                <!-- </div> -->

            </div>
        </div>
    </div>
    <!--========================================= End-Paragraph ============================================-->
    <div class="mt-5">
        <p>It's important to approach the concept of Chandal Yoga with an open mind and consider
            consulting with
            a knowledgeable and reputable astrologer for insights based on your individual birth chart.
            Different astrologers may have varying perspectives on the significance of this yoga and the
            remedies to address it. Keep in mind that astrology is a belief system, and interpretations
            can vary
            among practitioners.</p>
    </div>

</section>
</main>


@endsection