<?php

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
    $datas = [
        ['id' => 1, 'name' => 'omar'],
        ['id' => 2, 'name' => 'yassine'],
        ['id' => 3, 'name' => 'anas'],
    ];
    return view('welcome', compact('datas'));
});
