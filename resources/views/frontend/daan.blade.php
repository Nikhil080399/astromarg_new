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
            <h1 class="text-light text-center header-content align-item-center">Daan</h1>
        </div>

        <section class="container">
            <div class="">
                <h3><span style="color:#ff4a17; ">Daan</span></h3>
                <p>In astrology, <span style="font-weight: bold;"> "dan" or "donation"</span> remedies refer to acts of charitable giving or donations that are performed to mitigate challenging planetary influences or to enhance positive energies in a person's birth chart. These remedies are based on the belief that engaging in acts of kindness and selflessness can create positive karmic effects and help balance planetary energies. Here's an overview of dan remedies in astrology:</P>
            </div>

            <div class="">
                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Significance of Charity:</h5>
                        <p> In Vedic astrology, it is believed that performing charitable acts can help counteract negative karma and alleviate the effects of challenging planetary placements or aspects in a person's birth chart.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Matching Planetary Energies: </h5>

                        <p> Specific types of charitable acts or donations are often associated with different planets. For example, donating food to the needy might be associated with Moon remedies, while offering educational materials could be linked to Jupiter remedies.</p>
                    </div>
                </div>


                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Timing and Intention:</h5>

                        <p> The timing and intention behind dan remedies are considered important. Performing acts of charity during specific planetary transits or on auspicious dates is believed to amplify the positive effects.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Types of Charitable Acts:</h5>

                        <p> Charitable acts can vary widely, including donating money, clothing, food, educational resources, medical supplies, and more. Some people choose to support causes that align with the qualities of the planets they are addressing.</p>
                    </div>
                </div>

                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Setting Positive Intentions: </h5>

                        <p> Along with the charitable act itself, setting positive intentions and focusing on the selfless nature of the donation can enhance the effectiveness of the remedy.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Customization:</h5>

                        <p> Dan remedies are often tailored to an individual's birth chart and the specific planetary influences they are seeking to balance. A knowledgeable astrologer can guide individuals in selecting appropriate charitable acts based on their chart's analysis.</p>
                    </div>
                </div>


            </div>

            <div class="mt-5">
                <p>It's important to approach dan remedies with a genuine spirit of compassion and selflessness, rather than as a transaction to alleviate negative effects. Acts of charity are meant to benefit others and contribute positively to society, while also fostering personal growth and spiritual development.</p>
                <p>While dan remedies are part of certain astrological traditions, they are not universally practiced or accepted across all astrological systems. If you're interested in incorporating dan remedies into your astrological practice, it's advisable to consult with astrologers who are well-versed in the specific tradition and to approach the practice with an open heart and a sincere intention to make a positive difference in the lives of others.</p>
            </div>





        </section>
    </main>

@endsection