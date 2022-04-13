<?php

use App\Http\Controllers\AdminsController;
use App\Http\Controllers\ClientAppController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\StaffsController;
use App\Http\Controllers\TestimonialsController;
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

Route::get('/', [ClientAppController::class, 'index']);
Route::get('/projects', [ClientAppController::class, 'projects']);
Route::get('/profile', [ClientAppController::class, 'profile']);
Route::get('/project/show/{id}', [ClientAppController::class, 'ShowProject']);
