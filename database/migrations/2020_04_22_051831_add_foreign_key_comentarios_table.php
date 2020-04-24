<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comentarios', function (Blueprint $table) {
            //
            $table->foreign('articulo_id', 'FK_ArticuloComentario')->references('id')->on('articulos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('usuario_id', 'FK_UsuarioComentario')->references('id')->on('usuarios')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comentarios', function (Blueprint $table) {
            //
            $table->dropForeign('FK_ArticuloComentario');
            $table->dropForeign('FK_UsuarioComentario');
        });
    }
}
