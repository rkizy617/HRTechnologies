<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;



class Userv1 {

    public function all(){

        return DB::table('users')->select('id','fname','lname','username','password','email','bday','bmonth','byear')->get();

    }



}
