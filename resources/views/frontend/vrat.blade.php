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
            <h1 class="text-light text-center header-content align-item-center">Vrat</h1>
        </div>

        <section class="container">
            <div class="">
                <h3><span style="color:#ff4a17; ">Vrat</span></h3>
                <p>In astrology, <span style="font-weight: bold;">"vrat" or "fasting"</span> remedies involve abstaining from certain foods or activities for a specific period of time to appease or balance planetary energies and to seek positive influences in one's life. Fasting as an astrological remedy is based on the belief that making sacrifices and practicing self-discipline can help mitigate challenging planetary placements or aspects in a person's birth chart. Here's an overview of vrat remedies in astrology:</P>
            </div>

            <div class="">
                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Planetary Influence:</h5>
                        <p> Different planets are associated with specific qualities and energies. Fasting during the day or time period associated with a particular planet is believed to harmonize or appease that planet's influence.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Day of the Week:</h5>

                        <p> Each day of the week is associated with a planet in astrology. Fasting on the day dedicated to a specific planet is considered auspicious for seeking its positive influences.</p>
                    </div>
                </div>


                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Food Restrictions:</h5>

                        <p> Some vrat remedies involve avoiding certain types of foods that are associated with particular planets. For example, avoiding salt on a Saturday (associated with Saturn) or not consuming non-vegetarian food on a Tuesday (associated with Mars).</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Water Fasting:</h5>

                        <p> Some vrat remedies involve water fasting, where individuals abstain from solid food and only consume water during a specific period. This is often practiced on auspicious days or during planetary transits.</p>
                    </div>
                </div>

                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Meditation and Reflection: </h5>

                        <p> Fasting can provide an opportunity for introspection, meditation, and self-awareness. It's not only about abstaining from physical nourishment but also about nourishing the mind and spirit.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Customization:</h5>

                        <p> Just as with other astrological remedies, vrat remedies are personalized based on an individual's birth chart and the specific planetary influences they are seeking to address.</p>
                    </div>
                </div>

                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Intent and Sincerity:</h5>

                        <p> The intention behind vrat remedies is crucial. It's important to approach fasting with a sincere desire for personal growth, positive change, and alignment with higher energies.</p>
                    </div>


                </div>

            </div>

            <div class="mt-5">
                <p>It's important to note that vrat remedies are part of certain astrological traditions and cultural practices. They are not universally accepted or practiced in all astrological systems. Fasting should always be undertaken with consideration for one's health and well-being. Consulting with knowledgeable astrologers who are well-versed in the specific astrological tradition is advisable before implementing vrat remedies. Additionally, while fasting can have spiritual and symbolic significance, the effectiveness of such remedies may vary among individuals and depends on their beliefs, intentions, and the broader context of their astrological chart.</p>
            </div>
        </section>
    </main>

@endsection