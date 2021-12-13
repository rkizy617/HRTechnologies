<?php

use App\Models\UserDAO;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ROUTE::GET
Route::get('user',[UserController::class,'index']);

Route::get('user/{contactId}',[UserController::class,'usercontact']);

Route::get('/', function () {
    $users = DB::table('users')->select('id','username','email','password')->get();
    return view('home',compact('users'));
});

Route::get('/logout', function (Request $request) {
    if ($request->session()->has('loggedin')){
        if($request->session()->get('loggedin')==true){
            $request->session()->flush();
        }
    }
    return(redirect('/'));
});

Route::get('/home2', function (Request $request) {
    if ($request->session()->has('loggedin')){
        if($request->session()->get('loggedin')==true){
            $users=$request->session()->get('userinfo');
            return view('home2',compact('users'));
            //print_r($users);
        }
    }
    return view('home2');
});


Route::get('/login', function (Request $request) {
    if ($request->session()->has('loggedin')){
        if($request->session()->get('loggedin')==true){
            return(redirect('/home2'));
        }
    }

    return view('login');
});

Route::get('/AssignEmployees', function (Request $request) {
    if ($request->session()->has('loggedin')){
        if($request->session()->get('loggedin')==true){
            $users=$request->session()->get('userinfo');
            return view('AssignEmployees',compact('users'));
            //print_r($users);
        }
    }
    return view('AssignEmployees');
});

Route::get('/contact', function (Request $request) {
    if ($request->session()->has('loggedin')){
        if($request->session()->get('loggedin')==true){
            $users=$request->session()->get('userinfo');
            return view('contact',compact('users'));
            //print_r($users);
        }
    }
    return view('contact');
});

Route::get('/schedule', function (Request $request) {
    if ($request->session()->has('loggedin')){
        if($request->session()->get('loggedin')==true){
            $users=$request->session()->get('userinfo');
            return view('schedule',compact('users'));
            //print_r($users);
        }
    }
    return view('schedule');
});

Route::get('/update', function (Request $request) {
    if ($request->session()->has('loggedin')){
        if($request->session()->get('loggedin')==true){
            $users=$request->session()->get('userinfo');
            return view('update',compact('users'));
            //print_r($users);
        }
    }
    return view('update');
});

Route::get('/signup', function(){
    return view('signup');
});

Route::get('/welcome', function () {
    return view('welcome');
});

// ROUTE::POST
Route::post('/', function (){
    return view('home');
});

Route::post('/home2', function (Request $request){
    if ($request->session()->has('loggedin')){
        if($request->session()->get('loggedin')==true){
            $users=$request->session()->get('userinfo');
            //print_r($users);
            //print_r($request->session()->get('userinfo'));
            return view('home2', compact('users'));
        }
        else{
            return(redirect('/'));
        }
    }
    $users = DB::table('users')->select('id','username','email','password')->where('username','=',$request->uname)->where('password','=',$request->pass)->first();
    if (empty($users)){

    }
    else{
        $request->session()->put('loggedin',true);
        $request->session()->put('userinfo',["username"=>$users->username,"email"=>$users->email,"uid"=>$users->id]);
        $users=$request->session()->get('userinfo');
        //print_r($users);
        //print_r($request->session()->get('userinfo'));

    }
    // $uname = $request->input('uname');
    return redirect('/home2');

});

Route::post('/signup', function (Request $request){
    //$users = DB::table('users')->select('id','fname','lname','username','password','email','bday','bmonth','byear')->get();
    $user = new UserDAO;
    $user->username=$request->username;
    $user->password=$request->password;
    $user->email=$request->emailaddress;
    $user->fname=$request->firstname;
    $user->lname=$request->lastname;
    $user->bday=$request->day;
    $user->bmonth=$request->month;
    $user->byear=$request->year;
    $user->save();
    return redirect('/login');
    // $uname = $request->input('uname');
    //return view('home2', compact('users','uname'));
});






