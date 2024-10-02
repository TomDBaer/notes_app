<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

// beides das selbe, wenn statische seite kann man ::view nutzen
// Route::get('/', function () {
//     return view('home');
// });
Route::view('/', 'home');


// grouping, bei vielen routen
// Route::controller(JobController::class)->group(function () {
//     Route::get('/jobs', 'index');
// });
// Alternativ
// Route::resource('jobs', JobController::class);

// Index - All jobs
Route::get('/jobs', [JobController::class, 'index']);
// Create Job
Route::get('jobs/create', [JobController::class, 'create']);
// Show One Job
// wildcard und funktions parameter muss den selben namen haben
Route::get('jobs/{job}', [JobController::class, 'show']);
// Store
Route::post('/jobs', [JobController::class, 'store']);
// Edit Job
Route::get('jobs/{job}/edit', [JobController::class, 'edit']);
// Update
Route::patch('jobs/{job}', [JobController::class, 'update']);
// Delete|Destroy
Route::delete('jobs/{job}', [JobController::class, 'destroy']);

Route::get('/contact', function () {
    return view('contact');
});

