<?php

use Illuminate\Database\Seeder;

use App\SeccionesNav;

class SeccionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $seccion = new SeccionesNav;
        $seccion->posicion = 1;
   		$seccion->save();

   		$seccion = new SeccionesNav;
   		$seccion->posicion = 2;
   		$seccion->save();

   		$seccion = new SeccionesNav;
   		$seccion->posicion = 3;
   		$seccion->save();

   		$seccion = new SeccionesNav;
   		$seccion->posicion = 4;
   		$seccion->save();

   		$seccion = new SeccionesNav;
   		$seccion->posicion = 5;
   		$seccion->save();

   		$seccion = new SeccionesNav;
   		$seccion->posicion = 6;
   		$seccion->save();

   		$seccion = new SeccionesNav;
   		$seccion->posicion = 7;
   		$seccion->save();

    }
}
