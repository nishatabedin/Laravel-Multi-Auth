<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Auth::routes();

Route::view('/', 'welcome');
Route::get('/login/admin', [LoginController::class, 'showAdminLoginForm']);
Route::get('/login/blogger', [LoginController::class, 'showBloggerLoginForm']);
Route::get('/register/blogger', [RegisterController::class, 'showBloggerRegisterForm']);

Route::post('/login/admin', [LoginController::class, 'adminLogin']);
Route::post('/login/blogger', [LoginController::class, 'bloggerLogin']);
Route::post('/register/blogger', [RegisterController::class, 'createBlogger']);

Route::group(['middleware' => 'auth:blogger'], function () {
    Route::view('/blogger', 'blogger');
});

Route::group(['middleware' => 'auth:admin'], function () {
    Route::view('/admin', 'admin');
});

Route::post('logout', [LoginController::class, 'logout']);
