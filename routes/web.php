<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CategoryController;

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




// store in one field in database
Route::get('/', [CategoryController::class,'index'])->name('categoty');
Route::post('/category', [CategoryController::class,'store'])->name('categoty.store');


// store in multiple field in database
Route::get('/country', [CountryController::class,'index'])->name('country');
Route::post('/country/store', [CountryController::class,'store'])->name('country.store');


