<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categoryProduct extends Controller
{
    public  function add_category_product(){
        return view('categogy.add_categogy');
    }
    public function save_categogy(Request $request){
        $data=array();
        $data['categogy_name']=$request->namecategogy;
        $data['description_categogy']=$request;
    }
}
