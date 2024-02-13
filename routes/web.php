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

Route::get('/', function(){
    $db = config('db');
    
    return view('home',compact('db'));
});

route::get('/fumetto/{param}',function($id){
    $db = config('db');
    $fumetto=null;

    // dd($id);
    
    foreach($db as $db){
        if($db['id'] == $id){
            $fumetto = $db;
        }
    }
    dd($fumetto);

    return view('dettaglio-fumetto',compact('db'));
})->name('dettaglo_fumetto');



