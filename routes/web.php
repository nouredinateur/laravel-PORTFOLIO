<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;


// Route::get('/', function () {
//      return view('home');
// });

Route::get('/blog', function (){
     return view('blog');
})->name('blog');

Route::get('/', [ProjectController::class, 'home'])->name('home');

Route::get('/crud', [ProjectController::class, 'index'])->name('index');

Route::post('/crud', [ProjectController::class, 'crud'])->name('crud');

Route::get('delete/{id}', [ProjectController::class, 'destroy'])->name('destroy');

Route::get('edit/{id}', [ProjectController::class, 'edit'])->name('edit');

Route::post('update/{id}', [ProjectController::class, 'update'])->name('update');


//auth
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');