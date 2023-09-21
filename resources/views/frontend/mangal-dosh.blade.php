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
            <h1 class="text-light text-center header-content align-item-center">Mangal Dosh</h1>
        </div>

        <section class="container">
            <div class="">
                <h3><span style="color:#ff4a17; ">Mangal Dosh</span></h3>
                <p><span style="font-weight: bold;">"Mangal Dosha,"</span> also known as <span style="font-weight: bold;">"Kuja Dosha" or "Mars Dosha," </span> is a concept in Vedic astrology that is associated with the placement of the planet Mars (Mangal) in certain houses of an individual's birth chart. Mangal Dosha is believed to have a significant influence on marital life and can bring challenges, conflicts, and difficulties in relationships, particularly in the realm of marriage.</P>
                <h3><span style="color:#ff4a17; ">Key features of Mangal Dosha include:</span></h3>
            </div>

            <div class="">
                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Position of Mars:</h5>
                        <p> Mangal Dosha occurs when Mars is placed in certain houses of the birth chart, especially the 1st, 4th, 7th, 8th, and 12th houses. These houses are considered sensitive areas in terms of marriage and relationships.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Effects: </h5>

                        <p> It is believed that individuals with Mangal Dosha may experience challenges and disruptions in marital life. These can range from conflicts and disagreements to potential delays or difficulties in finding a suitable partner.</p>
                    </div>
                </div>


                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Impact on Partner:</h5>

                        <p> In traditional astrology, it is often said that Mangal Dosha in one person's chart can impact their spouse as well, leading to potential conflicts or difficulties in the marriage.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Remedies:</h5>

                        <p> Remedies for Mangal Dosha are often sought to mitigate the potential negative effects. These may include wearing gemstones associated with Mars, performing rituals, reciting specific mantras, and engaging in charitable activities.</p>
                    </div>
                </div>

                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Astrological Analysis:</h5>

                        <p> The severity of Mangal Dosha can vary based on factors such as the sign and house placement of Mars, its aspect on other planets, and its relationship with other planets in the chart.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Changing Interpretations:</h5>

                        <p> It's important to note that interpretations of Mangal Dosha have evolved over time. In contemporary astrology, many astrologers offer nuanced perspectives that take into account the overall chart and the influence of other planets.</p>
                    </div>
                </div>




            </div>

            <div class="mt-5">
                <p>It's crucial to approach Mangal Dosha and other astrological concepts with an open mind and an understanding of their cultural and historical context. While some individuals place strong belief in Mangal Dosha, others view it with skepticism or consider it less significant. If you have questions or concerns about Mangal Dosha, consulting with a knowledgeable and reputable astrologer can provide you with insights based on your individual birth chart and circumstances.</p>
            </div>

        </section>
    </main>


@endsection