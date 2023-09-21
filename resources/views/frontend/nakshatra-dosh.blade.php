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
            <h1 class="text-light text-center header-content align-item-center">Nakshatra Dosha</h1>
        </div>

        <section class="container">
            <div class="">
                <h3><span style="color:#ff4a17; ">Nakshatra Dosha</span></h3>
                <p><span style="font-weight: bold;">"Nakshatra Dosha,"</span> also known as <span style="font-weight: bold;"> "Nakshatra Dosh" or "Nakshatra Badhaka," </span> is a concept in Vedic astrology that refers to the negative influences or challenges that can arise due to the presence of certain nakshatras (lunar constellations) in an individual's birth chart. Nakshatras are specific divisions of the zodiac that the moon travels through, and each nakshatra is associated with particular qualities and energies.</P>
                <h3><span style="color:#ff4a17; ">Key features of Nakshatra Dosha include:</span></h3>
            </div>

            <div class="">
                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Specific Nakshatras:</h5>
                        <p> In Nakshatra Dosha, specific nakshatras are considered inauspicious or challenging for certain purposes or areas of life. The effects of these nakshatras are believed to bring difficulties, obstacles, or unfavorable outcomes.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Effects: </h5>

                        <p> Nakshatra Dosha is believed to impact various aspects of an individual's life, such as health, relationships, career, and overall well-being. Depending on the specific nakshatra and its association with particular planets and houses, the effects can vary.</p>
                    </div>
                </div>


                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Remedies:</h5>

                        <p> Remedies for Nakshatra Dosha often involve performing rituals, wearing specific gemstones, reciting mantras associated with the nakshatra, and engaging in other practices to mitigate the negative influences.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Astrological Analysis: </h5>

                        <p> The presence of Nakshatra Dosha is determined by the nakshatra in which a planet or planets are placed in the birth chart. Astrologers analyze the placement of planets, their relationship with other planets, and the specific nakshatra to provide insights.</p>
                    </div>
                </div>

                <div class="row justify-content-around">



                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Variations:</h5>

                        <p> Different astrologers may have varying interpretations of which nakshatras are considered dosha nakshatras and for which areas of life. The dosha classification can differ between regions and astrological schools.</p>
                    </div>

                </div>




            </div>

            <div class="mt-5">
                <p>It's important to note that the concept of Nakshatra Dosha is a part of Vedic astrology, which is a belief system that has different interpretations and significance for different individuals. Some people find meaning in these concepts and remedies, while others view them with skepticism.</p>
                <p>If you're interested in learning more about Nakshatra Dosha or addressing concerns related to it, you may consider consulting with a knowledgeable and reputable astrologer. The astrologer can provide insights based on your individual birth chart and guide you on potential remedies if you choose to explore this aspect of astrology.</p>
            </div>

        </section>
    </main>


@endsection