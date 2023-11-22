<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\GenderCategory;
use App\Models\Category;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->words(2, true),
            'price' => fake()->numberBetween(300, 700),
            'img_url' => 'https://images.pexels.com/photos/15534950/pexels-photo-15534950/free-photo-of-standing-man-holding-hands-on-hips.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'description' => fake()->paragraph(15),
            'stock' => fake()->randomDigitNot(0),
            'category_id' => mt_rand(1, count(Category::all())),
            'genderCategory_id' => mt_rand(1, count(GenderCategory::all())),
        ];
    }
}
