<?php

use Illuminate\Database\Seeder;

use App\Rubro;

class RubroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $rubro = new Rubro();
        $rubro->nombre = 'Administración del sitio';
        $rubro->save();
    }
}
