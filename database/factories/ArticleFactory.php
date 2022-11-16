<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Article>
 */
class ArticleFactory extends Factory
{
    public function definition(): array
    {
        $title = $this->faker->sentence(6, true);
        $slug = Str::substr(Str::lower(preg_replace('/\s+/', '-', $title)), 0, -1);
        $body = $this->faker->paragraph(100, true);
        $created_at = $this->faker->dateTimeBetween('-1 years');

        return [
            'title' => $title,
            'slug' => $slug,
            'body' => $body,
            'img' => 'https://static.1tv.ru/uploads/video/material/splash/2022/11/15/758498/_original/758498_828f4c8f75.jpg',
            'created_at' => $created_at
        ];
    }
}
