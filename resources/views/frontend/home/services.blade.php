<section class="relative overflow-hidden border-top">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6 offset-lg-3 text-center">
                <div class="subtitle wow fadeInUp mb-3">Our Services</div>
                <h2 class="wow fadeInUp" data-wow-delay=".2s">Our Cleaning Services</h2>
                <p class="lead mb-0 wow fadeInUp">Whether it's a quick refresh or a deep clean transformation, our expert
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
                                <div class="absolute z-2 start-0 w-100 abs-middle fs-36 text-white text-center">
                                    <span class="btn-main hover-op-1">Read More</span>
                                </div>
                                <img src="{{ $service->image ? asset('storage/' . $service->image) : asset('frontend/images/placeholder.webp') }}"  class="img-fluid hover-scale-1-2"
                                    alt="{{ $service->service_name }}">
                                <div
                                    class="hover-op-0 abs p-3 px-4 bottom-0 text-center text-light w-100 overlay-black-1 bg-blur">
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
