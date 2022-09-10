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
});

//route /hi -> http://localhost.8000/hi
Route::get('/hi', function () {
    return "Hello World!";
});