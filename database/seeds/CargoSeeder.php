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
        $cargo->nombre = 'Administración';
        $cargo->save();
    }
}
