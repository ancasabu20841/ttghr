<?php

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

Route::get('/home/candidate', [App\Http\Controllers\HomeController::class, 'index_candidate'])->name('home_candidate')->middleware('user.type:candidate');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('user.type:employer');
