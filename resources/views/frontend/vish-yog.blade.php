@extends('frontend.main')

@section('body')

<style>
        .header-bg-img {
            background-image: url({{asset('frontend/AstromarG/bg.jpg')}});
            background-size: cover;
            background-repeat: no-repeat;
            height: 55vh;
            padding-top: 13rem;
        }

        .card {
            background-color: #07273c;
            border: 1px solid #07273c;
            box-shadow: 0 0.5rem 1rem rgba(7, 7, 8, 1.15);
        }

        .crad-title {
            color: #ff4a17;
        }

        p {
            text-align: justify;
            padding: 10px;
            color: white;
        }
    </style>

<main style="background-color:#07273c;">
        <div class="header-bg-img">
            <h1 class="text-light text-center header-content align-item-center">Vish Yoga</h1>
        </div>

        <section class="container">
            <div class="">
                <h3><span style="color:#ff4a17; ">Vish Yoga</span></h3>
                <p><span style="font-weight: bold;">"Vish Yoga"</span> is a term used in Vedic astrology to describe a planetary combination that is considered inauspicious or unfavorable. It occurs when certain malefic planets are placed in specific houses of an individual's birth chart. The term "Vish" translates to "poison" in Sanskrit, and the yoga is named so because it is believed to bring challenges and negative effects similar to the effects of poison.</P>
                <h3><span style="color:#ff4a17; ">Key features of Vish Yoga include:</span></h3>
            </div>

            <div class="">
                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Planetary Combination:</h5>
                        <p> Vish Yoga is typically associated with the placement of malefic planets, such as Saturn (Shani) and Mars (Mangal), in certain houses of the birth chart. Specifically, if Saturn is placed in the 7th house and Mars is placed in the 1st, 2nd, 4th, 7th, 8th, or 12th house, Vish Yoga is said to be present.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Effects: </h5>

                        <p> Vish Yoga is believed to bring negative effects and challenges in areas related to relationships, partnerships, health, and general well-being. It is thought to create obstacles, conflicts, and difficulties in these life areas.</p>
                    </div>
                </div>


                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Remedies:</h5>

                        <p> Remedies for Vish Yoga often involve performing rituals, wearing gemstones associated with beneficial planets, reciting specific mantras, and engaging in practices to mitigate the negative influences.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Astrological Analysis: </h5>

                        <p> The interpretation of Vish Yoga is based on the specific placement of the malefic planets in relation to the houses they occupy. Astrologers analyze the chart to provide insights into potential effects.</p>
                    </div>
                </div>

                <div class="row justify-content-around">



                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title"> Nuances:</h5>

                        <p> It's important to remember that astrological interpretations can vary. Some astrologers may consider Vish Yoga more seriously, while others might offer more nuanced perspectives, taking into account the overall chart and the influence of other planets.</p>
                    </div>

                </div>




            </div>

            <div class="mt-5">
                <p>As with other astrological yogas and doshas, it's advisable to approach the concept of Vish Yoga with an open mind and consider consulting with a knowledgeable and reputable astrologer for insights based on your individual birth chart. Astrology is a belief system that can offer different perspectives and interpretations, and personal beliefs and choices should guide how you engage with it.</p>
            </div>

        </section>
    </main>


@endsection