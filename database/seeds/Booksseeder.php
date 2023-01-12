<?php

use Illuminate\Database\Seeder;

class Booksseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            ['name' => 'книга1','polki_id'=>'1'],
            ['name' => 'книга2','polki_id'=>'2'],
            ['name' => 'книга3','polki_id'=>'3'],
            ['name' => 'книга4','polki_id'=>'4'],
            ['name' => 'книга5','polki_id'=>'5'],
            ['name' => 'книга6','polki_id'=>'6'],
            ['name' => 'книга7','polki_id'=>'1'],
            ['name' => 'книга8','polki_id'=>'2'],
            ['name' => 'книга9','polki_id'=>'3'],
            ['name' => 'книга10','polki_id'=>'4'],
            ['name' => 'книга11','polki_id'=>'5'],
        ]);
    }
}
