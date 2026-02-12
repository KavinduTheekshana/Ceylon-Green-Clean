@extends('layouts.frontend')

@section('content')
    <section class="relative pb-0 overflow-hidden bg-color-3 section-dark text-light">
        <img src="{{ asset('frontend/images/deco/s1.webp') }}" class="w-5 mt-min-60 abs start-10 bottom-10 wow scaleOut"
            alt="">
        <div id="shine-wrapper">
            <div class="template shine"></div>
        </div>
        <div class="container relative z-1000">
            <div class="row g-3 align-items-center">
                <div class="col-lg-6">
                    <div class="relative z-1000">
                        <h1 class="mb-2 wow fadeInUp" data-wow-delay=".2s">{{ $service->service_name }}</h1>

                        <div class="spacer-single"></div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <img src="{{ asset('frontend/images/misc/6.webp') }}" class="w-100"
                        data-0="transform: translateY(0px);" data-500="transform: translateY(300px);" alt="">
                </div>

            </div>

        </div>
    </section>

    <section class="relative overflow-hidden">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6">
                    <p class="lead">
                        {{ $service->description }}
                    </p>

                    <div class="spacer-single"></div>

                    <h3 class="mb-3">{{ $service->service_name }} Services List</h3>
                    <ul class="ul-style-2 fw-500">
                        @foreach ($service->services_list as $item)
                        <li>{{ $item['service'] }}</li> <!-- Access the 'service' key -->
                    @endforeach
                    </ul>
                </div>

                <div class="col-lg-6">
                    <div class="p-5 bg-color text-light rounded-1 h-100">
                        <h3 class="mb-3">Why Choose Our {{ $service->service_name }} Services?</h3>
                        <ul class="ol-style-1">
                            <li><strong>Experienced and Trusted Team</strong>: Our cleaners are fully trained,
                                background-checked, and committed to delivering exceptional results.</li>
                            <li><strong>Customizable Cleaning Plans</strong>: Choose from one-time deep cleaning, weekly,
                                biweekly, or monthly service options to suit your needs and budget.</li>
                            <li><strong>Eco-Friendly Cleaning Products</strong>: We prioritize the health of your family and
                                the environment by using safe, non-toxic cleaning solutions.</li>
                            <li><strong>Attention to Detail</strong>: From dusting high shelves to scrubbing tile grout, we
                                leave no spot untouched.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!--
    <section class="relative bg-light">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6">
                    <h3 class="mb-3">Pricing Plans</h3>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-sm-6">
                    <div class="relative p-4 bg-color-2 rounded-10">
                        <div class="text-center">
                            <h5 class="mb-0">One Time or Monthly</h5>
                            <div class="spacer-30"></div>
                            <div class="ms-5 fw-500">
                                <span>£</span>
                                <span class="fs-64 fw-bold text-dark">39</span>
                                <span>/Hour/Cleaner</span>
                            </div>
                            <div class="spacer-20"></div>
                        </div>

                        <div class="text-center">
                            <a class="btn-main" href="{{route('booking')}}">Book Now</a>
                        </div>
                        <div class="spacer-20"></div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="relative p-4 bg-color-2 rounded-10">
                        <div class="text-center">
                            <h5 class="mb-0">Recurring (Weekly, Biweekly)</h5>
                            <div class="spacer-30"></div>
                            <div class="ms-5 fw-500">
                                <span>£</span>
                                <span class="fs-64 fw-bold text-dark">33</span>
                                <span>/Hour/Cleaner</span>
                            </div>
                            <div class="spacer-20"></div>
                        </div>

                        <div class="text-center">
                            <a class="btn-main" href="{{route('booking')}}">Book Now</a>
                        </div>
                        <div class="spacer-20"></div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="relative p-4 bg-color-2 rounded-10">
                        <div class="text-center">
                            <h5 class="mb-0">Office &amp; Commercial</h5>
                            <div class="spacer-30"></div>
                            <div class="ms-5 fw-500">
                                <span>£</span>
                                <span class="fs-64 fw-bold text-dark">30</span>
                                <span>/Hour/Cleaner</span>
                            </div>
                            <div class="spacer-20"></div>
                        </div>

                        <div class="text-center">
                            <a class="btn-main" href="{{route('booking')}}">Book Now</a>
                        </div>
                        <div class="spacer-20"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
-->
@endsection
