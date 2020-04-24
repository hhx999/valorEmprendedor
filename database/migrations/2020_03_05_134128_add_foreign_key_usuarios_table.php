<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('usuarios', function (Blueprint $table) {
            //
            $table->foreign('rubro_id', 'FK_RubroUsuario')->references('id')->on('rubros')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('cargo_id', 'FK_CargoUsuario')->references('id')->on('cargos')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usuarios', function (Blueprint $table) {
            //
            $table->dropForeign('FK_RubroUsuario');
            $table->dropForeign('FK_CargoUsuario');
        });
    }
}
