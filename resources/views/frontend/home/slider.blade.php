<section class="relative overflow-hidden" data-bgimage="url(frontend/images/background/1.webp) center">

    <div class="container relative z-1000">
        <div class="row g-4 align-items-center justify-content-between">
            <div class="col-lg-5">
                <div class="relative z-1000">
                    <div class="subtitle wow fadeInUp" data-wow-delay=".0s">Ceylon Deep Cleaners</div>
                    <h1 class="wow fadeInUp" data-wow-delay=".2s">We Make Your Space <span id="type-text"></span></h1>

                    <p class="wow fadeInUp" data-wow-delay=".4s">Enjoy a spotless space with our expert cleaning team.
                        Affordable, eco friendly, and tailored to your needs!</p>

                    <div class="spacer-10"></div>

                    <a class="btn-main wow fadeInUp" data-wow-delay=".6s" href="{{route('booking')}}">Book Cleaning
                        Service</a>
                    <div class=""></div>

                    <div class="spacer-double"></div>
                </div>
            </div>

            <div class="col-lg-6">
                <img src="{{ asset('frontend/images/misc/4.webp') }}" class="w-100 wow fadeInUp" data-wow-delay=".8s"
                    alt="">
            </div>

        </div>

        <div class="spacer-triple"></div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="text-center">
                    <img src="{{ asset('frontend/images/icons/white/labor.webp') }}"
                        class="bg-color w-30 p-15 rounded-10 mb-3 wow scaleIn" alt="">
                    <div class="relative wow fadeInUp">
                        <h4>Professional Team</h4>
                        <p class="mb-0">Our trained, insured cleaners ensure professional, trusted service and
                            impeccable results.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="text-center">
                    <img src="{{ asset('frontend/images/icons/white/calendar.webp') }}"
                        class="bg-color w-30 p-15 rounded-10 mb-3 wow scaleIn" alt="">
                    <div class="relative wow fadeInUp">
                        <h4>On Time Service</h4>
                        <p class="mb-0">Reliable, punctual service that respects your schedule and exceeds
                            expectations.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="text-center">
                    <img src="{{ asset('frontend/images/icons/white/best-price.webp') }}"
                        class="bg-color w-30 p-15 rounded-10 mb-3 wow scaleIn" alt="">
                    <div class="relative wow fadeInUp">
                        <h4>Transparent Pricing</h4>
                        <p class="mb-0">Affordable, upfront rates with no hidden costs. Quality cleaning at the right
                            price.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="text-center">
                    <img src="{{ asset('frontend/images/icons/white/eco-friendly.webp') }}"
                        class="bg-color w-30 p-15 rounded-10 mb-3 wow scaleIn" alt="">
                    <div class="relative wow fadeInUp">
                        <h4>Eco Friendly</h4>
                        <p class="mb-0">We use non toxic, eco friendly products for a safe, healthy, and sparkling
                            environment.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const words = ["Spotless", "Fresh", "Hygienic","Germ Free"];
            let index = 0;
            let charIndex = 0;
            let isDeleting = false;
            const speed = 100; // Typing speed
            const delay = 1500; // Delay before erasing
            const target = document.getElementById("type-text");

            function typeEffect() {
                const currentWord = words[index];
                if (isDeleting) {
                    charIndex--;
                } else {
                    charIndex++;
                }

                target.textContent = currentWord.substring(0, charIndex);

                if (!isDeleting && charIndex === currentWord.length) {
                    setTimeout(() => (isDeleting = true), delay);
                } else if (isDeleting && charIndex === 0) {
                    isDeleting = false;
                    index = (index + 1) % words.length;
                }

                setTimeout(typeEffect, isDeleting ? speed / 2 : speed);
            }

            typeEffect();
        });
    </script>
@endpush
