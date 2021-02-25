<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CollectionsController;
use App\Http\Controllers\PaintingsController;
use App\Http\Controllers\PressReleasesController;


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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::view('/about', 'about');

Route::resource('painting', PaintingsController::class);

Route::resource('collection', CollectionsController::class);

Route::resource('press', PressReleasesController::class);

Route::get('/{collection}', [CollectionsController::class, 'show']);

Route::get('/{collection}/{painting}', [PaintingsController::class, 'show']);