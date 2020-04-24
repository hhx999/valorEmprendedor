<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicidads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('publicidad_tipo_id')->unsigned();
            $table->string('nombre');
            $table->string('imagen',500)->nullable();
            $table->string('url',500)->nullable();
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
        Schema::dropIfExists('publicidads');
    }
}
