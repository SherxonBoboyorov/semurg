<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\CarouselController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\ContactListController;
use App\Http\Controllers\Admin\DirectorController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\FeedbacksController;
use App\Http\Controllers\Admin\ForumController;
use App\Http\Controllers\Admin\HistoryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\IncomingController;
use App\Http\Controllers\Admin\InsuranceCategoryController;
use App\Http\Controllers\Admin\InsuranceProductController;
use App\Http\Controllers\Admin\InternationalController;
use App\Http\Controllers\Admin\LeadershipController;
use App\Http\Controllers\Admin\LicensesCategoryController;
use App\Http\Controllers\Admin\LicensesDocumentController;
use App\Http\Controllers\Admin\OptionsController;
use App\Http\Controllers\Admin\OutgoingController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PollAnswerController;
use App\Http\Controllers\Admin\PollController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\StructureController;
use App\Http\Controllers\Admin\TenderController;
use App\Http\Controllers\Admin\UsefulController;
use App\Http\Controllers\Admin\VacancyController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\DocumentsController;
use App\Http\Controllers\Front\FaqsController;
use App\Http\Controllers\Front\FeedbackController;
use App\Http\Controllers\Front\ForumsController;
use App\Http\Controllers\Front\HistoryCompanysController;
use App\Http\Controllers\Front\IncomingReinsuranceController;
use App\Http\Controllers\Front\IndexController;
use App\Http\Controllers\Front\InsurancesController;
use App\Http\Controllers\Front\KackoController;
use App\Http\Controllers\Front\LicensesCertificatesController;
use App\Http\Controllers\Front\ManagementController;
use App\Http\Controllers\Front\NewsController;
use App\Http\Controllers\Front\OutgoingReinsuranceController;
use App\Http\Controllers\Front\SearchController;
use App\Http\Controllers\Front\StracturesController;
use App\Http\Controllers\Front\SurveyController;
use App\Http\Controllers\Front\TendersController;
use App\Http\Controllers\Front\VacancysController;
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
        'faq' => FaqController::class,
        'tender' => TenderController::class,
        'useful' => UsefulController::class,
        'carousel' => CarouselController::class,
        'international' => InternationalController::class,
        'incoming' => IncomingController::class,
        'outgoing' => OutgoingController::class,
        'contactlist' => ContactListController::class,
        'director' => DirectorController::class,
        'options' => OptionsController::class,
        'poll' => PollController::class,
        'feedback' => FeedbacksController::class,
        'pollanswer' => PollAnswerController::class,
        'car' => CarController::class
    ]);
});


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
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
            Route::get('kacko', [KackoController::class, 'kacko'])->name('kacko');
            Route::get('kacko/{id?}', [KackoController::class, 'show'])->name('kacko.show');
            Route::post('search_front', [SearchController::class, 'search'])->name('search_front');
            Route::post('/feedback-form', FeedbackController::class)->name('feedback-form.store');
    });

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    UniSharp\LaravelFilemanager\Lfm::routes();
});

