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
            color: white;
            text-align: justify;
            padding: 10px;
        }
    </style>

<main style="background-color:#07273c;">
        <div class="header-bg-img">
            <h1 class="text-light text-center header-content align-item-center">Pooja</h1>
        </div>

        <section class="container">
            <div class="">
                <h3><span style="color:#ff4a17; ">Pooja</span></h3>
                <p><span style="font-weight: bold;">"Pooja" (also spelled as "puja")</span> is a ritualistic worship
                    practice in Hinduism and certain other Indian religions. It involves the offering of devotion,
                    reverence, and prayers to deities, divine forces, and spiritual principles. Pooja ceremonies are an
                    essential aspect of religious observance and can take various forms, ranging from simple daily
                    rituals to elaborate temple ceremonies.</p>
                <h3><span style="color:#ff4a17; ">Key features of Pooja include : </span></h3>
            </div>

            <div class="">
                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Devotional Offering : </h5>
                        <p>Pooja is a way for devotees to express their love, respect, and gratitude towards deities and
                            the divine. Offerings are made as gestures of devotion and reverence.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Deities and Idols: </h5>
                        <p>Poojas are often performed in front of images, statues, or symbols of deities. These
                            represent the presence of the divine and serve as focal points for worship.</p>
                    </div>
                </div>


                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Mantras and Chants : </h5>

                        <p> During a Pooja, specific mantras (sacred sounds or verses) are recited to invoke the
                            presence and blessings of the deity. Mantras hold spiritual significance and are believed to
                            have a transformative effect.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Offerings : </h5>

                        <p>Offerings can include flowers, incense, fruits, sweets, water, and other items that are
                            considered pure and pleasing to the deities. These offerings are symbolically presented to
                            the divine during the Pooja.</p>
                    </div>
                </div>

                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Light and Fire : </h5>

                        <p>Lighting a lamp or candle, and sometimes even a small fire, is a common aspect of Pooja. Fire
                            is considered sacred and purifying, and its presence symbolizes the divine presence.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Rituals and Gestures:</h5>

                        <p>Poojas involve specific rituals, gestures, and actions that are believed to create a
                            spiritual connection with the divine. These rituals often have deep symbolic meanings.</p>
                    </div>
                </div>
                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Personal and Community Poojas : </h5>

                        <p>Poojas can be performed both privately and publicly. Individual households often have daily or occasional Poojas, while temples and community gatherings host larger ceremonies.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Specific Occasions : </h5>

                        <p>Poojas are performed on various occasions, such as festivals, birthdays of deities (known as "tithis"), auspicious days, and significant life events.</p>
                    </div>
                </div>
                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Intention and Prayers : </h5>

                        <p>Along with offering physical items, devotees offer their prayers and intentions during Pooja. These prayers can include seeking blessings, guidance, protection, or expressing gratitude.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Meditative Practice : </h5>

                        <p>Poojas are also considered a form of meditation and spiritual discipline. They encourage concentration, mindfulness, and a deep connection with the divine.</p>
                    </div>
                </div>




            </div>

            <div class="mt-5">
                <p>The practice of Pooja varies across different traditions, regions, and communities. It's a way for individuals to establish a personal connection with the divine and engage in a meaningful dialogue with their spirituality. Whether performed in a simple domestic setting or in grand temple ceremonies, Pooja is a central part of the spiritual life of many Hindus and is an expression of their devotion and faith.</p>
            </div>

        </section>
    </main>



@endsection