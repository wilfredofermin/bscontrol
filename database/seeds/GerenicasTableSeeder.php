<?php

use Illuminate\Database\Seeder;
use App\Gerenica;

class GerenicasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //SUCURSALES - TIPO 1
        Gerenica::create([
            'estado'=>1,
            'name'=>'Naco',
            'tipo'=>'1',
        ]);
        //SUCURSALES - TIPO 1
        Gerenica::create([
            'estado'=>1,
            'name'=>'Bella Vista',
            'tipo'=>'1',
        ]);
        //SUCURSALES - TIPO 1
        Gerenica::create([
            'estado'=>1,
            'name'=>'Arroyo Hondo',
            'tipo'=>'1',
        ]);
        //SUCURSALES - TIPO 1
        Gerenica::create([
            'estado'=>1,
            'name'=>'Santiago',
            'tipo'=>'1',
        ]);
        //PLAZAS  - TIPO 2
        Gerenica::create([
            'estado'=>1,
            'name'=>'Plaza Bodyshop',
            'tipo'=>'2',
        ]);
        //PLAZAS  - TIPO 2
        Gerenica::create([
            'estado'=>1,
            'name'=>'Plaza Bella Piazza',
            'tipo'=>'2',
        ]);
        //PLAZAS  - TIPO 2
        Gerenica::create([
            'estado'=>1,
            'name'=>'Plaza Spring Center',
            'tipo'=>'2',
        ]);
        //DEPARTAMENTO  - TIPO 3
        Gerenica::create([
            'estado'=>1,
            'name'=>'Administracion',
            'tipo'=>'3',
        ]);
        Gerenica::create([
            'estado'=>1,
            'name'=>'Contabilidad',
            'tipo'=>'3',
        ]);
        Gerenica::create([
            'estado'=>1,
            'name'=>'Mantenimiento',
            'tipo'=>'3',
        ]);

        Gerenica::create([
            'estado'=>1,
            'name'=>'Cargos Automaticos',
            'tipo'=>'3',
        ]);
        Gerenica::create([
            'estado'=>1,
            'name'=>'Membresia',
            'tipo'=>'3',
        ]);
        Gerenica::create([
            'estado'=>1,
            'name'=>'Mercadeo',
            'tipo'=>'3',
        ]);
        Gerenica::create([
            'estado'=>1,
            'name'=>'Gestion Humana',
            'tipo'=>'3',
        ]);
    }
}
