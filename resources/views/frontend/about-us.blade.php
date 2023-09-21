@extends('frontend.main')

@section('body')

<style>
  .about h2 {

    font-weight: bold;

    color: #ff4a17;

    text-decoration: underline;

  }

  .about h4 {

    font-weight: bold;

    color: #ff4a17;

    /* text-decoration: underline; */

  }

  .heading h1 {

    text-shadow: 0 0.5rem 1rem rgba(250, 250, 250, 0.6);

  }

  .heading {

    background-image: url({{asset('frontend/AstromarG/bg.jpg')}});

    transition-duration: 1ms;

    background-size: cover;

    margin: 0;

    width: 100%;

    height: 21rem;
  }

  section {
    padding: 20px 0;
    overflow: hidden;
  }

  .card {

    background-color: transparent;

    /* margin: 0px 60px; */
    /* width: 100%; */
    /* justify-content:center; */
    box-shadow: 0 0.5rem 1rem rgba(7, 7, 8, 1.15);
    width: 100%;
    min-height: 100%;

  }

  .offer img {
    width: 100%;
    min-height: 20rem;
  }
</style>

<div class="about text-light" data-aos="fade-up" style="padding: 0rem 0rem;">

  <!------------------------------------ Heading ------------------------------------->
  {{-- dnvfdvbfddvbfdv --}}
  {{-- nikhil --}}

  <section class="heading">

    <h1 class="text-center pt-5 mt-5 " style="font-size:3rem;">About AstromarG</h1>

  </section> 

  <div class="m-0">

    <!--------------------------------- AstromarG : ------------------------------------->

    <section id="astromarg" class="astromarg px-3">

      <p style="font-size:2rem; color:#ff4a17;" class="text-center"><u style="font-weight:bold;">Astromar<span style="font-size:2.5rem;">G</span></u> : <span style="color:white; font-size:1.6rem;">Your Guide to
          Astrology and Vastu Harmony.</span></p>

      <p class="text-justify fw-bold"><span style="font-size:2rem; color:#ff4a17;">Info :</span> Welcome to AstromarG,
        your trusted destination for comprehensive astrology solutions and Vastu consultancy. Our mission is to empower individuals and families with the profound wisdom
        of astrology and Vastu Shastra to lead balanced, harmonious lives.</p>


      <!------ Our Vision ------->

      <div class="row mt-5 px-4" style="justify-content:space-around;">

        <div class="col-sm-12 col-md-5 mb-4">

          <div class="card" data-aos="zoom-in">
            <img src="{{asset('frontend/AstromarG/vision.jpg')}}" alt="..." style="width:100%; height: 20rem;">
            <div class="card-body">

              <h4 class="card-title text-center">Our Vision :</h4>

              <p class="card-text px-3 text-light" style="letter-spacing: 1px;">At AstromarG, we envision a world where
                ancient wisdom meets modern life, where individuals can tap into the cosmic energies and align their surroundings for
                greater well-being and success. We strive to be at the forefront of providing accurate astrological
                insights and effective Vastu solutions that cater to the unique needs of each person.</p>

            </div>

          </div>

        </div>

        <!------- Our Expertise : ------->

        <div class="col-sm-12 col-md-5 mb-4">

          <div class="card" data-aos="zoom-in">
            <img src="{{asset('frontend/AstromarG/expertise.jpg')}}" class="" alt="..." style="width:100%; height: 20rem;">
            <div class="card-body">
              <h4 class="card-title text-center">Our Expertise :</h4>

              <p class="card-text px-3 text-light" style="letter-spacing: 1px;">Led by a team of seasoned astrologers and
                Vastu
                experts, AstromarG brings together a wealth of knowledge and experience spanning years in the field.
                Our experts are not just practitioners; they are enthusiasts who are deeply passionate about helping
                you navigate life's challenges, make informed decisions, and harness positive energies.</p>

            </div>

          </div>

        </div>

      </div>

    </section>

    <!------------------------------ What We Offer ------------------------------------ -->

    <section id="offer" class="offer">

      <h2 class="text-center pb-3">What we offer :</h2>

      <p class="px-4 fw-bold">Astrology Solutions: Our astrology services go beyond daily horoscopes. We
        offer
        personalized birth chart readings, predictive astrology, Relationship compatibility analysis, Match making
        analysis, career guidance, health problem analysis, wealth analysis and more. With an emphasis on accuracy and
        clarity, we aim to provide insights that empower you to make confident choices.</p>

      <!---------- Vastu Consultancy :  ------------>

      <div class="row mt-5 px-3">

        <div class="col-sm-12 col-md-4 col-lg-4 mb-4">

          <div class="card" data-aos="zoom-in">
            <img src="{{asset('frontend/AstromarG/vastu_cons.webp')}}" alt="Vastu Consultancy">
            <div class="card-body ">

              <h4 class="card-title text-center">Vastu Consultancy:</h4>

              <p class="card-text text-light">Vastu Shastra is the art of harmonizing your living and
                working spaces with natural forces to create a nurturing environment. Our Vastu consultants offer
                on-site and remote consultations to help you optimize your spaces for positive energies, improved
                health, and prosperity.</p>

            </div>

          </div>

        </div>

        <!----------- Our Approach ------------>

        <div class="col-sm-12 col-md-4 col-lg-4 mb-4">

          <div class="card" data-aos="zoom-in">
            <img src="{{asset('frontend/AstromarG/our_approach.webp')}}" alt="Approach">
            <div class="card-body">

              <h4 class="card-title text-center">Our Approach :</h4>

              <p class="card-text text-light">We believe in a holistic approach to astrology and Vastu.
                Our solutions are not just based on traditional knowledge; we combine it with a modern understanding
                of psychology, science, and spirituality. This allows us to provide practical recommendations that
                resonate with today's fast-paced world while staying true to the essence of ancient wisdom.</p>

            </div>

          </div>

        </div>

        <!---------- Client-Centric Focus : ------------>

        <div class="col-sm-12 col-md-4 col-lg-4 mb-4">

          <div class="card" data-aos="zoom-in">
            <img src="{{asset('frontend/AstromarG/client_centric.jpg')}}" alt="Client">
            <div class="card-body ">

              <h4 class="card-title text-center">Client-Centric Focus : </h4>

              <p class="card-text text-light">AstromarG places the client at the center of everything we
                do. We take the time to understand your unique needs and concerns, ensuring that our solutions are
                tailored to your specific circumstances. Whether you're seeking clarity about your life's purpose or
                looking to enhance the energy flow in your home, we are here to guide you every step of the way.</p>

            </div>

          </div>

        </div>

      </div>

    </section>

    <!--------------------------------------- Footer-cards ----------------------------------------->

    <section class="footer_cards">

      <!------------- Join us on this journey --------------->

      <section id="offer" class="offer">

        <h2 class="text-center pb-3">Join Us on This Journey:</h2>

        <p class="px-4 fw-bold">We invite you to embark on a journey of self-discovery, transformation,
          and enlightenment with AstromarG. Explore our range of astrology and Vastu services, and let us be your companions
          in creating a life filled with positivity, balance, and success.</p>
        <!------------ Contact US --------------->

        <!-- <div class="col-sm-12 col-md-5">

            <div class="card p-3 bg-transparent">

              <h4 class="card-title text-center">Contact Us: </h4>

              <p class="card-text px-3 pt-4 text-justify text-light">Have questions or ready to begin your journey?
                Reach out to us today at [ksbbiochem@mail.com/9890114511]. We're here to assist you in unlocking the
                cosmic insights and harmonious energies that await you.

                <br>

                Feel free to customize and adapt this text to best represent your brand and the values of AstromarG
                astrology solution and Vastu consultancy.
              </p>



            </div>

          </div> -->

  </div>

  </section>
</div>

@endsection