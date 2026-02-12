<section class="relative overflow-hidden border-top">
    <div class="container">
        <div class="row g-4">
            <div class="text-center col-lg-6 offset-lg-3">
                <div class="mb-3 subtitle wow fadeInUp">Our Services</div>
                <h2 class="wow fadeInUp" data-wow-delay=".2s">Our Cleaning Services</h2>
                <p class="mb-0 lead wow fadeInUp">Whether it's a quick refresh or a deep clean transformation, our expert
                    touch leaves your home or office shining.</p>
                <div class="spacer-single"></div>
                <div class="spacer-half"></div>
            </div>
        </div>

        <div class="row g-4">

            @foreach ($services as $service)
                <div class="col-lg-4 col-sm-6">
                    <div class="relative">
                        <a href="{{ route('service.single', $service->slug) }}" class="d-block hover">
                            <div class="relative overflow-hidden rounded-1 shadow-soft">
                                <div class="absolute text-center text-white z-2 start-0 w-100 abs-middle fs-36">
                                    <span class="btn-main hover-op-1">Read More</span>
                                </div>
                                @if(!empty($service->image) && file_exists(public_path('storage/' . $service->image)))
                                <img src="{{ $service->image ? asset('storage/' . $service->image) : asset('frontend/images/placeholder.webp') }}"  class="img-fluid hover-scale-1-2"
                                    alt="{{ $service->service_name }}">
                                    @else
                                    <img src="{{ asset('frontend/images/placeholder.webp') }}" class="img-fluid hover-scale-1-2"
                                    alt="{{ $service->service_name }}">
                                @endif
                                <div
                                    class="bottom-0 p-3 px-4 text-center hover-op-0 abs text-light w-100 overlay-black-1 bg-blur">
                                    <h4>{{ $service->service_name }}</h4>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
            @endforeach



        </div>
    </div>
</section>
