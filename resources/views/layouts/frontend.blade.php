<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title', "Ceylon Green Clean — Professional Cleaning Services in Sri Lanka")</title>
    <meta name="description" content="@yield('meta_description', 'Ceylon Green Clean offers professional cleaning services in Kurunegala, Wariyapola, Alawwa, and Kandy, Sri Lanka. Eco-friendly deep cleaning for homes and offices. Book now for a spotless and hygienic space!')">
    <meta name="keywords" content="@yield('meta_keywords', 'cleaning services Sri Lanka, professional cleaners Sri Lanka, home cleaning, office cleaning, commercial cleaning, carpet cleaning, deep cleaning, sanitization, eco-friendly cleaning, cleaning services in Kurunegala, cleaning services in Wariyapola, cleaning services in Alawwa, cleaning services in Kandy, Ceylon Green Clean')">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="geo.region" content="LK">
    <meta name="geo.placename" content="Kurunegala, Sri Lanka">

    <meta name="title" content="@yield('title', 'Ceylon Green Clean — Professional Cleaning Services in Sri Lanka')">
    <link rel="canonical" href="@yield('canonical', url()->current())" />
    <meta name="author" content="Ceylon Green Clean">

    <meta property="og:title" content="@yield('title', 'Ceylon Green Clean — Professional Cleaning Services in Sri Lanka')" />
    <meta property="og:description" content="@yield('meta_description', 'Ceylon Green Clean offers professional cleaning services in Kurunegala, Wariyapola, Alawwa, and Kandy, Sri Lanka. Eco-friendly deep cleaning for homes and offices. Book now for a spotless and hygienic space!')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="@yield('og_url', url()->current())">
    <meta property="og:image" content="@yield('ogimage', asset('frontend/images/logo/logo.png'))">
    <meta property="og:site_name" content="Ceylon Green Clean">
    <meta property="og:locale" content="en_LK">

    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Ceylon Green Clean — Professional Cleaning Services in Sri Lanka')">
    <meta name="twitter:description" content="@yield('meta_description', 'Ceylon Green Clean offers professional cleaning services in Kurunegala, Wariyapola, Alawwa, and Kandy, Sri Lanka. Eco-friendly deep cleaning for homes and offices. Book now for a spotless and hygienic space!')">
    <meta name="twitter:image" content="@yield('ogimage', asset('frontend/images/logo/logo.png'))">

    <!-- favicon -->
    <link rel="icon" type="image/png" href="{{ asset('frontend/images/ceylongreenclean.svg') }}">

    <!-- CSS Files
    ================================================== -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="{{ asset('frontend/css/plugins.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('frontend/css/swiper.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('frontend/css/coloring.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="{{ asset('frontend/css/colors/scheme-01.css') }}" rel="stylesheet" type="text/css">
    {{-- @vite(['', 'resources/js/app.js']) --}}
    @stack('styles')

</head>

<body>
    <div id="wrapper">
        @include('frontend.components.preloader')
        @include('frontend.components.header')
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">

            <div id="top"></div>
            @yield('content')
        </div>
        <!-- content close -->
        @include('frontend.components.footer')
    </div>
    <!-- Javascript Files
    ================================================== -->
    <script src="{{ asset('frontend/js/plugins.js') }}"></script>
    <script src="{{ asset('frontend/js/designesia.js') }}"></script>
    <script src="{{ asset('frontend/js/swiper.js') }}"></script>
    <script src="{{ asset('frontend/js/custom-marquee.js') }}"></script>
    <script src="{{ asset('frontend/js/custom-swiper-1.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.event.move.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.twentytwenty.js') }}"></script>
    @stack('scripts')
</body>
<script>
    $(window).on("load", function() {
        $(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({
            default_offset_pct: 0.5
        });
        $(".twentytwenty-container[data-orientation='vertical']").twentytwenty({
            default_offset_pct: 0.5,
            orientation: 'vertical'
        });
    });
</script>

</html>
