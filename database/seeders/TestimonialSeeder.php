<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        $testimonials = [
            [
                'name' => 'Kamal Perera',
                'message' => 'Ceylon Green Clean transformed my home! The Residential Cleaning service was thorough and eco-friendly. Every corner of my house sparkled, and I felt safe knowing they use non-toxic products. Highly recommend!',
                'image' => 'kamal.jpg',
                'status' => true,
            ],
            [
                'name' => 'Nadeesha Fernando',
                'message' => 'Our office has never looked better! The team cleaned everything from desks to floors with incredible attention to detail. I love their eco-conscious approach and punctuality. Professional and reliable!',
                'image' => 'nadeesha.jpg',
                'status' => true,
            ],
            [
                'name' => 'Sanjay De Silva',
                'message' => 'I booked the Move-In Cleaning service, and it exceeded my expectations. The apartment was spotless, sanitized, and ready for immediate move-in. Truly hassle-free and efficient!',
                'image' => 'sanjay.jpg',
                'status' => true,
            ],
            [
                'name' => 'Ishara Jayawardena',
                'message' => 'We hired Ceylon Green Clean for post-construction cleaning, and the result was amazing. All dust, debris, and paint marks were removed, leaving our new office shining and ready for employees. Highly professional team!',
                'image' => 'ishara.jpg',
                'status' => true,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
