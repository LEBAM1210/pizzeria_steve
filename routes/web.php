<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\RegisterController;  
use App\Http\Controllers\LoginController; 

Route::get('/', function () {
    return view('welcome');
});


Route::get('/register', [RegisterController::class, 'show']); 
Route::post('/register', [RegisterController::class, 'register']);  

Route::get('/login', [LoginController::class, 'show']); 
Route::post('/login', [LoginController::class, 'login']);
Route::post('/home', [HomeController::class, 'show']);



Route::resource('categorias', CategoriaController::class);