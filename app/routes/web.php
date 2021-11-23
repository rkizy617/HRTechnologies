<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/AssignEmployees', function () {
    return view('AssignEmployees');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/schedule', function () {
    return view('schedule');
});
Route::get('/update', function () {
    return view('update');
});


Route::post('/');
