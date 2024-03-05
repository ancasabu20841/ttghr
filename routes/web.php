<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Auth;
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


Route::get('/register/candidate', [CandidateController::class, 'showRegistrationForm'])->name('register_candidate');
Route::post('/register/candidate', [CandidateController::class, 'register'])->name('register_candidate.submit');

Route::get('/home/candidate', [App\Http\Controllers\HomeController::class, 'index_candidate'])->name('home_candidate');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');
Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store');
Route::get('/jobs/{id}/edit', [JobController::class, 'edit'])->name('jobs.edit');
Route::put('/jobs/{id}', [JobController::class, 'update'])->name('jobs.update');
Route::delete('/jobs/{id}', [JobController::class, 'destroy'])->name('jobs.destroy');

Route::get('/jobs/list', [JobController::class, 'list'])->name('jobs.list');
Route::get('/search-jobs', [JobController::class, 'searchJobs']);

Route::get('/applications', [ApplicationController::class, 'index'])->name('applications.index');

Route::get('/candidates/{id}/references', [CandidateController::class,'showReferences'])->name('candidates.references');

Route::get('/see_jobs', [JobController::class, 'findJobs'])->name('jobs.see');
Route::get('/apply/{id}', [ApplicationController::class, 'apply'])->name('jobs.apply');

Route::get('/see_applications', [ApplicationController::class, 'seeAplications'])->name('application.see');
