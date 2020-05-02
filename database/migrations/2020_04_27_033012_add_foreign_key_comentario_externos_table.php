<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyComentarioExternosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comentario_externos', function (Blueprint $table) {
            //
            $table->foreign('articulo_id', 'FK_ArticuloExterno')->references('id')->on('articulos')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comentario_externos', function (Blueprint $table) {
            //
            $table->dropForeign('FK_ArticuloExterno');
        });
    }
}
