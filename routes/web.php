<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidateController;

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

Auth::routes();


Route::get('/register/candidate', [CandidateController::class, 'showRegistrationForm'])->name('register_candidate')->middleware('user.type:candidate');
Route::post('/register/candidate', [CandidateController::class, 'register'])->name('register_candidate.submit')->middleware('user.type:candidate');

Route::get('/home/candidate', [App\Http\Controllers\HomeController::class, 'index_candidate'])->name('home_candidate');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');
Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store');
Route::get('/jobs/{id}', [JobController::class, 'show'])->name('jobs.show');
Route::get('/jobs/{id}/edit', [JobController::class, 'edit'])->name('jobs.edit');
Route::put('/jobs/{id}', [JobController::class, 'update'])->name('jobs.update');
Route::delete('/jobs/{id}', [JobController::class, 'destroy'])->name('jobs.destroy');

Route::get('/applications', [ApplicationController::class, 'index'])->name('applications.index');

Route::get('/candidates/{id}/references', [CandidateController::class,'showReferences'])->name('candidates.references');
