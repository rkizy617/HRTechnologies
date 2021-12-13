<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDAO extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = [
        'fname',
        'lname',
        'username',
        'password',
        'email',
        'bday',
        'bmonth',
        'byear'
    ];
}
