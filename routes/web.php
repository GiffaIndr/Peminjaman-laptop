<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TakeController;
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

Route::middleware('stayregister')->group(function(){
    Route::get('/', [TakeController::class, 'index']);
    Route::get('/register', [TakeController::class, 'register']);
    Route::post('/register/input', [TakeController::class, 'registerAccount'])->name('register.input');
    Route::post('/login/auth', [TakeController::class, 'auth'])->name('login.auth');
});




Route::get('/logout', [TakeController::class, 'logout'])->name('logout');

Route::middleware('staylogin')->prefix('/take')->name('take.')->group(function(){
    Route::get('/', [TakeController::class, 'landing'])->name('index');
    Route::get('/create', [TakeController::class, 'create'])->name('create');
Route::get('/dashboard', [TakeController::class, 'dashboard']);
Route::get('/data', [TakeController::class, 'pull'])->name('data');
Route::post('/store', [TakeController::class, 'store'])->name('store');
Route::delete('/dashboard/delete/{id}', [TakeController::class, 'destroy'])->name('delete');
Route::get('/edit/{edit}', [TakeController::class, 'edit'])->name('edit');
Route::patch('/update/{id}', [TakeController::class, 'update'])->name('update');
Route::get('/completed/{id}', [TakeController::class, 'updateCompleted'])->name('updateCompleted');
});