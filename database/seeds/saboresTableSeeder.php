<?php

use Illuminate\Database\Seeder;
use App\Sabor;

class saboresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sabor::create([
        	'titulo' => 'Morango',
        	'descricao' => 'sabor de morango',
        	'valor' => 2.00
        ]);

        Sabor::create([
        	'titulo' => 'Chocolate Branco',
        	'descricao' => 'Chocolate Galak',
        	'valor' => 4.00
        ]);
    }
}
