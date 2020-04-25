<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnunciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anuncios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->string('fecha')->nullable();
            $table->string('horario')->nullable();
            $table->string('lugar')->nullable();
            $table->string('descripcion');
            $table->string('imagen',500)->nullable();
            $table->bigInteger('localidad_id')->unsigned()->nullable();
            $table->bigInteger('anuncio_tipo_id')->unsigned()->nullable();
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
        Schema::dropIfExists('anuncios');
    }
}
