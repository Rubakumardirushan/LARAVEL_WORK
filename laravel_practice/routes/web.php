<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

//scope resolution operator ::
Route::get('/', function () {
return view('home');
});
Route::get('/con', function () {
    return view('contact');
    });
Route::post('/username', function (Request $request) {
$name=$request->input('name');
//return 'hello'.$name;
return redirect('con')->with('massage',$name);
});
