<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::get('/')->name('home')->uses('Frontend\HomeController@render');

Route::get('/sign-in')->name('sign-in')->uses('Frontend\PagesController@Login');
Route::get('/about-us')->name('about-us')->uses('Frontend\PagesController@AboutUs');
Route::get('/contact-us')->name('contact-us')->uses('Frontend\PagesController@ContactUs');
Route::get('/privacy-policy')->name('privacy-policy')->uses('Frontend\PagesController@PrivacyPolicy');
Route::get('/faqs')->name('faqs')->uses('Frontend\PagesController@FAQ');
Route::get('/fees')->name('fees')->uses('Frontend\PagesController@Fees');
Route::get('/career')->name('career')->uses('Frontend\PagesController@Career');
Route::get('/disclaimer')->name('disclaimer')->uses('Frontend\PagesController@Disclaimer');
Route::get('/terms-and-conditions')->name('terms-and-conditions')->uses('Frontend\PagesController@TermsConditions');

Route::get('/logout', 'SystemController@logout')->name('logout');

// Route::redirect('/{any}', '/')->where('any', '.*');
