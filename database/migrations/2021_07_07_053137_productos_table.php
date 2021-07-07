<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments("id")->unique();
            $table->string("nombre");
            $table->float('precio', 10, 2);
            $table->string("sku");
            $table->string("presentacion");
            $table->string("volumen");
            $table->string("unidades");
            $table->string("fotografia");
            $table->integer("proveedor_id")->unsigned();
            $table->foreign("proveedor_id")->references("id")->on("proveedores");
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
