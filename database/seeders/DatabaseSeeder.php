<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\AdminUser;
use App\Models\WinerySlide;
use App\Models\TeamMember;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Seed a default admin user for the admin panel.
        // NOTE: Change this email/password in production via tinker or a proper UI.
        AdminUser::query()->firstOrCreate(
            ['email' => 'admin@talisva.test'],
            [
                'name' => 'Talisva Admin',
                'password' => 'password', // Will be hashed automatically by the model cast.
            ]
        );

        // Optional sample winery slides
        if (WinerySlide::count() === 0) {
            WinerySlide::create([
                'title' => 'Talisva Signature Tasting',
                'description' => 'Guided tasting of our signature fruit wines at the winery.',
                'image_path' => 'winery-slides/sample-signature.jpg',
                'sort_order' => 1,
            ]);

            WinerySlide::create([
                'title' => 'Orchard Walk',
                'description' => 'A slow walk through the orchards where the fruit is grown.',
                'image_path' => 'winery-slides/sample-orchard.jpg',
                'sort_order' => 2,
            ]);
        }

        // Optional sample team members
        if (TeamMember::count() === 0) {
            TeamMember::create([
                'name' => 'Sushma Sanjay',
                'role' => 'Founder',
                'description' => 'The visionary behind Talisva and its handcrafted fruit wines.',
                'image_path' => 'team-members/sample-sushma.jpg',
                'sort_order' => 1,
            ]);

            TeamMember::create([
                'name' => 'Talisva Team',
                'role' => 'Winery & Estate',
                'description' => 'The people who keep the orchards thriving and the wine flowing.',
                'image_path' => 'team-members/sample-team.jpg',
                'sort_order' => 2,
            ]);
        }
    }
}
