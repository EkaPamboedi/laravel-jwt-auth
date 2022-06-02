<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::POST('register',[AuthController::class, 'register'])->name('register');
    Route::POST('login',[AuthController::class, 'login'])->name('login');
    Route::GET('profile',[AuthController::class, 'profile'])->name('profile');
    Route::POST('logout',[AuthController::class, 'logout'])->name('logout');  

});
