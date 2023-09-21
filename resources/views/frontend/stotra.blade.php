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

        .header-bg-img h1 {

            text-shadow: 0 0.5rem 1rem rgba(250, 250, 250, 0.6);

        }
    </style>

<main style="background-color:#07273c;">
        <div class="header-bg-img">
            <h1 class="text-center text-light" style="font-size:3rem;">Stotra</h1>

        </div>

        <section class="container">
            <div class="">
                <h3><span style="color:#ff4a17;">"Stotra"</span></h3>
                <p><span style="font-weight: bold;">A "Stotra" is a type of devotional hymn or prayer in the Hindu
                        tradition. It is composed in verse form and is used to praise and glorify various deities,
                        divine qualities, or spiritual concepts. Stotras are an integral part of Hindu worship and
                        spiritual practice, and they are often recited as a means of expressing devotion, seeking
                        blessings, and invoking divine energies.</p>
                <h3><span style="color:#ff4a17; ">Key features of Stotra include : </span></h3>
            </div>

            <div class="">
                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Verse Format : </h5>
                        <p>Stotras are typically composed in poetic verses, often with a regular rhythm and meter. The
                            verses may follow specific poetic structures, enhancing the lyrical and devotional quality
                            of the text.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Deities or Concept : </h5>
                        <p>Deity or Concept: Stotras can be dedicated to specific deities, both major and minor, from
                            the Hindu pantheon. They can also focus on divine qualities, cosmic forces, or spiritual
                            principles.</p>
                    </div>
                </div>


                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Devotional Expression : </h5>

                        <p>Stotras are an expression of the devotee's devotion, love, and reverence for the divine. They
                            serve as a way to connect with the divine presence and seek blessings.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Benefits and Intentions : </h5>

                        <p>Stotras are believed to have various spiritual and practical benefits. Reciting them is
                            thought to purify the mind, bring peace, and align the individual with the divine will.
                            Different Stotras may be recited with specific intentions, such as seeking protection,
                            prosperity, knowledge, or liberation.</p>
                    </div>
                </div>

                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Light and Fire : </h5>

                        <p>Lighting a lamp or candle, and sometimes even a small fire, is a common aspect of Pooja. Fire
                            is considered sacred and purifying, and its presence symbolizes the divine presence.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Cultural and Regional Variations : </h5>

                        <p>Stotras come in various languages and styles, reflecting the diversity of Hindu traditions
                            and cultural backgrounds. Each region and community may have its own set of beloved Stotras
                            dedicated to particular deities or revered figures.</p>
                    </div>
                </div>
                <div class="row justify-content-around">
                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Recitation and Chanting : </h5>

                        <p>Stotras are recited aloud or chanted during personal prayers, rituals, and religious
                            ceremonies. The rhythmic chanting of Stotras is also considered a form of meditation and a
                            way to create a spiritual atmosphere.</p>
                    </div>

                    <div class="card p-2 m-4 col-md-5 col-sm-12">
                        <h5 class="crad-title">Scriptural Sources : </h5>

                        <p>Many Stotras are found in Hindu scriptures, such as the Vedas, Puranas, and other sacred
                            texts. Others have been composed by revered saints and poets throughout history.</p>
                    </div>
                </div>


            </div>

            <div class="mt-5">
                <p style="font-weight: bold;">Some well-known examples of Stotras include the "Vishnu Sahasranama" (a thousand names of Lord
                    Vishnu), the "Lalita Sahasranama" (a thousand names of the goddess Lalita Tripura Sundari), and the
                    "Shiva Tandava Stotram" (a hymn describing Lord Shiva's cosmic dance).
                    <br>Stotras are an integral part of Hindu devotional practice and are considered a means to deepen one's
                    connection with the divine while expressing profound spiritual sentiments.
                </p>
            </div>

        </section>
    </main>

@endsection