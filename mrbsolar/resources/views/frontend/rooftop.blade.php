@extends('frontend.layout.main')
@section('title', 'RoofTop')
@section('customcss')
    <style>
        .nav-white {
            background-color: white !important;
        }

        ul {
            list-style: none !important;
            padding: 0% !important;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid px-0">
        <div class="backimg">
            <img src="assets/images/solar-rooftop.jpg" class="img-fluid pt-5  w-100" alt="">
            <div class="d-lg-flex d-md-flex d-none justify-content-between py-4 text-white w-100"
                style="position: relative;bottom: 88px;background-color: rgba(0, 0, 0, 0.6);">
                <div class="fs-3 fw-bold ps-5">Solar Rooftop</div>
                <ul class="d-flex list-unstyled pe-5">
                    <li><a href="{{ Route('index') }}" class="text-white text-decoration-none">Home / </a></li>
                    <li><a href="#" class="text-white text-decoration-none"> Products / </a></li>
                    <li><a href="{{ Route('grid') }}" class="text-white text-decoration-none"> Solar Rooftops</a></li>
                </ul>
            </div>
        </div>
        <div class="container-fluid pt-4 pt-lg-0 pt-md-0">
            <h2 class="fs-4 text-center">GRID-TIE SYSTEM</h2>
            
                <div class="row pb-3 px-5">
                    @foreach ($grid as $item)
                    <div class="col-md-2 col-lg-2 col-sm-12 pt-3 px-0">
                        <div class="card text-center rounded-0">
                            <div class="card-body p-0">
                                <div class="grid-col">
                                    <div class="bg-primary text-white grid-header p-3">If you have a roof of area
                                        <strong>{{ $item->roof_of_area }}</strong>
                                    </div>
                                    <div class="bg-warning-subtle grid-sub-header p-3">MRB Power Solar<br> <strong
                                            class="text-uppercase"> {{ $item->title }} </strong></div>
                                    <div class="bg-info-subtle grid-cont p-3 for_hr">
                                        {!! $item->points !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
           
        </div>
        <div class="container-fluid py-5">
            <h2 class="fs-4 text-center">OFF-GRID SYSTEM</h2>
            
                <div class="row pb-3 px-5 justify-content-center">
                    @foreach ($offgrid as $offitem)
                    <div class="col-md-2 col-lg-2 col-sm-12 pt-3 px-0">
                        <div class="card text-center rounded-0">
                            <div class="card-body p-0">
                                <div class="grid-col">
                                    <div class="bg-primary text-white grid-header p-3">If you have a roof of
                                        area<strong>{{ $offitem->roof_of_area }}</strong></div>
                                    <div class="bg-warning-subtle grid-sub-header p-3">MRB Power Solar <br> <strong
                                            class="text-uppercase">{{ $offitem->title }}</strong></div>
                                    <div class="bg-info-subtle grid-cont p-3 for_hr">
                                        {!! $offitem->points !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
           
        </div>

    </div>
@endsection

@section('customjs')

    <script>
        // Get all the <li> elements within the .for_hr class
        const liElements = document.querySelectorAll('.for_hr ul li');

        // Loop through each <li> element and insert an <hr> tag after it
        liElements.forEach(li => {
            const hr = document.createElement('hr');
            hr.className = "m-1 mx-auto w-50"; // Add the class attribute to the hr element
            li.insertAdjacentElement('afterend', hr);
        });
    </script>
@endsection
