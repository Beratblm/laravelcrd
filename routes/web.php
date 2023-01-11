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
    return view('welcome');
});

Route::get("/", "App\Http\Controllers\crudController@readtable")->name("table");

Route::get("/ekle", "App\Http\Controllers\crudController@insert")->name("insert");

Route::post("/post", "App\Http\Controllers\crudController@insertpost")->name("insertpost");

Route::get("/delete/{id}", "App\Http\Controllers\crudController@deleteitem")->name("deleteitem");

Route::get("/update/{id}", "App\Http\Controllers\crudController@updateitem")->name("updateitem");

Route::post("/updatepost/{id}", "App\Http\Controllers\crudController@updatepost")->name("updatepost");



