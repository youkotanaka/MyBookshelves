<?php

use App\BookList;
use Illuminate\Database\Seeder;

class BookListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 10; $i++){
            BookList::create([
                'title' => 'title'.$i,
                'vol' => 'vol.'.$i
            ]);
        }
    }
}
