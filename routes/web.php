<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::view('/', 'home');

Route::get('/jobs', [JobController::class, 'index']);
Route::get('/jobs/create', [JobController::class, 'create']);
Route::get('/jobs/{job}', [JobController::class, 'show']);
Route::post('/jobs', [JobController::class, 'store']);
Route::get('/jobs/{job}/edit', [JobController::class, 'edit']);
Route::patch('/jobs/{job}', [JobController::class, 'update']);
Route::delete('/jobs/{job}', [JobController::class, 'destroy']);

Route::view('/contact', 'contact');

//Auth
Route::get('/register', [RegisteredUserController::class, 'create']);
