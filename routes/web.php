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
Route::get('/admin', [\App\Http\Controllers\HomeController::class, 'admin'])->name('admin.index');

Route::group(['prefix' => 'company'], function (){
   Route::get('/', [\App\Http\Controllers\CompanyController::class, 'index'])->name('company.index');
   Route::get('create', [\App\Http\Controllers\CompanyController::class, 'create'])->name('company.create');
   Route::post('store', [\App\Http\Controllers\CompanyController::class, 'store'])->name('company.store');
});