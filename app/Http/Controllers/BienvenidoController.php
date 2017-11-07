<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subsidiary;
use App\Departament;

class BienvenidoController extends Controller
{

    public function index(){

        $subsidiaries=Subsidiary::where('estado',1)->get();
        $departaments=Departament::where('estado',1)->get();

        return view('bienvenido')->with(compact('departaments','subsidiaries'));
    }
}
