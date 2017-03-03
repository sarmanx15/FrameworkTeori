<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function(){
	return view('contact');
});

Route::get('/coba', function (){
    $anggota = App\Anggota::all()->first();
    echo $anggota->nama;
    echo $anggota->alamat;   
});

Route::get('/coba2', function ()
 {
    
    $anggota = App\Anggota::where('nama','=','Sarman')->first();
    echo $anggota->id;
    echo $anggota->alamat;
});