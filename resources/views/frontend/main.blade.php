<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>AstromarG</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link rel="stylesheet" type="text/css" href="{{asset('frontend/your_website_domain/css_root/flaticon.css')}}">
    @include('frontend/layout/link')
    <link rel="stylesheet" href="{{asset('frontend/includes/style.css')}}">

    <style>
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: auto;
            background: url(AstromarG/bg.jpg) no-repeat 50% 50%;
            background-size: cover;
        }

        #loader {
            position: fixed;
            width: 100%;
            height: auto;
            z-index: 1;
            overflow: visible;
            background: #000 url('AstromarG/loader.mp4') no-repeat center center;
        }

        .whatsapp-button {
            position: fixed;
            bottom: 20px;
            /* Adjust the distance from the bottom as needed */
            right: 20px;
            /* Adjust the distance from the right as needed */
            z-index: 999;
            /* Ensure it's above other content */
        }

        .whatsapp-button a {
            display: block;
            background-color: #25D366;
            /* WhatsApp green color */
            padding: 10px;
            border-radius: 50%;
        }

        .whatsapp-button img {
            width: 20px;
            /* Adjust the size of the WhatsApp icon as needed */
            vertical-align: middle;
        }
    </style>
    <script type="text/javascript">
        var loader;

        function loadNow(opacity) {
            if (opacity <= 0) {
                displayContent();
            } else {
                loader.style.opacity = opacity;
                window.setTimeout(function() {
                    loadNow(opacity - 0.05)
                }, 100);
            }
        }

        function displayContent() {
            loader.style.display = 'none';
            document.getElementById('content').style.display = 'block';
        }
        document.addEventListener("DOMContentLoaded", function() {
            loader = document.getElementById('loader');
            loadNow(1);
        })
    </script>
</head>

<body>
    <div id="loader"></div>
    <div id="content">

    </div>
    @include('frontend.layout.header')
    
        @yield('body')

    @include('frontend.layout.footer')
    @include('frontend.layout.script')



</body>