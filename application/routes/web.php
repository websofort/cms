<?php

use App\Lib\Router;
use Illuminate\Support\Facades\Route;

Route::get('/clear', function(){
    \Illuminate\Support\Facades\Artisan::call('optimize:clear');
});

// User Support Ticket
Route::controller('TicketController')->prefix('ticket')->group(function () {
    Route::get('/', 'supportTicket')->name('ticket');
    Route::get('/new', 'openSupportTicket')->name('ticket.open');
    Route::post('/create', 'storeSupportTicket')->name('ticket.store');
    Route::get('/view/{ticket}', 'viewTicket')->name('ticket.view');
    Route::post('/reply/{ticket}', 'replyTicket')->name('ticket.reply');
    Route::post('/close/{ticket}', 'closeTicket')->name('ticket.close');
    Route::get('/download/{ticket}', 'ticketDownload')->name('ticket.download');
});

Route::controller('TariffsWizardController')->group(function(){
    Route::get('tariffs', 'handleTariffSteps')->name('tariffs.steps');
    Route::post('tariffs/step1', 'processStep1')->name('tariffs.processStep1');
    Route::post('tariffs/step2', 'processStep2')->name('tariffs.processStep2');
    Route::post('tariffs/step3', 'processStep3')->name('tariffs.processStep3');
});

Route::get('/zip-codes', [\App\Http\Controllers\ZipCodeController::class, 'getZipCodes']);
Route::get('/{zip_code}/street', [\App\Http\Controllers\StreetController::class, 'getStreet']);

Route::get('app/deposit/confirm/{hash}', 'Gateway\PaymentController@appDepositConfirm')->name('deposit.app.confirm');

Route::controller('SiteController')->group(function () {
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact', 'contactSubmit');
    Route::get('/change/{lang?}', 'changeLanguage')->name('lang');

    Route::get('cookie-policy', 'cookiePolicy')->name('cookie.policy');

    Route::get('/cookie/accept', 'cookieAccept')->name('cookie.accept');

    Route::get('blog/{slug}/{id}', 'blogDetails')->name('blog.details');

    Route::get('policy/{slug}/{id}', 'policyPages')->name('policy.pages');

    Route::get('placeholder-image/{size}', 'placeholderImage')->name('placeholder.image');

    // blog
    Route::get('/blog','blog')->name('blog');
    // plan
    Route::get('/plan','plan')->name('plans');

    // services
    Route::get('/services','services')->name('services');
    Route::get('service/{slug}/{id}', 'serviceDetails')->name('service.details');
    Route::get('service/filter', 'serviceFilter')->name('service.filtered');

    // portfolio
    Route::get('portfolio/{slug}/{id}', 'portfolioDetails')->name('portfolio.details');
    Route::get('portfolio', 'fetchPortfolio')->name('portfolio');
    Route::get('portfolio/filter', 'portfolioFilter')->name('portfolio.filtered');

    // subscriber
    Route::post('/subscribe','subscribe')->name('subscribe');

    Route::get('/{slug}', 'pages')->name('pages');
    Route::get('/', 'index')->name('home');

});


