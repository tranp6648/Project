<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categoryProduct extends Controller
{
    public  function add_category_product(){
        return view('catelogy.add_catelogy');
    }
    public function save_catelogy(Request $request){
        $data=array();
        $data['catelogy_name']=$request->namecatelogy;
        $data['description_catelogy']=$request
    }
}
