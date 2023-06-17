<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    //return page admin
    public function dashboard(){
        return view('admin.admin');
    }
    //xu ly page register
    public function register(){
        return view('register');
    }
    public function addRegister(Request $request){
        $Name=$request->Name;
        $Email=$request->Email;
        $Phone=$request->Phone;
        $Password=$request->Password;
        DB::insert('insert into user(username,Email,Password,user_type) values(?,?,?,?,?)',[$Name,$Email,$Password,$Phone,'usr']);
        return redirect('register');
    }
    //xu ly page admin xem Email va Password so sanh xem neu user va password dung voi db thi cho luu ten va id vao session neu khong hien thong bao Password username ko dung
    //tra ve page login
    public function check_login(Request $request){
        $Email=$request->email;
        $Password=$request->password;
        $result=DB::table('user')->where('email',$Email)->where('password',$Password)->where('user_type','adm')->first();
        $result2=DB::table('user')->where('email',$Email)->where('password',$Password)->where('user_type','usr')->first();
        if($result){
            Session::put('username',$result->username);
            Session::put('id',$result->id);
            return redirect('/admin/dashboard');
        }elseif($result2){
            Session::put('username',$result2->username);
            Session::put('id',$result2->id);
        }else{
            Session::put('message','Email or Password is wrong.Please Enter Again');
            return redirect('/');
        }
    }
    //xu ly logout xoa name va id
    public function logout(){
        Session::put('username',null);
        Session::put('id',null);
        return redirect('/');
    }
}
