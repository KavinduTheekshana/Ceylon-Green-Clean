@extends('layouts.frontend')

@section('title', ($blog->meta_title ?? $blog->title) . ' | Ceylon Green Clean')
@section('meta_description', $blog->meta_description ?? Str::limit(strip_tags($blog->description), 160))
@section('meta_keywords', $blog->meta_keyword ?? '')

@section('content')
    {{-- Banner --}}
    <section class="relative pb-0 overflow-hidden bg-color-3 section-dark text-light">
        <div id="shine-wrapper">
            <div class="template shine"></div>
        </div>
        <div class="container relative z-1000">
            <div class="row g-3 align-items-center">
                <div class="col-lg-8">
                    <div class="relative z-1000">

                        <h1 class="mb-2 wow fadeInUp" data-wow-delay=".2s">{{ $blog->title }}</h1>
                        <div class="mt-3 d-flex align-items-center" style="gap: 20px;">
                            <span><i class="fa fa-user me-2"></i>{{ $blog->author_name }}</span>
                            <span><i class="fa fa-calendar me-2"></i>{{ $blog->date->format('d M Y') }}</span>
                        </div>
                        <div class="spacer-single"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <img src="{{ asset('frontend/images/misc/7.png') }}" class="w-100" data-0="transform: translateY(0px);" data-500="transform: translateY(300px);" alt="">
                </div>
            </div>
        </div>
    </section>

    {{-- Blog Content --}}
    <section class="relative overflow-hidden">
        <div class="container">
            <div class="row g-4">

                {{-- Main Content --}}
                <div class="col-lg-8">
                    <div class="mb-4 overflow-hidden rounded-1">
                        @if(!empty($blog->image_path) && file_exists(public_path('storage/' . $blog->image_path)))
                            <img src="{{ asset('storage/' . $blog->image_path) }}"
                                class="w-100 img-fluid"
                                style="max-height: 450px; object-fit: cover;"
                                alt="{{ $blog->title }}">
                        @else
                            <img src="{{ asset('frontend/images/placeholder.webp') }}"
                                class="w-100 img-fluid"
                                style="max-height: 450px; object-fit: cover;"
                                alt="{{ $blog->title }}">
                        @endif
                    </div>

                    <div class="blog-content">
                        {!! $blog->description !!}
                    </div>

                    {{-- Tags --}}
                    @if($blog->tags->count() > 0)
                        <div class="spacer-single"></div>
                        <div class="flex-wrap d-flex align-items-center" style="gap: 10px;">
                            <strong>Tags:</strong>
                            @foreach($blog->tags as $tag)
                                <span class="px-3 py-1 rounded-1" style="background: #f5f5f5; font-size: 13px;">{{ $tag->name }}</span>
                            @endforeach
                        </div>
                    @endif
                </div>

                {{-- Sidebar --}}
                <div class="col-lg-4">
                    {{-- Categories --}}
                    <div class="p-4 mb-4 rounded-1 shadow-soft">
                        <h4 class="mb-3">Categories</h4>
                        <ul class="mb-0 list-unstyled">
                            @foreach ($categories as $category)
                                <li class="py-2" style="border-bottom: 1px solid #eee;">
                                    <a href="{{ route('blog') }}?category={{ $category->slug }}" style="color: inherit; text-decoration: none;" class="d-flex justify-content-between align-items-center">
                                        <span>{{ $category->name }}</span>
                                        <span class="fw-500" style="color: #999; font-size: 13px;">({{ $category->blogs_count }})</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    {{-- Recent Posts --}}
                    @if($recentBlogs->count() > 0)
                        <div class="p-4 rounded-1 shadow-soft">
                            <h4 class="mb-3">Recent Posts</h4>
                            <div class="row g-3">
                                @foreach($recentBlogs as $recent)
                                    <div class="col-12 col-sm-6 col-lg-12">
                                        <div class="d-flex align-items-center" style="gap: 15px;">
                                            <div class="flex-shrink-0 overflow-hidden rounded-1" style="width: 80px; height: 80px;">
                                                @if(!empty($recent->image_path) && file_exists(public_path('storage/' . $recent->image_path)))
                                                    <img src="{{ asset('storage/' . $recent->image_path) }}"
                                                        style="width: 80px; height: 80px; object-fit: cover;"
                                                        alt="{{ $recent->title }}">
                                                @else
                                                    <img src="{{ asset('frontend/images/placeholder.webp') }}"
                                                        style="width: 80px; height: 80px; object-fit: cover;"
                                                        alt="{{ $recent->title }}">
                                                @endif
                                            </div>
                                            <div class="overflow-hidden flex-grow-1" style="min-width: 0;">
                                                <h6 class="mb-1" style="line-height: 1.4; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; word-break: break-word;">
                                                    <a href="{{ route('blog.single', $recent->slug) }}" style="color: inherit; text-decoration: none;">
                                                        {{ Str::limit($recent->title, 45, '...') }}
                                                    </a>
                                                </h6>
                                                <span style="font-size: 13px; color: #999;">{{ $recent->date->format('d M Y') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </section>
@endsection
