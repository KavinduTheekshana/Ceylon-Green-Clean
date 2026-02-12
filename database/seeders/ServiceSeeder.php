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
                    ['service' => 'Dusting and wiping all surfaces'],
                    ['service' => 'Sweeping and mopping floors'],
                    ['service' => 'Kitchen cleaning (sink, stove, counters)'],
                    ['service' => 'Bathroom sanitizing and disinfecting'],
                    ['service' => 'Window and glass cleaning'],
                    ['service' => 'Bedroom and living room cleaning'],
                    ['service' => 'Trash removal'],
                    ['service' => 'Eco-friendly cleaning products used'],
                    ['service' => 'Ceiling fan and light fixture dusting'],
                    ['service' => 'Door frames and switchboard cleaning'],
                ],
                'status' => true,
                'image' => 'residential-cleaning.jpg',
            ],
            [
                'service_name' => 'Office Cleaning',
                'description' => 'Professional cleaning service for offices and commercial spaces. We clean desks, floors, meeting rooms, restrooms, and pantries, ensuring a hygienic and productive workplace using eco-friendly disinfectants.',
                'services_list' => [
                    ['service' => 'Desk and workstation cleaning'],
                    ['service' => 'Floor vacuuming and mopping'],
                    ['service' => 'Meeting room cleaning'],
                    ['service' => 'Restroom sanitization'],
                    ['service' => 'Pantry and kitchen area cleaning'],
                    ['service' => 'Trash collection and disposal'],
                    ['service' => 'Glass partition cleaning'],
                    ['service' => 'High-touch surface disinfection'],
                ],
                'status' => true,
                'image' => 'office-cleaning.jpg',
            ],
            [
                'service_name' => 'Deep Cleaning Service',
                'description' => 'Thorough top-to-bottom cleaning for homes and businesses. We remove hidden dirt, bacteria, and stains from floors, tiles, kitchens, and bathrooms. Ideal for periodic deep cleaning or special occasions.',
                'services_list' => [
                    ['service' => 'Intensive floor scrubbing'],
                    ['service' => 'Tile and grout deep cleaning'],
                    ['service' => 'Kitchen grease removal'],
                    ['service' => 'Bathroom scale removal'],
                    ['service' => 'Interior window washing'],
                    ['service' => 'Wall stain removal'],
                    ['service' => 'Behind furniture cleaning'],
                    ['service' => 'Full property sanitization'],
                ],
                'status' => true,
                'image' => 'deep-cleaning.jpg',
            ],
            [
                'service_name' => 'Carpet & Sofa Cleaning',
                'description' => 'Professional cleaning for carpets and upholstered furniture. Removes dust, allergens, stains, and odors using advanced steam cleaning techniques and eco-friendly solutions.',
                'services_list' => [
                    ['service' => 'Carpet shampooing'],
                    ['service' => 'Sofa steam cleaning'],
                    ['service' => 'Stain removal treatment'],
                    ['service' => 'Dust mite removal'],
                    ['service' => 'Odor elimination'],
                    ['service' => 'Fabric protection treatment'],
                    ['service' => 'Quick-dry process'],
                    ['service' => 'Eco-friendly cleaning solutions'],
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
