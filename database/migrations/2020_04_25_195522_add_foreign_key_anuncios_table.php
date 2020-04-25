<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyAnunciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('anuncios', function (Blueprint $table) {
            //
            $table->foreign('localidad_id', 'FK_LocalidadAnuncio')->references('id')->on('localidads')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('anuncio_tipo_id', 'FK_TipoAnuncio')->references('id')->on('anuncio_tipos')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('anuncios', function (Blueprint $table) {
            //
            $table->dropForeign('FK_LocalidadAnuncio');
            $table->dropForeign('FK_TipoAnuncio');
        });
    }
}
