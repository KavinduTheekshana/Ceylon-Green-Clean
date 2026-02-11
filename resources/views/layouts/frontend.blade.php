<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title', "Ceylon Deep Cleaners — Your Cleaning Partner")</title>
    <meta name="description" content="@yield('meta_description', 'Ceylon Deep Cleaners offers professional deep cleaning services in Derby, Nottingham, Loughborough, Leicester, Lincoln, Sheffield, Stoke-on-Trent, Birmingham, Coventry, and Chesterfield. Book now for a spotless and hygienic space!')">
    <meta name="keywords" content="@yield('meta_keywords', 'deep cleaning services, professional cleaners, home cleaning, office cleaning, commercial cleaning, carpet cleaning, upholstery cleaning, sanitization, eco-friendly cleaning, cleaning services in Derby, cleaning services in Nottingham, cleaning services in Loughborough, cleaning services in Leicester, cleaning services in Lincoln, cleaning services in Sheffield, cleaning services in Stoke-on-Trent, cleaning services in Birmingham, cleaning services in Coventry, cleaning services in Chesterfield')">

    <meta name="title" content="@yield('title', 'Ceylon Deep Cleaners — Your Cleaning Partner')">
    <link rel="canonical" href="http://ceylondeepcleaners.co.uk" />
    <meta name="author" content="www.ceylondeepcleaners.co.uk">

    <meta property="og:title" content="@yield('title', 'Ceylon Deep Cleaners — Your Cleaning Partner')" />
    <meta property="og:description" content="@yield('meta_description', 'Ceylon Deep Cleaners offers professional deep cleaning services in Derby, Nottingham, Loughborough, Leicester, Lincoln, Sheffield, Stoke-on-Trent, Birmingham, Coventry, and Chesterfield. Book now for a spotless and hygienic space!')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://ceylondeepcleaners.co.uk">
    <meta property="og:image" content="@yield('ogimage', asset('frontend/images/ogimage.jpg'))">
    <meta property="og:site_name" content="Ceylon Deep Cleaners">

    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Ceylon Deep Cleaners — Your Cleaning Partner')">
    <meta name="twitter:description" content="@yield('meta_description', 'Ceylon Deep Cleaners offers professional deep cleaning services in Derby, Nottingham, Loughborough, Leicester, Lincoln, Sheffield, Stoke-on-Trent, Birmingham, Coventry, and Chesterfield. Book now for a spotless and hygienic space!')">
    <meta name="twitter:image" content="@yield('ogimage', asset('frontend/images/ogimage.jpg'))">

    <!-- favicon -->
    <link rel="icon" type="image/png" href="{{ asset('frontend/images/favicon.svg') }}">

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
