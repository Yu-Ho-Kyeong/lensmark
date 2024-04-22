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

Route::get('/', [LensMarkController::class, 'index'])->name('lensMarks.layout');
Route::get('/lensMarks/show/{id}', [LensMarkController::class, 'show'])->name('layouts.show');  // 특정 렌즈마크 조회  
Route::post('/lensMarks/store', [LensMarkController::class, 'store'])->name('lensMarks.store');    // 렌즈마크 등록
Route::post('/lensMarks/update/{id}', [LensMarkController::class, 'update'])->name('lensMarks.update');  // 렌즈마크 수정

