<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaraveslLocalization;


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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {
        Route::get('/employee-visa/{application}', [\App\Http\Controllers\ApplicationController::class,'qrCode'])->name('qrCode');
    Route::get('/', [\App\Http\Controllers\HomeController::class,'index'])->name('home');
    Route::get('/thanks', [\App\Http\Controllers\HomeController::class, 'thanks'])->name('thanks');
    Route::get('company/create', [\App\Http\Controllers\CompanyController::class, 'create'])->name('company.create');
    Route::post('company/store', [\App\Http\Controllers\CompanyController::class, 'store'])->name('company.store');
    Route::get('relocation/create', [\App\Http\Controllers\SpecialistRelocationController::class, 'create'])->name('specialist-relocation.create');
    Route::post('relocation/store', [\App\Http\Controllers\SpecialistRelocationController::class, 'store'])->name('specialist-relocation.store');
    Route::get('visa/create', [\App\Http\Controllers\SpecialistVisaController::class, 'create'])->name('specialist-visa.create');
    Route::post('visa/store', [\App\Http\Controllers\SpecialistVisaController::class, 'store'])->name('specialist-visa.store');
    Route::get('investr/create', [\App\Http\Controllers\InvestorController::class, 'create'])->name('investor.create');
    Route::post('investr/store', [\App\Http\Controllers\InvestorController::class, 'store'])->name('investor.store');
    Route::get('foundr/create', [\App\Http\Controllers\FounderController::class, 'create'])->name('founder.create');
    Route::post('foundr/store', [\App\Http\Controllers\FounderController::class, 'store'])->name('founder.store');




});

Route::get('admin/dashboard', [\App\Http\Controllers\HomeController::class, 'admin'])->middleware('auth')->name('admin.dashboard');
    Route::post('/login', [AuthController::class, 'login'])->name('admin.login');
    Route::post('/', [AuthController::class, 'logout'])->name('admin.logout');
    Route::get('/admin', [AuthController::class, 'index'])->name('admin.index');


    Route::group(['prefix' => 'admin/company', 'middleware' => 'auth'], function () {
        Route::get('/edit/{company}', [\App\Http\Controllers\CompanyController::class, 'edit'])->name('company.edit');
        Route::post('/update/{company}', [\App\Http\Controllers\CompanyController::class, 'update'])->name('company.update');
        Route::get('/', [\App\Http\Controllers\CompanyController::class, 'index'])->name('company.index');
        Route::get('show/{company}', [\App\Http\Controllers\CompanyController::class, 'show'])->name('company.show');
        Route::post('delete/{company}', [\App\Http\Controllers\CompanyController::class, 'delete'])->name('company.destroy');


    });

    Route::group(['prefix' => 'admin/relocation', 'middleware' => 'auth'], function () {
        Route::get('/edit/{specialist}', [\App\Http\Controllers\SpecialistRelocationController::class, 'edit'])->name('specialist-relocation.edit');
        Route::post('/update/{specialist}', [\App\Http\Controllers\SpecialistRelocationController::class, 'update'])->name('specialist-relocation.update');
        Route::get('/', [\App\Http\Controllers\SpecialistRelocationController::class, 'index'])->name('specialist-relocation.index');
        Route::get('show/{specialist}', [\App\Http\Controllers\SpecialistRelocationController::class, 'show'])->name('specialist-relocation.show');
        Route::post('/delete/{specialist}', [\App\Http\Controllers\SpecialistRelocationController::class, 'delete'])->name('specialist-relocation.destroy');

    });

    Route::group(['prefix' => 'admin/visa', 'middleware' => 'auth'], function () {
        Route::get('/edit/{specialist}', [\App\Http\Controllers\SpecialistVisaController::class, 'edit'])->name('specialist-visa.edit');
        Route::post('/update/{specialist}', [\App\Http\Controllers\SpecialistVisaController::class, 'update'])->name('specialist-visa.update');
        Route::get('/', [\App\Http\Controllers\SpecialistVisaController::class, 'index'])->name('specialist-visa.index');
        Route::get('show/{specialist}', [\App\Http\Controllers\SpecialistVisaController::class, 'show'])->name('specialist-visa.show');
        Route::post('delete/{company}', [\App\Http\Controllers\SpecialistVisaController::class, 'delete'])->name('specialist-visa.destroy');

    });

    Route::group(['prefix' => 'admin/investr', 'middleware' => 'auth'], function () {
        Route::get('/edit/{investr}', [\App\Http\Controllers\InvestorController::class, 'edit'])->name('investor.edit');
        Route::post('/update/{investr}', [\App\Http\Controllers\InvestorController::class, 'update'])->name('investor.update');
        Route::get('/', [\App\Http\Controllers\InvestorController::class, 'index'])->name('investor.index');
        Route::get('show/{investor}', [\App\Http\Controllers\InvestorController::class, 'show'])->name('investor.show');
        Route::post('delete/{investor}', [\App\Http\Controllers\InvestorController::class, 'delete'])->name('investor.destroy');

    });
Route::group(['prefix' => 'admin/application', 'middleware' => 'auth'], function () {
    Route::get('/create', [\App\Http\Controllers\ApplicationController::class, 'create'])->name('application.create');
    Route::post('/store', [\App\Http\Controllers\ApplicationController::class, 'store'])->name('application.store');
    Route::get('/edit/{application}', [\App\Http\Controllers\ApplicationController::class, 'edit'])->name('application.edit');
    Route::post('/update/{application}', [\App\Http\Controllers\ApplicationController::class, 'update'])->name('application.update');
    Route::get('/', [\App\Http\Controllers\ApplicationController::class, 'index'])->name('application.index');
    Route::get('show/{application}', [\App\Http\Controllers\ApplicationController::class, 'show'])->name('application.show');
    Route::post('delete/{application}', [\App\Http\Controllers\ApplicationController::class, 'delete'])->name('application.destroy');

});

    Route::group(['prefix' => 'admin/foundr', 'middleware' => 'auth'], function () {
        Route::get('/edit/{founder}', [\App\Http\Controllers\FounderController::class, 'edit'])->name('founder.edit');
        Route::post('/update/{founder}', [\App\Http\Controllers\FounderController::class, 'update'])->name('founder.update');
        Route::get('/', [\App\Http\Controllers\FounderController::class, 'index'])->name('founder.index');
        Route::get('show/{founder}', [\App\Http\Controllers\FounderController::class, 'show'])->name('founder.show');
        Route::post('delete/{founder}', [\App\Http\Controllers\FounderController::class, 'delete'])->name('founder.destroy');

    });
