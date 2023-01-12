<?php

use Illuminate\Database\Seeder;

class Polkisseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('polkis')->insert([
            ['shkaf_id' => 1],
            ['shkaf_id' => 1],
            ['shkaf_id' => 2],
            ['shkaf_id' => 2],
            ['shkaf_id' => 3],
            ['shkaf_id' => 3],
        ]);
    }
}
