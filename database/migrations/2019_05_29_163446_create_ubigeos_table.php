<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUbigeosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ubigeos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo');
            $table->string('departamento');
            $table->string('provincia');
            $table->string('distrito');
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
        Schema::drop('ubigeos');
    }
}
