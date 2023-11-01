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
/*
Route::get('/', function () {
return view('home');
});
Route::get('/con', function () {
    $titel=" hello diru bhai";
    return view('contact',['dirushan'=>$titel]);
    });
Route::post('/username', function (Request $request) {
$name=$request->input('name');
//return 'hello'.$name;
return redirect('con')->with('massage',$name);
});
*/
Route::get('/dirushan', function () {
    $names="dirushan mass";
$names2="msd";
    return view('dirushan',compact('names','names2'));

});
Route::post('/diru', function (Request $request) {
    $name=$request->input('username');
    return redirect('dirushan')->with('msg',$name);

});
Route::get('khc/{id}/{type?}', function ($id,$type=null) {
    if($type==null){
        return $id;
    }
    else{
        return $type;
    }

})->name('user');
Route::view('msd', 'mypage');
