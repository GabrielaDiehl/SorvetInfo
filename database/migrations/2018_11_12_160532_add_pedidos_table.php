<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipo_id')->unsigned();
            $table->integer('sabor1_id')->unsigned();
            $table->integer('sabor2_id')->unsigned();
            $table->integer('sabor3_id')->unsigned();
            $table->integer('sabor4_id')->unsigned();
            $table->integer('sabor5_id')->unsigned();
            $table->float('valorTotal', 8, 2);
            $table->timestamps();
        });

        Schema::table('pedidos', function($table){
            $table->foreign('tipo_id')->references('id')->on('tipos');
            $table->foreign('sabor1_id')->references('id')->on('sabores');
            $table->foreign('sabor2_id')->references('id')->on('sabores');
            $table->foreign('sabor3_id')->references('id')->on('sabores');
            $table->foreign('sabor4_id')->references('id')->on('sabores');
            $table->foreign('sabor5_id')->references('id')->on('sabores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
