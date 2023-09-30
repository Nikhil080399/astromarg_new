<!-- nav bar -->
<nav class="nav-white navbar fixed-top navbar-expand-lg shadow-lg fw-bold py-1 py-md-0 py-lg-0 bg-body-secondary">
    <div class="container-fluid">
        <a href="{{ route('index') }}">
            <img src="/assets/images/mrb_logo.png" alt="" style="height: 100px;">
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end container-fluid" id="navbarNav">
            <ul class="navbar-nav" style="background: none">
                <li class="nav-item dropdown">
                    <a class="nav-link nav-button dropbtn" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="nav-headings">About Us</span>
                    </a>
                    <ul class="dropdown-content ps-0" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ Route('about') }}">About</a>
                        <hr class="m-0" style="border: 1px dashed white;">
                        <a class="dropdown-item" href="{{ Route('vision') }}">Vision, Mission & Values</a>
                        <hr class="m-0" style="border: 1px dashed white;">
                        <a class="dropdown-item" href="{{ Route('learn') }}">Learn About Solar</a>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link nav-button dropbtn" href="#" id="navbarDropdown" role="button">
                        <span class="nav-headings">Products</span>
                    </a>
                    <ul class="dropdown-content ps-0" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ Route('pump') }}">Solar Pumps</a>
                        <hr class="m-0" style="border: 1px dashed white;">
                        <a class="dropdown-item" href="{{ Route('grid') }}">Solar Rooftops</a>
                    </ul>
                </li>
                <li class="nav-item dropdown padding-left: 0px;">
                    <a href="{{ route('enquiry') }}">
                        <button style="border: none" class="nav-item dropbtn">
                            <span><i class="fa-regular fa-message fa-1x icon-nav"></i></span>
                            <span style="font-weight: bold" class="text-decoration-none">Enquiry Now</span>
                        </button>
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <button type="button" style="border: none"
                        class="nav-item dropbtn dropdown-toggle remove-dropdown-arrow" role="button"
                        data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                        <span><i class="fa-solid fa-bars fa-1x icon-nav"></i></span>
                        <span style="font-weight: bold"> Explore Menu</span>
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="offcanvas offcanvas-top bg-transparent mx-5" tabindex="-1" id="offcanvasTop"
    aria-labelledby="offcanvasTopLabel"
    style="background-image: url({{ asset('assets/images/menuBg.jpg') }}); height: 100%;
        background-repeat: no-repeat;">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title text-white" id="offcanvasTopLabel">Explore Menu</h5>
        <button type="button" class="btn-close text-white pe-5" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="row  text-white text-start justify-content-center">
            <div class="col-lg-3 col-md-3 col-sm-6 d-flex">
                <div class="align-self-center">
                    <img src="{{ asset('assets/images/menu-about.jpg') }}" style="height: 75px; width: 75px;">
                </div>
                <div class="ps-3">
                    <h4>About Us</h4>
                    <ul class="fs-6 fst-italic list-unstyled ">
                        <li><a href="{{ Route('about') }}" class="text-white text-decoration-none"> About </a></li>
                        <li><a href="{{ Route('vision') }}" class="text-white text-decoration-none"> Vision, Mission
                                &amp;
                                Values</a></li>
                        <li><a href="{{ Route('learn') }}" class="text-white text-decoration-none"> Learn About
                                Solar</a></li>
                    </ul>

                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-lg-3 d-flex">
                <div class="align-self-center">
                    <img src="{{ asset('assets/images/menu-product.jpg') }}" style="height: 75px; width: 75px;">
                </div>
                <div class="ps-3">
                    <h4>Products</h4>
                    <ul class="fs-6 fst-italic list-unstyled ">
                        <li>
                            <a href="{{ Route('pump') }}" class="text-white text-decoration-none">Solar Pump</a>
                        </li>
                        <li>
                            <a href="{{ Route('grid') }}" class="text-white text-decoration-none"> Solar Rooftops</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-lg-3 d-flex">
                <div class="align-self-center">
                    <img src="{{ asset('assets/images/menu-sustain.jpg') }}" style="height: 75px; width: 75px;">
                </div>
                <div class="ps-3">
                    <h4>Sustainability</h4>
                    <ul class="fs-6 fst-italic list-unstyled ">
                        <li><a href="{{Route('health')}}" class="text-white text-decoration-none"> Health, Safety and
                                Environment</a>
                        </li>
                        <li><a href="#" class="text-white text-decoration-none"> CSR</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row text-white text-start justify-content-center pt-5">
            <div class="col-md-3 col-sm-6 col-lg-3 d-flex">
                <div class="align-self-center">
                    <img src="{{ asset('assets/images/menu-media.jpg') }}" style="height: 75px; width: 75px;">
                </div>
                <div class="ps-3">
                    <h4>Media</h4>
                    <ul class="fs-6 fst-italic list-unstyled">
                        <li><a href="{{ Route('blog_front') }}" class="text-white text-decoration-none">Blog</a></li>
                        <li>Gallery
                            <ul class="list-unstyled ps-1">
                                <li><a href="{{ Route('images') }}" class="text-white text-decoration-none">- Image
                                        Gallery</a></li>
                                <li><a href="{{ Route('video') }}" class="text-white text-decoration-none">-
                                        Video Gallery</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-lg-3 d-flex">
                <div class="align-self-center">
                    <img src="{{ asset('assets/images/menu-contact.jpg') }}" style="height: 75px; width: 75px;">
                </div>
                <div class="ps-3">
                    <h4>Contact Us</h4>
                    <ul class="fs-6 fst-italic list-unstyled">
                        <li><a href="#" class="text-white text-decoration-none"> Find a Dealer</a></li>
                        <li><a href="{{ route('enquiry') }}" class="text-white text-decoration-none"> Enquiries</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr style="border: 1px dashed white;" class="mx-auto w-75">
        <div class="row  text-white justify-content-center py-3">
            <div class="col-md-12 col-sm-12 col-lg-12 align-self-center">
                <h4 class="text-center">Follow Us</h4>
                <ul class="d-flex justify-content-around list-unstyled mx-auto pt-2 w-25">
                    <li><a href=""><i class="fa-brands fa-twitter" style="color: #ffffff;"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-linkedin-in" style="color: #ffffff;"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-facebook-f" style="color: #ffffff;"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-youtube" style="color: #ffffff;"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-instagram" style="color: #ffffff;"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
