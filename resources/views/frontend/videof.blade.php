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

    .card {
        background-color: #07273c;
        border: 1px solid #07273c;
        box-shadow: 0 0.5rem 1rem rgba(7, 7, 8, 1.15);
    }

    
</style>



    <main style="background-color:#07273c;">

        <!--================================== Heading:  ===============================-->
        <div class="header-bg-img">
            <h1 class="text-light text-center header-content align-item-center">Videos</h1>
        </div>
        <div class="container-fluid px-0">

            <div class="container mt-5">
                <div class="row">
                    @foreach ($video as $item)
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card m-5">
                                <div class="card-body">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item"
                                            src="https://www.youtube.com/embed/{{ $item->video }}"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach

                </div>


            </div>
        </div>
    </main>
@endsection
