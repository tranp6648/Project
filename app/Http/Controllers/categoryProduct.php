<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categoryProduct extends Controller
{
    public  function add_category_product(){
        return view('category.add_category');
    }
    public function save_category(Request $request){
        $data=array();
        $data['category_name']=$request->name_category;
        $data['description_category']=$request;
    }
}
