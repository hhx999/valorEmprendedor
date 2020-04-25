<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CargoSeeder::class);
        $this->call(RubroSeeder::class);
        $this->call(AdministradorSeeder::class);
        $this->call(SeccionesSeeder::class);
        $this->call(AparienciaSeeder::class);
        $this->call(PublicidadTipoSeeder::class);
        $this->call(AnuncioTipoSeeder::class);
        $this->call(LocalidadSeeder::class);
    }

}
