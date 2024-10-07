<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/contact', 'contact');

//Route::controller(JobController::class)->group(function () {
    Route::get('/jobs', [JobController::class, 'index']);           //  Index
    Route::get('/jobs/create', [JobController::class, 'create'])->middleware('auth');   //  Create
    Route::get('/jobs/{job}', [JobController::class, 'show']);      //  Show
    Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');          //  Store

    Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])
        ->middleware('auth')
        ->can('edit', 'job'); //  Edit

    Route::patch('/jobs/{job}', [JobController::class, 'update']);  //  Patch/Update
    Route::delete('/jobs/{job}', [JobController::class, 'destroy']);//  Destroy
//});

//  Alternative for all the routes mentioned above
//Route::resource('jobs', JobController::class)->only(['index', 'show']);
//Route::resource('jobs'), JobController::class)->expect('index', 'show')->middleware('auth');

Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('login', [SessionController::class, 'create'])->name('login');
Route::post('login', [SessionController::class, 'store']);
Route::post('logout', [SessionController::class, 'destroy']);
