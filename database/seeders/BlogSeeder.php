<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    public function run(): void
    {
        $blogs = [
            [
                'title' => '10 Eco-Friendly Cleaning Tips for Your Home',
                'slug' => '10-eco-friendly-cleaning-tips-for-your-home',
                'meta_title' => '10 Eco-Friendly Cleaning Tips | Ceylon Green Clean',
                'meta_description' => 'Discover 10 simple and effective eco-friendly cleaning tips to keep your home spotless while protecting the environment.',
                'meta_keyword' => 'eco-friendly cleaning, green cleaning tips, home cleaning',
                'blog_category_id' => 1,
                'author_name' => 'Ceylon Green Clean',
                'date' => '2026-02-01',
                'description' => '<p>Keeping your home clean doesn\'t have to come at the cost of the environment. Here are 10 simple yet effective eco-friendly cleaning tips that you can start using today.</p><h3>1. Use Vinegar and Baking Soda</h3><p>A mixture of vinegar and baking soda can tackle most household cleaning tasks, from kitchen counters to bathroom tiles.</p><h3>2. Switch to Reusable Cloths</h3><p>Replace paper towels with microfiber cloths that can be washed and reused hundreds of times.</p><h3>3. Make Your Own All-Purpose Cleaner</h3><p>Mix equal parts water and white vinegar with a few drops of essential oil for a natural all-purpose cleaner.</p><h3>4. Choose Biodegradable Products</h3><p>When buying cleaning products, look for biodegradable and plant-based options.</p><h3>5. Use Lemon for Natural Freshness</h3><p>Lemon juice is a natural disinfectant and deodorizer, perfect for cutting through grease and leaving surfaces smelling fresh.</p>',
                'image_path' => null,
                'is_active' => true,
            ],
            [
                'title' => 'Why Green Cleaning Matters for Your Family\'s Health',
                'slug' => 'why-green-cleaning-matters-for-your-familys-health',
                'meta_title' => 'Why Green Cleaning Matters | Ceylon Green Clean',
                'meta_description' => 'Learn how switching to green cleaning products can improve your family\'s health and create a safer home environment.',
                'meta_keyword' => 'green cleaning, family health, non-toxic cleaning',
                'blog_category_id' => 4,
                'author_name' => 'Ceylon Green Clean',
                'date' => '2026-02-05',
                'description' => '<p>Many conventional cleaning products contain harmful chemicals that can affect your family\'s health. From respiratory issues to skin irritation, the impact of toxic cleaning agents is well-documented.</p><h3>The Hidden Dangers</h3><p>Common cleaning products often contain volatile organic compounds (VOCs), ammonia, and chlorine that can trigger allergies, asthma, and other health problems.</p><h3>Benefits of Green Cleaning</h3><p>Eco-friendly cleaning products are made from natural ingredients that are safe for your family, pets, and the environment. They reduce indoor air pollution, minimize allergic reactions, and are gentle on surfaces.</p><h3>Making the Switch</h3><p>At Ceylon Green Clean, we exclusively use non-toxic, eco-friendly cleaning products. Our professional team ensures your home is not just clean, but safe for everyone.</p>',
                'image_path' => null,
                'is_active' => true,
            ],
            [
                'title' => 'The Ultimate Guide to Deep Cleaning Your Kitchen',
                'slug' => 'the-ultimate-guide-to-deep-cleaning-your-kitchen',
                'meta_title' => 'Deep Cleaning Your Kitchen Guide | Ceylon Green Clean',
                'meta_description' => 'A complete guide to deep cleaning your kitchen using eco-friendly methods. Step-by-step instructions for a sparkling kitchen.',
                'meta_keyword' => 'kitchen deep cleaning, cleaning guide, kitchen hygiene',
                'blog_category_id' => 1,
                'author_name' => 'Ceylon Green Clean',
                'date' => '2026-02-08',
                'description' => '<p>Your kitchen is the heart of your home, and keeping it clean is essential for your family\'s health. Here is our step-by-step guide to deep cleaning your kitchen the eco-friendly way.</p><h3>Step 1: Clear and Declutter</h3><p>Start by removing everything from your countertops and clearing out expired items from your fridge and pantry.</p><h3>Step 2: Clean Appliances</h3><p>Wipe down your oven, microwave, refrigerator, and dishwasher inside and out with a natural cleaning solution.</p><h3>Step 3: Scrub Surfaces</h3><p>Use baking soda paste to scrub countertops, backsplash tiles, and the sink. Rinse with a vinegar solution for extra shine.</p><h3>Step 4: Floors and Baseboards</h3><p>Sweep, then mop with a plant-based floor cleaner. Don\'t forget to wipe baseboards and cabinet fronts.</p>',
                'image_path' => null,
                'is_active' => true,
            ],
            [
                'title' => 'Ceylon Green Clean Expands Services to Kandy',
                'slug' => 'ceylon-green-clean-expands-services-to-kandy',
                'meta_title' => 'Now Serving Kandy | Ceylon Green Clean',
                'meta_description' => 'Ceylon Green Clean is excited to announce the expansion of our eco-friendly cleaning services to Kandy and surrounding areas.',
                'meta_keyword' => 'Ceylon Green Clean, Kandy cleaning, service expansion',
                'blog_category_id' => 3,
                'author_name' => 'Ceylon Green Clean',
                'date' => '2026-02-10',
                'description' => '<p>We are thrilled to announce that Ceylon Green Clean is now offering our professional eco-friendly cleaning services in Kandy and the surrounding areas!</p><h3>What This Means for You</h3><p>Residents and businesses in Kandy can now enjoy the same high-quality, environmentally conscious cleaning services that our Colombo customers love.</p><h3>Services Available</h3><p>All our core services are available in Kandy, including residential cleaning, office cleaning, deep cleaning, and carpet and sofa cleaning.</p><h3>Book Now</h3><p>Contact us today to schedule your first eco-friendly cleaning service in Kandy. Special introductory rates are available for new customers!</p>',
                'image_path' => null,
                'is_active' => true,
            ],
        ];

        foreach ($blogs as $blog) {
            $createdBlog = Blog::create($blog);

            // Assign tags to blogs
            match ($createdBlog->slug) {
                '10-eco-friendly-cleaning-tips-for-your-home' => $createdBlog->tags()->attach([1, 3, 6]),
                'why-green-cleaning-matters-for-your-familys-health' => $createdBlog->tags()->attach([3, 5]),
                'the-ultimate-guide-to-deep-cleaning-your-kitchen' => $createdBlog->tags()->attach([4, 6, 8]),
                'ceylon-green-clean-expands-services-to-kandy' => $createdBlog->tags()->attach([1, 2]),
                default => null,
            };
        }
    }
}
