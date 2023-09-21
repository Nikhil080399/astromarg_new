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
            <h1 class="text-light text-center header-content align-item-center">Plants</h1>
        </div>

        <section class="container">
            <div class="">
                <h3><span style="color:#ff4a17; ">Plants</span></h3>
                <p>In some alternative belief systems, including certain astrological practices, specific plants and herbs are believed to carry energies associated with planetary influences. These plants are used as remedies to enhance positive planetary effects, mitigate challenging influences, and promote well-being. Here are a few examples of plant remedies used in astrology:</P>
            </div>

            <div class="">
                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Sun (Surya) Remedies:</h5>
                        <p> Plants associated with the Sun, such as marigold, sunflower, and chamomile, are believed to enhance confidence, vitality, and leadership qualities.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Moon (Chandra) Remedies: </h5>

                        <p> Plants linked to the Moon, such as jasmine, lotus, and aloe vera, are believed to promote emotional balance, intuition, and receptivity.</p>
                    </div>
                </div>


                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Mars (Mangal) Remedies:</h5>

                        <p> Plants associated with Mars, such as red roses, red sandalwood, and garlic, are believed to enhance courage, energy, and assertiveness.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Mercury (Budh) Remedies:</h5>

                        <p> Plants linked to Mercury, such as mint, basil, and lavender, are believed to enhance communication skills, intellect, and adaptability.</p>
                    </div>
                </div>

                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Jupiter (Guru) Remedies:</h5>

                        <p> Plants associated with Jupiter, such as holy basil (tulsi), fig, and banyan, are believed to promote growth, wisdom, and abundance.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Venus (Shukra) Remedies:</h5>

                        <p> Plants linked to Venus, such as rose, hibiscus, and sandalwood, are believed to enhance love, harmony, and creativity..</p>
                    </div>
                </div>

                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Saturn (Shani) Remedies:</h5>

                        <p> Plants associated with Saturn, such as black sesame, myrrh, and cypress, are believed to promote discipline, endurance, and grounding.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Rahu and Ketu Remedies:</h5>

                        <p> Rahu and Ketu are shadow planets. Plants associated with these nodes, such as lemongrass, are believed to balance and harmonize their influences.</p>
                        <p>Plant remedies in astrology are often used in various ways, including:</p>
                    </div>
                </div>

                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Herbal Teas and Infusions:</h5>

                        <p> Consuming herbal teas made from specific plants is believed to carry their energetic qualities and promote balance.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Aromatherapy:</h5>

                        <p> Using essential oils derived from specific plants in aromatherapy practices is thought to enhance planetary influences.</p>
                    </div>
                </div>


                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Plant Essences and Tinctures:</h5>

                        <p> Plant essences or tinctures can be used to harness the energetic properties of plants and planets.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Plant Offerings:</h5>

                        <p> Offering plants or their parts as part of rituals is believed to seek blessings and balance planetary energies.</p>
                    </div>
                </div>


            </div>

            <div class="mt-5">
                <p>It's important to note that plant remedies in astrology are based on alternative beliefs and practices. Their effectiveness can vary among different individuals and practitioners. If you're interested in using plant remedies for astrology or other spiritual purposes, it's advisable to approach the practice with an open mind and consult with practitioners who specialize in astrology, herbalism, or related fields. Additionally, ensure that any practices involving plants are safe and suitable for your specific environment and health considerations.</p>
            </div>





        </section>
    </main>


@endsection