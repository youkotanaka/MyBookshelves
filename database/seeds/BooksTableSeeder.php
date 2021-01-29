<?php

use App\Book;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'vol' => '1'
        ];
        DB::table('books')->insert($param);

        $param = [
            'title' => 'ハイキュー！！',
            'vol' => '45'
        ];
        DB::table('books')->insert($param);

        $param = [
            'title' => 'CUT',
            'vol' => '2020年4月号'
        ];
        DB::table('books')->insert($param);

        $param = [
            'title' => 'PHPフレームワークLaravel入門第２版',
            'vol' => ''
        ];
        DB::table('books')->insert($param);

        $param = [
            'title' => 'AERA',
            'vol' => '2019年2/11号'
        ];
        DB::table('books')->insert($param);

        $param = [
            'title' => '週刊少年ジャンプ',
            'vol' => '2012年12月号'
        ];
        DB::table('books')->insert($param);

        $param = [
            'title' => '週刊少年ジャンプ',
            'vol' => '2020年33・34合併号'
        ];
        DB::table('books')->insert($param);

        $param = [
            'title' => '真夏の方程式',
            'vol' => ''
        ];
        DB::table('books')->insert($param);

        $param = [
            'title' => '容疑者Xの献身',
            'vol' => ''
        ];
        DB::table('books')->insert($param);

        $param = [
            'title' => 'シャーロック・ホームズ全集',
            'vol' => '3'
        ];
        DB::table('books')->insert($param);

        $param = [
            'title' => '図書館戦争',
            'vol' => ''
        ];
        DB::table('books')->insert($param);
    }
}
