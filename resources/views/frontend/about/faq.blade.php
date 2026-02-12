<section class="border-top">
    <div class="container">
        <div class="row g-4">
            <div class="text-center col-lg-6 offset-lg-3">
                <div class="mb-3 subtitle wow fadeInUp">Questions</div>
                <h2 class="wow fadeInUp" data-wow-delay=".2s">Frequently asked questions?</h2>
            </div>
        </div>

        <div class="row g-4 justify-content-center">
            <div class="col-lg-8">
                <div class="accordion s2 wow fadeInUp">
                    <div class="accordion-section">
                        @forelse($faqs as $index => $faq)
                            <div class="accordion-section-title" data-tab="#accordion-{{ $faq->id }}">
                                {{ $faq->question }}
                            </div>
                            <div class="accordion-section-content" id="accordion-{{ $faq->id }}">
                                <p class="mb-0">{{ $faq->answer }}</p>
                            </div>
                        @empty
                            <div class="py-4 text-center">
                                <p class="mb-0">No FAQs available at the moment.</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>