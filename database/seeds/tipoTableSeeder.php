<?php

use Illuminate\Database\Seeder;
use App\Tipo;

class tipoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipo::create([
        	'desc' => "casquinha",
        	'valor' => 3.00
        ]);

        Tipo::create([
        	'desc' => "cascão",
        	'valor' => 5.00
        ]);

        Tipo::create([
            'desc' => "potinho",
            'valor' => 6.00
        ]);
    }
}
