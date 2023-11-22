<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Category::factory()->create([
            'name' => 'Baju',
        ]);
        \App\Models\Category::factory()->create([
            'name' => 'Celana',
        ]);
        \App\Models\Category::factory()->create([
            'name' => 'Jaket',
        ]);


        \App\Models\genderCategory::factory()->create([
            'name' => 'Men',
        ]);
        \App\Models\genderCategory::factory()->create([
            'name' => 'Woman',
        ]);

        
        \App\Models\Product::factory(10)->create();
    }
}
