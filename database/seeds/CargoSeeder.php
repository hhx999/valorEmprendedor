<?php

use Illuminate\Database\Seeder;

use App\Cargo;

class CargoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $cargo = new Cargo();
        $cargo->nombre = 'administrador';
        $cargo->save();

        $cargo = new Cargo();
        $cargo->nombre = 'usuario';
        $cargo->save();
    }
}
