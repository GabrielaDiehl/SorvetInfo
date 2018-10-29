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
        $table->string('titulo');
        $table->string('descrição');
        $table->string('id');
    }
    
    {
        Schema::table('sabores', function (Blueprint $table) {
            //
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
