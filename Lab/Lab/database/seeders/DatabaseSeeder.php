<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call(CategoriesTableSeeder::class);
        $this->call(BooksTableSeeder::class); // Đảm bảo seeder cho books cũng được gọi
    }


}
