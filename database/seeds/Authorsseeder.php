<?php

use Illuminate\Database\Seeder;

class Authorsseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            ['name' => 'Брэдбери Рэй Дуглас'],
            ['name' => 'Пушкин Александр Сергеевич'],
            ['name' => 'Гоголь Николай Васильевич'],
            ['name' => 'Мартин Джордж Рэймонд Ричард'],
            ['name' => 'Михаил Юрьевич Лермонтов'],
        ]);
    }
}
