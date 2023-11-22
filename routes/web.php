<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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
    return view('pages.login');
});
Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/register', function () {
    return view('pages.register');
});

Route::get('/forget-password', function(){
    return view('pages.forget');
});

Route::post('/login-user', [UserController::class, 'login']);

Route::post('/register-user', [UserController::class, 'register']);

Route::get('/home/{user:id}', [UserController::class, 'index']);

Route::get('/detailCategory/{id}', [ProductController::class, 'index']);
