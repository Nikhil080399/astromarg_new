<!-- home page -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="assets/images/mrb_logo.png" type="image/x-icon">
    <title>MRB Solar - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/assets/css/index.css" />
    <link rel="stylesheet" href="/assets/css/animation.css" />
    @yield('customcss')
    <style>
        .btn-close:focus {
            outline: 0;
            box-shadow: none!important;
        }

        main {
            height: 100vh;
            overflow-y: auto;
            scroll-snap-type: y mandatory;
            -webkit-overflow-scrolling: touch;
        }

        .section {
            min-height: 100vh;
            scroll-snap-align: start;
        }

        .carousel-control-next,
        .carousel-control-prev {
            position: absolute;
            top: 285px !important;
            bottom: none !important;
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 15%;
            padding: 0;
            color: #fff;
            text-align: center;
            background: 0 0;
            border: 0;
            opacity: 0.5;
            transition: opacity 0.15s ease;
        }

        .carousel-control-prev {
            left: 77% !important;
        }

        .dropdown-toggle::after {
            display: inline-block;
            margin-left: 1.255em !important;
            vertical-align: .255em;
            content: "";
            border-top: .3em solid;
            border-right: 0.3em solid transparent;
            border-bottom: 0;
            border-left: 0.3em solid transparent;
            transform: rotate(-90deg);
        }

        /* Styles to remove the arrow from specific dropdown-toggle */
        .remove-dropdown-arrow::after {
            display: none;
        }

        .offcanvas.offcanvas-top {
            top: 58px !important;
        }
    </style>
</head>

<body>
    @include('frontend.layout.header')

    @yield('content')

    @include('frontend.layout.footer')

    @yield('customjs')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>
