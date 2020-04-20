<?php

use Illuminate\Database\Seeder;

use App\Usuario;

class AdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $administrador = new Usuario();
        $administrador->nombre = 'Administrador';
        $administrador->apellido = 'Sitio';
        $administrador->fecha_nacimiento = '14-11-1995'; 
        $administrador->password = bcrypt('borjas');
        $administrador->cargo_id = 1;
        $administrador->save();
    }
}
