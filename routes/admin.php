<?php

use App\Http\Controllers\AdminsController;
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

Route::get('/', [AdminsController::class, 'index']);
Route::get('/about', [AdminsController::class, 'about']);
Route::get('/profile', [AdminsController::class, 'profile']);
Route::post('/profile', [AdminsController::class, 'updateProfile'])->name("updateProfile");
Route::post('/profile/photo', [AdminsController::class, 'uploadPhoto'])->name("uploadPhoto");
Route::get('/staffs', [StaffsController::class, 'index']);
Route::get('/staff/add', [StaffsController::class, 'create']);
Route::post('/staff/add', [StaffsController::class, 'store'])->name("addstaff");
Route::get('/staff/edit/{id}', [StaffsController::class, 'edit']);
Route::post('/staff/edit/{id}', [StaffsController::class, 'update'])->name("updateStaff");
Route::get('/staff/destroy/{id}', [StaffsController::class, 'destroy'])->name("deletesaff");


Route::get('/clients', [ClientsController::class, 'index']);
Route::get('/client/add', [ClientsController::class, 'create']);
Route::post('/client/add', [ClientsController::class, 'store'])->name("addclient");
Route::get('/client/edit/{id}', [ClientsController::class, 'edit']);
Route::post('/client/edit/{id}', [ClientsController::class, 'update'])->name("updateClient");
Route::get('/client/destroy/{id}', [ClientsController::class, 'destroy'])->name("deleteclient");


Route::get('/projects', [ProjectsController::class, 'index']);
Route::get('/project/add', [ProjectsController::class, 'create']);
Route::post('/project/add', [ProjectsController::class, 'store'])->name("addProject");
Route::get('/project/show/{id}', [ProjectsController::class, 'show']);
Route::get('/project/addpictures/{id}', [ProjectsController::class, 'addPicture']);
Route::post('/project/addpictures/{id}', [ProjectsController::class, 'addProjectPicture'])->name("addProjectPicture");
Route::post('/project/addpictures/delete/{id}', [ProjectsController::class, 'deleteProjectPicture'])->name("deleteProjectPicture");


Route::get('/project/edit/{id}', [ProjectsController::class, 'edit'])->name("editProject");
Route::post('/project/edit/{id}', [ProjectsController::class, 'update'])->name("updateProject");
Route::get('/project/destroy/{id}', [ProjectsController::class, 'destroy'])->name("deleteProject");

Route::get('/testimonials', [TestimonialsController::class, 'index']);
Route::get('/testimonials/add', [TestimonialsController::class, 'create']);
Route::post('/testimonials/add', [TestimonialsController::class, 'store'])->name("addTestimonial");
Route::get('/testimonials/show/{id}', [TestimonialsController::class, 'show']);
Route::get('/testimonials/edit/{id}', [TestimonialsController::class, 'edit'])->name("editTestimonial");
Route::post('/testimonials/edit/{id}', [TestimonialsController::class, 'update'])->name("updateTestimonial");
Route::POST('/testimonials/destroy/{id}', [TestimonialsController::class, 'destroy'])->name("deleteTestimonial");

Route::get("/goback", function () {
    return redirect()->back();
})->name("goback");
