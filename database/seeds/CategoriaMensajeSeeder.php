<?php

use Illuminate\Database\Seeder;

use App\CategoriaMensaje;

class CategoriaMensajeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categoria = new CategoriaMensaje;
        $categoria->nombre = 'Consejos para el sitio';
        $categoria->save();
		
		$categoria = new CategoriaMensaje;
        $categoria->nombre = 'Consultas';
        $categoria->save();

        $categoria = new CategoriaMensaje;
        $categoria->nombre = 'Opiniones';
        $categoria->save();

        $categoria = new CategoriaMensaje;
        $categoria->nombre = 'Otros';
        $categoria->save();




    }
}
