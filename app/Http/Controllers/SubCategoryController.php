<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubCategory;

class SubCategoryController extends Controller
{
    //
     public function byCategory($id){
         return SubCategory::where('category_id',$id)->get();
     }
}
