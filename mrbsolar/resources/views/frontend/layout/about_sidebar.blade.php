<style>
    .active {
        background-color: rgb(12, 71, 134) !important;
        color: white !important;
    }
</style>
<div class="col-lg-3 col-md-3 col-sm-12 heritage-side-tabs" style="border-right: 1px solid lightgray;">
    <div class="headheritage text-center mt-4">
        <h3>Learn More</h3>
        <h3>About MRB Solar Enterprises</h3>
        <hr>
    </div>
    <div class="leftheritagesd">
        <ul class="list-unstyled">
            <a href="{{ Route('about') }}"
                class="leftbtnheritage text-dark text-decoration-none{{ Request::route()->getName() === 'about' ? ' active' : '' }}">
                <li class="leftbtnheritage  my-4{{ Request::route()->getName() === 'about' ? ' active' : '' }}">
                    <span>
                        <img src="assets/images/our-heritage-pic.jpg" class="rounded-circle me-2"alt="">
                    </span>
                    About

                </li>
            </a>
            <a href="{{ Route('vision') }}"
                class="leftbtnheritage text-dark text-decoration-none{{ Request::route()->getName() === 'vision' ? ' active' : '' }}">
                <li class="leftbtnheritage my-4{{ Request::route()->getName() === 'vision' ? ' active' : '' }}">

                    <span>
                        <img src="assets/images/vision-mission-values-pic.jpg"
                            class="rounded-circle me-2"alt="">
                    </span>Vision, Mission & Values

                </li>
            </a>
            <a href="{{ Route('learn') }}"
                class="leftbtnheritage text-dark text-decoration-none{{ Request::route()->getName() === 'learn' ? ' active' : '' }}">
                <li class="leftbtnheritage my-4{{ Request::route()->getName() === 'learn' ? ' active' : '' }}">

                    <span>
                        <img src="assets/images/learn-about-solor-pic.jpg" class="rounded-circle me-2" alt="">
                    </span>
                    Learn about Solar Power

                </li>
            </a>
        </ul>
    </div>
</div>
