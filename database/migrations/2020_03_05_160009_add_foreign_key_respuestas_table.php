<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('respuestas', function (Blueprint $table) {
            //
            $table->foreign('consulta_id', 'FK_ConsultaRespuesta')->references('id')->on('consultas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('usuario_id', 'FK_UsuarioRespuesta')->references('id')->on('usuarios')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('respuestas', function (Blueprint $table) {
            //
            $table->dropForeign('FK_ConsultaRespuesta');
            $table->dropForeign('FK_UsuarioRespuesta');
        });
    }
}
