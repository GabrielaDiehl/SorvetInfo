<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(userTableSeeder::class);
        $this->call(saboresTableSeeder::class);
        $this->call(tipoTableSeeder::class);
        $this->call(pedidoTableSeeder::class);
    }
}
