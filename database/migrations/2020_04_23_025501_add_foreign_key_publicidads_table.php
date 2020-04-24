<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyPublicidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('publicidads', function (Blueprint $table) {
            //
            $table->foreign('publicidad_tipo_id', 'FK_TipoPublicidad')->references('id')->on('publicidad_tipos')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('publicidads', function (Blueprint $table) {
            //
            $table->dropForeign('FK_TipoPublicidad');
        });
    }
}
