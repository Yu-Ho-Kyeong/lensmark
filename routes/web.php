<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LensMarkController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LensMarkController::class, 'index'])->name('lensMarks.index');
Route::get('/LensMarks/create', [LensMarkController::class, 'create'])->name('lensMarks.create');
