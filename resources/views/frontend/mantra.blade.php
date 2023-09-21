@extends('frontend.main')

@section('body')

<style>
    .heading {

      background-image:url({{asset('frontend/AstromarG/vedic_bg1.jpg')}});

      transition-duration: 1ms;

      background-size: cover;

      margin: 0;

      width: 100%;

      height: 21rem;
    }

    .heading h1 {

      text-shadow: 0 0.5rem 1rem rgba(250, 250, 250, 0.6);

    }

    .mantra-body {
      background-color: #07273c;
      color: white;
    }

    h2 {
      color: #ff4a17;
      font-weight: bold;
      text-decoration: underline;
    }

    .crad-title {
      color: #ff4a17;
    }

    p {
      text-align: justify;
      padding: 10px;
    }

    .for-cards .card {
      background: transparent;
      color: white;
      border: 1px solid #07273c;
      box-shadow: 0 0.5rem 1rem rgba(7, 7, 8, 1.15);
    }

    .for-example .for-img {
      width: 100%;
      height: 15rem;
    }

    .for-example .card {
      /* width:15rem; */
      /* min-height: 18rem; */
      justify-content: space-around;
    }
  </style>

<div class="mantra-body">

<section class="heading">

  <h1 class="text-center pt-5 mt-5 fw-bold text-light display-4">MANTRA</h1>

</section>
<section class="paragraph px-5">
  <p class="text-justify fw-bold"><span class="fs-1 fw-bold" style="color: #ff4a17;">Info : </span> A mantra
    is a sacred and powerful phrase, word, or sound that is repeated either silently or audibly as a
    form of meditation, prayer, or spiritual practice. Mantras hold special significance in various
    spiritual and religious traditions, including Hinduism, Buddhism, Jainism, Sikhism, and more. They are
    considered to have a transformative and purifying effect on the mind, body, and soul.</p>

  <h2 class="pt-2">Key Characteristics of Mantras:</h2>
</section>

<div class="for-cards">
  <div class="row justify-content-around pt-0">
    <div class="card p-2 m-4 col-md-5 col-sm-12 ">
      <h5 class="crad-title">Sound and Vibration : </h5>
      <p>Mantras are often composed of specific syllables, words, or phrases that are believed to carry
        inherent spiritual vibrations. Chanting or reciting these sounds is thought to invoke these
        vibrations and create a resonance with higher spiritual energies.</p>
    </div>

    <div class="card p-2 m-4 col-md-5 col-sm-12">
      <h5 class="crad-title">Repetition : </h5>

      <p>Repetition is a fundamental aspect of mantra practice. The repetition of a mantra can be done
        mentally, verbally, or even in a rhythmic, musical manner. The consistent repetition helps quiet
        the mind and focus the practitioner's attention.</p>
    </div>
  </div>


  <div class="row justify-content-around">
    <div class="card p-2 m-4 col-md-5 col-sm-12">
      <h5 class="crad-title">Meaning and Intent : </h5>

      <p>Some mantras have literal meanings and convey specific messages, while others may not have direct
        translations. The power of a mantra often lies not only in its linguistic meaning but also in
        its vibrational and spiritual essence.</p>
    </div>

    <div class="card p-2 m-4 col-md-5 col-sm-12">
      <h5 class="crad-title">Concentration and Meditation : </h5>

      <p>Mantras are commonly used as objects of concentration in meditation. By focusing on the mantra,
        practitioners aim to still the mind, enter deeper states of awareness, and connect with their
        inner selves or higher spiritual realms.</p>
    </div>
  </div>

  <div class="row justify-content-around">
    <div class="card p-2 m-4 col-md-5 col-sm-12">
      <h5 class="crad-title">Devotional and Spiritual Practice : </h5>

      <p>Mantras are used in various spiritual and devotional practices. They can be recited individually
        or as part of rituals, ceremonies, or prayer sessions.</p>
    </div>

    <div class="card p-2 m-4 col-md-5 col-sm-12">
      <h5 class="crad-title">Positive Influence : </h5>

      <p>Mantras are believed to have the ability to bring about positive changes, protection, healing,
        and spiritual growth. Different mantras may be associated with different intentions and
        outcomes.</p>
    </div>
  </div>

  <div class="row justify-content-around">
    <div class="card p-2 m-4 col-md-5 col-sm-12">
      <h5 class="crad-title">Initiation and Transmission : </h5>

      <p>In some traditions, receiving a mantra from a qualified teacher or guru is considered essential
        for its effective use. This initiation is believed to impart the spiritual potency and guidance
        associated with the mantra.</p>
    </div>


  </div>

</div>
<div class="for-example">
  <h2 class="px-5">Examples of Mantras:</h2>

  <div class="row row-cols-1 row-cols-md-3 g-4 m-4">
    <div class="col-sm-12 col-md-3">
      <div class="card">
        <img src="{{asset('frontend/AstromarG/om.jpg')}}" class="for-img card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Om (Aum): </h5>
          <p class="card-text">One of the most universally recognized mantras, "Om" represents the cosmic sound and
            the essence of reality in Hinduism. It is often chanted at the beginning and end of spiritual practices.
          </p>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-md-3">
      <div class="card">
        <img src="{{asset('frontend/AstromarG/om namah shivay.jpg')}}" class="for-img card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Om Namah Shivaya : </h5>
          <p class="card-text">A popular Hindu mantra that reveres Lord Shiva. It's often chanted as a form of
            devotion and to seek blessings and transformation.</p>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-md-3">
      <div class="card">
        <img src="{{asset('frontend/AstromarG/om mani padme hum.jpg')}}" class="for-img card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Om Mani Padme Hum : </h5>
          <p class="card-text">A well-known Buddhist mantra associated with compassion and the path to enlightenment
            in Tibetan Buddhism.</p>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-md-3">
      <div class="card">
        <img src="{{asset('frontend/AstromarG/sat nam.jpg')}}" class="for-img card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Sat Nam : </h5>
          <p class="card-text">A mantra in Sikhism that means "True Name" or "True Identity." It represents the
            eternal truth and reality of existence.</p>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-md-3">
      <div class="card">
        <img src="{{asset('frontend/AstromarG/gayatri mantra.jpg')}}" class="for-img card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Gayatri Mantra : </h5>
          <p class="card-text">A revered Vedic mantra that is chanted to invoke the divine light and wisdom.</p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


@endsection