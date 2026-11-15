<?php

namespace Database\Seeders;

use App\Models\Advert;
use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\View;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'name' => 'Ethan Brooks',
            'phone' => '+1 202 555 0143',
            'email' => 'ethan@ws-s17.kz',
            'password' => 'ethan_123',
            'role' => 'user'
        ]);
        User::create([
            'name' => 'Olivia Carter',
            'phone' => '+44 7700 900321',
            'email' => 'olivia@ws-s17.kz',
            'password' => 'olivia_123',
            'role' => 'moderator'
        ]);
        Category::create([
        'name' => 'Real Estate',
    ]);
        Category::create([
            'name' => 'Vehicles',
        ]);
        Category::create([
            'name' => 'Jobs',
        ]);
        Category::create([
            'name' => 'Services',
        ]);
        Category::create([
            'name' => 'Electronics',
        ]);
        Category::create([
            'name' => 'Personal Items',
        ]);
        Category::create([
            'name' => 'Hobbies & Leisure',
        ]);
        Category::create([
            'name' => 'Animals & Pets',
        ]);
        Category::create([
            'name' => 'Home & Garden',
        ]);
        Category::create([
            'name' => 'Business & Equipment',
        ]);
        Advert::create([
            'status' => 'Modern Apartment in City Center',
            'title' => 'Spacious 2-bedroom apartment with great view.',
            'text' => 'published',
            'price' => '1200',
            'category_id' => 1,
            'user_id' => 1,
            'photos' => json_encode('[\"advert-1.jpg\",\"advert-2.jpg\"]')
        ]);
        Advert::create([
            'status' => 'Cozy Suburban House',
            'title' => 'Quiet area, 3 bedrooms, renovated kitchen.',
            'text' => 'declined',
            'price' => '980',
            'category_id' => 1,
            'user_id' => 2,
            'photos' => json_encode('[\"advert-1.jpg\",\"advert-2.jpg\",\"advert-3.jpg\"]')
        ]);
        Advert::create([
            'status' => 'Downtown Studio',
            'title' => 'Perfect for students, fully furnished.',
            'text' => 'moderation',
            'price' => '650',
            'category_id' => 1,
            'user_id' => 2,
            'photos' => json_encode('[\"advert-1.jpg\",\"advert-2.jpg\"]')
        ]);

        View::create([
            'advert_id' => 2,
            'user_id' => 2,
        ]);
    }
}
