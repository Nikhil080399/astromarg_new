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
    .nav-white {
        background-color: #07273c !important;
    }

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




    <section id="for-title" class="main-heading px-3">
        
        <div class="container my-5">
            <div class="row justify-content-center">
                @foreach ($blog as $item)
                <div class="col-md-4 col-sm-12 col-lg-4 card-container my-4 px-3 px-lg-5 px-md-5">
                    <div class="card shadow" style=" min-height:100%;">
                        <a href="{{ route('blog_page', ['id' => $item->id]) }}">
                            <img src="{{ asset($item->image) }}" style="height:300px;"
                                class="card-img-top p-3 image-fluid w-100" alt="...">
                        </a>
                        <span class="fw-medium px-4 text-secondary">
                            <i class="fa-solid fa-calendar-days pe-2"></i>{!! $item->date !!}
                        </span>
                        <div class="card-body">
                            <a href="{{ route('blog_page', ['id' => $item->id]) }}" class="text-dark text-decoration-none">
                                <h5 class="card-title px-1">{!! $item->title !!}</h5>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

</div>

@endsection