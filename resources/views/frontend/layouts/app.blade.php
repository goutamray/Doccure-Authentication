<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="The responsive professional Doccure.">
    <title>@yield("title", "Doccure")</title>

    <!-- Favicons -->
    <link type="image/x-icon"
        href="{{ asset('frontend/assets/img/favicon.png') }}"
        rel="icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
        href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet"
        href="{{ asset('frontend/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('frontend/assets/plugins/fontawesome/css/all.min.css') }}">

    <!-- Feathericon CSS -->
    <link rel="stylesheet"
        href="{{asset('frontend/assets/css/feather.css') }}">

    <!-- Animation CSS -->
    <link rel="stylesheet"
        href="{{ asset('frontend/assets/css/aos.css')}}">

    <!-- Main CSS -->
    <link rel="stylesheet"
        href="{{ asset('frontend/assets/css/custom.css') }}">

</head>

<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        @include('frontend.layouts.header')

        @section("main")
        @show



        @include('frontend.layouts.footer')

    </div>
    <!-- /Main Wrapper -->

    <!-- ScrollToTop -->
    <div class="progress-wrap active-progress">
        <svg class="progress-circle svg-content"
            width="100%"
            height="100%"
            viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;">
            </path>
        </svg>
    </div>
    <!-- /ScrollToTop -->

    <!-- jQuery -->
    <script src="{{ asset('frontend/assets/js/jquery-3.7.1.min.js') }}"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Slick JS -->
    <script src="{{ asset('frontend/assets/js/slick.js') }}"></script>

    <!-- BacktoTop JS -->
    <script src="{{ asset('frontend/assets/js/backToTop.js') }}"></script>


    <!-- Datepicker JS -->
    <script src="{{ asset('frontend/assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap-datetimepicker.min.js') }}"></script>

    <!-- Animation JS -->
    <script src="{{ asset('frontend/assets/js/aos.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('frontend/assets/js/script.js')}}"></script>

</body>

</html>