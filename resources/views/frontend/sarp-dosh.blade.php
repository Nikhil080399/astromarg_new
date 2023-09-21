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
            <h1 class="text-light text-center header-content align-item-center">Sarp Dosh</h1>
        </div>

        <section class="container">
            <div class="">
                <h3><span style="color:#ff4a17; ">Sarp Dosh</span></h3>
                <p><span style="font-weight: bold;">"Sarp Dosha,"</span> also known as<span style="font-weight: bold;"> "Sarpa Dosha" or "Naga Dosha," </span> is a concept in Vedic astrology that is associated with the negative influence of the planet Rahu (the north lunar node) and Ketu (the south lunar node) on an individual's birth chart. It is believed to occur when Rahu or Ketu are placed in certain houses of the birth chart, particularly the 1st, 5th, 7th, 8th, and 12th houses. Sarp Dosha is often linked to challenges, obstacles, and negative energies.</P>
                <h3><span style="color:#ff4a17; ">Key features of Sarp Dosha include:</span></h3>
            </div>

            <div class="">
                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Position of Rahu and Ketu:</h5>
                        <p>Rahu and Ketu are considered malefic planets in astrology. When Rahu is placed in the 1st, 5th, 7th, 8th, or 12th house, or when Ketu is placed in these houses, Sarp Dosha is said to be present.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Effects: </h5>

                        <p> Sarp Dosha is believed to bring various negative effects and challenges to the individual's life. These effects can include health issues, financial difficulties, relationship problems, and obstacles in various areas of life.</p>
                    </div>
                </div>


                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Health Concerns:</h5>

                        <p> Sarp Dosha is often associated with health problems, especially related to the nervous system, skin, and immune system.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Remedies:</h5>

                        <p> Like other doshas in Vedic astrology, there are various remedies and rituals suggested to mitigate the effects of Sarp Dosha. These might include performing specific poojas (rituals), wearing gemstones, reciting mantras, and engaging in charitable activities.</p>
                    </div>
                </div>

                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Astrological Analysis:</h5>

                        <p> The interpretation of Sarp Dosha can vary based on the specific houses and signs in which Rahu and Ketu are placed in the birth chart. The astrologer takes into account the overall chart and the specific placements to provide insights.</p>
                    </div>


                </div>


            </div>

            <div class="mt-5">
                <p>It's important to remember that Vedic astrology, including concepts like Sarp Dosha, is a belief system that has different interpretations and significance for different individuals. Some people strongly believe in these concepts and remedies, while others view them with skepticism.</p>
                <p>If you're interested in learning more about Sarp Dosha or addressing concerns related to it, you may consider consulting with a knowledgeable and reputable astrologer. The astrologer can provide insights based on your individual birth chart and guide you on potential remedies if you choose to explore that path.</p>
            </div>

        </section>
    </main>


@endsection