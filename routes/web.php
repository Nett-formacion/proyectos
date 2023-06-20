<?php

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

Route::get('/', function () {
    return view('main');
});
Route::view("about","nav.about")->name('about');
Route::view("contacta","nav.contacta")->name('contacta');
Route::view("alumnos","nav.alumnos")->name('alumnos');
Route::view("proyectos","nav.proyectos")->name('proyectos');
