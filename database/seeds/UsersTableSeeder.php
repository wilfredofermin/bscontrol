<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'estado'=>1,
            'name'=>'Mariela Mejaa',
            'email' => 'm.mejia@clubbodyshop.com',
            'role'=>1,
            'sucursal'=>'Naco',
            'puesto'=>'Recursas Humanos',
            'password' => bcrypt('12345'),
        ]);
        User::create([
            'estado'=>1,
            'name'=>'Wilfredo Fermin',
            'email' => 'w.fermin@clubbodyshop.com',
            'role'=>1,
            'sucursal'=>'Naco',
            'puesto'=>'Encargado de IT',
            'password' => bcrypt('12345'),
        ]);
        User::create([
            'estado'=>1,
            'name'=>'Newton Burgos',
            'email' => 'n.burgos@clubbodyshop.com',
            'role'=>1,
            'sucursal'=>'Naco',
            'puesto'=>'Gerente Tecnologia',
            'password' => bcrypt('12345'),
        ]);
    }
}
