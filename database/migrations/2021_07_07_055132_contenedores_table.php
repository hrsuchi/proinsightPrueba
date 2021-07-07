<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ContenedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contenedores', function (Blueprint $table) {
            $table->increments("id")->unique();
            $table->date("fecha_estimada");
            $table->date("fecha_arrivo");
            $table->string("lugar_entrega");
            $table->string("productos");
            $table->string("puerto");
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
        //
    }
}
