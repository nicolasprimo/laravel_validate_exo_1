<?php

use App\Http\Controllers\GoldenBookController;
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

Route::get('/', [GoldenBookController::class, 'index'])->name('gb-index');
Route::post('/goldenbook/store', [GoldenBookController::class, 'store'])->name('gb-store');