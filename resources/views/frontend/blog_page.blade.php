@extends('frontend.main')

@section('body')
<style>
       .header-bg-img {
            background-image: url({{asset('frontend/AstromarG/bg.jpg')}});
            background-size: cover;
            background-repeat: no-repeat;
            height: 23rem;
            padding-top: 13rem;
            
        }
        <style>
        

        .blog-cards a {
            text-decoration: none;
            font-size: 20px;
            font-weight: 500;
        }

        .widget-background {
            background-image: url(/assets/images/widget-banner.jpg);
            background-size: cover;
        }

        @media screen and (max-width: 768px) {
            .user-img {
                display: none;
            }
        }

        .form-attribute-height {
            min-height: 35px;
        }

        .submit-button {
            background-color: #e6a519;
            border-radius: 20px;
        }

        .recent-blog img {
            width: 110px;
            height: 90px;
        }

        body {
            background-color: #07273c;
        }

        .container {
            margin-top: 30px;
        }

        h1 {
            margin-bottom: 30px;
        }

        .gallery-img {
            width: 100%;
            object-fit: cover;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .gallery-img:hover {
            transform: scale(1.05);
        }

        .carousel-item {
            height: 300px;
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

<div class="astro_service">

    <!-------------------------------------------- Heading ------------------------------------------------------------>
    <div class="header-bg-img">
        <h1 class="text-light text-center header-content align-item-center">Blog</h1>
    </div>

    <div class="container mt-5 pt-5">
        <div class="row py-5 px-4 px-md-0 px-lg-0">
            <!-- left hand side -->
            <div class="col col-lg-3 col-md-12 col-sm-12 px-0">
                <h4 class="px-2 text-white" style="border-left: 4px solid orangered;">Latest Blogs</h4>
                @foreach ($blog_latest as $item)
                    <!-- available Blogs -->
                    {{-- <a href="{{ route('blog_page', ['id' => $item->id]) }}"> --}}
                    <div class="row text-start py-2  recent-blog shadow">
                        <div class="border-end col-5">
                            <a href="{{ route('blog_page', ['id' => $item->id]) }}">
                                <img src="{{ asset($item->image) }}" alt="">
                            </a>
                        </div>
                        <div class="col-7">
                            <p style="color: #8b8e92;"><span class="pe-2"><i class="fa-solid fa-calendar-days fa-sm"
                                        style="color: #8b8e92;"></i></span>{!! $item->date !!}</p>
                            <a class="text-decoration-none" href="{{ route('blog_page', ['id' => $item->id]) }}">
                                <h6 class="">{!! $item->title !!}</h6>
                            </a>
                        </div>
                    </div>
                    {{-- </a> --}}
                @endforeach
                <!-- Help Card -->
                <div class="row text-start shadow-lg mt-5">
                    <div class="col-12 py-3 widget-background">
                        <div class="py-3 px-1 text-light" style="border: 1px dotted rgb(241, 218, 47);">
                            <div class="py-4 px-2">
                                <i class="fa-solid fa-phone-volume fa-2xl" style="color: #e6a519;"></i>
                            </div>
                            <div class="px-2">
                                <h4>How Can We Help You?</h4>
                            </div>
                            <div class="px-2">
                                <p>if you need any help, please feel free to contact us</p>
                            </div>
                            <div class="py-2 px-2" style="border-bottom: 1px dotted;">
                                <p><i class="fa-solid fa-phone fa-sm" style="color: #d1e633;"><span
                                            class="text-light px-2"></span></i> +91 9890114511</p>
                            </div>
                            <div class="py-2 px-2">
                                <p><i class="fa-solid fa-envelope fa-sm" style="color: #d1e633;"><span
                                            class="text-light px-2"></span></i>contact@astromarg.org</p>
                            </div>

                        </div>
                    </div>
                </div>
              
                
            </div>
            <!-- right hand side -->
            <div class="col-12 col-lg-9 px-0 px-lg-4 px-md-4">
                <div class="row justify-content-around">
                    <!-- Image for the Blog -->

                    <div class="col-12 mob_banner px-0 px-lg-2 px-md-2">
                        <img src="{{ asset($blogPost->image) }}" class="w-100 px-2" height="450px!important">
                    </div>
                    <div class="col-12 px-0 px-lg-2 px-md-2">
                        <p class="px-2 pt-2" style="color: #8b8e92;"><span class="pe-2"><i class="fa-solid fa-calendar-days fa-lg"
                                    style="color: #8b8e92;"></i></span>{{ $blogPost->date }}</p>
                    </div>
                    <!-- Blog Text -->
                    <div class="col-12 px-0 px-lg-2 px-md-2">
                        <div class="px-2 pt-2  mob_text text-white">{!! $blogPost->description !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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