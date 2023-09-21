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
        }
    </style>

<main style="background-color:#07273c;">
        <div class="header-bg-img">
            <h1 class="text-light text-center header-content align-item-center">Kalsarp Dosh</h1>
        </div>

        <section class="container">
            <div class="">
                <h3><span style="color:#ff4a17; ">Kalsarp Dosh</span></h3>
                <p><span style="font-weight: bold;">"Kalsarp Dosha"</span> is a concept in Vedic astrology that is believed to occur when all or most of the planets are positioned between the two shadow planets, Rahu and Ketu, in a person's birth chart. Rahu and Ketu are considered as points in the sky where the moon's path intersects with the sun's path. Kalsarp Dosha is often associated with challenges, difficulties, and obstacles in a person's life.</P>
                <h3><span style="color:#ff4a17; ">Key features of Kalsarp Dosha include:</span></h3>
            </div>

            <div class="">
                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Position of Rahu and Ketu:</h5>
                        <p> Rahu and Ketu are considered malefic planets in astrology. When all seven traditional planets (Sun, Moon, Mars, Mercury, Jupiter, Venus, and Saturn) are positioned between Rahu and Ketu, Kalsarp Dosha is said to be present.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Effects: </h5>

                        <p> Kalsarp Dosha is believed to bring various negative effects, such as financial troubles, health issues, relationship challenges, and career obstacles. It is said to create a sense of restlessness and unpredictability.</p>
                    </div>
                </div>


                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Types of Kalsarp Dosha:</h5>

                        <p> There are different variations of Kalsarp Dosha, depending on the placement of Rahu and Ketu in different houses of the birth chart. The specific effects can vary based on the type of dosha present..</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Remedies:</h5>

                        <p> Many people consult astrologers to seek remedies for Kalsarp Dosha. Remedies might include performing special rituals, reciting specific mantras, wearing gemstones, and engaging in charitable activities.</p>
                    </div>
                </div>

                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Impact on Different Areas of Life:</h5>

                        <p> The effects of Kalsarp Dosha are often interpreted based on the houses in which Rahu and Ketu are placed. The dosha is said to affect various life areas, such as health, career, relationships, and spirituality.</p>
                    </div>


                </div>


            </div>

            <div class="mt-5">
                <p>It's important to note that the concept of Kalsarp Dosha is a part of Vedic astrology, which is a belief system that holds different significance for different individuals. Not all astrologers or people believe in the same interpretations or effects of Kalsarp Dosha. Some people may view it with skepticism, while others may take it into consideration when seeking guidance in their lives.</p>
                <p>If you're interested in learning more about Kalsarp Dosha or addressing concerns related to it, you may consider consulting with a knowledgeable and reputable astrologer who can provide insights based on your individual birth chart and circumstances.</p>
            </div>

        </section>
    </main>


@endsection