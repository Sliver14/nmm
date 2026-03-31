<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Faq;
use App\Models\Value;
use App\Models\Program;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Seed FAQs
        Faq::create([
            'question' => 'How does the Network for Medical Missions operate?',
            'answer' => 'We operate as an international membership organization which houses national team supports and is coordinated through a global secretariat.'
        ]);
        
        Faq::create([
            'question' => 'What are the Network for Medical Missions’ areas of focus?',
            'answer' => 'We provide free surgeries, healthcare medicines, services, and as well as supplies to the communities of sick, frail, and poor people who are at a major risk of illness, poor health, and different diseases with an aim to foster community development and Christian missionary impact.'
        ]);

        // 2. Seed Core Values
        $values = ['Christian Faith', 'Collaboration and Strategic Partnership', 'Community Service'];
        foreach ($values as $value) {
            Value::create([
                'title' => $value,
                'description' => 'A core value of the Network for Medical Missions.',
                'icon' => 'fas fa-check'
            ]);
        }

        // 3. Seed Programs
        $programs = [
            [
                'title' => 'Free Surgeries',
                'slug' => 'free-surgeries',
                'short_description' => 'Providing essential surgical procedures to those in need.',
                'full_content' => 'General Surgery, Gynaecological Surgery, Pediatric Surgery, Urological Surgery, Orthopedic Surgery, Eye Surgery',
            ],
            [
                'title' => 'Wound Care Outreaches',
                'slug' => 'wound-care-outreaches',
                'short_description' => 'Workshops and training sessions on chronic wound management.',
                'full_content' => 'Provision of access to wound care sessions and health education on self-management techniques to people living with chronic wounds with the aim to improve health outcomes and reduce the risk of amputations.',
            ],
            [
                'title' => 'Health For Widows Campaign',
                'slug' => 'health-for-widows-campaign',
                'short_description' => 'Specialized medical care and checkups for vulnerable widows.',
                'full_content' => 'We aim to support the most vulnerable among us by ensuring widows have access to quality healthcare to improve their quality of life.',
            ],
            [
                'title' => 'Community Health Fairs',
                'slug' => 'community-health-fairs',
                'short_description' => 'Free medical fairs providing primary and dental care.',
                'full_content' => 'Hosting of Free Medical fairs with the aim to provide primary care for minor illnesses, eye and ear clinics, pharmacy services, and routine dental exams.',
            ]
        ];

        foreach ($programs as $program) {
            Program::create($program);
        }
    }
}
