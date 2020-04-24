<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeySeccionesNavsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('secciones_navs', function (Blueprint $table) {
            //
            $table->foreign('categoria_id', 'FK_categoriaSeccion')->references('id')->on('categorias')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('secciones_navs', function (Blueprint $table) {
            //
            $table->dropForeign('FK_categoriaSeccion');
        });
    }
}
