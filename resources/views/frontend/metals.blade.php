@extends('frontend.main')

@section('body')
    <style>
        .header-bg-img {
            background-image: url({{asset('frontend/AstromarG/bg.jpg')}});
            background-size: cover;
            background-repeat: no-repeat;
            height: 21rem;
            padding-top: 10rem;
        }

        p {
            color: white;
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
            <h1 class="text-light text-center header-content align-item-center">Metals</h1>
        </div>

        <section class="container">
            <div class="">
                <h3><span style="color:#ff4a17;">Metals</span></h3>
                <p>In astrology and various alternative belief systems, certain metals are believed to have specific
                    energetic properties that can influence and enhance the effects of planetary influences or bring about
                    desired outcomes. These metals are often used as remedies to balance astrological energies and promote
                    well-being. Here are a few examples of metals used as remedies in astrology:</P>
            </div>

            <div class="">
                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Gold:</h5>
                        <p>Gold is associated with the Sun and is believed to symbolize wealth, power, and authority. It is
                            often used to strengthen the positive effects of the Sun and boost confidence.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Silver: </h5>

                        <p>Silver is linked to the Moon and represents emotions, intuition, and feminine energy. It is used
                            to balance emotions and promote mental clarity.</p>
                    </div>
                </div>


                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Copper:</h5>

                        <p>Copper is associated with Venus and is believed to attract love, beauty, and creativity. It is
                            used to enhance relationships and artistic endeavors.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Iron:</h5>

                        <p>Iron is associated with Mars and symbolizes energy, courage, and determination. It is used to
                            strengthen willpower and overcome obstacles.</p>
                    </div>
                </div>

                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Mercury: </h5>

                        <p>Mercury is associated with the planet of the same name and is linked to communication and
                            intellect. Metals like bronze and brass are used to enhance communication skills and mental
                            agility.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Lead:</h5>

                        <p>Lead is associated with Saturn and represents discipline and structure. It is used to promote
                            discipline and focus.</p>
                    </div>
                </div>

                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Alloy Remedies:</h5>

                        <p>Some remedies involve using specific metal alloys or combinations to harness the energies of
                            multiple planets. For example, an alloy of various metals might be used to balance planetary
                            influences.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Wearing Jewelry:</h5>

                        <p>Wearing jewelry made from specific metals is believed to carry the energetic qualities of those
                            metals. For example, wearing a gold ring might enhance the positive influence of the Sun.</p>
                    </div>
                </div>

                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Yantras and Lockets:</h5>

                        <p>Yantras (geometric diagrams) or lockets made from specific metals are often used as talismans to
                            carry the energy of specific planets or deities.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Offerings and Rituals:</h5>

                        <p>Offering metals in the form of rituals or as part of remedies is believed to appease planetary
                            energies and seek their blessings.</p>
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <p>It's important to note that the use of metals as remedies in astrology is based on alternative beliefs
                    and practices and may vary among different individuals and practitioners. If you're interested in using
                    metal remedies for astrology or other spiritual purposes, it's advisable to approach the practice with
                    an open mind and consult with practitioners who specialize in astrology or related fields. Additionally,
                    ensure that any practices involving metals are safe and in alignment with your personal beliefs.</p>
            </div>

        </section>
    </main>
@endsection
