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
            /* padding: 10px; */
            letter-spacing: 1px;
            color: white;
            /* font-weight: bold; */
        }
    </style>


    <main style="background-color:#07273c;">

        <!--================================== Heading:  ===============================-->
        <div class="header-bg-img">
            <h1 class="text-light text-center header-content align-item-center">Gemstones</h1>
        </div>

        <!--=========================================== Gemstones=========================================-->

        <section class="content px-3">
            <div class="">
                <h3><span style="color:#ff4a17; ">Gemstones</span></h3>
                <p class="px-4"><span style="font-weight: bold;">"Gemstones,"</span> are widely used in astrology as
                    remedies to balance or enhance specific planetary energies in a person's birth chart. Each gemstone
                    is associated
                    with a particular planet, and wearing the corresponding gemstone is believed to bring positive
                    influences
                    and mitigate challenging planetary placements. Here's an overview of gemstones in astrology:
                </P>
                <h3><span style="color:#ff4a17; ">Key features of Geamstones include:</span></h3>
            </div>

            <!--===============================Gemstone-Planet Association:  ====================================-->

            <div class="px-4">
                <div class="row justify-content-around">
                    <div class="card p-3 m-4 col-md-5 col-sm-12">
                        <div class="card-item p-3">
                            <img src="{{asset('frontend/AstromarG/Planertary_combination.png')}}" alt=""
                                style="height:15rem; width:100%;">
                        </div>
                        <div class="card-body pt-3">
                            <h4 class="crad-title text-center">Gemstone-Planet Association: </h5>
                                <p> Each planet is associated with a specific gemstone based on the qualities and
                                    energies attributed to both the planet and the stone. For example, the red coral
                                    (moonga) is associated with Mars, the blue sapphire (neelam) with Saturn, and the
                                    ruby (manik) with the Sun.</p>
                        </div>
                    </div>
                    <!--=========================================== Wearing Gemstones:  ====================================================-->
                    <div class="card p-3 m-4 col-md-5 col-sm-12">
                        <div class="card-item p-3">
                            <img src="{{asset('frontend/AstromarG/gemstones_wearing.jpeg')}}" alt="" style="height:15rem; width:100%;">
                        </div>
                        <div class="card-body pt-3">
                            <h4 class="crad-title text-center">Wearing Gemstones: </h5>
                                <p> Astrological gemstones are typically worn as rings or pendants. The gemstone is set
                                    in a specific
                                    metal (often gold or silver) and worn on a specific finger associated with the
                                    planet.</p>
                        </div>
                    </div>


                    <!--========================================Effects of Gemstones:  ==============================================-->
                    <!-- <div class="row justify-content-around"> -->
                    <div class="card p-3 m-4 col-md-5 col-sm-12">
                        <div class="card-item p-3">
                            <img src="{{asset('frontend/AstromarG/effects_of_gemstones.jpeg')}}" alt=""
                                style="height:15rem; width:100%;">
                        </div>
                        <div class="card-body pt-3">
                            <h4 class="crad-title text-center">Effects of Gemstones: </h5>

                                <p>It's believed that wearing the appropriate gemstone can enhance positive planetary
                                    influences and alleviate
                                    negative effects of challenging planetary placements in a person's birth chart.</p>
                        </div>
                    </div>

                    <!--===========================================Planetary Transits: ===============================================-->

                    <div class="card p-3 m-4 col-md-5 col-sm-12">
                        <div class="card-item p-3">
                            <img src="{{asset('frontend/AstromarG/planetary_transists.jpeg')}}" alt="" style="height:15rem; width:100%;">
                        </div>
                        <div class="card-body pt-3">
                            <h4 class="crad-title text-center">Planetary Transits: </h5>

                                <p> Some people wear gemstones during specific planetary transits or dasha periods to
                                    harness the positive
                                    energies associated with those planets.</p>
                        </div>
                    </div>

                    <!-- <div class="row justify-content-around"> -->

                    <!--==================================== Gemstone Energies:  ================================-->

                    <div class="card p-3 m-4 col-md-5 col-sm-12">
                        <div class="card-item p-3">
                            <img src="{{asset('frontend/AstromarG/gemstones_energy.jpeg')}}" alt="" style="height:15rem; width:100%;">
                        </div>
                        <div class="card-body pt-3">
                            <h4 class="crad-title text-center">Gemstone Energies: </h5>

                                <p> Gemstones are thought to emit certain energies or vibrations that resonate with the
                                    energy of the corresponding planet.
                                    This energy is believed to interact with the wearer's aura.</p>
                        </div>


                    </div>
                    <!--==================================== Consultation with Astrologers:  ================================-->

                    <div class="card p-3 m-4 col-md-5 col-sm-12">
                        <div class="card-item p-3">
                            <img src="{{asset('frontend/AstromarG/consultation_astrologer.jpeg')}}" alt="" style="height:15rem; width:100%;">
                        </div>
                        <div class="card-body pt-3">
                            <h4 class="crad-title text-center">Consultation with Astrologers: </h5>

                                <p>Astrologers analyze an individual's birth chart to determine which
                                    gemstone(s) may be beneficial based on the positions and aspects of planets.</p>
                        </div>


                    </div>

                    <!--==================================== Quality and Authenticity:  ================================-->

                    <div class="card p-3 m-4 col-md-5 col-sm-12">
                        <div class="card-item p-3">
                            <img src="{{asset('frontend/AstromarG/quality_gemstones.jpeg')}}" alt="" style="height:15rem; width:100%;">
                        </div>
                        <div class="card-body pt-3">
                            <h4 class="crad-title text-center">Quality and Authenticity: </h5>

                                <p> The quality, cut, clarity, and authenticity of the gemstone are
                                    crucial factors for its effectiveness as a remedy.</p>
                        </div>


                    </div>


                    <!--==================================== Personal Experience: ================================-->

                    <div class="card p-3 m-4 col-md-5 col-sm-12">
                        <div class="card-item p-3">
                            <img src="{{asset('frontend/AstromarG/chandal_analysis.jpeg')}}" alt="" style="height:15rem; width:100%;">
                        </div>
                        <div class="card-body pt-3">
                            <h4 class="crad-title text-center">Personal Experience: </h5>

                                <p> The effects of gemstone remedies can vary among individuals.
                                    Some people report positive changes and benefits, while others may not experience
                                    significant changes.
                                    It's important to approach gemstone remedies in astrology with a balanced perspective.
                                    While
                                    gemstones can have
                                    symbolic and energetic significance, they are not magical solutions and should not be
                                    relied
                                    upon solely for personal growth or well-being.
                                    Gemstone remedies are just one of many tools available within astrological practices and
                                    holistic well-being.
                                    If you're considering using gemstone remedies, consult with knowledgeable astrologers
                                    who
                                    can provide guidance based on your birth chart and specific
                                    planetary influences. Additionally, ensure that the gemstones are sourced ethically and
                                    from
                                    reputable sources to obtain the best possible quality.
                                </p>
                        </div>
                    </div>
                </div>
            </div>


        </section>
    </main>
@endsection
