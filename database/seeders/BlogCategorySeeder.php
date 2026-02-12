<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BlogCategory;

class BlogCategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Cleaning Tips',
                'slug' => 'cleaning-tips',
                'description' => 'Helpful tips and tricks for keeping your home and office clean using eco-friendly methods.',
                'is_active' => true,
            ],
            [
                'name' => 'Eco-Friendly Living',
                'slug' => 'eco-friendly-living',
                'description' => 'Articles about sustainable living, green products, and environmentally conscious cleaning practices.',
                'is_active' => true,
            ],
            [
                'name' => 'Company News',
                'slug' => 'company-news',
                'description' => 'Latest updates, announcements, and news from Ceylon Green Clean.',
                'is_active' => true,
            ],
            [
                'name' => 'Health & Hygiene',
                'slug' => 'health-and-hygiene',
                'description' => 'Information about maintaining a healthy and hygienic living and working environment.',
                'is_active' => true,
            ],
        ];

        foreach ($categories as $category) {
            BlogCategory::create($category);
        }
    }
}
