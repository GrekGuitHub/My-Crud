<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
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
Route::get('freelancer2', [JobController::class, 'add_freelance'])->name('add.freelance');
Route::get('freelancer', [JobController::class, 'freelancer_next'])->name('freelancer.next');
Route::get('admin', [JobController::class, 'admin_next'])->name('admin.next');
Route::get('register', [JobController::class, 'register'])->name('register.next');
Route::get('job/edit/{id}', [JobController::class, 'edit'])->name('job.edit');
Route::delete('/job/{id}', [JobController::class, 'delete'])->name('job.delete');
Route::get('job/download/{id}', [JobController::class, 'download'])->name('job.download');

// Route pour la méthode save
Route::post('/job/save', [JobController::class, 'store'])->name('job.save');
Route::put('/job/update/{id}', [JobController::class, 'update'])->name('job.update');

Route::get('/', function () {
    return view('job.index');
});
