<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Gerenica;
use App\Service;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sucursales=Gerenica::where('estado',1)
            ->where('tipo',1)
            ->get();
        $categories=Category::all();
        return view('home')->with(compact('categories','sucursales'));
    }
    public function show(){
        $sucursales=Gerenica::where('estado',1)
            ->where('tipo',1)
            ->get();

        $services=Service::where('estado',1)->get();

        $categories=Category::all();
        return view('solicitudes.index')->with(compact('categories','sucursales','services'));
    }

    public function byCategory($id){

        return Category::where('service_id',$id)->get();
    }

}
