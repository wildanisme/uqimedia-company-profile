<?php

namespace Database\Seeders;

use App\Models\BlogCategory;
use App\Models\BlogPost;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(5)->create();
        User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'admin@admin.com',
        ]);
        
        BlogCategory::create([
            'name' => 'Informasi',
            'slug' => 'informasi'
        ]);
        BlogCategory::create([
            'name' => 'Promo',
            'slug' => 'promo'
        ]);
        
        BlogPost::factory(10)->create();
    }
}
