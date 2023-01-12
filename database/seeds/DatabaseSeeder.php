<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Shkafseeder::class);
        $this->call(Polkisseeder::class);
        $this->call(Booksseeder::class);
        $this->call(Authorsseeder::class);
        $this->call(Books_authorseeder::class);
    }
}
