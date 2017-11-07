<?php

use Illuminate\Database\Seeder;
use App\Subsidiary;

class SubsidiariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subsidiary::create([
            'estado'=>1,
            'name'=>'Naco',
        ]);
        Subsidiary::create([
            'estado'=>1,
            'name'=>'Bella Vista',
        ]);
        Subsidiary::create([
            'estado'=>1,
            'name'=>'Arroyo Hondo',

        ]);
        Subsidiary::create([
            'estado'=>1,
            'name'=>'Santiago',

        ]);
    }
}
