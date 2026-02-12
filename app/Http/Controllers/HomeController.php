<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\Faq;


class HomeController extends Controller
{
    public function index()
    {
        // Fetch only active services and limit to 6
        $services = Service::where('status', true)
                            ->take(6)
                            ->get();

        // Fetch all active testimonials
        $testimonials = Testimonial::where('status', true)->get();

        return view('frontend.home.index', compact('services', 'testimonials'));
    }


    public function about()
    {
        // Fetch active FAQs ordered by your preferred method
        // You might want to add 'order_column' to your FAQ model for custom ordering
        $faqs = Faq::where('is_active', true)
                   ->orderBy('id') // or orderBy('order_column')
                   ->get();

        $testimonials = Testimonial::where('status', true)->get();
        
        return view('frontend.about.index', compact('faqs', 'testimonials'));
    }

    public function booking()
    {
        return view('frontend.bookings.index');
    }

    public function contact()
    {
        return view('frontend.contact.index');
    }
    public function services()
    {
        $services = Service::where('status', true)->get(); // Fetch only active services
        return view('frontend.services.index', compact('services'));
    }
    public function how()
    {
        $testimonials = Testimonial::where('status', true)->get(); // Fetch only active services
        return view('frontend.how.index', compact('testimonials'));
    }
}
