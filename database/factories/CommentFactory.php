<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Comment>
 */
class CommentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'subject' => $this->faker->sentence('3'),
            'body' => $this->faker->paragraph('3', false)
        ];
    }
}
