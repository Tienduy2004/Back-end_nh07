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
//home
Route::get('/', function () {
    return view('home.home');
})->name('home');
Route::get('/about', function () {
    return view('home.about');
})->name("about");
Route::get('/menu', function () {
    return view('home.menu');
})->name("menu");
Route::get('/blog', function () {
    return view('home.blog');
})->name("blog");
Route::get('/gallery', function () {
    return view('home.gallery');
})->name("gallery");
//login
Route::get('/login', function () {
    return view('login.login');
})->name("login");
Route::get('/singup', function () {
    return view('login.singup');
})->name("singup");
