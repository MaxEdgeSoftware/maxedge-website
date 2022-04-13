<?php

use App\Http\Controllers\AccountsController;
use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'index']);
Route::get('/contact', [MainController::class, 'contact']);
Route::get('/whyus', [MainController::class, 'whyus']);
Route::get('/website', [MainController::class, 'website']);
Route::get('/Services', [MainController::class, 'services']);
Route::get('/mobile', [MainController::class, 'mobile']);
Route::get('/team', [MainController::class, 'team']);
Route::get('/datascience', [MainController::class, 'datascience']);
Route::post('/loginpost', [AccountsController::class, 'login'])->name("userLoggin");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
