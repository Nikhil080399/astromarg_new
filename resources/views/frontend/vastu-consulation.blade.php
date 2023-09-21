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

   .vastu_1 {
      background-color: #07273c;
   }

   .cad {
      box-shadow: 0 0.5rem 1rem rgba(7, 7, 8, 1.15);
   }

   .card-body .card-title {
      color: #ff4a17;
   }

   .main-heading .card {
      margin-bottom: 15rem;
   }

   .for-head .for-info {
      color: #ff4a17;
   }

   .pictures .img-fluid {
      /* height: 14.5rem;
         width: 100%; */
   }

   .heading h1 {
      text-shadow: 0 0.5rem 1rem rgba(250, 250, 250, 0.6);
   }

   .pictures .cad img {
      max-width: 14rem;
   }

   .pictures .card {
      max-width: 100%;

      /* max-height: 18rem; */
   }

   @media screen(min-width:210px) {}
</style>

<div class="vastu_1">

   <!-------------------------------------------- Heading ------------------------------------------------------------>
   <section class="heading">
      <h1 class="text-center text-light pt-5 mt-5 " style="font-size:3rem;">Vastu Shastra</h1>
   </section>

   <!------------------------------------------ Title---------------------------------------- -->
   <section id="for-body" class="for-head pb-0 px-3">
      <p class="desc fs-5 text-light"><span class="for-info fs-2 fw-bold">Info:</span> Vastu Shastra is an ancient
         Indian architectural and spatial planning system that guides the design and layout of buildings, homes, and
         other structures to create harmonious and balanced living environments. Vastu Shastra is based on the belief
         that the design and arrangement of spaces can influence the well-being, prosperity, and happiness of the
         occupants.</p>
   </section>

   <!---------------------------------------------- Features------------------------------------------------------------>
   <section id="for-title" class="main-heading px-3">
      <h2 class="title ps-3 mb-4">Key features of Vastu Shastra include:</h2>
      <!------------------------------------------ Alignment and Directions --------------------------------------------------->
      <div class="pictures">
         <div class="row px-4">

            <div class="cad col-sm-12 col-md-6 mb-3 d-flex bg-transparent">

               <img src="{{asset('frontend/AstromarG/alignment and direction.jpg')}}" class=" " alt="...">


               <div class="card-body">
                  <h5 class="card-title fw-bold fs-3">1] Alignment and Directions: </h5>
                  <p class="card-text text-light">Vastu emphasizes the proper alignment of a building with
                     the cardinal directions (North, South, East, and West) to harness cosmic energies and
                     natural forces.</p>
               </div>
            </div>

            <!-- <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                  <div class="cad text-center bg-transparent" style="max-width:100%; min-height:100%;">
                  
                     <img src="AstromarG/alignment and direction.jpg" class="for-img" style="width:44%;" alt="...">
                  <div class="card-body">
                        <h5 class="card-title fw-bold fs-4 p-3">1] Alignment and Directions: </h5>
                        <p class="card-text text-light">Vastu emphasizes the proper alignment of    a building with
                           the cardinal directions (North, South, East, and West) to harness cosmic energies and
                           natural forces.</p>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                  <div class="cad bg-transparent" style="max-width:100%; min-height:100%;">
                  
                     <img src="AstromarG/alignment and direction.jpg" class="for-img " style="width:30%; height:30%;" alt="...">
                  <div class="card-body">
                        <h5 class="card-title fw-bold fs-3 p-3">1] Alignment and Directions: </h5>
                        <p class="card-text text-light px-3">Vastu emphasizes the proper alignment of    a building with
                           the cardinal directions (North, South, East, and West) to harness cosmic energies and
                           natural forces.</p>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                  <div class="cad bg-transparent" style="max-width:100%; min-height:100%;">
                  
                     <img src="AstromarG/alignment and direction.jpg" class="for-img" style="width:30%; height:30%;" alt="...">
                  <div class="card-body">
                        <h5 class="card-title fw-bold fs-3 p-3">1] Alignment and Directions: </h5>
                        <p class="card-text text-light px-3">Vastu emphasizes the proper alignment of    a building with
                           the cardinal directions (North, South, East, and West) to harness cosmic energies and
                           natural forces.</p>
                     </div>
                  </div>
               </div> -->

            <!-- <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                  <div class=" d-flex mb-3 bg-transparent">
                     <img src="AstromarG/alignment and direction.jpg" class="for-img" alt="...">
                     <div class="cad-body">
                        <h5 class="card-title fw-bold fs-3 ">1] Alignment and Directions: </h5>
                        <p class="card-text text-light">Vastu emphasizes the proper alignment of a building with
                           the cardinal directions (North, South, East, and West) to harness cosmic energies and
                           natural forces.</p>
                     </div>
                  </div>
               </div> -->
            <!-- </div> -->

            <!---------------------------------------- Five Elements ---------------------------------------------->

            <div class="cad d-flex col-sm-12 col-md-6 mb-3 bg-transparent">
               <img src="{{asset('frontend/AstromarG/Five-Element.jpg')}}" class="img-fluid " alt="...">
               <div class="card-body">
                  <h5 class="card-title fw-bold fs-3">2] Five Elements: </h5>
                  <p class="card-text text-light">Vastu takes into account the five elements—earth, water,
                     fire, air, and space—and aims to balance their energies within a space to create
                     harmony and positivity.</p>
               </div>
            </div>

            <!----------------------------------- Zoning and Functions ------------------------------------------>
            <div class="cad d-flex col-sm-12 col-md-6 mb-3 bg-transparent">
               <img src="{{asset('frontend/AstromarG/zoning-funtctions.jpg')}}" class="img-fluid rounded-start" alt="...">
               <div class="card-body">
                  <h5 class="card-title fw-bold fs-3">3] Zoning and Functions: </h5>
                  <p class="card-text text-light">Different areas within a building are associated with
                     specific functions (e.g., sleeping, cooking, working) and elements. Vastu guides the
                     placement and design of these zones to optimize energy flow.</p>
               </div>
            </div>

            <!---------------------------- Entrances and Doors---------------------------------------->
            <div class="cad col-sm-12 col-md-6 mb-3 bg-transparent">
               <div class="row g-0">
                  <div class="col-md-5">
                     <img src="{{asset('frontend/AstromarG/entrace.png')}}" class="img-fluid " alt="...">
                  </div>
                  <div class="col-md-7">
                     <div class="card-body">
                        <h5 class="card-title fw-bold fs-3">4] Entrances and Doors: </h5>
                        <p class="card-text text-light">The location and orientation of entrances and doors are
                           important to facilitate the smooth flow of positive energy and discourage negativity.
                        </p>
                     </div>
                  </div>
               </div>
            </div>

            <!----------------------------------- Materials and Colors ---------------------------------------------->

            <div class="card mb-3 col-sm-12 col-md-6 bg-transparent">
               <div class="row g-0">
                  <div class="col-md-5">
                     <img src="{{asset('frontend/AstromarG/materials-colors.jpg')}}" class="img-fluid " alt="...">
                  </div>
                  <div class="col-md-7">
                     <div class="card-body">
                        <h5 class="card-title fw-bold fs-3">5] Materials and Colors: </h5>
                        <p class="card-text text-light">Vastu recommends using specific building materials and
                           colors that are aligned with the energies of the space.</p>
                     </div>
                  </div>
               </div>
            </div>

            <!----------------------------------Sacred Geometry --------------------------------------------->
            <div class="card col-sm-12 col-md-6 mb-3 bg-transparent">
               <div class="row g-0">
                  <div class="col-md-5">
                     <img src="{{asset('frontend/AstromarG/scared and geometry.jpg')}}" class="img-fluid " alt="...">
                  </div>
                  <div class="col-md-7">
                     <div class="card-body">
                        <h5 class="card-title fw-bold fs-3">6] Sacred Geometry: </h5>
                        <p class="card-text text-light">Vastu Shastra incorporates sacred geometric principles and
                           proportions to create spaces that resonate with universal harmony.</p>
                     </div>
                  </div>
               </div>
            </div>

            <!----------------------------------Balance of Energies----------------------------------->
            <div class="card col-sm-12 col-md-6 mb-3 bg-transparent">
               <div class="row g-0">
                  <div class="col-md-5">
                     <img src="{{asset('frontend/AstromarG/balace-energy.jpg')}}" class="img-fluid " alt="...">
                  </div>
                  <div class="col-md-7">
                     <div class="card-body">
                        <h5 class="card-title fw-bold fs-3">7] Balance of Energies: </h5>
                        <p class="card-text text-light">Vastu aims to balance the energies of a space by avoiding
                           clutter, obstruction, and imbalance in the arrangement of furniture and objects.</p>
                     </div>
                  </div>
               </div>
            </div>

            <!--------------------------------- Remedies -------------------------------------------------->
            <div class="card col-sm-12 col-md-6 mb-3 bg-transparent">
               <div class="row g-0">
                  <div class="col-md-5">
                     <img src="{{asset('frontend/AstromarG/remedies.jpg')}}" class="img-fluid " alt="...">
                  </div>
                  <div class="col-md-7">
                     <div class="card-body">
                        <h5 class="card-title fw-bold fs-3">8] Remedies: </h5>
                        <p class="card-text text-light">In cases where Vastu principles are not fully met due to
                           the
                           constraints of a space, remedies like specific rituals, placements of objects, and use
                           of
                           symbols are suggested to mitigate negative influences.
                        </p>
                     </div>
                  </div>
               </div>
            </div>

            <!------------------------------- Residential and Commercial Spaces ------------------------------------>
            <div class="card col-sm-12 col-md-6 mb-3 bg-transparent">
               <div class="row g-0">
                  <div class="col-md-5">
                     <img src="{{asset('frontend/AstromarG/residential_commerical.jpg')}}" class="img-fluid " alt="...">
                  </div>
                  <div class="col-md-7">
                     <div class="card-body">
                        <h5 class="card-title fw-bold fs-3">9] Residential and Commercial Spaces: </h5>
                        <p class="card-text text-light">Vastu principles can be applied to homes, offices,
                           factories,
                           temples, and other structures to create environments conducive to well-being and
                           success.
                        </p>
                     </div>
                  </div>
               </div>
            </div>


            <!------------------------------------------- Cultural Variations ------------------------------------------>
            <div class="card col-sm-12 col-md-6 mb-3 bg-transparent">
               <div class="row g-0">
                  <div class="col-md-5">
                     <img src="{{asset('frontend/AstromarG/Variety of Traditions.jpg')}}" class="img-fluid " alt="...">
                  </div>
                  <div class="col-md-7">
                     <div class="card-body">
                        <h5 class="card-title fw-bold fs-3">10] Cultural Variations: </h5>
                        <p class="card-text text-light">Vastu Shastra is considered a science of architecture and
                           spatial arrangement, and its
                           principles have been utilized for centuries to design buildings that promote health,
                           prosperity, and spiritual well-being.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
</div>
</section>

</div>

@endsection