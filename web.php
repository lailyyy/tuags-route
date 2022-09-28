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

//root URL -> http://localhost:8000
Route::get('/', function () {
    return view('welcome');
})->name('root');
//route /hi -> http://localhost.8000/hi
Route::get('/index', function () {
    return view "home index, []";
})->name('home index');
////route /hi -> http://localhost.8000/post/id
Route::get ('/post/{id?}', function ($id = 1){
    return "posting blog ".$id;
})->name('posts');
Route::get ('/Days/{id?}', function ($id){
    return "posting blog ".$id;
})->name('days');
