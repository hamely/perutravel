<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTipoCategoriaToursTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_categoria_tours', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lenguaje_id');
            $table->string('nombre');
            $table->string('alias');
            $table->string('slug');
            $table->string('estado');
            $table->string('descripcion');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tipo_categoria_tours');
    }
}
