<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display all active blog posts
     */
    public function index()
    {
        $blogs = Blog::where('is_active', true)
            ->with('category', 'tags')
            ->orderBy('date', 'desc')
            ->paginate(9);

        $categories = BlogCategory::where('is_active', true)->get();

        return view('frontend.blog.index', compact('blogs', 'categories'));
    }

    /**
     * Display a single blog post
     */
    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)
            ->where('is_active', true)
            ->with('category', 'tags')
            ->firstOrFail();

        $recentBlogs = Blog::where('is_active', true)
            ->where('id', '!=', $blog->id)
            ->orderBy('date', 'desc')
            ->take(3)
            ->get();

        $categories = BlogCategory::where('is_active', true)->withCount(['blogs' => function ($query) {
            $query->where('is_active', true);
        }])->get();

        return view('frontend.blog.single', compact('blog', 'recentBlogs', 'categories'));
    }
}
