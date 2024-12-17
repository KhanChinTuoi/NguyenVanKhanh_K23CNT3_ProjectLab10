<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NvkNhaCCController;
use App\Http\Controllers\NvkVattuController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//NhaCC
Route::get('/nvk-nhaccs',[NvkNhaCCController::class,'list'])->name('nvknhacc.list');

Route::get('/nvk-vattus',[NvkVattuController::class,'list'])->name('nvkvattu.list');
