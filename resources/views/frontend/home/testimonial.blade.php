<section class="border-top bg-light">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6 offset-lg-3 text-center">
                <div class="subtitle wow fadeInUp mb-3">Testimonials</div>
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
                                <img class="relative z-2 w-80px mb-3 rounded-1 testimonial-image"
                                    alt="{{ $testimonial->name }}"
                                    src="{{ $testimonial->image ? asset('storage/' . $testimonial->image) : asset('frontend/images/placeholder.png') }}">
                            </div>
                            <div class="mt-4 text-dark fw-600">{{ $testimonial->name }}</div>
                            <div class="de-rating-ext mb-3">
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
