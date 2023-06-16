<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\feedback;
use Session;
use Illuminate\Routing\Controller as BaseController;

class FeedbackController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    //Trang login
    function login(){

        //code here

        return view("login");
        
        }
    //Trang admin
     function admin(){

            //code here
            if(!session('3') and !session('4')){
                return view('login');
            }else{
                return view("admin");
            }
           
            
           }    

// Check login session           
    Public function checksession(Request $request){
        $username=$request->input('usrname');
        $password=$request->input('password');
        
       $student=DB::select('select id from admin where  Username=? and    Password=? and usr_Type=?',[$username,$password,'usr']);
       $admin=DB::select('select id from admin where  Username=? and    Password=? and usr_Type=?',[$username,$password,'adm']);
       $teacher=DB::select('select id from admin where  Username=? and    Password=? and usr_Type=?',[$username,$password,'Y']);

        if($teacher){
            $request->session()->put('va',$username);
            $request->session()->put('van',$password);
            return redirect('teacher');
        }else if($student){
            $request->session()->put('mk',$username);
            $request->session()->put('mj',$password);
            return redirect('student');
        }else if($admin){
            $request->session()->put('3',$username);
            $request->session()->put('4',$password);
            return redirect('admin');
        }else{
            return redirect('/');
        }


    }
   //Trang student
    public function student(){
        $data=DB::table("subject")->select('*')->get();
        $data2=DB::table("sinhvien")->select('*')->get();
     
        if(!session('mk') and !session('mj')){
            return view('login');
        }else{
            return view("student1")->with('data',$data)->with('data2',$data2);
        }
      
    }  
    //Trang teacher
    public function teacher(){
        if(!session('va') and !session('van')){
            return view('login');
        }else{
            return view('teacher1');
        }
       
    }   
    
    //xu ly insert cac trang
    public function addfeedback(Request $request){
        $tenmon=$request->input('Ten_mon');
        $tensv=$request->input('sinh_vien');
        $feedback=$request->input('subject');
        DB::insert('insert into feeback(ID_monhoc,ID_student,content) values (?,?,?)',[$tenmon,$tensv,$feedback]);
        return redirect('student');
    }
    public function themsubject(Request $request){
        $Id_monhoc=$request->input('ID_monhoc');
        $ten_monhoc=$request->input('Ten_monhoc');
        $ID_Student=$request->input('drop');
        DB::insert('insert into subject(ID_monhoc,Ten_monhoc,ID_student) values(?,?,?)',[$Id_monhoc,$ten_monhoc,$ID_Student]);
        return redirect('editsubject');
    }
    public function editaccounteacher1(Request $request){
        $username=$request->input('Username');
        $password=$request->input('Password');
        $tensv=$request->input('drop');
        DB::insert('insert into admin(Username,Password,ID_teacher,usr_Type) values(?,?,?,?)',[$username,$password,$tensv,'Y']);
        return redirect('editaccounteacher');
    }
    public function editlop(Request $request){
        $tenlop=$request->input('name_class');
        $id_student=$request->input('drop');
        DB::insert('insert into lop(name_class,ID_student) values(?,?) ',[$tenlop,$id_student]);
        return redirect('editclass');
    }
    public function editstudent(Request $request){
        $firstname=$request->input('First_name');
        $idstudent=$request->input('ID_student');
        $lastname=$request->input('Last_name');
        $Email=$request->input('Email');
        $tel=$request->input('tel');
        $idteacher=$request->input('drop');
        DB::insert('insert into sinhvien (Id_student,First_name,Last_name,Email,Id_teacher,tel) values(?,?,?,?,?,?)',[$idstudent,$firstname,$lastname,$Email,$idteacher,$tel]);
        return redirect('editstudent');
        
        }
        public function account(Request $request){
            $username=$request->input('Username');
            $password=$request->input('Password');
            $tensv=$request->input('drop');
            DB::insert('insert into admin(Username,Password,Id_student,usr_Type) values(?,?,?,?)',[$username,$password,$tensv,'usr']);
            return redirect('editaccountstudent');
        }
        public function editteacher(Request $request){
            $ID_teacher=$request->input('ID_teacher');
            $Name_Teacher=$request->input('Name_teacher');
            $id_Class=$request->input('ID_Class');
            $id_feedback=$request->input('ID_feeback');
            DB::insert('insert into giaovien(ID_teacher,Name_teacher,ID_Class,ID_feeback) values(?,?,?,?)',[$ID_teacher,$Name_Teacher,$id_Class,$id_feedback]);
            return redirect('editteacher');
        }
        //xu ly insert cac trang\\
        //view xu ly add
    public function addstudent(){
    
        $data=DB::table("giaovien")->select('*')->get();
      
        if(session()->has('3') and session()->has('4')){
            return view('student.addstudent',compact('data'));
        }else if(session('va') and session('van')){
            return redirect('teacher');
        }else if(session('mk') and session('mj')){
            return redirect('admin');
        }else{
            return redirect('/');
        }
     
    }
    public function addsubject(){
        $data=DB::table('sinhvien')->select('*')->get();
       
        if(session()->has('3') and session()->has('4')){
            return view('subject.addsubject',compact('data'));
        }else if(session('va') and session('van')){
            return redirect('teacher');
        }else if(session('mk') and session('mj')){
            return redirect('student');
        }else{
            return redirect('/');
        }
    
    }
    public function addlop(){
        $data=DB::table('sinhvien')->select('*')->get();
        if(session()->has('3') and session()->has('4')){
            return view('class.addclass',compact('data'));
        }else if(session('va') and session('van')){
            return redirect('teacher');
        }else if(session('mk') and session('mj')){
            return redirect('student');
        }else{
            return redirect('/');
        }
       
    }
    public function addteacher(){
        $data=DB::table('lop')->select('*')->get();
        $data1=DB::table('feeback')->select('*')->get();
        if(session()->has('3') and session()->has('4')){
            return view('giaovien.addteacher',compact('data','data1'));
        }else if(session('va') and session('van')){
            return redirect('teacher');
        }else if(session('mk') and session('mj')){
            return redirect('student');
        }else{
            return redirect('/');
        }
       
    }
    public function addaccountstudent(){
        $data=DB::table('sinhvien')->select('*')->get();
        
        if(session()->has('3') and session()->has('4')){
            return view('account.addaccountstudent',compact('data'));
        }else if(session('va') and session('van')){
            return redirect('teacher');
        }else if(session('mk') and session('mj')){
            return redirect('student');
        }else{
            return redirect('/');
        }
    }
    public function addaccounteacher(){
        $data=DB::table('giaovien')->select('*')->get();
       
        if(session()->has('3') and session()->has('4')){
            return view('account.addaccountteacher',compact('data'));
        }else if(session('va') and session('van')){
            return redirect('teacher');
        }else if(session('mk') and session('mj')){
            return redirect('student');
        }else{
            return redirect('/');
        }
    }

//view add cac trang \\
//Trang quan li thong tin 
public function crudstudent(){
    $data=DB::table("sinhvien")->join('giaovien','sinhvien.Id_teacher','=','giaovien.ID_teacher')->select('*')->get();
    if(session()->has('3') and session()->has('4')){
        return view('student.crudstudent',compact('data'));
    }else if(session('va') and session('van')){
        return redirect('teacher');
    }else if(session('mk') and session('mj')){
        return redirect('student');
    }else{
        return redirect('/');
    }
}

public function crudteacher(){
    $data=DB::table('giaovien')->join('lop','giaovien.ID_class','=','lop.ID_class')->select('*')->get();
    if(session()->has('3') and session()->has('4')){
        return view('giaovien.crudteacher',compact('data'));
    }else if(session('va') and session('van')){
        return redirect('teacher');
    }else if(session('mk') and session('mj')){
        return redirect('student');
    }else{
        return redirect('/');
    }
   
}
public function accountstudent(){
    $data=DB::table('admin')->join('sinhvien','sinhvien.Id_student','=','admin.Id_student')->select('*')->where('admin.usr_Type','=','usr')->whereNotNull('admin.Id_student')->get();
    if(session()->has('3') and session()->has('4')){
        return view('account.accountstudent',compact('data'));
    }else if(session('va') and session('van')){
        return redirect('teacher');
    }else if(session('mk') and session('mj')){
        return redirect('student');
    }else{
        return redirect('/');
    }
  
}
public function accoutteacher(){
    $data=DB::table('admin')->join('giaovien','admin.ID_teacher','=','giaovien.ID_teacher')->where('admin.usr_Type','=','Y')->select('*')->get();
    
    if(session()->has('3') and session()->has('4')){
        return view('account.accoutteacher',compact('data'));
    }else if(session('va') and session('van')){
        return redirect('teacher');
    }else if(session('mk') and session('mj')){
        return redirect('student');
    }else{
        return redirect('/');
    }
}
public function crudclass(){
    $data=DB::table('lop')->join('sinhvien','lop.ID_student','=','sinhvien.Id_student')->select('*')->get();
   
    if(session()->has('3') and session()->has('4')){
        return view('class.crudclass',compact('data'));
    }else if(session('va') and session('van')){
        return redirect('teacher');
    }else if(session('mk') and session('mj')){
        return redirect('student');
    }else{
        return redirect('/');
    }
}
public function crudsubject(){
    $data=DB::table('subject')->join('sinhvien','subject.ID_student','=','sinhvien.Id_student')->select('*')->get();
   
    if(session()->has('3') and session()->has('4')){
        return view('subject.crudsubject',compact('data'));
    }else if(session('va') and session('van')){
        return redirect('teacher');
    }else if(session('mk') and session('mj')){
        return redirect('student');
    }else{
        return redirect('/');
    }
}
public function aprove(){
    $aprove=DB::table('feeback')->join('subject','feeback.ID_monhoc','=','subject.ID_monhoc')->select('*')->get();
    if(session()->has('va') and session()->has('van')){
        return view('feedback.crudfeedback',compact('aprove'));
    }else if(session('mk') and session('mj')){
        return redirect('student');
    }else if(session('3') and session('4')){
        return redirect('admin');
    }else{
        return redirect('/');
    }
   
}
public function myfeedback(){
    $data=DB::table('admin')->join('sinhvien','admin.ID_student','=','sinhvien.Id_student')->join('feeback','sinhvien.Id_student','=','feeback.id_student')->select('*')->get();
  
    if(session()->has('mk') and session('mj')){
        return view('feedback.myfeedback',compact('data'));
    }else if(session('3') and session('4')){
        return redirect('admin');
    }else if(session('va') and session('van')){
        return redirect('teacher');
    }else{
        return redirect('/');
    }
}

//Trang quan li thong tin //
public function search(Request $request){
    $get_name=$request->input('query');
     $users =DB::table('sinhvien')->join('giaovien','sinhvien.Id_teacher','=','giaovien.ID_teacher')->where("sinhvien.Id_student","like","%".$get_name."%")->orWhere('sinhvien.First_name',"like","%".$get_name."%")->orWhere('sinhvien.Last_name',"like","%".$get_name."%")->orWhere('sinhvien.Email',"like","%".$get_name."%")->orWhere('giaovien.Name_teacher',"like","%".$get_name."%")->orWhere('sinhvien.tel',"like","%".$get_name."%")->get();
    return view('student.searchstudent',compact('users'));
   

}
public function searchteacher(Request $request){
    $get_name=$request->input('query');
    $users =DB::table('giaovien')->join('lop','giaovien.ID_class','=','lop.ID_class')->where("giaovien.ID_teacher","like","%".$get_name."%")->orWhere('giaovien.Name_teacher','like','%'.$get_name.'%')->orWhere('lop.name_class','like','%'.$get_name.'%')->get();
    return view('giaovien.searchteacher',compact('users'));
}
public function searchclass(Request $request){
    $get_name=$request->input('query');
    $users=DB::table('lop')->join('sinhvien','lop.ID_student','=','sinhvien.Id_student')->where('lop.ID_class','like','%'.$get_name.'%')->orWhere('lop.name_class','like','%'.$get_name.'%')->orWhere('sinhvien.First_name','like','%'.$get_name.'%')->orWhere('sinhvien.Last_name','like','%'.$get_name.'%')->get();
    return view('class.searchclass',compact('users'));
}
public function searchsubject(Request $request){
    $get_name=$request->input('query');
    $data=DB::table('subject')->join('sinhvien','subject.ID_student','=','sinhvien.Id_student')->select('*')->get();
    $users=DB::table('subject')->join('sinhvien','subject.ID_student','=','sinhvien.Id_student')->where('subject.ID_monhoc','like','%'.$get_name.'%')->orWhere('subject.Ten_monhoc','like','%'.$get_name.'%')->orWhere('sinhvien.First_name','like','%'.$get_name.'%')->orWhere('sinhvien.Last_name','like','%'.$get_name.'%')->get();
    return view('subject.searchsubject',compact('users'));
}
public function searchaccoutstudent(Request $request){
    $get_name=$request->input('query');
    $users =DB::table('admin')->join('sinhvien','sinhvien.Id_student','=','admin.Id_student')->where("admin.ID","like","%".$get_name."%")->orWhere('admin.Username',"like","%".$get_name."%")->orWhere('admin.Password','like',"%".$get_name."%")->orWhere('sinhvien.Email',"like","%".$get_name."%")->orWhere('sinhvien.tel',"like","%".$get_name."%")->orWhere('sinhvien.tel',"like","%".$get_name."%")->get();
   return view('account.searchaccoutstudent',compact('users'));
}
public function searchfeedback(Request $request){
    $get_name=$request->input('query');
   $users=DB::table('admin')->join('sinhvien','admin.ID_student','=','sinhvien.Id_student')->join('feeback','sinhvien.Id_student','=','feeback.id_student')->where('feeback.id_student',"like","%".$get_name."%")->orWhere('sinhvien.First_name',"like","%".$get_name."%")->orWhere('sinhvien.Last_name',"like","%".$get_name."%")->orWhere('sinhvien.Email',"like","%".$get_name."%")->orWhere('feeback.status',"like","%".$get_name."%")->orWhere('feeback.content','like','%'.$get_name.'%')->get();
   return view('feedback.searchmyfeedback',compact('users'));
}
public function searchapproved(Request $request){
    $get_name=$request->input('query');
    $users=DB::table('feeback')->join('subject','feeback.ID_monhoc','=','subject.ID_monhoc')->where('feeback.id','like','%'.$get_name.'%')->orWhere('subject.Ten_monhoc','like','%'.$get_name.'%')->orWhere('feeback.id_student','like','%'.$get_name.'%')->orWhere('feeback.content','like','%'.$get_name.'%')->orWhere('feeback.status',"like","%".$get_name."%")->get();
    return view('feedback.searchfeedback',compact('users'));
}

public function searchaccoutteacher(Request $request){
    $get_name=$request->input('query');
    $users =DB::table('admin')->join('giaovien','admin.ID_teacher','=','giaovien.ID_teacher')->where("admin.ID","like","%".$get_name."%")->orWhere('admin.Username',"like","%".$get_name."%")->orWhere('admin.Password','like',"%".$get_name."%")->orWhere('giaovien.Name_teacher',"like","%".$get_name."%")->get();
    return view('account.searchaccoutteacher',compact('users'));
}

//xu ly delete
public function remove($Id_student){
    $student=DB::table('sinhvien')->where('id_student',$Id_student);
    $student->delete();
    return redirect('/editstudent');
}
public function deleteaccounteacher($ID){
    $student=DB::table('admin')->where('ID',$ID);
    $student->delete();
    return redirect('editaccounteacher');
}
public function deleteteacher($Id_teacher){
    $teacher=DB::table('giaovien')->where('ID_teacher',$Id_teacher);
    $teacher->delete();
    return redirect('/editteacher');
}
public function deletelop($ID_class){
    $class=DB::table('lop')->where('ID_class',$ID_class);
    $class->delete();
    return redirect('/editclass');
}
public function deletesubject($ID_monhoc){
    $class=DB::table('subject')->where('ID_monhoc',$ID_monhoc);
    $class->delete();
    return redirect('editsubject');
}
public function deleteaccoutstudent($ID){
    $class=DB::table('admin')->where('ID',$ID);
    $class->delete();
    return redirect('editaccountstudent');
}


//view edit
public function edit($id_student){
    $data=DB::table("giaovien")->select('*')->get();
    $students=DB::select('select * from sinhvien where  Id_student=?',[$id_student]);
    return view('student.edit')->with('student',$students)->with('data',$data);
}
public function editaccounteacher($ID){
    $data=DB::table('admin')->join('giaovien','admin.ID_teacher','=','giaovien.ID_teacher')->where('admin.usr_Type','=','Y')->select('*')->get();
    $student=DB::select('select * from admin where  ID=?',[$ID]);
    return view('account.editaccounteacher')->with('data',$data)->with('student',$student);
}
public function editaccountudent($ID){
    $data=DB::table('admin')->join('sinhvien','admin.Id_student','=','sinhvien.Id_student')->select('*')->where('admin.usr_Type','=','usr')->whereNotNull('admin.Id_student')->get();
    $student=DB::select('select * from admin where  ID=?',[$ID]);
    return view('account.editaccountudent')->with('data',$data)->with('student',$student);
}
public function editgv($ID_teacher){
    $data=DB::table('lop')->select('*')->get();
    $data1=DB::table('feeback')->select('*')->get();
    $student=DB::select('Select * from giaovien where ID_teacher=?',[$ID_teacher]);
    return view('giaovien.editgv')->with('data',$data)->with('data1',$data1)->with('student',$student);
}
public function editsubject($ID_monhoc){
    $data=DB::table("sinhvien")->select('*')->get();
    $students=DB::select('select * from subject where  ID_monhoc=?',[$ID_monhoc]);
    return view('subject.editsubject')->with('student',$students)->with('data',$data);
}
public function editclass($ID_class){
    $data=DB::table('sinhvien')->select('*')->get();
    $student=DB::select('Select * from lop where ID_class=?',[$ID_class]);
    return view('class.editclass')->with('data',$data)->with('student',$student);
}
//xu ly update
public function update(Request $request, $Id_student){
   
$idstudent=$request->input('ID_student');
$firstname=$request->input('First_name');
$lastname=$request->input('Last_name');
$Email=$request->input('Email');
$tel=$request->input('tel');
$idteacher=$request->input('drop');
DB::update('update sinhvien set Id_student=?,First_name=?,Last_name=?,Email=?,Id_teacher=?,tel=? where Id_student=?',[$idstudent,$firstname,$lastname,$Email,$idteacher,$tel,$Id_student]);
return redirect('editstudent');
}
public function updateaccouteacher(Request $request,$ID){
    $username=$request->input('Username');
    $password=$request->input('Password');
    $tensv=$request->input('drop');
    DB::update('update  admin set Username=?,Password=?,ID_teacher=? where ID=? ',[$username,$password,$tensv,$ID]);
    return redirect('editaccounteacher');
}
public function updateaccountstudent(Request $request,$ID){
    $username=$request->input('Username');
    $password=$request->input('Password');
    $tensv=$request->input('drop');
    DB::update('update  admin set Username=?,Password=?,Id_student=? where ID=? ',[$username,$password,$tensv,$ID]);
    return redirect('editaccountstudent');
}
public function updatesubject(Request $request,$Id_monhoc){
    $Id_monhoc=$request->input('ID_monhoc');
    $ten_monhoc=$request->input('Ten_monhoc');
    $ID_Student=$request->input('drop');
    DB::update('update subject set ID_monhoc=?,Ten_monhoc=?,ID_student=? where ID_monhoc=?',[$Id_monhoc,$ten_monhoc,$ID_Student,$Id_monhoc]);
    return redirect('editsubject');
}


public function updategv(Request $request,$ID_teacher){
    $Id_teacher=$request->input('ID_teacher');
    $Name_Teacher=$request->input('Name_teacher');
    $id_Class=$request->input('ID_Class');
    $id_feedback=$request->input('ID_feeback');
    DB::update('update giaovien set ID_teacher=?,Name_teacher=?,ID_class=?,ID_feeback=? where ID_teacher=?',[ $Id_teacher, $Name_Teacher, $id_Class,  $id_feedback,$ID_teacher]);
    return redirect('editteacher');
}

public function updateclass(Request $request,$ID_class){
    $tenlop=$request->input('name_class');
    $id_student=$request->input('drop');
    DB::update('update lop set name_class=?,ID_student=? where ID_class=?',[$tenlop,$id_student,$ID_class]);
    return redirect('editclass');
}

public function approved($id){
  $data=feedback::find($id);
  $data->Status='approved';
  $data->save();
  return redirect()->back();
}
public function canceled($id){
    $data=feedback::find($id);
    $data->Status='canceled';
    $data->save();
    return redirect()->back();
}
  
}

?>
