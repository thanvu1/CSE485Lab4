<?php

namespace Database\Factories;

use App\Models\Borrow;
use App\Models\Reader;
use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BorrowFactory extends Factory
{
    public function definition(): array
    {
        return [
            'reader_id' => Reader::factory(), 
            'book_id' => Book::factory(),
            'borrow_date' => $this->faker->dateTimeBetween('-1 month', 'now')->format('Y-m-d'),
            'return_date' => $this->faker->dateTimeBetween('now', '+1 month')->format('Y-m-d'),
            'status' => 0, // Mặc định là chưa trả
        ];
    }
}
