<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Backend\UserController;
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


Route::resource('users', UserController::class);
Route::get('/users/{user}/delete', [UserController::class, 'destroy']);
Route::get('/users/{user}/change-password', [UserController::class, 'passwordForm']);
Route::post('/users/{user}/change-password', [UserController::class, 'changePassword']);
Route::get('login', [AuthController::class, 'loginView'])->name("login_view");
Route::post('login', [AuthController::class, 'login'])->name("login");

