<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sort', [AlgorithmsController::class,'sortFive'])->name('sort');
Route::get('/filter', [AlgorithmsController::class,'filter'])->name('filter');

Route::get('/form', [FormController::class,'showForm'])->name('showForm');
Route::post('/form', [FormController::class,'form'])->name('form');



