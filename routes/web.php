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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[\App\Http\Controllers\HomeController::class,'index'] )->name('home');
Route::group(['prefix' => 'company'], function (){
   Route::get('create', [\App\Http\Controllers\CompanyController::class, 'create'])->name('company.create');
   Route::post('store', [\App\Http\Controllers\CompanyController::class, 'store'])->name('company.store');
});

Route::group(['prefix' => 'specialist-relocation'], function (){
    Route::get('create', [\App\Http\Controllers\SpecialistRelocationController::class, 'create'])->name('specialist-relocation.create');
    Route::post('store', [\App\Http\Controllers\SpecialistRelocationController::class, 'store'])->name('specialist-relocation.store');
});
