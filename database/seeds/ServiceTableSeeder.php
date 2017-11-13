<?php

use App\Category;
use App\Gerenica;
use App\SubCategory;
use App\Type;
use Illuminate\Database\Seeder;
use App\Service;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        ////////////////////////////
        //SERVICIOS
        Service::create([
            'estado'=>1,
            'name'=>'Informatico'
        ]);
        Service::create([
            'estado'=>1,
            'name'=>'Servicios Generales'
        ]);
        Service::create([
            'estado'=>1,
            'name'=>'Operaciones'
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

        ////////////////////////////
        //CATEGORIA
        Category::create([
            'estado'=>1,
            'name'=>'Programas ',
            'service_id'=>'1',

        ]);
        Category::create([
            'estado'=>1,
            'name'=>'Infraestructura ',
            'service_id'=>'1',

        ]);
        Category::create([
            'estado'=>1,
            'name'=>'Equipo',
            'service_id'=>'1',

        ]);
        Category::create([
            'estado'=>1,
            'name'=>'Electricidad ',
            'service_id'=>'2',

        ]);
        Category::create([
            'estado'=>1,
            'name'=>'Plomeria ',
            'service_id'=>'2',

        ]);
        Category::create([
            'estado'=>1,
            'name'=>'Albaneria ',
            'service_id'=>'2',

        ]);
        ////////////////////////////
        //SUBCATEGORIA
        SubCategory::create([
            'estado'=>1,
            'name'=>'CBS',
            'category_id'=>'1',//Programas
        ]);
        SubCategory::create([
            'estado'=>1,
            'name'=>'Simetrica',
            'category_id'=>'1',//Programas
        ]);
        SubCategory::create([
            'estado'=>1,
            'name'=>'ABC software',
            'category_id'=>'1',//Programas
        ]);

        SubCategory::create([
            'estado'=>1,
            'name'=>'Redes ',
            'category_id'=>'2',//Infraestructura
        ]);
        SubCategory::create([
            'estado'=>1,
            'name'=>'Internet',
            'category_id'=>'2',//Infraestructura
        ]);
        SubCategory::create([
            'estado'=>1,
            'name'=>'Windows',
            'category_id'=>'2',//Infraestructura
        ]);
        SubCategory::create([
            'estado'=>1,
            'name'=>'Correo Electronico',
            'category_id'=>'2',//Infraestructura
        ]);
        SubCategory::create([
            'estado'=>1,
            'name'=>'Telefonia',
            'category_id'=>'2',//Infraestructura
        ]);
        SubCategory::create([
            'estado'=>1,
            'name'=>'PC',
            'category_id'=>'3',//Equipos
        ]);
        SubCategory::create([
            'estado'=>1,
            'name'=>'Laptop',
            'category_id'=>'3',//Equipos
        ]);
        SubCategory::create([
            'estado'=>1,
            'name'=>'Impresora',
            'category_id'=>'3',//Equipos
        ]);
        SubCategory::create([
            'estado'=>1,
            'name'=>'Monitor',
            'category_id'=>'3',//Equipos
        ]);


    }
}
