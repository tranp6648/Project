<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categoryProduct extends Controller
{
    public  function add_category_product(){
        return view('catelogy.add_catelogy');
    }
    
}
