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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/bestseller', function () {
    return view('bestseller');
});

Route::get('/financialsupport', function () {
    return view('financialsupport');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/partnerdirectory', function () {
    return view('partnerdirectory');
});

Route::get('/warranty', function () {
    return view('warranty');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/cars', function () {
    return view('cars');
});