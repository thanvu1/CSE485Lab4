<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reader;
use Faker\Factory as Faker;

class ReaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // $faker = Faker::create();
        // foreach (range(1, 20) as $index){
        //     Reader::create([
        //         'name' => $faker->name,
        //         'phone' => $faker->phoneNumber,
        //         'address' => $faker->address,
        //         'birthday' => $faker->date(),
        //     ]);
        // }
    }
}
