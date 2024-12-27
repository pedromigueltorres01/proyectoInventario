<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulo_productos', function (Blueprint $table) {
            $table->id();
            $table->string("NombreArticulo");
            $table->double("Precio"); 
            $table->string("Marca");
            $table->string("Descripcion");
            $table->integer("Stock_cantidad");
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
        Schema::dropIfExists('articulo_productos');
    }
};
