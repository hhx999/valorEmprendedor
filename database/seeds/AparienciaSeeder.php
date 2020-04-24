<?php

use Illuminate\Database\Seeder;


use App\Apariencia;

class AparienciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $apariencia = new Apariencia();
        $apariencia->descripcion = 'Logo';
        $apariencia->save();

        $apariencia = new Apariencia();
        $apariencia->descripcion = 'Icono web';
        $apariencia->save();

    }
}
