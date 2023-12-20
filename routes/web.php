<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MembersController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/restrict', [MembersController::class, 'index']);
Route::post('/restrict', [MembersController::class, 'home']);

Route::get('/dashboard', [MembersController::class, 'members'])->name('members.home');
Route::get('/register', [MembersController::class, 'create'])->name('members.create');
Route::post('/register', [MembersController::class, 'store'])->name('members.store');
Route::get('/info', [MembersController::class, 'info']);
Route::get('/agenda', [MembersController::class, 'calendar']);
Route::get('/tesouraria', [MembersController::class, 'treasury']);