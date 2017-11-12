<?php

use App\Category;
use App\Gerenica;
use App\SubCategory;
use App\Type;
use Illuminate\Database\Seeder;

class SolicitudesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'estado'=>1,
            'name'=>'Infraestructura',
        ]);
        Category::create([
            'estado'=>1,
            'name'=>'Servicio Generales',
        ]);

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

        //ADMINISTRATIVO
        SubCategory::create([
            'estado'=>1,
            'name'=>'CBS',
            'category_id'=>'1',
        ]);
        SubCategory::create([
            'estado'=>1,
            'name'=>'Simetrica',
            'category_id'=>'1',
        ]);
        SubCategory::create([
            'estado'=>1,
            'name'=>'ABC software',
            'category_id'=>'1',
        ]);

        //INFRAESTRUCCTURA
        SubCategory::create([
            'estado'=>1,
            'name'=>'Redes ',
            'category_id'=>'2',
        ]);
        SubCategory::create([
            'estado'=>1,
            'name'=>'Internet',
            'category_id'=>'2',
        ]);
        SubCategory::create([
            'estado'=>1,
            'name'=>'Windows',
            'category_id'=>'2',
        ]);
        SubCategory::create([
            'estado'=>1,
            'name'=>'Correo Electronico',
            'category_id'=>'2',
        ]);
        SubCategory::create([
            'estado'=>1,
            'name'=>'Hardware',
            'category_id'=>'2',
        ]);
        SubCategory::create([
            'estado'=>1,
            'name'=>'Telefonia',
            'category_id'=>'2',
        ]);
        SubCategory::create([
            'estado'=>1,
            'name'=>'Control de acceso - Socios',
            'category_id'=>'2',
        ]);


    }
}
