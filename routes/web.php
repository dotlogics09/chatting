<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
    return view('index');
});

// Route::post('/save-user', 'LoginController@storeUser');
Route::post('/save-user', [LoginController::class, 'storeUser']);
Route::post('/login-user', [LoginController::class, 'loginUser']);

Route::group(['middleware' => 'admin'], function () {
    Route::get('/logout', [LoginController::class, 'logout']);

    Route::get('/dashboard', function () {
        return view('dashboard');
    });

    Route::get('/change-password', function () {
        return view('changePassword');
    });

    Route::post('/changePassword', [LoginController::class, 'change_password']);
});
