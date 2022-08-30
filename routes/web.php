<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('h1');
Route::get('/h8', function () {
    return view('pageHtml.home-version-8');
})->name('h8');
Route::get('/h2', function () {
    return view('pageHtml.home-version-2');
})->name('h2');
Route::get('/h3', function () {
    return view('pageHtml.home-version-3');
})->name('h3');
Route::get('/h4', function () {
    return view('pageHtml.home-version-4');
})->name('h4');
Route::get('/h5', function () {
    return view('pageHtml.home-version-5');
})->name('h5');
Route::get('/h6', function () {
    return view('pageHtml.home-version-6');
})->name('h6');
Route::get('/h7', function () {
    return view('pageHtml.home-version-7');
})->name('h7');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
