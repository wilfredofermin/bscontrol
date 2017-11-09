<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Type;

class RequestController extends Controller
{
  public function index(){

        return view('solicitudes.index');
  }
}
