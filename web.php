<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Hospitalcontroller;
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
    return view('welcome');
});
Route::get('/register', function () {
    return view('register');
});
Route::post("reg",[Hospitalcontroller::class,'reg']);
Route::get('/login', function () {
    return view('login');
});
Route::post('/login',[Hospitalcontroller::class,'login']);
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/docter', function () {
    return view('docter');
});
Route::get('/adddoc', function () {
    return view('adddoc');
});
Route::post('/adddoc',[Hospitalcontroller::class,'docter']);
Route::get('/doclist',[Hospitalcontroller::class,'list']);
Route::get('/patient', function () {
    return view('patient');
});
Route::get('/addpat', function () {
    return view('addpat');
});
Route::post('/addpat',[Hospitalcontroller::class,'patient']);
Route::get('/patlist',[Hospitalcontroller::class,'patlist']);
Route::get('/contact', function () {
    return view('contact');
});
Route::post('/contact',[Hospitalcontroller::class,'addcon']);
