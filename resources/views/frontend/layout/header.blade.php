  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top p-2" style="background-color: #15222b;">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="{{ url('/')}}"><img src="{{asset('frontend/assets/img/1.png')}}" alt="" class="m-0 p-0"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="disabled"><a href="{{ route('about-us')}}">About us</a></li>
          <li class="drop-down"><a href="#astrog_services">AstromarG Services</a>
            <ul>
              <li><a href="{{ route('astromarg-solution')}}">Astrology Solution</a></li>
              <li><a href="{{ route('vastu-consulation')}}">Vastu Consultation</a></li>
              <li><a href="{{ route('numerological-solution')}}">Numerological Solution</a></li>
            </ul>
          </li>
          <li><a href="{{ route('astro-services')}}">Astro Services</a></li>
          <li><a href="{{ route('blog')}}">Blog</a></li>
          <li class="drop-down"><a href="#a_remedies">Astro Remedies</a>
            <ul>
              <li><a href="{{ route('gemstones')}}">Gemstones</a></li>
              <li><a href="{{ route('rudraksha')}}">Rudraksha</a></li>
              <li><a href="{{ route('metals')}}">Metals</a></li>
              <li><a href="{{ route('colors')}}">Colors</a></li>
              <li><a href="{{ route('hasta-mudra')}}">Hasta Mudra</a></li>
              <li><a href="{{ route('plants')}}">Plants</a></li>
              <li><a href="{{ route('dharma')}}">Dharma</a></li>
              <li><a href="{{ route('daan')}}">Daan</a></li>
              <li><a href="{{ route('vrat')}}">Vrat</a></li>
              <li><a href="{{ route('havan')}}">Havan</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="#kundali_dosh">Kundali Dosh</a>
            <ul>
              <li><a href="{{ route('kalsarp-dosh')}}">Kalsarp Dosh</a></li>
              <li><a href="{{ route('sarp-dosh')}}">Sarp Dosh</a></li>
              <li><a href="{{ route('pitru-dosh')}}">Pitru Dosh</a></li>
              <li><a href="{{ route('mangal-dosh')}}">Mangal Dosh</a></li>
              <li><a href="{{ route('chandal-yoga')}}">Chandal Yoga</a></li>
              <li><a href="{{ route('vish-yog')}}">Vish Yog</a></li>
              <li><a href="{{ route('grahan-yog')}}">Grahan Yog</a></li>
              <li><a href="{{ route('nakshatra-dosh')}}">Nakshatra Dosh</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="#v_remedies">Vedic Remedies</a>
            <ul>
              <li><a href="{{ route('tantra')}}">Tantra</a></li>
              <li><a href="{{ route('mantra')}}">Mantra</a></li>
              <li><a href="{{ route('yantra')}}">Yantra</a></li>
              <li><a href="{{ route('pooja')}}">Pooja</a></li>
              <li><a href="{{ route('stotra')}}">Stotra</a></li>
            </ul>
          </li>


      </nav><!-- .nav-menu -->

      <!-- <a href="#about" class="get-started-btn scrollto">Appointement</a> -->

    </div>
  </header><!-- End Header -->