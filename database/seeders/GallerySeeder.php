<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Option 2: Hand-picked gallery items (for testing)
        Gallery::create([
            'category_name' => 'Residential Cleaning',
            'image_path'    => 'galleries/sample-residential-cleaning.jpg',
            'is_active'     => true,
        ]);

        Gallery::create([
            'category_name' => 'Office Cleaning',
            'image_path'    => 'galleries/sample-office-cleaning.jpg',
            'is_active'     => true,
        ]);

        Gallery::create([
            'category_name' => 'Deep Cleaning',
            'image_path'    => 'galleries/sample-deep-cleaning.jpg',
            'is_active'     => false,
        ]);

        Gallery::create([
            'category_name' => 'Carpet & Sofa Cleaning',
            'image_path'    => 'galleries/sample-carpet-sofa.jpg',
            'is_active'     => true,
        ]);

        Gallery::create([
            'category_name' => 'Post-Construction Cleaning',
            'image_path'    => 'galleries/sample-post-construction.jpg',
            'is_active'     => true,
        ]);

        Gallery::create([
            'category_name' => 'Move-In / Move-Out Cleaning',
            'image_path'    => 'galleries/sample-move-in-out.jpg',
            'is_active'     => true,
        ]);

        Gallery::create([
            'category_name' => 'Disinfection & Sanitization',
            'image_path'    => 'galleries/sample-disinfection.jpg',
            'is_active'     => true,
        ]);
    }
}
