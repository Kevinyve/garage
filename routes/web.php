<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageStaticController;
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



Route::get('/', [PageStaticController::class, 'index']);

Route::get('/presentation', [PageStaticController::class, 'presentation'])->name('presentation');
Route::get('/service', [PageStaticController::class, 'service'])->name('service');
