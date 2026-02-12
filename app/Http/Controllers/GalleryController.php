<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    /**
     * Display a listing of all galleries.
     */
    public function index()
    {
        $galleries = Gallery::where('is_active', true)->get();
        $categories = $galleries->pluck('category_name')->unique()->values();

        return view('frontend.galleries.index', compact('galleries', 'categories'));
    }
}
