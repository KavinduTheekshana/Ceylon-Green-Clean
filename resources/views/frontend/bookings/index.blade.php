@push('styles')
    <link id="colors" href="{{ asset('frontend/css/colors/scheme-01.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('frontend/css/datepicker.css') }}" rel="stylesheet" type="text/css">
@endpush
@extends('layouts.frontend')
@section('title', "Bookings | Ceylon Green Clean")
@section('content')
    <section class="bg-color-3 section-dark relative overflow-hidden">
        <img src="{{ asset('frontend/images/deco/s1.webp') }}" class="w-10 abs start-10 wow scaleOut" alt="">
        <div id="shine-wrapper">
            <div class="template shine"></div>
        </div>
        <div class="container relative z-1">
            <div class="row g-1 justify-content-center text-light">
                <div class="col-lg-6 text-center">
                    <div class="spacer-single"></div>
                    <div class="relative z-1000">
                        <h1 class="wow fadeInUp mb-0" data-wow-delay=".2s">Book Service</h1>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-5 text-center">
                    <p class="wow fadeInUp" data-wow-delay=".4s">Enjoy a spotless space with our expert cleaning team.
                        Affordable, eco-friendly, and tailored to your needs!</p>
                </div>
                <div class="spacer-single"></div>
            </div>

            <div class="row g-4 align-items-center justify-content-center">

                <div class="col-lg-10">
                    <div class="p-30 pb-0 shadow-soft bg-white rounded-10px">
                        <div class="row g-4 align-items-center">
                            <div class="col-lg-6 sm-hide">
                                <img src="{{ asset('frontend/images/misc/9.webp') }}" class="w-100" alt="">
                            </div>

                            <div class="col-lg-6">
                                <form name="bookingForm" id="booking_form" class="position-relative z1000" method="post"
                                    action="{{ route('booking.store') }}">
                                    @csrf




                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>Select Service</h5>
                                            <div class="relative">
                                                <select name="service" id="service" class="form-control">
                                                    @foreach ($services as $service)
                                                        <option value="{{ $service->service_name }}">
                                                            {{ $service->service_name }}</option>
                                                    @endforeach
                                                </select>
                                                <i class="absolute top-0 end-0 id-color pt-3 pe-3 icofont-simple-down"></i>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <h5>Select Date</h5>
                                            <div id="date" class="relative input-group date"
                                                data-date-format="mm-dd-yyyy">
                                                <i class="absolute top-0 end-0 id-color pt-3 pe-3 icofont-calendar"></i>
                                                <input class="form-control" name="date" type="text">
                                                <span class="input-group-addon"><i
                                                        class="glyphicon glyphicon-calendar"></i></span>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <h5>Time</h5>
                                            <div class="relative">
                                                <select name="time" id="time" class="form-control">
                                                    <option value="10:00">10:00</option>
                                                    <option value="11:00">11:00</option>
                                                    <option value="12:00">12:00</option>
                                                    <option value="13:00">13:00</option>
                                                    <option value="14:00">14:00</option>
                                                    <option value="15:00">15:00</option>
                                                    <option value="16:00">16:00</option>
                                                    <option value="17:00">17:00</option>
                                                    <option value="18:00">18:00</option>
                                                    <option value="19:00">19:00</option>
                                                    <option value="20:00">20:00</option>
                                                </select>
                                                <i class="absolute top-0 end-0 id-color pt-3 pe-3 icofont-simple-down"></i>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <h5>Duration</h5>
                                            <div class="relative">
                                                <select name="duration" id="duration" class="form-control">
                                                    <option value="1 Hour">1 Hour</option>
                                                    <option value="2 Hours">2 Hours</option>
                                                    <option value="3 Hours">3 Hours</option>
                                                    <option value="4 Hours">4 Hours</option>
                                                    <option value="5 Hours">5 Hours</option>
                                                </select>
                                                <i class="absolute top-0 end-0 id-color pt-3 pe-3 icofont-simple-down"></i>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <h5>Name</h5>
                                            <input type="text" name="name" id="name" class="form-control"
                                                placeholder="" required>
                                        </div>

                                        <div class="col-lg-4">
                                            <h5>Email</h5>
                                            <input type="text" name="email" id="email" class="form-control"
                                                placeholder="" required>
                                        </div>

                                        <div class="col-lg-4">
                                            <h5>Phone</h5>
                                            <input type="text" name="phone" id="phone" class="form-control"
                                                placeholder="" required>
                                        </div>
                                    </div>

                                    <div class="field-set mb-4">
                                        <h5>Have Any Message?</h5>
                                        <textarea name="message" id="message" class="form-control" placeholder="Your Message"></textarea>
                                    </div>

                                    <div id='submit' class="mt20">
                                        <input type='submit' value='Send Appointment' class="btn-main">
                                    </div>

                                    @if (session('success'))
                                        <div class='success'>
                                            {{ session('success') }}
                                        </div>
                                    @endif

                                    @if ($errors->any())
                                        <div class='error'>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="{{ asset('frontend/js/validation-booking.js') }}"></script>
    <script>
        $(function() {
            $("#date").datepicker({
                autoclose: true,
                todayHighlight: true
            }).datepicker('update', new Date());
        });
    </script>
@endpush
