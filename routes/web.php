<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\DocumentsController;
use App\Http\Controllers\Front\EmailController;
use App\Http\Controllers\Front\FaqsController;
use App\Http\Controllers\Front\FeedbackController;
use App\Http\Controllers\Front\ForumsController;
use App\Http\Controllers\Front\HistoryCompanysController;
use App\Http\Controllers\Front\IncomingReinsuranceController;
use App\Http\Controllers\Front\IndexController;
use App\Http\Controllers\Front\InsurancesController;
use App\Http\Controllers\Front\KackoEmailController;
use App\Http\Controllers\Front\KaskoController;
use App\Http\Controllers\Front\LicensesCertificatesController;
use App\Http\Controllers\Front\ManagementController;
use App\Http\Controllers\Front\NewsController;
use App\Http\Controllers\Front\OcagoController;
use App\Http\Controllers\Front\OutgoingReinsuranceController;
use App\Http\Controllers\Front\SearchController;
use App\Http\Controllers\Front\StracturesController;
use App\Http\Controllers\Front\SurveyController;
use App\Http\Controllers\Front\TelegramBotController;
use App\Http\Controllers\Front\TendersController;
use App\Http\Controllers\Front\VacancysController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use UniSharp\Laravel\LaravelFilemanager\Lfm;

Auth::routes();

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], static function() {
    Route::get('/', [IndexController::class, 'homepage'])->name('/');
    Route::get('about-us', [AboutController::class, 'about'])->name('about-us');
    Route::get('licenses-certificates', [LicensesCertificatesController::class, 'licensesCertificates'])->name('licenses-certificates');
    Route::get('structure-company', [StracturesController::class, 'structureCompany'])->name('structure-company');
    Route::get('faq', [FaqsController::class, 'faq'])->name('faq');
    Route::get('news', [NewsController::class, 'list'])->name('news');
    Route::get('news/{slug}', [NewsController::class, 'show'])->name('new.show');
    Route::get('forum', [ForumsController::class, 'forum'])->name('forum');
    Route::get('survey', [SurveyController::class, 'survey'])->name('survey');
    Route::post('survey/vote', [SurveyController::class, 'registerVote']);
    Route::get('survey/result', [SurveyController::class, 'voteResults']);
    Route::get('tenders', [TendersController::class, 'list'])->name('tenders');
    Route::get('tenders/{slug}', [TendersController::class, 'show'])->name('tender.show');
    Route::get('vacancies', [VacancysController::class, 'vacancies'])->name('vacancies');
    Route::get('history-company', [HistoryCompanysController::class, 'historyCompany'])->name('history-company');
    Route::get('leadership-management', [ManagementController::class, 'leadershipManagement'])->name('leadership-management');
    Route::get('products/{id?}', [InsurancesController::class, 'insurancesProduct'])->name('product.show');
    Route::get('product/{id?}', [InsurancesController::class, 'show'])->name('product');
    Route::get('documents/{id?}', [DocumentsController::class, 'document'])->name('document.show');
    Route::get('reinsurance', [IncomingReinsuranceController::class, 'incomingReinsurance'])->name('reinsurance');
    // Route::get('outgoing-reinsurance', [OutgoingReinsuranceController::class, 'outgoingReinsurance'])->name('outgoing-reinsurance');
    Route::get('contact', [ContactController::class, 'contact'])->name('contact');
    Route::get('kasko', [KaskoController::class, 'kaskoStart'])->name('kaskoStart');
    Route::get('kasko-calculation', [KaskoController::class, 'calculationAmount'])->name('kaskoCalculationAmount');
    Route::get('kasko-form', [KaskoController::class, 'registerPolicy'])->name('registerPolicy');
    Route::get('ocago', [OcagoController::class, 'ocago'])->name('ocago');
    Route::get('accident-insurance', [OcagoController::class, 'accidentInsurance'])->name('ocago.accident-insurance');
    Route::get('accident-insurance-sports', [OcagoController::class, 'accidentInsuranceSports'])->name('ocago.accident-insurance-sports');
    Route::get('property-insurance', [OcagoController::class, 'propertyInsurance'])->name('ocago.property-insurance');
    // Route::post('kasko_register', [TelegramBotController::class, 'storeKaskoMessage'])->name('kaskoRegister');
    Route::post('search_front', [SearchController::class, 'search'])->name('search_front');
    Route::post('/feedback-form', KackoEmailController::class)->name('feedback-form.store');
    Route::post('/kasko_register-form', FeedbackController::class)->name('kasko-form.store');
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    UniSharp\LaravelFilemanager\Lfm::routes();
});

