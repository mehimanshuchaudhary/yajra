<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('products')->insert([
                'name' => Str::random(10),
                'description' => Str::random(20),
                'price' => rand(100, 1000), // or use fake()->randomFloat()
                'stock' => rand(1, 50),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
