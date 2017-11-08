<?php

use Illuminate\Database\Seeder;
use App\Type;

class TypesTableSeeder extends Seeder
{

    public function run()
    {
        Type::create([
            'estado'=>1,
            'name'=>'CBS',
            'category'=>1,
        ]);
        Type::create([
            'estado'=>1,
            'name'=>'Simetrica',
            'category'=>1,
        ]);
        Type::create([
            'estado'=>1,
            'name'=>'ABC SOFT',
            'category'=>1,
        ]);
        Type::create([
            'estado'=>1,
            'name'=>'BS Control',
            'category'=>1,
        ]);
        Type::create([
            'estado'=>1,
            'name'=>'Windows',
            'category'=>2,
        ]);
        Type::create([
            'estado'=>1,
            'name'=>'Mac',
            'category'=>2,
        ]);
        Type::create([
            'estado'=>1,
            'name'=>'Movil',
            'category'=>2,
        ]);
        Type::create([
            'estado'=>1,
            'name'=>'Internet',
            'category'=>2,
        ]);
        Type::create([
            'estado'=>1,
            'name'=>'HardWare',
            'category'=>2,
        ]);
        Type::create([
            'estado'=>1,
            'name'=>'Telefonia',
            'category'=>2,
        ]);
        Type::create([
            'estado'=>1,
            'name'=>'Correo electronico',
            'category'=>2,
        ]);
        Type::create([
            'estado'=>1,
            'name'=>'Otros..',
            'category'=>2,
        ]);
        Type::create([
            'estado'=>1,
            'name'=>'Lector Biometrico',
            'category'=>3,
        ]);
        Type::create([
            'estado'=>1,
            'name'=>'Problema de acceso',
            'category'=>3,
        ]);
        Type::create([
            'estado'=>1,
            'name'=>'Problema con el equipo',
            'category'=>3,
        ]);
        Type::create([
            'estado'=>1,
            'name'=>'Actualizacion',
            'category'=>3,
        ]);
    }
}
