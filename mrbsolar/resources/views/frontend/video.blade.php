@extends('frontend.layout.main')
@section('title', 'Video Gallery')
@section('customcss')
    <style>
        .nav-white {
            background-color: white !important;
        }

        .card {
            margin-bottom: 20px;
        }

        iframe {
            width: 100%;
            height: 200px;
        }

        @media (min-width: 576px) {
            iframe {
                height: 315px;
            }
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
                    <li><a href="{{ Route('video_gallery') }}" class="text-white text-decoration-none"> Video Gallery</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                @foreach ($video as $item)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item"
                                        src="https://www.youtube.com/embed/{{ $item->video }}" allowfullscreen></iframe>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach

            </div>


        </div>
    @endsection

    @section('customjs')
    @endsection
