<section class="border-top bg-light">
    <div class="container">
        <div class="row g-4">
            <div class="text-center col-lg-6 offset-lg-3">
                <div class="mb-3 subtitle wow fadeInUp">Testimonials</div>
                <h2 class="mb-4 wow fadeInUp" data-wow-delay=".2s">Our Happy Customers</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="owl-carousel owl-theme wow fadeInUp" id="testimonial-carousel">
                @foreach ($testimonials as $testimonial)
                    <div class="item">
                        <div class="relative p-2">
                            <div class="relative">
                            @if(!empty($testimonial->image) && file_exists(public_path('storage/' . $testimonial->image)))
                                <img class="relative mb-3 z-2 w-80px rounded-1 testimonial-image"
                                    alt="{{ $testimonial->name }}"
                                    src="{{ $testimonial->image ? asset('storage/' . $testimonial->image) : asset('frontend/images/placeholder.png') }}">
                            @else
                                <img class="relative mb-3 z-2 w-80px rounded-1 testimonial-image"
                                    alt="{{ $testimonial->name }}"
                                     src="{{ asset('frontend/images/placeholder.png') }}">
                            @endif
                            </div>
                            <div class="mt-4 text-dark fw-600">{{ $testimonial->name }}</div>
                            <div class="mb-3 de-rating-ext">
                                <span class="d-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                            </div>
                            <p>"{{ $testimonial->message }}"</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
