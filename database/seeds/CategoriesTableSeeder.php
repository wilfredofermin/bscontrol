<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{

    public function run()
    {
       Category::create([
           'estado'=>1,
           'name'=>'Administrativo',
       ]);
        Category::create([
            'estado'=>1,
            'name'=>'Infraestructura',
        ]);
        Category::create([
            'estado'=>1,
            'name'=>'Mantenimiento',
        ]);

    }
}
