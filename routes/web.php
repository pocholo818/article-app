<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\ArticleController;

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
    return view('welcome');
});
Route::get('/profile', function () {
    return view('profile.index');
});

Route::resource('/article', ArticleController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\Web\HomeController::class, 'index'])->name('home');
