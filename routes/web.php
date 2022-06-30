<?php

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'HomeGet'])->name('home');
Route::get('/Upload', [App\Http\Controllers\HomeController::class, 'UploadFilesGet'])->name('uploadFiles');
Route::get('/Cad1Index', [App\Http\Controllers\HomeController::class, 'Cadastro_1Index'])->name('cad1Index');
Route::get('/Cad1RegNew', [App\Http\Controllers\HomeController::class, 'Cadastro_1RegNew'])->name('cad1RegNew');
