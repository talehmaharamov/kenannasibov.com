<?php

use App\Http\Controllers\Backend\AboutController as BAbout;
use App\Http\Controllers\Backend\CategoryController as BCategory;
use App\Http\Controllers\Backend\ContactController as BContact;
use App\Http\Controllers\Backend\HomeController as BHome;
use App\Http\Controllers\Backend\LanguageController as LChangeLan;
use App\Http\Controllers\Backend\SettingController as BSetting;
use App\Http\Controllers\Backend\SiteLanguageController as BSiteLan;
use App\Http\Controllers\Backend\AdminController as BAdmin;
use App\Http\Controllers\Backend\WriterController as BWriter;
use App\Http\Controllers\Backend\InformationController as BInformation;
use App\Http\Controllers\Backend\PostController as BPost;
use App\Http\Controllers\Backend\DirectorController as BDirector;
use App\Http\Controllers\Backend\MetaController as BMeta;
use App\Http\Controllers\Backend\NewsletterController as BNewsletter;


use App\Http\Controllers\Frontend\AboutController as FAbout;
use App\Http\Controllers\Frontend\HomeController as FHome;
use App\Http\Controllers\Frontend\DirectorController as FDirector;
use App\Http\Controllers\Frontend\PostController as FPost;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin', 'as' => 'backend.', 'middleware' => 'auth:sanctum', 'backendLanguage'], function () {

    //General
    Route::get('/change-language/{lang}', [LChangeLan::class, 'switchLang'])->name('switchLang');
    Route::get('/', [BHome::class, 'index'])->name('index');
    Route::get('/dashboard', [BHome::class, 'index'])->name('dashboard');

    //Statuses
    Route::get('/site-language/{id}/change-status', [BSiteLan::class, 'siteLanStatus'])->name('siteLanStatus');
    Route::get('/categories/{id}/change-status', [BCategory::class, 'categoryStatus'])->name('categoryStatus');
    Route::get('/settings/{id}/change-status', [BSetting::class, 'settingStatus'])->name('settingStatus');
    Route::get('/directors/{id}/change-status', [BDirector::class, 'directorStatus'])->name('directorStatus');
    Route::get('/seo/{id}/change-status', [BMeta::class, 'seoStatus'])->name('seoStatus');


    //Delete
    Route::get('/site-languages/{id}/delete', [BSiteLan::class, 'delSiteLang'])->name('delSiteLang');
    Route::get('/categories/{id}/delete', [BCategory::class, 'delCategory'])->name('delCategory');
    Route::get('/contact-us/{id}/delete', [BContact::class, 'delContactUS'])->name('delContactUS');
    Route::get('/settings/{id}/delete', [BSetting::class, 'delSetting'])->name('delSetting');
    Route::get('/admins/{id}/delete', [BAdmin::class, 'delAdmin'])->name('delAdmin');
    Route::get('/writers/{id}/delete', [BWriter::class, 'delWriter'])->name('delWriter');
    Route::get('/directors/{id}/delete', [BDirector::class, 'delDirector'])->name('delDirector');
    Route::get('/seo/{id}/delete', [BMeta::class, 'delSeo'])->name('delSeo');


    //Resources
    Route::resource('/categories', BCategory::class);
    Route::resource('/site-languages', BSiteLan::class);
    Route::resource('/contact-us', BContact::class);
    Route::resource('/about', BAbout::class);
    Route::resource('/settings', BSetting::class);
    Route::resource('/admins', BAdmin::class);
    Route::resource('/writers', BWriter::class);
    Route::resource('/my-informations', BInformation::class);
    Route::resource('/posts', BPost::class);
    Route::resource('/directors', BDirector::class);
    Route::resource('/seo', BMeta::class);
    Route::resource('/newsletter', BNewsletter::class);

});

Route::group(['prefix' => '/', 'as' => 'frontend.', 'middleware' => 'frontLanguage'], function () {
    Route::get('/change-language/{dil}', [LChangeLan::class, 'frontLanguage'])->name('frontLanguage');
    Route::get('/contact-us', function () {
        return view('frontend.contact-us.index');
    })->name('contact-us-page');
    Route::post('/contact-us/send-message', [BContact::class, 'sendMessage'])->name('sendMessage');
    Route::get('/', [FHome::class, 'index'])->name('index');
    Route::get('/about', [FAbout::class, 'index'])->name('about');
    Route::get('/directors', [FDirector::class, 'index'])->name('directors');
    Route::get('post/{id}', [FPost::class, 'index'])->name('post');
    Route::get('/posts', [FPost::class, 'allPosts'])->name('allPosts');
});
