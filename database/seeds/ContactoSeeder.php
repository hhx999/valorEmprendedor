<?php

use Illuminate\Database\Seeder;

use App\Contacto;

class ContactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $contacto = new Contacto;
        $contacto->nombre = 'contacto';
        $contacto->save();

        $contacto = new Contacto;
        $contacto->nombre = 'sobre-nosotros';
        $contacto->save();

        $contacto = new Contacto;
        $contacto->nombre = 'facebook';
        $contacto->save();

        $contacto = new Contacto;
        $contacto->nombre = 'instagram';
        $contacto->save();
    }
}
