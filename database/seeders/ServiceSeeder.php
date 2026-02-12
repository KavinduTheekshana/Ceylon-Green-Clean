<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'service_name' => 'Residential Cleaning',
                'description' => 'Complete eco-friendly home cleaning service for apartments and houses. Our team ensures every corner of your home is spotless, sanitized, and organized. We focus on high-touch areas and use non-toxic cleaning products for a safe environment.',
                'services_list' => [
                    'Dusting and wiping all surfaces',
                    'Sweeping and mopping floors',
                    'Kitchen cleaning (sink, stove, counters)',
                    'Bathroom sanitizing and disinfecting',
                    'Window and glass cleaning',
                    'Bedroom and living room cleaning',
                    'Trash removal',
                    'Eco-friendly cleaning products used',
                    'Ceiling fan and light fixture dusting',
                    'Door frames and switchboard cleaning'
                ],
                'status' => true,
                'image' => 'residential-cleaning.jpg',
            ],
            [
                'service_name' => 'Office Cleaning',
                'description' => 'Professional cleaning service for offices and commercial spaces. We clean desks, floors, meeting rooms, restrooms, and pantries, ensuring a hygienic and productive workplace using eco-friendly disinfectants.',
                'services_list' => [
                    'Desk and workstation cleaning',
                    'Floor vacuuming and mopping',
                    'Meeting room cleaning',
                    'Restroom sanitization',
                    'Pantry and kitchen area cleaning',
                    'Trash collection and disposal',
                    'Glass partition cleaning',
                    'High-touch surface disinfection'
                ],
                'status' => true,
                'image' => 'office-cleaning.jpg',
            ],
            [
                'service_name' => 'Deep Cleaning Service',
                'description' => 'Thorough top-to-bottom cleaning for homes and businesses. We remove hidden dirt, bacteria, and stains from floors, tiles, kitchens, and bathrooms. Ideal for periodic deep cleaning or special occasions.',
                'services_list' => [
                    'Intensive floor scrubbing',
                    'Tile and grout deep cleaning',
                    'Kitchen grease removal',
                    'Bathroom scale removal',
                    'Interior window washing',
                    'Wall stain removal',
                    'Behind furniture cleaning',
                    'Full property sanitization'
                ],
                'status' => true,
                'image' => 'deep-cleaning.jpg',
            ],
            [
                'service_name' => 'Carpet & Sofa Cleaning',
                'description' => 'Professional cleaning for carpets and upholstered furniture. Removes dust, allergens, stains, and odors using advanced steam cleaning techniques and eco-friendly solutions.',
                'services_list' => [
                    'Carpet shampooing',
                    'Sofa steam cleaning',
                    'Stain removal treatment',
                    'Dust mite removal',
                    'Odor elimination',
                    'Fabric protection treatment',
                    'Quick-dry process',
                    'Eco-friendly cleaning solutions'
                ],
                'status' => true,
                'image' => 'carpet-sofa-cleaning.jpg',
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
