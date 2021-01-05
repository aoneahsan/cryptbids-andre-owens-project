<?php

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

    Route::post('/sign-up')->name('sign-up-action')->uses('AuthController@register')->middleware(['guest']);
    Route::get('/email/verify')->uses("AuthController@showVerifyEmailView")->middleware('auth')->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}')->uses('AuthController@verifyEmailAction')->name('verification.verify')->middleware(['auth', 'signed']);
    Route::post('/email/verification-notification')->uses('AuthController@resendVerificationEmail')->middleware(['auth', 'throttle:2,1'])->name('verification.send');

    // #################################################################
    // ####################      GUEST ROUTES      #####################
    // #################################################################
    Route::group([
        "middleware" => ['guest']
    ], function () {
        Route::get('/sign-in')->name('sign-in')->uses('PagesController@Login')->middleware(['guest']);
        Route::post('/sign-in')->name('sign-in-action')->uses('AuthController@login')->middleware(['guest']);
        Route::get('/sign-up')->name('sign-up')->uses('PagesController@Register')->middleware(['guest']);
    });

    // #################################################################
    // ####################      AUTH ROUTES      ######################
    // #################################################################
    Route::group([
        "middleware" => ['auth:sanctum', "verified"]
    ], function () {
        Route::get('/logout', 'SystemController@logout')->name('logout');
    });

    // #################################################################
    // #################     ADMIN PANEL ROUTES     ####################
    // #################################################################
    Route::group([
        "middleware" => ['auth:sanctum', "verified"]
    ], function () {
        Route::get('/dashboard', function () {
            return Inertia::render('Dashboard');
        })->name('dashboard');
    });
});


// Route::redirect('/{any}', '/')->where('any', '.*');
