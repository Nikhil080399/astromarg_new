@extends('frontend.main')

@section('body')

 <style>
      .heading {
         background-color: #07273c;
         background-image:url({{asset('frontend/AstromarG/yantra_bg.jpg')}}) ;
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

      .yantra {
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

      .pictures .img-fluid {
         height: 15rem;
         width: 100%;
      }
   </style>

<div class="yantra">
      <!--------------------------- Heading ------------------------------------>
      <section class="heading">
         <h1 class="text-center text-light pt-5 mt-5 " style="font-size:3rem;">YANTRA</h1>
      </section>
      <!---------------------------------------------- Features------------------------------------------------------------>
      <section id="for-title" class="main-heading  px-5">
         <h2 class="title ps-3">Key features of a Yantra include:</h2>
         <!------------------------------------------ Geometric Patterns:--------------------------------------------------->
         <div class="pictures">
            <div class="card bg-transparent mb-5 " style="border:none">
               <div class="row g-0">
                  <div class="col-md-3">
                     <img src="{{asset('frontend/AstromarG/Geomatric pattern.jpg')}}" class="img-fluid " alt="...">
                  </div>
                  <div class="col-md-9">
                     <div class="card-body">
                        <h5 class="card-title fw-medium fs-4">Geometric Patterns:</h5>
                        <p class="card-text text-light">Yantras are intricate geometric patterns that often involve circles, triangles, squares, and other shapes. These patterns are carefully designed to represent certain spiritual concepts or cosmic forces.</p>
                     </div>
                  </div>
               </div>
            </div>
            <!------------------------------------------- Center Point (Bindu) ---------------------------------------------->
            <div class="card bg-transparent mb-5 " style="border:none">
               <div class="row g-0">
                  <div class="col-md-3">
                     <img src="{{asset('frontend/AstromarG/central point.jpg')}}" class="img-fluid " alt="...">
                  </div>
                  <div class="col-md-9">
                     <div class="card-body">
                        <h5 class="card-title fw-medium fs-4">Center Point (Bindu): </h5>
                        <p class="card-text text-light">Most Yantras have a central point called the "bindu," which represents the unity or focal point of the energy being depicted. This bindu is often surrounded by various layers of geometric shapes and symbols.</p>
                     </div>
                  </div>
               </div>
            </div>
            <!--------------------------------------- Mantras ------------------------------------->
            <div class="card bg-transparent mb-5 " style="border:none">
               <div class="row g-0">
                  <div class="col-md-3">
                     <img src="{{asset('frontend/AstromarG/mantras.jpg')}}" class="img-fluid " alt="...">
                  </div>
                  <div class="col-md-9">
                     <div class="card-body">
                        <h5 class="card-title fw-medium fs-4">Mantras:</h5>
                        <p class="card-text text-light">Yantras are often associated with specific mantras (sacred sounds or phrases) that correspond to the energy or deity represented by the Yantra. These mantras are chanted during meditation or worship while focusing on the Yantra.</p>
                     </div>
                  </div>
               </div>
            </div>
            <!----------------------------------------- Energizing Process ------------------------------------------------->
            <div class="card bg-transparent mb-5 " style="border:none">
               <div class="row g-0">
                  <div class="col-md-3">
                     <img src="{{asset('frontend/AstromarG/energizing process.jpg')}}" class="img-fluid " alt="...">
                  </div>
                  <div class="col-md-9">
                     <div class="card-body">
                        <h5 class="card-title fw-medium fs-4">Energizing Process:</h5>
                        <p class="card-text text-light">Yantras are usually consecrated and energized through rituals and ceremonies performed by qualified spiritual practitioners. This process is believed to infuse the Yantra with the spiritual energy it represents.</p>
                     </div>
                  </div>
               </div>
            </div>
            <!------------------------------------------- Purpose ------------------------------------------------>
            <div class="card bg-transparent mb-5 " style="border:none">
               <div class="row g-0">
                  <div class="col-md-3">
                     <img src="{{asset('frontend/AstromarG/purpose.jpg')}}" class="img-fluid " alt="...">
                  </div>
                  <div class="col-md-9">
                     <div class="card-body">
                        <h5 class="card-title fw-medium fs-4">Purpose:</h5>
                        <p class="card-text text-light">Yantras are used for various purposes, including meditation, spiritual growth, protection, healing, and invoking specific energies or deities. They are believed to aid practitioners in connecting with higher states of consciousness and divine energies.</p>
                     </div>
                  </div>
               </div>
            </div>
            <!------------------------------------- Specific Yantras ---------------------------------------->
            <div class="card bg-transparent mb-5 " style="border:none">
               <div class="row g-0">
                  <div class="col-md-3">
                     <img src="{{asset('frontend/AstromarG/specific yantra.jpg')}}" class="img-fluid" alt="...">
                  </div>
                  <div class="col-md-9">
                     <div class="card-body">
                        <h5 class="card-title fw-medium fs-4">Specific Yantras: </h5>
                        <p class="card-text text-light">Yantras are used for various purposes, including meditation, spiritual growth, protection, healing, and invoking specific energies or deities. They are believed to aid practitioners in connecting with higher states of consciousness and divine energies.</p>
                     </div>
                  </div>
               </div>
            </div>
            <!-------------------------------- Materials --------------------------------------->
            <div class="card bg-transparent mb-5 " style="border:none">
               <div class="row g-0">
                  <div class="col-md-3">
                     <img src="{{asset('frontend/AstromarG/material.jpg')}}" class="img-fluid " alt="...">
                  </div>
                  <div class="col-md-9">
                     <div class="card-body">
                        <h5 class="card-title fw-medium fs-4">Materials: </h5>
                        <p class="card-text text-light">Yantras can be created using various materials, including paper, metal, wood, or even drawn on the ground. Traditional Yantras are often intricate hand-drawn diagrams, while modern versions might be printed or engraved.
                           Yantras are a visual representation of complex spiritual concepts and energies, and they are revered as a way to connect with the divine and harness its power. They are often used in conjunction with other practices like mantra recitation, meditation, and rituals. It's important to note that understanding and using Yantras may require guidance from a knowledgeable spiritual teacher or practitioner, especially for those who are new to these practices.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
   </div>


@endsection