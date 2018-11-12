<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSaboresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(Blueprint $table) {
        
        Schema::create('sabores', function (Blueprint $table) {
                $table->increments('id');
                $table->string('titulo');
                $table->string('descrição');
                $table->float('valor', 8, 2);
                $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sabores', function (Blueprint $table) {
            //
        });
    }
}
