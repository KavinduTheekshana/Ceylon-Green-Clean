{{-- Gallery Styles --}}
<style>
    /* ========== Gallery Filter Buttons ========== */
    .gallery-filters {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 10px;
    }

    .gallery-filter-btn {
        padding: 10px 26px;
        border: 2px solid var(--primary-color);
        background: transparent;
        color: var(--primary-color);
        font-size: 14px;
        font-weight: 600;
        letter-spacing: 0.5px;
        border-radius: 50px;
        cursor: pointer;
        transition: all 0.3s ease;
        text-transform: capitalize;
    }

    .gallery-filter-btn:hover,
    .gallery-filter-btn.active {
        background: var(--primary-color);
        color: #fff !important;
        box-shadow: 0 4px 15px rgba(var(--primary-color-rgb), 0.35);
    }

    /* ========== Gallery Masonry Grid ========== */
    .gallery-masonry {
        columns: 4;
        column-gap: 16px;
    }

    .gallery-card {
        break-inside: avoid;
        margin-bottom: 16px;
        transition: opacity 0.4s ease, transform 0.4s ease;
    }

    .gallery-card.hiding {
        opacity: 0;
        transform: scale(0.9);
    }

    .gallery-card.hidden-card {
        display: none;
    }

    .gallery-card-inner {
        position: relative;
        border-radius: 12px;
        overflow: hidden;
        cursor: pointer;
        background: #f0f0f0;
    }

    .gallery-card-inner img {
        width: 100%;
        display: block;
        transition: transform 0.5s ease;
    }

    .gallery-card-inner:hover img {
        transform: scale(1.08);
    }

    .gallery-card-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0) 50%);
        display: flex;
        align-items: flex-end;
        justify-content: space-between;
        padding: 18px;
        opacity: 0;
        transition: opacity 0.35s ease;
    }

    .gallery-card-inner:hover .gallery-card-overlay {
        opacity: 1;
    }

    .gallery-card-category {
        color: #fff;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 0.5px;
        text-transform: capitalize;
        background: rgba(var(--primary-color-rgb), 0.75);
        padding: 4px 14px;
        border-radius: 50px;
    }

    .gallery-zoom-btn {
        width: 42px;
        height: 42px;
        border-radius: 50%;
        border: none;
        background: rgba(255,255,255,0.95);
        color: var(--primary-color);
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 2px 8px rgba(0,0,0,0.15);
    }

    .gallery-zoom-btn:hover {
        background: var(--primary-color);
        color: #fff;
        transform: scale(1.1);
    }

    /* ========== Lightbox ========== */
    .gallery-lightbox {
        position: fixed;
        inset: 0;
        z-index: 99999;
        background: rgba(0,0,0,0.92);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        visibility: hidden;
        transition: all 0.35s ease;
    }

    .gallery-lightbox.open {
        opacity: 1;
        visibility: visible;
    }

    .gallery-lightbox-content {
        max-width: 90vw;
        max-height: 90vh;
        text-align: center;
    }

    .gallery-lightbox-content img {
        max-width: 90vw;
        max-height: 82vh;
        border-radius: 8px;
        box-shadow: 0 8px 40px rgba(0,0,0,0.5);
        object-fit: contain;
        transition: transform 0.3s ease;
    }

    .gallery-lightbox-caption {
        color: #fff;
        margin-top: 14px;
        font-size: 15px;
        font-weight: 500;
        letter-spacing: 0.3px;
        text-transform: capitalize;
    }

    .gallery-lightbox-close {
        position: absolute;
        top: 20px;
        right: 28px;
        font-size: 36px;
        color: #fff;
        background: none;
        border: none;
        cursor: pointer;
        z-index: 10;
        transition: transform 0.2s ease;
        line-height: 1;
    }

    .gallery-lightbox-close:hover {
        transform: scale(1.2);
    }

    .gallery-lightbox-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(255,255,255,0.12);
        border: none;
        color: #fff;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: background 0.25s ease;
        z-index: 10;
    }

    .gallery-lightbox-nav:hover {
        background: rgba(255,255,255,0.3);
    }

    .gallery-lightbox-prev {
        left: 24px;
    }

    .gallery-lightbox-next {
        right: 24px;
    }

    /* ========== Gallery Responsive ========== */
    @media (max-width: 1199px) {
        .gallery-masonry {
            columns: 3;
        }
    }

    @media (max-width: 767px) {
        .gallery-masonry {
            columns: 2;
            column-gap: 12px;
        }
        .gallery-card {
            margin-bottom: 12px;
        }
        .gallery-filter-btn {
            padding: 8px 18px;
            font-size: 13px;
        }
        .gallery-lightbox-nav {
            width: 40px;
            height: 40px;
        }
        .gallery-lightbox-prev {
            left: 10px;
        }
        .gallery-lightbox-next {
            right: 10px;
        }
    }

    @media (max-width: 480px) {
        .gallery-masonry {
            columns: 1;
        }
    }
</style>

<section class="pt-4 pb-5">
    <div class="container">

        {{-- Category Filter Buttons --}}
        <div class="mb-5 text-center gallery-filters">
            <button class="gallery-filter-btn active" data-filter="all">All</button>
            @foreach($categories as $category)
                <button class="gallery-filter-btn" data-filter="{{ Str::slug($category) }}">{{ $category }}</button>
            @endforeach
        </div>

        {{-- Gallery Masonry Grid --}}
        <div class="gallery-masonry" id="galleryGrid">
            @foreach($galleries as $gallery)
                <div class="gallery-card" data-category="{{ Str::slug($gallery->category_name) }}">
                    <div class="gallery-card-inner">
                        @if(!empty($gallery->image_path) && file_exists(public_path('storage/' . $gallery->image_path)))
                            <img src="{{ asset('storage/' . $gallery->image_path) }}" alt="{{ $gallery->category_name }}" loading="lazy">
                        @else
                            <img src="{{ asset('frontend/images/placeholder.webp') }}" alt="{{ $gallery->category_name }}" loading="lazy">
                        @endif
                        <div class="gallery-card-overlay">
                            <span class="gallery-card-category">{{ $gallery->category_name }}</span>
                            <button class="gallery-zoom-btn" title="View full size">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Empty State --}}
        <div class="py-5 text-center gallery-empty d-none" id="galleryEmpty">
            <h4>No images found in this category.</h4>
        </div>

    </div>
</section>

{{-- Lightbox Modal --}}
<div class="gallery-lightbox" id="galleryLightbox">
    <button class="gallery-lightbox-close" id="lightboxClose">&times;</button>
    <button class="gallery-lightbox-nav gallery-lightbox-prev" id="lightboxPrev">
        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
    </button>
    <button class="gallery-lightbox-nav gallery-lightbox-next" id="lightboxNext">
        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
    </button>
    <div class="gallery-lightbox-content">
        <img src="" alt="" id="lightboxImage">
        <p class="gallery-lightbox-caption" id="lightboxCaption"></p>
    </div>
</div>

{{-- Gallery Scripts --}}
@push('scripts')
<script>
$(function () {
    // ===== Category Filtering =====
    var $cards = $('.gallery-card');
    var $filterBtns = $('.gallery-filter-btn');
    var $emptyState = $('#galleryEmpty');

    $filterBtns.on('click', function () {
        var filter = $(this).data('filter');

        $filterBtns.removeClass('active');
        $(this).addClass('active');

        if (filter === 'all') {
            $cards.removeClass('hiding');
            setTimeout(function () {
                $cards.removeClass('hidden-card');
            }, 50);
            $emptyState.addClass('d-none');
        } else {
            var $show = $cards.filter('[data-category="' + filter + '"]');
            var $hide = $cards.not('[data-category="' + filter + '"]');

            $hide.addClass('hiding');
            setTimeout(function () {
                $hide.addClass('hidden-card');
                $show.removeClass('hidden-card');
                setTimeout(function () {
                    $show.removeClass('hiding');
                }, 50);
            }, 350);

            if ($show.length === 0) {
                $emptyState.removeClass('d-none');
            } else {
                $emptyState.addClass('d-none');
            }
        }
    });

    // ===== Lightbox =====
    var $lightbox = $('#galleryLightbox');
    var $lightboxImg = $('#lightboxImage');
    var $lightboxCaption = $('#lightboxCaption');
    var visibleImages = [];
    var currentIndex = 0;

    function getVisibleImages() {
        visibleImages = [];
        $('.gallery-card:not(.hidden-card)').each(function () {
            var $img = $(this).find('img');
            visibleImages.push({
                src: $img.attr('src'),
                alt: $img.attr('alt')
            });
        });
    }

    function openLightbox(index) {
        getVisibleImages();
        currentIndex = index;
        showImage();
        $lightbox.addClass('open');
        $('body').css('overflow', 'hidden');
    }

    function closeLightbox() {
        $lightbox.removeClass('open');
        $('body').css('overflow', '');
    }

    function showImage() {
        if (visibleImages[currentIndex]) {
            $lightboxImg.attr('src', visibleImages[currentIndex].src);
            $lightboxCaption.text(visibleImages[currentIndex].alt);
        }
    }

    // Open on image click or zoom button click
    $(document).on('click', '.gallery-card-inner', function () {
        var $card = $(this).closest('.gallery-card');
        var idx = $('.gallery-card:not(.hidden-card)').index($card);
        openLightbox(idx);
    });

    // Close lightbox
    $('#lightboxClose').on('click', closeLightbox);
    $lightbox.on('click', function (e) {
        if ($(e.target).is($lightbox)) closeLightbox();
    });

    // Navigate
    $('#lightboxPrev').on('click', function (e) {
        e.stopPropagation();
        currentIndex = (currentIndex - 1 + visibleImages.length) % visibleImages.length;
        showImage();
    });

    $('#lightboxNext').on('click', function (e) {
        e.stopPropagation();
        currentIndex = (currentIndex + 1) % visibleImages.length;
        showImage();
    });

    // Keyboard navigation
    $(document).on('keydown', function (e) {
        if (!$lightbox.hasClass('open')) return;
        if (e.key === 'Escape') closeLightbox();
        if (e.key === 'ArrowLeft') $('#lightboxPrev').click();
        if (e.key === 'ArrowRight') $('#lightboxNext').click();
    });
});
</script>
@endpush
