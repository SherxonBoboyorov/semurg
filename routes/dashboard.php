<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CarouselController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\ContactListController;
use App\Http\Controllers\Admin\DirectorController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\FeedbacksController;
use App\Http\Controllers\Admin\ForumController;
use App\Http\Controllers\Admin\HeaderKackoController;
use App\Http\Controllers\Admin\HistoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\IncomingController;
use App\Http\Controllers\Admin\InsuranceCategoryController;
use App\Http\Controllers\Admin\InsuranceProductController;
use App\Http\Controllers\Admin\InternationalController;
use App\Http\Controllers\Admin\KackoBannerController;
use App\Http\Controllers\Admin\KaskoAutoBrandController;
use App\Http\Controllers\Admin\KaskoAutoEquipmentController;
use App\Http\Controllers\Admin\KaskoAutoModelController;
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
        'kasko_auto_brand' => KaskoAutoBrandController::class,
        'kasko_auto_model' => KaskoAutoModelController::class,
        'kasko_auto_equipment' => KaskoAutoEquipmentController::class,
        'headerkacko' => HeaderKackoController::class,
        'kackobanner' => KackoBannerController::class
    ]);
});
