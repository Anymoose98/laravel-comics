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

route::get('/dettaglio_fumetto/{param}',function($id){
    $db = config('db');
    $fumetto=null;

    
    foreach($db as $db){
        if($db['id'] == $id){
            $fumetto = $db;
        }
    }

    return view('dettaglio_fumetto',compact('fumetto'));
})->name('dettaglio_fumetto');



