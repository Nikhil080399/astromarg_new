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
            <h1 class="text-light text-center header-content align-item-center">Colors</h1>
        </div>

        <section class="container">
            <div class="">
                <h3><span style="color:#ff4a17; ">Colors</span></h3>
                <p> remedies in astrology involve the use of specific colors to balance and harmonize the energies
                    associated with planetary influences. Different colors are believed to resonate with different planets
                    and can be used as remedies to enhance positive influences or mitigate challenging aspects. Here are
                    some examples of color remedies in astrology:</P>
            </div>

            <div class="">
                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Red: </h5>
                        <p>Red is associated with the planet Mars and is believed to enhance courage, energy, and passion.
                            It can be used to boost motivation and assertiveness.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Yellow: </h5>

                        <p> Yellow is linked to the planet Mercury and represents intellect, communication, and learning. It
                            can be used to improve communication skills and mental agility.</p>
                    </div>
                </div>


                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Orange:</h5>

                        <p> Orange is associated with Jupiter and is believed to promote expansion, growth, and optimism. It
                            can be used to attract opportunities and abundance.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Green:</h5>

                        <p> Green is linked to Venus and symbolizes love, harmony, and beauty. It can be used to enhance
                            relationships and promote emotional well-being.</p>
                    </div>
                </div>

                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Blue: </h5>

                        <p> Blue is associated with Saturn and represents discipline, focus, and stability. It can be used
                            to promote a sense of calmness and structure.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Indigo:</h5>

                        <p> Indigo is linked to Neptune and represents intuition, spirituality, and imagination. It can be
                            used to enhance psychic abilities and spiritual awareness.</p>
                    </div>
                </div>

                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Violet/Purple:</h5>

                        <p> Violet or purple is associated with Uranus and is believed to promote innovation, uniqueness,
                            and independence. It can be used to stimulate creativity.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">White:</h5>

                        <p> White is linked to the Moon and represents purity, emotions, and intuition. It can be used to
                            promote emotional balance and clarity.</p>
                    </div>
                </div>

                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Black:</h5>

                        <p> Black is associated with the North Node (Rahu) and is believed to represent mystery and
                            transformation. It can be used to explore hidden aspects of the self.</p>
                        <p>Color remedies are often used in various ways, including:</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Clothing :</h5>

                        <p> Wearing clothing of specific colors associated with beneficial planets can enhance their
                            positive influences.</p>
                    </div>
                </div>


                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Home Decor:</h5>

                        <p>Using colors in your home or workspace that resonate with specific planets can create a
                            harmonious environment.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Meditation and Visualization: </h5>

                        <p>Visualizing specific colors during meditation or relaxation practices is believed to align with
                            the energies of corresponding planets.</p>
                    </div>
                </div>


            </div>

            <div class="mt-5">
                <p>It's important to note that color remedies in astrology are based on alternative beliefs and practices
                    and may vary among different individuals and practitioners. If you're interested in using color remedies
                    for astrology or other spiritual purposes, it's advisable to approach the practice with an open mind and
                    consult with practitioners who specialize in astrology or related fields. Additionally, ensure that any
                    practices involving colors are in alignment with your personal preferences and cultural traditions.</p>
            </div>
        </section>
    </main>
@endsection
