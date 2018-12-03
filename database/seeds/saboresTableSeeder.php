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
        	'titulo' => 'Java',
        	'descricao' => 'sorvete sabor morango',
        	'valor' => 2.00
        ]);

        Sabor::create([
        	'titulo' => 'Linux',
        	'descricao' => 'sorvete sabor chocolate',
        	'valor' => 2.00
        ]);

 		Sabor::create([
        	'titulo' => 'Html',
        	'descricao' => 'sorvete sabor flocos',
        	'valor' => 3.00
        ]);

   		Sabor::create([
        	'titulo' => 'C++',
        	'descricao' => 'sorvete sabor café',
        	'valor' => 4.00
        ]);
        
     	Sabor::create([
        	'titulo' => 'PHP',
        	'descricao' => 'sorvete sabor maracujá',
        	'valor' => 4.00
        ]);
      
    }
}
