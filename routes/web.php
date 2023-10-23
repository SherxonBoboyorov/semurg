<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\ForumController;
use App\Http\Controllers\Admin\HistoryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\InsuranceCategoryController;
use App\Http\Controllers\Admin\InsuranceProductController;
use App\Http\Controllers\Admin\LeadershipController;
use App\Http\Controllers\Admin\LicensesCategoryController;
use App\Http\Controllers\Admin\LicensesDocumentController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\StructureController;
use App\Http\Controllers\Admin\VacancyController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use UniSharp\Laravel\LaravelFilemanager\Lfm;



Auth::routes();

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['role:admin'])->prefix('dashboard')->group(static function () {
    Route::get('/', [HomeController::class, 'index'])->name('homeAdmin');
    Route::resources([
        'slider' => SliderController::class,
        'insurancecategory' => InsuranceCategoryController::class,
        'insuranceproduct' => InsuranceProductController::class,
        'client' => ClientController::class,
        'page' => PageController::class,
        'article' => ArticleController::class,
        'category' => CategoryController::class,
        'product' => ProductController::class,
        'blog' => BlogController::class,
        'history' => HistoryController::class,
        'leadership' => LeadershipController::class,
        'structure' => StructureController::class,
        'forum' => ForumController::class,
        'licensescategory' => LicensesCategoryController::class,
        'licensesdocument' => LicensesDocumentController::class,
        'vacancy' => VacancyController::class,
        'faq' => FaqController::class
    ]);
});


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ 
            //
    });



Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    UniSharp\LaravelFilemanager\Lfm::routes();
});

