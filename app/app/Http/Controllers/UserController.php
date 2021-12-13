<?php

namespace App\Http\Controllers;
use App\Models\Userv1;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller{

    public function index(){
        $users = Userv1::all();
        return view('home', compact('users'));
    }

    public function usercontact(Request $request, $contactId){
        $users = Userv1::all();
        return view('home2', compact('users'), compact('contactId'));
    }

    public function login(Request $request, $contactId){
        $users = Userv1::all();
        return view('login', compact('users'), compact('contactId'));
    }

}

