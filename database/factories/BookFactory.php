<?php

  // Thêm dòng này
namespace Database\Factories;

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
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(3), // Tên sách
            'author' => $this->faker->name, // Tác giả
            'category' => $this->faker->word, // Thể loại
            'year' => $this->faker->year, // Năm xuất bản
            'quantity' => $this->faker->numberBetween(1, 50), // Số lượng sách
        ];
    }
}