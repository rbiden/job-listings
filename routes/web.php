<?php

use Illuminate\Support\Facades\Route;

Route::view("/", "home")->name("home");
Route::view("/jobs", "jobs")->name("jobs");
Route::view("/career", "career")->name("career");
Route::view("/salary", "salary")->name("salary");
Route::view("/company", "company")->name("company");
