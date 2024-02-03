<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\News\NewsController;
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



Route::get('register', [AuthController::class, "PageRegister"])->name("PageRegister");
Route::post('register', [AuthController::class, "Register"])->name("Register");

Route::get('login', [AuthController::class, "PageLogin"])->name("PageLogin");
Route::post('login', [AuthController::class, "Login"])->name("Login");

Route::get("new",[NewsController::class, "GetNews"])->name("news");


