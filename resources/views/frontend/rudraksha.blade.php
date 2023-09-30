@extends('frontend.main')

@section('body')

<style>
    .header-bg-img {
        background-image: url({{asset('frontend/AstromarG/bg.jpg')}});
        background-size: cover;
        background-repeat: no-repeat;
        height: 23rem;
        padding-top: 13rem;
    }

    .card {
        background-color: #07273c;
        border: 1px solid #07273c;
        box-shadow: 0 0.5rem 1rem rgba(7, 7, 8, 1.15);
    }

    .crad-title {
        color: #ff4a17;
        font-weight: bold;
    }

    p {
        /* text-align: justify; */
        letter-spacing: 1px;
        color: white;
    }
</style>

<main style="background-color:#07273c;">

    <!--================================== Heading:  ===============================-->
    <div class="header-bg-img">
        <h1 class="text-light text-center header-content align-item-center">Rudraksha</h1>
    </div>

    <!--=========================================== Rudraksha=========================================-->

    <section class="content px-3">
        <div class="">
            <h3><span style="color:#ff4a17; ">Rudraksha</span></h3>
            <p class="px-4"><span style="font-weight: bold;">"Rudraksha"</span> beads are considered sacred and
                are often used as astrological remedies in Vedic astrology. These beads are believed to have
                spiritual
                and healing properties, and wearing them is thought to enhance positive energies and mitigate
                challenging
                planetary influences. Here's an overview of rudraksha beads in astrology:
            </P>
            <h3><span style="color:#ff4a17; ">Key features of Rudraksha include:</span></h3>
        </div>

        <!--===============================1.Origin and Significance:  ====================================-->

        <div class="px-4">
            <div class="row justify-content-around">
                <div class="card p-3 m-4 col-md-5 col-sm-12">
                    <div class="card-item p-3">
                        <img src="{{asset('frontend/AstromarG/rudraksha_origin.jpeg')}}" alt="" style="height:15rem; width:100%;">
                    </div>
                    <div class="card-body pt-3">
                        <h4 class="crad-title text-center">1. Origin and Significance: </h5>
                            <p> Rudraksha beads are derived from the seeds of the Rudraksha tree.
                                They hold significance in Hinduism and are associated with Lord Shiva.
                                The term "rudraksha" is a combination of "Rudra" (another name for Lord Shiva)
                                and "Aksha" (eye), symbolizing the divine nature of the beads.</p>
                    </div>
                </div>
                <!--=========================================== 2.Mukhis (Facets):  ====================================================-->
                <div class="card p-3 m-4 col-md-5 col-sm-12">
                    <div class="card-item p-3">
                        <img src="{{asset('frontend/AstromarG/rudraksha_mukhi.jpeg')}}" alt="" style="height:15rem; width:100%;">
                    </div>
                    <div class="card-body pt-3">
                        <h4 class="crad-title text-center">2. Mukhis (Facets): </h5>
                            <p> Rudraksha beads come in different mukhis or facets, which are characterized by the
                                number of natural segments or divisions on the bead's surface. Different mukhis are
                                associated with different deities and planetary energies.</p>
                    </div>
                </div>


                <!--======================================== 3.Planetary Associations: ==============================================-->

                <div class="card p-3 m-4 col-md-5 col-sm-12">
                    <div class="card-item p-3">
                        <img src="{{asset('frontend/AstromarG/planetary_assc.jpg')}}" alt="" style="height:15rem; width:100%;">
                    </div>
                    <div class="card-body pt-3">
                        <h4 class="crad-title text-center">3. Planetary Associations: </h5>

                            <p>Each type of rudrakshamukhi is associated with a specific planet or deity.
                                For example, the five-faced (Panchmukhi) rudraksha is often associated with the
                                planet Jupiter (Guru), while the six-faced (Shanmukhi) rudraksha is linked to Venus
                                (Shukra).</p>
                    </div>
                </div>

                <!--===========================================4.Wearing Rudraksha:  ===============================================-->

                <div class="card p-3 m-4 col-md-5 col-sm-12">
                    <div class="card-item p-3">
                        <img src="{{asset('frontend/AstromarG/wearing_rudraksha.jpg')}}" alt="" style="height:15rem; width:100%;">
                    </div>
                    <div class="card-body pt-3">
                        <h4 class="crad-title text-center">4. Wearing Rudraksha: </h5>

                            <p> Rudraksha beads are typically worn as necklaces, bracelets, or pendants.
                                The choice of which mukhi to wear is based
                                on an individual's birth chart and the planetary influences they seek to balance or
                                enhance.</p>
                    </div>
                </div>

                <!--==================================== 5.Effects and Benefits:  ================================-->

                <div class="card p-3 m-4 col-md-5 col-sm-12">
                    <div class="card-item p-3">
                        <img src="{{asset('frontend/AstromarG/rudraksha.jpeg')}}" alt="" style="height:15rem; width:100%;">
                    </div>
                    <div class="card-body pt-3">
                        <h4 class="crad-title text-center">5. Effects and Benefits: </h5>

                            <p> Wearing rudraksha beads is believed to have spiritual, emotional, and physical
                                benefits.
                                They are thought to promote tranquility, concentration, and overall well-being.</p>
                    </div>


                </div>
                <!--==================================== 6.Energy and Aura:  ================================-->

                <div class="card p-3 m-4 col-md-5 col-sm-12">
                    <div class="card-item p-3">
                        <img src="{{asset('frontend/AstromarG/Aura-Chakra.jpg')}}" alt="" style="height:15rem; width:100%;">
                    </div>
                    <div class="card-body pt-3">
                        <h4 class="crad-title text-center">6. Energy and Aura:</h5>

                            <p>It is believed that rudraksha beads emit specific energies that interact with the
                                wearer's aura,
                                helping to harmonize and balance their energy field.</p>
                    </div>


                </div>

                <!--==================================== 7.Consultation with Astrologers:   ================================-->

                <div class="card p-3 m-4 col-md-5 col-sm-12">
                    <div class="card-item p-3">
                        <img src="{{asset('frontend/AstromarG/consultaion.jpeg')}}" alt="" style="height:15rem; width:100%;">
                    </div>
                    <div class="card-body pt-3">
                        <h4 class="crad-title text-center">7. Consultation with Astrologers: </h5>

                            <p>Astrologers analyze an individual's birth chart to recommend the appropriate mukhi of
                                rudraksha that
                                aligns with their planetary placements and energies.</p>
                    </div>


                </div>


                <!--==================================== 8.Ethical Sourcing:  ================================-->

                <div class="card p-3 m-4 col-md-5 col-sm-12">
                    <div class="card-item p-3">
                        <img src="{{asset('frontend/AstromarG/ethical_source.jpeg')}}" alt="" style="height:15rem; width:100%;">
                    </div>
                    <div class="card-body pt-3">
                        <h4 class="crad-title text-center">8. Ethical Sourcing: </h5>

                            <p>
                                It's important to obtain genuine and ethically sourced rudraksha beads from
                                reputable sources to
                                ensure their authenticity and effectiveness.
                            </p>
                    </div>
                </div>
            </div>

            <!--========================================= End-Paragraph ============================================-->
            <div class="mt-5">
                <p>It's worth noting that the effectiveness of rudraksha beads as astrological remedies can vary
                    among individuals.
                    While some people report experiencing positive changes and benefits, others may not feel
                    significant effects.
                    As with any astrological remedy, the belief, intention, and overall approach to personal growth
                    play important roles.
                    If you're considering using rudraksha beads as astrological remedies, it's advisable to consult
                    with experienced astrologers who can guide
                    you based on your birth chart and specific planetary influences. Additionally, approach the
                    practice with an open heart and
                    a sincere intention to align with positive energies and enhance your well-being.

                </p>
            </div>


    </section>
</main>


@endsection