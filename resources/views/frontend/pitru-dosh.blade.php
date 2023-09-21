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
            <h1 class="text-light text-center header-content align-item-center">Pitru Dosh</h1>
        </div>

        <section class="container">
            <div class="">
                <h3><span style="color:#ff4a17; ">Pitru Dosh</span></h3>
                <p><span style="font-weight: bold;">"Pitru Dosha,"</span> also known as<span style="font-weight: bold;"> "Pitra Dosha" or "Ancestral Dosha," </span> is a concept in Vedic astrology that is associated with the negative influence of unresolved issues or karma from one's ancestors or forefathers. It is believed that if the departed souls of ancestors are not at peace or if there are unfulfilled obligations towards them, it can lead to Pitru Dosha in the individual's birth chart. This dosha is said to create challenges and obstacles in various aspects of life.</P>
                <h3><span style="color:#ff4a17; ">Key features of Pitru Dosha include:</span></h3>
            </div>

            <div class="">
                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Ancestral Karma:</h5>
                        <p> Pitru Dosha is linked to the idea that the ancestors have a significant influence on the lives of their descendants. If the ancestors' souls are not at peace due to unresolved issues, unfulfilled duties, or negative actions from their lifetime, it can affect the present generation.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Position of Rahu and Ketu:</h5>

                        <p> In many interpretations of Pitru Dosha, Rahu and Ketu play a role. When Rahu and Ketu are associated with the 9th house (house of ancestors) or the 5th house (house of past karma), Pitru Dosha is said to be present.</p>
                    </div>
                </div>


                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Effects:</h5>

                        <p> Pitru Dosha is believed to lead to various challenges and problems in the individual's life. These can include difficulties in career, relationships, health issues, and financial troubles.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Remedies:</h5>

                        <p> Remedies for Pitru Dosha often involve performing rituals and activities to honor and pacify the souls of ancestors. These may include offering food to the departed ancestors (Pitru Tarpana), performing charitable acts, reciting specific mantras, and visiting pilgrimage sites.</p>
                    </div>
                </div>

                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Astrological Analysis:</h5>

                        <p> The interpretation of Pitru Dosha can vary based on the specific placement of Rahu, Ketu, and other planets in the birth chart. Astrologers consider the overall chart and the specific positions to provide insights.</p>
                    </div>


                </div>


            </div>

            <div class="mt-5">
                <p>It's important to note that beliefs regarding Pitru Dosha vary among different practitioners of Vedic astrology. Some people view it as an important consideration in their lives, while others approach it with skepticism.</p>
                <p>If you're interested in learning more about Pitru Dosha or addressing concerns related to it, consulting with a knowledgeable and reputable astrologer can provide you with insights based on your individual birth chart. They can guide you on potential remedies and actions if you choose to explore this aspect of astrology.</p>
            </div>

        </section>
    </main>


@endsection