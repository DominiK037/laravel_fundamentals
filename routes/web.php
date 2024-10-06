<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

//Route::controller(JobController::class)->group(function () {
//    Route::get('/jobs', 'index');           //  Index
//    Route::get('/jobs/create', 'create');   //  Create
//    Route::get('/jobs/{job}', 'show');      //  Show
//    Route::post('/jobs', 'store');          //  Store
//    Route::get('/jobs/{job}/edit', 'edit'); //  Edit
//    Route::patch('/jobs/{job}', 'update');  //  Patch/Update
//    Route::delete('/jobs/{job}', 'destroy');//  Destroy
//});

//  Alternative for all the routes mentioned above
Route::resource('jobs', JobController::class);

Route::view('/contact', 'contact');
