@extends('frontend.layout.main')
@section('title', 'Image Gallery')
@section('customcss')
    <style>
        .nav-white {
            background-color: white !important;
        }

        body {
            background-color: #f9f9f9;
        }

        h1 {
            margin-bottom: 30px;
        }

        .gallery-img {
            width: 100%;
            height: 350px!important;
            object-fit: cover;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .gallery-img:hover {
            transform: scale(1.05);
        }

        .carousel-item {
            height: auto;
            position: relative;
        }

        .carousel-item .carousel-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 10px;
            background-color: rgba(0, 0, 0, 0.7);
            color: #fff;
            text-align: center;
        }

        .carousel-control-prev:hover,
        .carousel-control-next:hover {
            opacity: 1;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid px-0">
        <div class="backimg">
            <img src="assets/images/Solar-Pump-Banner.jpg" class="img-fluid pt-5  w-100" alt="">
            <div class="d-lg-flex d-md-flex d-none justify-content-between py-4 text-white w-100"
                style="position: relative;bottom: 88px;background-color: rgba(0, 0, 0, 0.6);">
                <div class="fs-3 fw-bold ps-5">Gallery</div>
                <ul class="d-flex list-unstyled pe-5">
                    <li><a href="{{ Route('index') }}" class="text-white text-decoration-none">Home / </a></li>
                    <li><a href="#" class="text-white text-decoration-none"> Gallery / </a></li>
                    <li><a href="{{ Route('images') }}" class="text-white text-decoration-none"> Image Gallery</a></li>
                </ul>
            </div>
        </div>

        <div class="container mt-5">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 pb-5">
                @foreach ($image as $item)
                    <div class="col">
                        <img src="{{ asset('storage/images/' . $item->image) }}" alt="Image 1"
                            class="gallery-img  shadow px-2 py-2" data-bs-toggle="modal" data-bs-target="#galleryModal"
                            data-bs-slide-to="0" id="img1">
                    </div>
                @endforeach
            </div>

        </div>

        <!-- Bootstrap Carousel Modal -->
        <div class="modal fade" id="galleryModal" tabindex="-1" aria-labelledby="galleryModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="galleryModalLabel">Image Gallery</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($image as $item)
                                    <div class="carousel-item " id="imgcar1" >
                                        <img src="{{ asset('storage/images/' . $item->image) }}" alt="Image 1" class="w-100 gallery-img ">
                                        <div class="carousel-caption">
                                            <h3>{!! $item->title !!}</h3>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev"
                                style="left: 0% !important;top: 0px !important;">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next"
                                style="top: 0px !important;">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('customjs')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var galleryImages = document.querySelectorAll('.gallery-img');
            var carouselItems = document.querySelectorAll('.carousel-item');

            galleryImages.forEach(function(galleryImage, index) {
                galleryImage.addEventListener('click', function() {
                    // Remove active class from all carousel items
                    carouselItems.forEach(function(carouselItem) {
                        carouselItem.classList.remove('active');
                    });

                    // Add active class to corresponding carousel item
                    carouselItems[index].classList.add('active');
                });
            });
        });
    </script>
@endsection
