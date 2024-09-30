<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'thumbnail' => $this->faker->imageUrl(),
            'author' => $this->faker->name,
            'publisher' => $this->faker->company,
            'publication' => $this->faker->dateTimeThisDecade,
            'price' => $this->faker->randomFloat(2, 5, 100),
            'quantity' => $this->faker->numberBetween(1, 100),
            'category_id' => Category::factory(), // tự động tạo category
        ];
    }
}
