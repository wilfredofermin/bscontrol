<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Subsidiary;
use App\Departament;
use App\Gerenica;
class BienvenidoController extends Controller
{

    public function index(){

        //SUCURSALES [TIPO 2]
        $departaments=Gerenica::where('estado',1)
                                ->where('tipo',3)
                                ->get();
        //SUCURSALES [TIPO 1]
        $subsidiaries=Gerenica::where('estado',1)
            ->where('tipo',1)
            ->get();


        return view('bienvenido')->with(compact('departaments','subsidiaries'));
    }
}
