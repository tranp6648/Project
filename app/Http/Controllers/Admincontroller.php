<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Admincontroller extends Controller
{
    //return trang admin
    public function dashboard(){
        return view('admin.admin');
    }
    //xu ly trang register
    public function register(){
        return view('register.register');
    }
    public function addRegister(Request $request){
        $Name=$request->Name;
        $Email=$request->Email;
        $Phone=$request->Phone;
        $Password=$request->Password;
        DB::insert('insert into user(username,Email,Password,user_type) values(?,?,?,?,?)',[$Name,$Email,$Password,$Phone,'usr']);
        return redirect('register');
    }
    //xu ly trang admin neu kiem tra xem Email va Password so sanh xem neu user va password dung voi db thi cho luu ten va id vao session neu khong hien thong bao Password username ko dung
    //tra ve trang login
    public function checklogin(Request $request){
        $Email=$request->Email;
        $Password=$request->Password;
        $result=DB::table('user')->where('Email',$Email)->where('Password',$Password)->where('user_type','adm')->first();
        if($result){
            Session::put('Name',$result->username);
            Session::put('id',$result->id);
            return redirect('/dashboard');
        }else{
            Session::put('message','Emai or Password is wrong.Please Enter Password again');
            return redirect('/');
        }
    }
    //xu ly logout xoa name va id
    public function logout(){
        Session::put('Name',null);
        Session::put('id',null);
        return redirect('/');
    }
}
