<?php

use App\Http\Livewire\Frontend\Home\HomePage;
use App\Http\Livewire\Frontend\Pages\AboutUs;
use App\Http\Livewire\Frontend\Pages\Career;
use App\Http\Livewire\Frontend\Pages\ContactUs;
use App\Http\Livewire\Frontend\Pages\Disclaimer;
use App\Http\Livewire\Frontend\Pages\Faq;
use App\Http\Livewire\Frontend\Pages\Fees;
use App\Http\Livewire\Frontend\Pages\PrivacyPolicy;
use App\Http\Livewire\Frontend\Pages\TermsAndConditions;
use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return view('welcome');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/', HomePage::class)->name('home');
Route::get('/about-us', AboutUs::class)->name('about-us');
Route::get('/contact-us', ContactUs::class)->name('contact-us');
Route::get('/privacy-policy', PrivacyPolicy::class)->name('privacy-policy');
Route::get('/faqs', Faq::class)->name('faqs');
Route::get('/fees', Fees::class)->name('fees');
Route::get('/career', Career::class)->name('career');
Route::get('/disclaimer', Disclaimer::class)->name('disclaimer');
Route::get('/terms-and-conditions', TermsAndConditions::class)->name('terms-and-conditions');

Route::get('/logout', 'App\Http\Controllers\SystemController@logout')->name('logout');

Route::redirect('/{any}', '/')->where('any', '.*');