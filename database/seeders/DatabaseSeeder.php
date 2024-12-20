<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Models\Reader;
use App\Models\User;
=======
use App\Models\User;
use App\Models\Book; // Thêm khai báo model Book
use App\Models\Reader; // Thêm khai báo model Reader
use App\Models\Borrow; // Thêm khai báo model Borrow
>>>>>>> mergecode
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
<<<<<<< HEAD
        // User::factory(10)->create();

        $this->call([
            ReaderSeeder::class,
        ]);

=======
        $books = Book::factory(50)->create(); // Tạo 50 cuốn sách
        $readers = Reader::factory(30)->create(); // Tạo 30 độc giả

        // Sinh dữ liệu giả cho bảng borrows
        Borrow::factory(100)->create(); // Tạo 100 lượt mượn sách
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
>>>>>>> mergecode
    }
}
