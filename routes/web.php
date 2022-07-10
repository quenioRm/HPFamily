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
Route::get('/Cad1RegEdit/{id}', [App\Http\Controllers\Cadastro1Controller::class, 'Cadastro_1RegEdit'])->name('cad1RegEdit');
Route::post('/Cad1RegEdit/{id}', [App\Http\Controllers\Cadastro1Controller::class, 'Cadastro_1RegEditPost']);
Route::get('/Cad1RegDeleteFile/{id}', [App\Http\Controllers\Cadastro1Controller::class, 'Cadastro_1RegDeleteFileGet'])->name('cad1RegDeleteFile');
Route::get('/Cadastro1GetJson', [App\Http\Controllers\Cadastro1Controller::class, 'Cadastro1GetJson'])->name('Cadastro1GetJson');
Route::get('/Cad1RegDelete/{id}', [App\Http\Controllers\Cadastro1Controller::class, 'Cadastro_1RegDeleteGet'])->name('Cad1RegDelete');
Route::get('/Cad1Index/General', [App\Http\Controllers\Cadastro1Controller::class, 'Cadastro_1IndexGeneral'])->name('cad1IndexGeneral');
Route::get('/Cadastro1GetGeneralJson', [App\Http\Controllers\Cadastro1Controller::class, 'Cadastro1GetGeneralJson'])->name('Cadastro1GetGeneralJson');
Route::get('/Cad1Index/General/View/{id}', [App\Http\Controllers\Cadastro1Controller::class, 'Cadastro_1IndexGeneralView'])->name('Cadastro1IndexGeneralView');
