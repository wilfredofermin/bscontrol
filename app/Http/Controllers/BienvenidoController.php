<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Gerenica;
class BienvenidoController extends Controller
{

    public function index(){

        //DEPARTAMENTO [TIPO 2]
        $departaments=Gerenica::where('estado',1)
                                ->where('tipo',3)
                                ->get();
        //SUCURSALES [TIPO 1]
        $sucursales=Gerenica::where('estado',1)
                                ->where('tipo',1)
                                ->get();

       // dd($sucursles);
        return view('bienvenido')->with(compact('departaments','sucursales'));
    }
}
