<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BlogPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(4,10)),
            'slug' => $this->faker->slug(),
            'content' => $this->faker->paragraph(mt_rand(4, 10)),
            'image_url' => 'front/assets/img/blog/blog-2.jpg',
            'user_id' => 1,
            'category_id' => rand(1,2)
        ];
    }
}
