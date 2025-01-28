<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence();

        return [
            'tumbnail' => fake()->sentence(),
            'title' => $title,
            'slug' => Str::slug($title),
            'teaser' => fake()->text(),
            'body' => fake()->text(),
        ];
    }
}
