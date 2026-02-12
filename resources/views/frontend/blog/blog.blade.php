<section class="relative overflow-hidden">
    <div class="container">
        <div class="row g-4">

            {{-- Blog Posts --}}
            <div class="col-lg-8">
                <div class="row g-4">
                    @forelse ($blogs as $blog)
                        <div class="col-md-6">
                            <div class="relative h-100 rounded-1 shadow-soft overflow-hidden">
                                <a href="{{ route('blog.single', $blog->slug) }}" class="d-block hover">
                                    <div class="relative overflow-hidden" style="height: 220px;">
                                        @if(!empty($blog->image_path) && file_exists(public_path('storage/' . $blog->image_path)))
                                            <img src="{{ asset('storage/' . $blog->image_path) }}"
                                                style="width: 100%; height: 220px; object-fit: cover; display: block;"
                                                class="img-fluid hover-scale-1-2"
                                                alt="{{ $blog->title }}">
                                        @else
                                            <img src="{{ asset('frontend/images/placeholder.webp') }}"
                                                style="width: 100%; height: 220px; object-fit: cover; display: block;"
                                                class="img-fluid hover-scale-1-2"
                                                alt="{{ $blog->title }}">
                                        @endif
                                    </div>
                                </a>
                                <div class="p-4">
                                    <div class="d-flex align-items-center mb-3" style="gap: 15px;">
                                        <span class="fw-500" style="font-size: 14px; color: var(--primary-color);">
                                            {{ $blog->category->name ?? '' }}
                                        </span>
                                        <span style="font-size: 13px; color: #999;">
                                            {{ $blog->date->format('d M Y') }}
                                        </span>
                                    </div>
                                    <h4 class="mb-2">
                                        <a href="{{ route('blog.single', $blog->slug) }}" style="color: inherit; text-decoration: none;">
                                            {{ Str::limit($blog->title, 60, '...') }}
                                        </a>
                                    </h4>
                                    <p class="mb-3" style="font-size: 14px; color: #666;">
                                        {{ Str::limit(strip_tags($blog->description), 100, '...') }}
                                    </p>
                                    <a href="{{ route('blog.single', $blog->slug) }}" class="fw-600" style="color: var(--primary-color); text-decoration: none; font-size: 14px;">
                                        Read More →
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center">
                            <p class="lead">No blog posts found.</p>
                        </div>
                    @endforelse
                </div>

                {{-- Pagination --}}
                @if ($blogs->hasPages())
                    <div class="spacer-single"></div>
                    <div class="d-flex justify-content-center">
                        {{ $blogs->links() }}
                    </div>
                @endif
            </div>

            {{-- Sidebar --}}
            <div class="col-lg-4">
                {{-- Categories --}}
                <div class="p-4 rounded-1 shadow-soft mb-4">
                    <h4 class="mb-3">Categories</h4>
                    <ul class="list-unstyled mb-0">
                        @foreach ($categories as $category)
                            <li class="py-2" style="border-bottom: 1px solid #eee;">
                                <a href="{{ route('blog') }}?category={{ $category->slug }}" style="color: inherit; text-decoration: none;" class="d-flex justify-content-between align-items-center">
                                    <span>{{ $category->name }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
