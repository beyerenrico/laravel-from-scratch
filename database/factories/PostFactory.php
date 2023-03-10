<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence,
            'slug' => fake()->slug,
            'excerpt' => collect(fake()->paragraphs(2))->map(fn($item) => "<p>{$item}</p>")->implode(''),
            'body' => collect(fake()->paragraphs(20))->map(fn($item) => "<p>{$item}</p>")->implode(''),
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
        ];
    }
}
