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
            <h1 class="text-light text-center header-content align-item-center">Havan</h1>
        </div>

        <section class="container">
            <div class="">
                <h3><span style="color:#ff4a17; ">Havan</span></h3>
                <p>In astrology, <span style="font-weight: bold;"> "havan" or "homa"</span> remedies involve performing fire rituals or sacred ceremonies to invoke specific energies and seek blessings from deities or cosmic forces. Havans are considered a powerful means of channeling positive energies, balancing planetary influences, and seeking spiritual guidance. These rituals are conducted with specific mantras, offerings, and intentions to create a harmonious environment and mitigate challenges indicated in a person's birth chart. Here's an overview of havan remedies in astrology::</P>
            </div>

            <div class="">
                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Planetary Energies:</h5>
                        <p> Each planet is associated with certain qualities, energies, and deities. Havans are performed to invoke the energies of these planets and seek their positive influences.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Specific Deities and Mantras:</h5>

                        <p> Different deities are associated with specific planets and their qualities. The havan rituals involve chanting relevant mantras dedicated to these deities to attract their blessings.</p>
                    </div>
                </div>


                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Fire Element:</h5>

                        <p> Fire is a sacred element in many cultures and spiritual traditions. In havan rituals, the fire is considered a conduit for transformation and purification.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Offerings:</h5>

                        <p> Various offerings such as grains, ghee (clarified butter), herbs, and other symbolic items are offered into the fire during the ritual. These offerings represent the seeker's intentions and desires.</p>
                    </div>
                </div>

                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Timing and Auspicious Days:</h5>

                        <p> Havans are often performed on auspicious days, planetary transits, or during specific celestial events. The timing enhances the potency of the ritual.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Sankalpa (Intention):</h5>

                        <p> Before beginning the ritual, a sankalpa or intention is set. This clarifies the purpose of the havan and directs the energies toward specific goals..</p>
                    </div>
                </div>

                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Purohit (Priest):</h5>

                        <p> Experienced priests or purohits are often engaged to perform the havan rituals. They have the knowledge of proper procedures, mantras, and offerings.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Personalized Analysis:</h5>

                        <p> Havans can be personalized based on an individual's birth chart and the planetary influences they wish to address. The rituals are customized to align with the person's specific needs.</p>
                    </div>
                </div>

                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Spiritual and Energetic Significance:</h5>

                        <p> Beyond the material benefits, havans are believed to create positive energetic shifts and enhance spiritual connections.</p>
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <p>It's important to note that havan remedies are part of certain astrological traditions and spiritual practices. They are not universally practiced or accepted in all astrological systems. Before performing a havan, it's advisable to consult with knowledgeable astrologers or spiritual practitioners who are well-versed in the specific tradition. Havans should be approached with reverence, respect, and a genuine intention to create positive change and balance in one's life. While astrological remedies such as havans can offer benefits, they are one aspect of a holistic approach to self-improvement, and individual effort, self-awareness, and personal growth play significant roles in shaping life experiences.</p>
            </div>


        </section>
    </main>

@endsection