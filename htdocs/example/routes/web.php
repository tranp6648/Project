<?php

use App\Http\Controllers\FeedbackController;
use Illuminate\Support\Facades\Route;
use App\Models\feedback;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//view login
 Route::get('/', function () {
      return view('login');
  });
  //view admin
Route::get('/admin',[FeedbackController::class,'admin']);
//xu ly login
Route::post('/user',[FeedbackController::class,'checksession']);
//logout
Route::get('/logout',function(){
  Session()->forget('va');
  session()->forget('van');
  if(!Session()->has('va') and  !session()->has('van')){
    return view('/login');
  }
});
Route::get('/logout1',function(){
  Session()->forget('mk');
  session()->forget('mj');
  if(!Session()->has('mk') and  !session()->has('mj')){
    return view('/login');
  }
});
Route::get('/logout2',function(){
  Session()->forget('3');
  session()->forget('4');
  if(!Session()->has('3') and  !session()->has('4')){
    return view('/login');
  }
});

//view student
Route::get('/student',[FeedbackController::class,'student']);
//view teacher
Route::get('/teacher',[FeedbackController::class,'teacher']);
Route::get('/addstudent',[FeedbackController::class,'addstudent']);
Route::get('/addlop',[FeedbackController::class,'addlop']);
Route::get('/addteacher',[FeedbackController::class,'addteacher']);
Route::get('/addsubject',[FeedbackController::class,'addsubject']);
Route::get('/addaccountstudent',[FeedbackController::class,'addaccountstudent']);
Route::get('/addaccounteacher',[FeedbackController::class,'addaccounteacher']);
//
//xu ly view
Route::post('/addstudent',[FeedbackController::class,'editstudent']);
Route::post('/addteacher',[FeedbackController::class,'editteacher']);
Route::post('/addlop',[FeedbackController::class,'editlop']);
Route::post('/student',[FeedbackController::class,'addfeedback']);
Route::post('/addsubject',[FeedbackController::class,'themsubject']);
Route::post('/account',[FeedbackController::class,'account']);
Route::post('/editaccounteacher1',[FeedbackController::class,'editaccounteacher1']);
//xu ly view xu ly
Route::get('/editstudent',[FeedbackController::class,'crudstudent']);
Route::get('/editteacher',[FeedbackController::class,'crudteacher']);
Route::get('/editclass',[FeedbackController::class,'crudclass']);
Route::get('/editsubject',[FeedbackController::class,'crudsubject']);
Route::get('/myfeedback',[FeedbackController::class,'myfeedback']);
Route::get('/editaccounteacher',[FeedbackController::class,'accoutteacher']);
Route::get('/editaccountstudent',[FeedbackController::class,'accountstudent']);
//search
Route::get('/searchstudent',[FeedbackController::class,'search'])->name('search');
Route::get('/searchfeedback',[FeedbackController::class,'searchapproved']);
Route::get('/searchmyfeedback',[FeedbackController::class,'searchfeedback']);
Route::get('/searchteacher',[FeedbackController::class,'searchteacher']);
Route::get('searchclass',[FeedbackController::class,'searchclass']);
Route::get('/searchsubject',[FeedbackController::class,'searchsubject']);
Route::get('/searchaccoutstudent',[FeedbackController::class,'searchaccoutstudent']);

Route::get('/searchaccoutteacher',[FeedbackController::class,'searchaccoutteacher']);
//update
Route::get('editaccountudent/{ID}',[FeedbackController::class,'editaccountudent']);
Route::get('editsubject/{ID_monhoc}',[FeedbackController::class,'editsubject']);
Route::get('edit/{Id_student}',[FeedbackController::class,'edit']);
Route::post('/update/{Id_student}',[FeedbackController::class,'update']);
Route::post('/updateaccouteacher/{ID}',[FeedbackController::class,'updateaccouteacher']);
Route::post('updateaccountstudent/{ID}',[FeedbackController::class,'updateaccountstudent']);
Route::get('editteacher/{ID_teacher}',[FeedbackController::class,'editgv']);
Route::post('updateeacher/{ID_teacher}',[FeedbackController::class,'updategv']);
Route::get('editclass/{ID_class}',[FeedbackController::class,'editclass']);
Route::post('/updateclass/{ID_class}',[FeedbackController::class,'updateclass']);
Route::post('/updatesubject/{ID_monhoc}',[FeedbackController::class,'updatesubject']);
Route::get('editaccounteacher/{ID}',[FeedbackController::class,'editaccounteacher']);
//xuly delete
Route::get('delete/{id_student}',[FeedbackController::class,'remove']);
Route::get('deleteaccounteacher/{ID}',[FeedbackController::class,'deleteaccounteacher']);
Route::get('deleteteacher/{Id_teacher}',[FeedbackController::class,'deleteteacher']);
Route::get('deletelop/{ID_class}',[FeedbackController::class,'deletelop']);
Route::get('deletesubject/{ID_monhoc}',[FeedbackController::class,'deletesubject']);
Route::get('deleteaccoutstudent/{ID}',[FeedbackController::class,'deleteaccoutstudent']);
Route::get('deletetemyfeedback/{ID_myfeedback}',[FeedbackController::class,'deletetemyfeedback']);
//xu ly duyet cua teacher
Route::get('/approve',[FeedbackController::class,'aprove']);
Route::get('/approved/{id}',[FeedbackController::class,'approved']);
Route::get('/canceled/{id}',[FeedbackController::class,'canceled']);







?>


