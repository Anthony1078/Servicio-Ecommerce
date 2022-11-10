<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        Schema::create('producto', function (Blueprint $table) {
            $table->increments('idproducto');
            $table->integer('categoriaid');
            $table->string('codigo');
            $table->string('nombre');
            $table->string('descripcion');
            $table->double('precio');
            $table->integer('stock');
            $table->string('imagen');
            $table->dateTime('datecreated')->useCurrent();
            $table->string('ruta');
            $table->integer('ruta');

        });
        */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_productos');
    }
}
