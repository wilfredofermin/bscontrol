<?php

use Illuminate\Database\Seeder;
use App\Departament;

class DepartamentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Departament::create([
            'estado'=>1,
            'name'=>'Computos',
            'description'=>'',
        ]);
        Departament::create([
            'estado'=>1,
            'name'=>'Contabilidad',
            'description'=>'',
        ]);
        Departament::create([
            'estado'=>1,
            'name'=>'Mercardeo',
            'description'=>'',
        ]);
        Departament::create([
            'estado'=>1,
            'name'=>'Gestion Humna',
            'description'=>'',
        ]);
        Departament::create([
            'estado'=>1,
            'name'=>'Cargos Automaticos',
            'description'=>'',
        ]);
        Departament::create([
            'estado'=>1,
            'name'=>'Membresia',
            'description'=>'',
        ]);
        Departament::create([
            'estado'=>1,
            'name'=>'Mantenimiento',
            'description'=>'',
        ]);
    }
}
