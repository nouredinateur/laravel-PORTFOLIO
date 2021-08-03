<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//      return view('home');
// });

Route::get('/blog', function (){
     return view('blog');
})->name('blog');

Route::get('/', [ProjectController::class, 'home'])->name('home');

Route::get('/crud', [ProjectController::class, 'index'])->name('index');

Route::post('/crud', [ProjectController::class, 'crud'])->name('crud');
