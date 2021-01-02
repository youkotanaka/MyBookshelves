<?php

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
        $param = [
            'title' => 'ハイキュー！！',
            'vol' => '16',
        ];
        DB::table('books')->insert($param);

        $param = [
            'title' => 'ハイキュー！！',
            'vol' => '2',
        ];
        DB::table('books')->insert($param);
        
        $param = [
            'title' => 'NewType',
            'vol' => '202006',
        ];
        DB::table('books')->insert($param);
    }
}
