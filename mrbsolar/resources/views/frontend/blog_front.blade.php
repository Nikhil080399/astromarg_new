@extends('frontend.layout.main')
@section('title', 'Blogs')
@section('customcss')
    <style>
        .nav-white {
            background-color: white !important;
        }

        .card-container {
            display: inline-block;
            position: relative;
            transition: transform 0.3s ease-in-out;
        }

        .card-container:hover {
            transform: translateY(-10px);
        }
    </style>
@endsection
@section('content')
<div class="backimg">
    <img src="assets/images/learn-about-solor-cont-bg1.jpg" class="img-fluid pt-5  w-100" alt="">
    <div class="d-lg-flex d-md-flex d-none justify-content-between py-4 text-white w-100"
        style="position: relative;bottom: 88px;background-color: rgba(0, 0, 0, 0.6);">
        <div class="fs-3 fw-bold ps-5">Blogs</div>
        <ul class="d-flex list-unstyled pe-5">
            <li><a href="{{ Route('index') }}" class="text-white text-decoration-none">Home / </a></li>
            <li><a href="{{ Route('blog_front') }}" class="text-white text-decoration-none"> Blogs</a></li>
        </ul>
    </div>
</div>
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
@endsection

@section('customjs')

@endsection
