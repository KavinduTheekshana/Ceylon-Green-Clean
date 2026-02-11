@extends('layouts.frontend')
@section('title', "Services | Ceylon Deep Cleaners")
@section('content')
    @include('frontend.services.banner')

    <section class="relative overflow-hidden">
        <div class="container">
            <div class="row g-4">

                @foreach ($services as $service)
                    <div class="col-lg-4 col-sm-6">
                        <div class="relative mb-3 p-3 h-100 rounded-1 shadow-soft">
                            <a href="{{ route('service.single', $service->slug) }}" class="d-block hover mb-3">
                                <div class="relative overflow-hidden rounded-1 shadow-soft">
                                    {{-- <img src="{{ $service->image ? asset('storage/' . $service->image) : asset('frontend/images/placeholder.webp') }}" class="w-50 end-0 absolute hover-op-0"
                                        alt="{{ $service->service_name }}"> --}}
                                    {{-- <img src="{{ asset('frontend/images/misc/flowers-crop-3-white.webp') }}"
                                        class="w-50 end-0 absolute hover-op-0" alt=""> --}}
                                    <div class="absolute z-2 start-0 w-100 abs-middle fs-36 text-white text-center">
                                        <span class="btn-main hover-op-1">Read More</span>
                                    </div>
                                    <img src="{{ $service->image ? asset('storage/' . $service->image) : asset('frontend/images/placeholder.webp') }}" class="img-fluid hover-scale-1-2" alt="">
                                </div>
                            </a>
                            <h4>{{ $service->service_name }}</h4>
                            <p class="no-bottom">{{ Str::limit($service->description, 130, '...') }}</p>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

