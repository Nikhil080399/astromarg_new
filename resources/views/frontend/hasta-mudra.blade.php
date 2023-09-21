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
            <h1 class="text-light text-center header-content align-item-center">Hasta Mudra</h1>
        </div>

        <section class="container">
            <div class="">
                <h3><span style="color:#ff4a17; ">Hasta Mudras</span></h3>
                <p>also known as hand gestures or seals, are specific hand positions used in various ancient traditions,
                    including yoga, Ayurveda, and even some forms of astrology. These mudras are believed to stimulate
                    specific energy flows, balance planetary influences, and promote well-being. While they are not directly
                    a part of traditional astrology, some practitioners use hast mudras as complementary practices to
                    support astrological remedies. Here are a few examples of how hast mudras might be used in this context:
                </P>
            </div>

            <div class="">
                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Gyan Mudra:</h5>
                        <p> This mudra involves touching the tip of the thumb to the tip of the index finger while keeping
                            the other fingers extended. Gyan mudra is associated with knowledge, wisdom, and planet Jupiter.
                            It's believed to enhance intellectual abilities and expand consciousness.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Surya Mudra: </h5>

                        <p>This mudra involves bending the ring finger to touch the base of the thumb while keeping the
                            other fingers extended. Surya mudra is associated with the Sun and is believed to boost energy,
                            digestion, and vitality.</p>
                    </div>
                </div>


                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Buddhi Mudra:</h5>

                        <p> In this mudra, the tip of the pinky finger touches the tip of the thumb, while the other fingers
                            remain extended. Buddhi mudra is associated with Mercury and is believed to enhance
                            communication, mental clarity, and decision-making.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Shunya Mudra: </h5>

                        <p>Shunya mudra is formed by bending the middle finger to touch the base of the thumb, while the
                            other fingers remain extended. This mudra is believed to balance the space element and promote
                            inner calmness.</p>
                    </div>
                </div>

                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Santosh Mudra:</h5>

                        <p> Santosh mudra involves touching the thumb to the ring finger's base, with the other fingers
                            extended. This mudra is believed to promote contentment, reduce stress, and encourage
                            relaxation.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Apana Mudra: </h5>

                        <p>In this mudra, the middle and ring fingers are bent to touch the tip of the thumb, while the
                            other fingers remain extended. Apana mudra is associated with the downward-flowing energy and is
                            believed to aid in detoxification and elimination.</p>
                    </div>
                </div>


            </div>

            <div class="mt-5">
                <p>These mudras are often practiced during meditation, yoga, or moments of relaxation. When used as
                    complementary practices to astrological remedies, hast mudras are believed to create a harmonizing
                    effect and help align energies with the corresponding planets.</p>

                <p>It's important to note that hast mudras are based on traditional practices and alternative belief
                    systems. Their effectiveness may vary among individuals and practitioners. If you're interested in using
                    hast mudras for astrology or other spiritual purposes, it's advisable to approach the practice with an
                    open mind and consult with practitioners who specialize in these practices. Additionally, ensure that
                    any practices involving mudras are safe and suitable for your specific circumstances.</p>
            </div>





        </section>
    </main>
@endsection
