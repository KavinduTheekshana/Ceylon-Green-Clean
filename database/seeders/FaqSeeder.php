<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'What areas do you provide cleaning services in?',
                'answer' => 'We provide cleaning services throughout Colombo, Kandy, Galle, and other major cities in Sri Lanka. Contact us to confirm availability in your area.',
                'is_active' => true,
            ],
            [
                'question' => 'Are your cleaning products eco-friendly?',
                'answer' => 'Yes! We use non-toxic, eco-friendly cleaning products that are safe for children, pets, and the environment.',
                'is_active' => true,
            ],
            [
                'question' => 'Do I need to be home during the cleaning?',
                'answer' => 'No, you can schedule our cleaning team at your convenience. We can clean while you are away, as long as we have access to the property.',
                'is_active' => true,
            ],
            [
                'question' => 'Can I book a one-time deep cleaning?',
                'answer' => 'Absolutely! We offer both regular and one-time deep cleaning services tailored to your needs.',
                'is_active' => true,
            ],
            [
                'question' => 'How do I reschedule or cancel a service?',
                'answer' => 'You can reschedule or cancel by contacting us at least 24 hours before the scheduled cleaning via phone or email.',
                'is_active' => true,
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::create($faq);
        }
    }
}
