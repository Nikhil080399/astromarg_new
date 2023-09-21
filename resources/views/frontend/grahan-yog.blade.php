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
            <h1 class="text-light text-center header-content align-item-center">Grahan Yoga</h1>
        </div>

        <section class="container">
            <div class="">
                <h3><span style="color:#ff4a17; ">Grahan Yoga</span></h3>
                <p><span style="font-weight: bold;">"Grahan Yoga" or "Grahan Dosha" </span> is a concept in Vedic astrology that is associated with the negative influence of eclipses (solar and lunar) on an individual's birth chart. Eclipses are considered powerful cosmic events, and their energies are believed to impact a person's life and destiny.</P>
                <h3><span style="color:#ff4a17; ">Key features of Grahan Yoga include:</span></h3>
            </div>

            <div class="">
                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title"> Solar and Lunar Eclipses:</h5>
                        <p> Grahan Yoga is associated with both solar eclipses (Surya Grahan) and lunar eclipses (Chandra Grahan). These eclipses occur when the Earth, the Moon, and the Sun align in a way that causes temporary shadows to fall on either the Moon (lunar eclipse) or the Earth (solar eclipse).</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Effects: </h5>

                        <p> It is believed that Grahan Yoga can bring negative effects and challenges to an individual's life. These effects can vary depending on whether the person is born during a solar eclipse or a lunar eclipse.</p>
                    </div>
                </div>


                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title"> Solar Eclipse:</h5>

                        <p> Individuals born during a solar eclipse are said to have Surya Grahan Dosha. This dosha is believed to impact one's father, career, reputation, and overall well-being.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Lunar Eclipse: </h5>

                        <p> Individuals born during a lunar eclipse are said to have Chandra Grahan Dosha. This dosha is believed to influence one's mother, emotional well-being, and relationships.</p>
                    </div>
                </div>

                <div class="row justify-content-around">

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Remedies:</h5>

                        <p> Remedies for Grahan Yoga may involve performing rituals, reciting specific mantras, engaging in acts of charity, and pursuing spiritual practices to mitigate the negative effects of the eclipse dosha.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title"> Astrological Analysis:</h5>

                        <p> The presence of Grahan Yoga is determined by whether an individual is born during an eclipse and the specific type of eclipse. Astrologers analyze the birth chart to provide insights into potential effects.</p>
                    </div>

                </div>


                <div class="row justify-content-around">



                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Cultural Beliefs:</h5>

                        <p> It's important to recognize that beliefs regarding Grahan Yoga vary among different practitioners of Vedic astrology. Some people place strong belief in eclipse-related doshas, while others view them with skepticism.</p>
                    </div>

                </div>




            </div>

            <div class="mt-5">
                <p>If you're interested in learning more about Grahan Yoga or addressing concerns related to it, consulting with a knowledgeable and reputable astrologer can provide you with insights based on your individual birth chart and circumstances. Keep in mind that astrology is a belief system, and interpretations can vary among practitioners.</p>
            </div>

        </section>
    </main>


@endsection