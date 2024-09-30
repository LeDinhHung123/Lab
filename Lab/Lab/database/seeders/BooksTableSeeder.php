<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $books = [];
        for ($i = 1; $i <= 100; $i++) {
            $books[] = [
                'title' => 'Laptop1 ' . $i,
                'thumbnail' => 'path/to/image.jpg',
                'author' => 'Author ' . $i,
                'publisher' => 'Publisher ' . $i,
                'publication' => now(),
                'price' => rand(10000, 500000),
                'quantity' => rand(1, 100),
                'category_id' => rand(1, 5),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('books')->insert($books);
    }

}
