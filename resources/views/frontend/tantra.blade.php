@extends('frontend.main')

@section('body')
    <style>
        .heading {
            background-color: #07273c;
            background-image: url({{asset('frontend/AstromarG/bg.jpg')}});
            transition-duration: 1ms;
            background-size: cover;
            margin: 0;
            width: 100%;
            height: 21rem;
        }

        .main-heading h2 {
            color: #ff4a17;
            background-color: #07273c;
        }

        .tantra {
            background-color: #07273c;
        }

        .card {
            box-shadow: 0 0.5rem 1rem rgba(7, 7, 8, 1.15);
        }

        .card .card-title {
            color: #ff4a17;
        }

        .main-heading .card {
            margin-bottom: 15rem;
        }

        .for-head .for-info {
            color: #ff4a17;
        }
    </style>

    <div class="tantra">

        <!-------------------------------------------- Heading ------------------------------------------------------------>
        <section class="heading">
            <h1 class="text-center text-light pt-5 mt-5 " style="font-size:3rem;">TANTRA</h1>
        </section>

        <!------------------------------------------ Title---------------------------------------- -->
        <section id="for-body" class="for-head pb-0 px-5">
            <p class="desc fs-5 text-light"><span class="for-info fs-2 fw-bold">Info:</span> Tantra is a complex and diverse
                spiritual, philosophical, and ritualistic tradition that originated in ancient India. It encompasses a wide
                range of practices, beliefs, and teachings that aim to connect the individual with the divine, achieve
                spiritual enlightenment, and attain self-realization. Tantra is often associated with both Hinduism and
                Buddhism, but it has also influenced various other spiritual and philosophical systems.</p>
        </section>

        <!---------------------------------------------- Features------------------------------------------------------------>
        <section id="for-title" class="main-heading  px-5">
            <h2 class="title ps-3">Some key aspects of Tantra:</h2>
            <!------------------------------------------ Spiritual Philosophy --------------------------------------------------->
            <div class="card bg-transparent mb-5 " style="border:none">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{asset('frontend/AstromarG/spiritual philosophy.jpg')}}" class="img-fluid " alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fw-bold fs-3">Spiritual Philosophy: </h5>
                            <p class="card-text text-light">Tantra is built upon the principle that the material world and
                                the divine are not separate entities but interconnected. It emphasizes the idea that the
                                path to spiritual growth and realization involves embracing and transcending worldly
                                experiences rather than renouncing them.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!---------------------------------------- Energy and Consciousness ---------------------------------------------->
            <div class="card bg-transparent mb-5 " style="border:none">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{asset('frontend/AstromarG/Consciousness and energy.jpg')}}" class="img-fluid " alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fw-bold fs-3">Energy and Consciousness: </h5>
                            <p class="card-text text-light">Tantra places great importance on the concept of energy, often
                                referred to as "Shakti" or divine feminine energy. The practices involve harnessing and
                                channeling this energy through various means to awaken higher states of consciousness and
                                achieve spiritual evolution.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!----------------------------------- Rituals and Practices ------------------------------------------>
            <div class="card bg-transparent mb-5 " style="border:none">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{asset('frontend/AstromarG/ritual and practices.jpg')}}" class="img-fluid " alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fw-bold fs-3">Rituals and Practices: </h5>
                            <p class="card-text text-light">Tantra incorporates a wide range of rituals, meditation
                                techniques, mantras, visualizations, and symbolic gestures to invoke specific energies and
                                connect with divine forces. These practices can vary significantly across different tantric
                                traditions.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!---------------------------- Sacred Texts ---------------------------------------->
            <div class="card bg-transparent mb-5 " style="border:none">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{asset('frontend/AstromarG/Sacred Texts.jpg')}}" class="img-fluid " alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fw-bold fs-3">Sacred Texts: </h5>
                            <p class="card-text text-light">There are a number of tantric texts that serve as guides for
                                practitioners. These texts often contain philosophical teachings, descriptions of rituals,
                                and methods for achieving spiritual transformation.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!----------------------------------- Guru-Disciple Relationship ---------------------------------------------->

            <div class="card bg-transparent mb-5 " style="border:none">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{asset('frontend/AstromarG/Guru Shiksha.jpg')}}" class="img-fluid " alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fw-bold fs-3">Guru-Disciple Relationship: </h5>
                            <p class="card-text text-light">Tantra places a strong emphasis on the relationship between a
                                teacher (guru) and a student (disciple). The guru imparts knowledge, guidance, and
                                initiations to the disciple, helping them navigate the complexities of tantric practices.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!---------------------------------- Sexuality and Taboos --------------------------------------------->
            <div class="card bg-transparent mb-5 " style="border:none">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{asset('frontend/AstromarG/Gender unequality.jpg')}}" class="img-fluid " alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fw-bold fs-3">Sexuality and Taboos: </h5>
                            <p class="card-text text-light">Some tantric traditions incorporate rituals that involve sexual
                                symbolism and practices. However, it's important to note that the concept of sexuality in
                                tantra is often metaphorical, representing the union of opposing forces rather than solely
                                referring to physical acts. Tantra's approach to sexuality has been widely misunderstood,
                                and many traditions do not involve explicit sexual practices.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!---------------------------------- Left-Hand and Right-Hand Paths----------------------------------->
            <div class="card bg-transparent mb-5 " style="border:none">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{asset('frontend/AstromarG/right hand left hand.jpg')}}" class="img-fluid " alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fw-bold fs-3">Left-Hand and Right-Hand Paths: </h5>
                            <p class="card-text text-light">Tantra can be broadly categorized into "left-hand" and
                                "right-hand" paths. The right-hand path focuses on purification, self-discipline, and
                                ascetic practices, while the left-hand path may involve more unconventional and challenging
                                practices aimed at quicker spiritual attainment.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!--------------------------------- Variety of Traditions -------------------------------------------------->
            <div class="card bg-transparent mb-5 " style="border:none">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{asset('frontend/AstromarG/Variety of Traditions.jpg')}}" class="img-fluid " alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fw-bold fs-3">Variety of Traditions: </h5>
                            <p class="card-text text-light">Tantra is not a monolithic tradition; it encompasses numerous
                                schools, lineages, and regional variations. These include Hindu Tantra, Buddhist Tantra
                                (Vajrayana), Jain Tantra, and others.
                                It's important to approach the study of tantra with an open mind and an awareness of its
                                depth and complexity. Tantra's teachings and practices can vary widely, and its
                                misunderstood aspects have sometimes led to sensationalism and misconceptions. Genuine
                                tantric practices are rooted in spirituality, self-realization, and the pursuit of
                                enlightenment.
                            </p>
                        </div>
                    </div>
                </div>
            </div>



        </section>

    </div>
@endsection
