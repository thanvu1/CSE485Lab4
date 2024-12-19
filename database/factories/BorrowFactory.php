<?php

namespace Database\Factories;
use App\Models\Borrow;
use App\Models\Reader; // Thêm dòng này
use App\Models\Book;   // Thêm dòng này
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Borrow>
 */
class BorrowFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'reader_id' => Reader::factory(), // Tự động liên kết reader_id từ bảng readers
            'book_id' => Book::factory(), // Tự động liên kết book_id từ bảng books
            'borrow_date' => $this->faker->dateTimeBetween('-1 month', 'now')->format('Y-m-d'), // Ngày mượn
            'return_date' => $this->faker->dateTimeBetween('now', '+1 month')->format('Y-m-d'), // Ngày trả
            'status' => $this->faker->boolean, // Trạng thái (0: chưa trả, 1: đã trả)
        ];
    }
}