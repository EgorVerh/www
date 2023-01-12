<?php

use Illuminate\Database\Seeder;

class Shkafseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shkaf')->insert([
            ['name' => 'шкаф1'],
            ['name' => 'шкаф2'],
            ['name' => 'шкаф3'],
        ]);
    }
}
