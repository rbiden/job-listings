<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get("/", [JobController::class, 'index'])->name("home");
Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create')->middleware('auth');
Route::get('/jobs/search', [JobController::class, 'show'])->name('jobs.search');

Route::view("/jobs", "jobs")->name("jobs");
Route::view("/career", "career")->name("career");
Route::view("/salary", "salary")->name("salary");
Route::view("/company", "company")->name("company")->middleware('auth');

Route::get('/login', [SessionController::class, "create"])->name("login");
Route::post('/login', [SessionController::class, "store"])->name('login.store');
Route::delete('/logout',  [SessionController::class, "destroy"])->name('logout');

Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
