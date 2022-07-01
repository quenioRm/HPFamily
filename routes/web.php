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
Route::get('/Upload', [App\Http\Controllers\UploadController::class, 'UploadFilesGet'])->name('uploadFiles');
Route::post('/Upload', [App\Http\Controllers\UploadController::class, 'UploadFilesPost']);
Route::get('/Cad1Index', [App\Http\Controllers\Cadastro1Controller::class, 'Cadastro_1Index'])->name('cad1Index');
Route::get('/Cad1RegNew', [App\Http\Controllers\Cadastro1Controller::class, 'Cadastro_1RegNew'])->name('cad1RegNew');
Route::post('/Cad1RegNew', [App\Http\Controllers\Cadastro1Controller::class, 'Cadastro_1RegNewPost']);
