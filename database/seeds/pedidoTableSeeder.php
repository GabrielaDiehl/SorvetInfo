<?php

use Illuminate\Database\Seeder;
use App\Pedido;

class pedidoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pedido::create([
        	'user_id' => 1,
        	'tipo_id' => 1,
        	'sabor1_id' => 1,
        	'sabor2_id' => 1,
        	'sabor3_id' => 2,
        	'sabor4_id' => null,
        	'sabor5_id' => null,
        	'valorTotal' => 10.00
        ]);
    }
}
