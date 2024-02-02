<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::match(['get', "post"], 'register', [
    "uses" => "Auth\AuthController@Register",
    "as" => "Register"
]);

Route::match(['get', "post"], 'login', [
    "uses" => "Auth\AuthController@Login",
    "as" => "Login"
]);


