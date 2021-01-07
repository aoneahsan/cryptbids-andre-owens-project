<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::group([
    "namespace" => "Frontend"
], function () {
    // #################################################################
    // ########################    REDIRECTS    ########################
    // #################################################################
    Route::redirect("/register", "/sign-up");
    Route::redirect("/login", "/sign-in");

    // #################################################################
    // ####################      GENERIC ROUTES      ###################
    // #################################################################
    Route::get('/')->name('home')->uses('HomeController@render');
    Route::get('/about-us')->name('about-us')->uses('PagesController@AboutUs');
    Route::get('/contact-us')->name('contact-us')->uses('PagesController@ContactUs');
    Route::get('/privacy-policy')->name('privacy-policy')->uses('PagesController@PrivacyPolicy');
    Route::get('/faqs')->name('faqs')->uses('PagesController@FAQ');
    Route::get('/fees')->name('fees')->uses('PagesController@Fees');
    Route::get('/career')->name('career')->uses('PagesController@Career');
    Route::get('/disclaimer')->name('disclaimer')->uses('PagesController@Disclaimer');
    Route::get('/terms-and-conditions')->name('terms-and-conditions')->uses('PagesController@TermsConditions');

    
    // #################################################################
    // ####################      GUEST ROUTES      #####################
    // #################################################################
    Route::group([
        "middleware" => ['guest']
    ], function () {
        Route::get('/sign-in')->name('sign-in')->uses('AuthController@loginView')->middleware(['guest']);
        Route::post('/sign-in')->name('sign-in-action')->uses('AuthController@login')->middleware(['guest']);
        Route::get('/sign-up')->name('sign-up')->uses('AuthController@registerView')->middleware(['guest']);
        Route::post('/sign-up')->name('sign-up-action')->uses('AuthController@register')->middleware(['guest']);
    });
    
    // #################################################################
    // ####################      AUTH ROUTES      ######################
    // #################################################################
    Route::group([
        "middleware" => ['auth']
    ], function () {
        Route::get('/email/verify')->uses("AuthController@showVerifyEmailView")->name('verification.notice');
        Route::get('/email/verify/{id}/{hash}')->uses('AuthController@verifyEmailAction')->name('verification.verify')->middleware(['signed']);
        Route::get('/email/verification-notification')->uses('AuthController@resendVerificationEmail')->middleware(['throttle:2,1'])->name('verification.send');
        Route::get('/logout', 'AuthController@logout')->name('logout');
    });

    // #################################################################
    // #################     ADMIN PANEL ROUTES     ####################
    // #################################################################
    Route::group([
        "middleware" => ['auth', "verified"]
    ], function () {
        Route::get('/dashboard')->uses("PagesController@Dashboard")->name('dashboard');
    });
});


// Route::redirect('/{any}', '/')->where('any', '.*');
