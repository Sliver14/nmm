<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;
use App\Models\Event;
use Illuminate\Support\Str;

class DummyDataSeeder extends Seeder
{
    public function run()
    {
        News::create([
            'title' => 'First Free Surgery Outreach in Lagos',
            'slug' => Str::slug('First Free Surgery Outreach in Lagos'),
            'content' => 'We successfully completed our first free surgery outreach in Lagos, helping over 50 patients...',
            'image' => 'https://images.unsplash.com/photo-1551076805-e1869043e560?auto=format&fit=crop&w=800&q=80',
            'is_published' => true,
            'published_at' => now()->subDays(2),
            'views' => 150,
            'likes' => 20
        ]);
        
        News::create([
            'title' => 'NMM Partners with Local Clinics',
            'slug' => Str::slug('NMM Partners with Local Clinics'),
            'content' => 'To expand our reach, we have partnered with 5 local clinics to provide ongoing support...',
            'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&w=800&q=80',
            'is_published' => true,
            'published_at' => now()->subDays(5),
            'views' => 300,
            'likes' => 45
        ]);
        
        News::create([
            'title' => 'Annual Global Medical Missions Conference',
            'slug' => Str::slug('Annual Global Medical Missions Conference'),
            'content' => 'Join us for our annual conference where medical professionals gather to share insights...',
            'image' => 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=800&q=80',
            'is_published' => true,
            'published_at' => now()->subDays(10),
            'views' => 120,
            'likes' => 15
        ]);

        Event::create([
            'title' => 'Community Health Fair - Abuja',
            'slug' => Str::slug('Community Health Fair - Abuja'),
            'description' => 'A free health fair providing checkups and medications to the local community.',
            'location' => 'Abuja, Nigeria',
            'start_date' => now()->addDays(15),
            'end_date' => now()->addDays(16),
            'image' => 'https://images.unsplash.com/photo-1532938911079-1b06ac7ceec7?auto=format&fit=crop&w=800&q=80',
            'is_active' => true
        ]);
        
        Event::create([
            'title' => 'Medical Volunteer Training Seminar',
            'slug' => Str::slug('Medical Volunteer Training Seminar'),
            'description' => 'A seminar designed to equip new volunteers with necessary skills for mission trips.',
            'location' => 'Online',
            'start_date' => now()->addDays(20),
            'end_date' => now()->addDays(20),
            'image' => 'https://images.unsplash.com/photo-1593113598332-cd288d649433?auto=format&fit=crop&w=800&q=80',
            'is_active' => true
        ]);
        
        Event::create([
            'title' => 'Widows Health Campaign 2026',
            'slug' => Str::slug('Widows Health Campaign 2026'),
            'description' => 'Providing specialized care and health checkups for widows in rural areas.',
            'location' => 'Enugu, Nigeria',
            'start_date' => now()->addDays(30),
            'end_date' => now()->addDays(32),
            'image' => 'https://images.unsplash.com/photo-1469571486292-0ba58a3f068b?auto=format&fit=crop&w=800&q=80',
            'is_active' => true
        ]);
    }
}
