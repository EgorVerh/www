<?php

use Illuminate\Database\Seeder;

class Books_authorseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books_author')->insert([
            ['authors_id' => '1','books_id'=>'1'],
            ['authors_id' => '2','books_id'=>'1'],
            ['authors_id' => '4','books_id'=>'1'],
            ['authors_id' => '1','books_id'=>'2'],
            ['authors_id' => '3','books_id'=>'2'],
            ['authors_id' => '2','books_id'=>'3'],
            ['authors_id' => '3','books_id'=>'3'],
            ['authors_id' => '2','books_id'=>'4'],
            ['authors_id' => '1','books_id'=>'5'],
            ['authors_id' => '5','books_id'=>'5'],
            ['authors_id' => '2','books_id'=>'6'],
            ['authors_id' => '3','books_id'=>'6'],
            ['authors_id' => '4','books_id'=>'6'],
            ['authors_id' => '2','books_id'=>'7'],
            ['authors_id' => '4','books_id'=>'7'],
            ['authors_id' => '3','books_id'=>'8'],
            ['authors_id' => '4','books_id'=>'8'],
            ['authors_id' => '1','books_id'=>'9'],
            ['authors_id' => '5','books_id'=>'10'],
            ['authors_id' => '4','books_id'=>'11'],
        ]);
    }
}
