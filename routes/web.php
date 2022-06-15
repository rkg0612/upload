<?php

use App\Http\Controllers\FileController;
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
Route::get('/', [FileController::class, 'listFiles'])->name('home');

Route::post('upload', [FileController::class, 'upload']);

Route::delete('single-delete/{filename}', [FileController::class, 'singleDelete'])->name('singleDelete');

Route::delete('all-delete', [FileController::class, 'allDelete'])->name('allDelete');