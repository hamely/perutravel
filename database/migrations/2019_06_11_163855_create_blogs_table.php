<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('usuario_id');
            $table->string('categoria_blog_id');
            $table->string('titulo');
            $table->string('url');
            $table->string('fechaPublicacion');
            $table->string('estado');
            $table->string('contenido');
            $table->string('contador');
            $table->string('autor');
            $table->string('urlimagen');
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
        Schema::dropIfExists('blogs');
    }
}
