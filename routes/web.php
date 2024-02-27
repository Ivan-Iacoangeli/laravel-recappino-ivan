<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PublicController::class , 'home']) ->name('homepage');

Route::get('/studenti-hack-138' , [PublicController::class ,'student'])->name('student');

Route::get('/student/detail/(name)' , [PublicController::class , 'show']) -> name('student.detail');