<?php

use Illuminate\Database\Seeder;
use App\SubCategory;
class SubCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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

        //MANTENIMIENTO
        SubCategory::create([
            'estado'=>1,
            'name'=>'Aire Acondicionado',
            'category_id'=>'3',
        ]);
        SubCategory::create([
            'estado'=>1,
            'name'=>'Luces',
            'category_id'=>'3',
        ]);
        SubCategory::create([
            'estado'=>1,
            'name'=>'Electricidad',
            'category_id'=>'3',
        ]);

    }
}
