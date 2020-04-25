<?php

use Illuminate\Database\Seeder;


use App\AnuncioTipo;

class AnuncioTipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tipo = new AnuncioTipo;
        $tipo->nombre = 'Evento';
        $tipo->save();

        $tipo = new AnuncioTipo;
        $tipo->nombre = 'Actividad';
        $tipo->save();

        $tipo = new AnuncioTipo;
        $tipo->nombre = 'Charla';
        $tipo->save();
    }
}
