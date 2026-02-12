<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BlogTag;

class BlogTagSeeder extends Seeder
{
    public function run(): void
    {
        $tags = [
            ['name' => 'Home Cleaning', 'slug' => 'home-cleaning', 'is_active' => true],
            ['name' => 'Office Cleaning', 'slug' => 'office-cleaning', 'is_active' => true],
            ['name' => 'Green Products', 'slug' => 'green-products', 'is_active' => true],
            ['name' => 'Deep Cleaning', 'slug' => 'deep-cleaning', 'is_active' => true],
            ['name' => 'Sustainability', 'slug' => 'sustainability', 'is_active' => true],
            ['name' => 'Tips & Tricks', 'slug' => 'tips-and-tricks', 'is_active' => true],
            ['name' => 'Carpet Care', 'slug' => 'carpet-care', 'is_active' => true],
            ['name' => 'Kitchen Cleaning', 'slug' => 'kitchen-cleaning', 'is_active' => true],
        ];

        foreach ($tags as $tag) {
            BlogTag::create($tag);
        }
    }
}
