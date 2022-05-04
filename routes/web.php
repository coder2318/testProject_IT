<?php

use App\Http\Controllers\AuthController;
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
Route::get('/thanks', [\App\Http\Controllers\HomeController::class, 'thanks'])->name('admin.thanks');


Route::get('admin/dashboard', [\App\Http\Controllers\HomeController::class, 'admin'])->middleware('auth')->name('admin.dashboard');
Route::post('/login', [AuthController::class, 'login'])->name('admin.login');
Route::post('/', [AuthController::class, 'logout'])->name('admin.logout');
Route::get('/admin', [AuthController::class, 'index'])->name('admin.index');


Route::group(['prefix' => 'admin/company', 'middleware' => 'auth'], function (){
   Route::get('/', [\App\Http\Controllers\CompanyController::class, 'index'])->name('company.index');
   Route::get('create', [\App\Http\Controllers\CompanyController::class, 'create'])->name('company.create');
   Route::post('store', [\App\Http\Controllers\CompanyController::class, 'store'])->name('company.store');
   Route::get('show/{company}', [\App\Http\Controllers\CompanyController::class, 'show'])->name('company.show');

});

Route::group(['prefix' => 'admin/relocation', 'middleware' => 'auth'], function (){
    Route::get('/', [\App\Http\Controllers\SpecialistRelocationController::class, 'index'])->name('specialist-relocation.index');
    Route::get('create', [\App\Http\Controllers\SpecialistRelocationController::class, 'create'])->name('specialist-relocation.create');
    Route::post('store', [\App\Http\Controllers\SpecialistRelocationController::class, 'store'])->name('specialist-relocation.store');
    Route::get('show/{specialist}', [\App\Http\Controllers\SpecialistRelocationController::class, 'show'])->name('specialist-relocation.show');

});

Route::group(['prefix' => 'admin/visa', 'middleware' => 'auth'], function () {
    Route::get('/', [\App\Http\Controllers\SpecialistVisaController::class, 'index'])->name('specialist-visa.index');
    Route::get('create', [\App\Http\Controllers\SpecialistVisaController::class, 'create'])->name('specialist-visa.create');
    Route::post('store', [\App\Http\Controllers\SpecialistVisaController::class, 'store'])->name('specialist-visa.store');
    Route::get('show/{specialist}', [\App\Http\Controllers\SpecialistVisaController::class, 'show'])->name('specialist-visa.show');
});

Route::group(['prefix' => 'admin/investr', 'middleware' => 'auth'], function () {
    Route::get('/', [\App\Http\Controllers\InvestorController::class, 'index'])->name('investor.index');
    Route::get('create', [\App\Http\Controllers\InvestorController::class, 'create'])->name('investor.create');
    Route::post('store', [\App\Http\Controllers\InvestorController::class, 'store'])->name('investor.store');
    Route::get('show/{investor}', [\App\Http\Controllers\InvestorController::class, 'show'])->name('investor.show');
});

Route::group(['prefix' => 'admin/foundr', 'middleware' => 'auth'], function () {
    Route::get('/', [\App\Http\Controllers\FounderController::class, 'index'])->name('founder.index');
    Route::get('create', [\App\Http\Controllers\FounderController::class, 'create'])->name('founder.create');
    Route::post('store', [\App\Http\Controllers\FounderController::class, 'store'])->name('founder.store');
    Route::get('show/{founder}', [\App\Http\Controllers\FounderController::class, 'show'])->name('founder.show');
});