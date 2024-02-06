<?php

use App\Http\Controllers\API\PostAPIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);

Route::middleware('auth:api')->group( function () {
    Route::resource('products', ProductController::class);
});


Route::post('all-post', [PostAPIController::class, "GetAll"])->name('API.ShowAll');
Route::post('post', [PostAPIController::class, "GetPost"])->name('API.OnePost');
Route::post('SearchPost', [PostAPIController::class, "SearchPost"])->name('API.SearchPost');
