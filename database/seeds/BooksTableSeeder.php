<?php

use App\Book;
use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++){
            Book::create([
                'title' => 'title'.$i,
                'vol' => 'vol'.$i
            ]);
        }
    }
}
