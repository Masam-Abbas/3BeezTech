<?php

use App\Http\Controllers\myController;
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

Route::get('/', [myController::class, 'index']);
Route::get('/about', [myController::class, 'about']);
Route::get('/services', [myController::class, 'services']);
Route::get('/blog', [myController::class, 'blog']);
Route::get('/detail', [myController::class, 'detail']);
Route::get('/team', [myController::class, 'team']);
Route::get('/contact', [myController::class, 'contact']);


Route::get('/login', [myController::class, 'login']);
Route::post('/login_process', [myController::class, 'login_process'])->name('login_process');


// Route::get('/register', [myController::class, 'register']);


Route::get('/logout', [myController::class, 'logout'])->middleware('auth');

Route::post('/contact_form', [myController::class, 'contact_form'])->name('contact_form');

Route::get('/dashboard-admin', [myController::class, 'dashboard_admin'])->middleware('auth');


Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/user_add', [myController::class, 'user_add']);
    Route::get('/user_edit/{id}', [myController::class, 'user_edit']);
    Route::post('/user_update/{id}', [myController::class, 'user_update'])->name('user_update');
    Route::get('/user_delete/{id}', [myController::class, 'user_delete']);
    Route::get('/showall_team', [myController::class, 'showall']);
});


Route::get('/user_profile', [myController::class, 'user_profile']);
// Route::get('/user_login', [myController::class, 'user_login'])->middleware('auth');
Route::post('/register', [myController::class, 'register_process'])->name('register');
