<?php

use Illuminate\Database\Seeder;


use App\PublicidadTipo;
class PublicidadTipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tipo_publicidad = new PublicidadTipo();
        $tipo_publicidad->nombre = 'ad-header';
        $tipo_publicidad->save();

        $tipo_publicidad = new PublicidadTipo();
        $tipo_publicidad->nombre = 'ad-body';
        $tipo_publicidad->save();

        $tipo_publicidad = new PublicidadTipo();
        $tipo_publicidad->nombre = 'ad-modal';
        $tipo_publicidad->save();

    }
}
