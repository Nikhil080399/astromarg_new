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
            <h1 class="text-light text-center header-content align-item-center">Dharma</h1>
        </div>

        <section class="container">
            <div class="">
                <h3><span style="color:#ff4a17; ">Dharma</span></h3>
                <p>In astrology, <span style="font-weight: bold;">"dharma"</span> remedies refer to actions and practices that align with one's personal sense of duty, righteousness, and ethical conduct. These remedies are not focused on appeasing specific planetary influences but rather on living in accordance with one's higher values and principles. Dharma remedies are based on the belief that when individuals live a life aligned with their true purpose and ethical values, they create positive karmic effects and attract positive energies into their lives. Here's an overview of dharma remedies in astrology:</P>
            </div>

            <div class="">
                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Personal Values and Ethics:</h5>
                        <p> Dharma remedies emphasize living in accordance with one's personal values, ethical principles, and sense of moral duty. This involves making choices that resonate with one's higher self.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Service and Compassion: </h5>

                        <p> Acts of service, compassion, and kindness are considered integral to dharma remedies. Helping others and contributing positively to society create positive karmic effects.</p>
                    </div>
                </div>


                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Self-Reflection and Self-Improvement:</h5>

                        <p> Dharma remedies encourage self-awareness, introspection, and continuous self-improvement. It involves identifying areas of growth and working on one's character and behavior.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Right Livelihood:</h5>

                        <p> Engaging in work that aligns with one's values and contributes positively to the world is an important aspect of dharma remedies. Choosing a profession that is ethical and resonates with one's purpose is emphasized.</p>
                    </div>
                </div>

                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Balancing Material and Spiritual Goals: </h5>

                        <p> Dharma remedies encourage individuals to strike a balance between material pursuits and spiritual growth. Finding harmony between these aspects leads to a more fulfilling life.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Lifelong Learning:</h5>

                        <p> Continuous learning and personal growth are part of dharma remedies. Expanding one's knowledge and skills contribute to personal development.</p>
                    </div>
                </div>

                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Mindful Choices:</h5>

                        <p> Making conscious and mindful choices in various areas of life, such as relationships, health, and daily actions, is an important practice in dharma remedies.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Cultivating Virtues:</h5>

                        <p> Fostering virtues such as honesty, integrity, humility, gratitude, and patience are central to dharma remedies. These virtues contribute to positive character development.</p>
                    </div>
                </div>

                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Contribution to Society:</h5>

                        <p> Dharma remedies encourage individuals to contribute to the welfare of society through positive actions, volunteering, and initiatives that uplift others.</p>
                    </div>


                </div>
            </div>

            <div class="mt-5">
                <p>It's important to note that dharma remedies are rooted in a holistic approach to living a purposeful and meaningful life. While astrology can provide insights and guidance, dharma remedies focus on personal growth, self-awareness, and ethical conduct. Dharma is a universal concept that transcends specific astrological traditions and cultural beliefs.</p>
                <p>Engaging in dharma remedies is a deeply personal journey that involves aligning with one's higher purpose and making choices that resonate with integrity and authenticity. Dharma is about consciously choosing actions that contribute to the greater good and create a positive ripple effect in the world.</p>
            </div>

        </section>
    </main>

@endsection