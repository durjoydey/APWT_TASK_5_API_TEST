<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MedicineController;

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

Route::get('/', [PagesController::class,'home'])->name('home');

Route::get('/medicine/create',[MedicineController::class,'create'])->name('medicine.create');
Route::post('/medicine/create',[MedicineController::class,'createSubmit'])->name('medicine.create');
Route::get('/medicine/list',[MedicineController::class,'list'])->name('medicine.list');
