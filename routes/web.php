<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;




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















Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {



        // Route::get('/', function () {
        //     return redirect()->route('admin.login-view');
        // });


        Route::get('/', [HomeController::class, 'index'])->name('front.home');
        Route::get('/faq-page', 'App/Http/Controllers/FaqController@index')->name('front.faq');
        // Route::get('/contact', 'App/Http/Controllers/ContactController@index')->name('front.contact');
        Route::get('/contact', [ContactController::class,'index'])->name('front.contact');
        // Route::get('/service', 'App/Http/Controllers/ServiceController@index')->name('front.service');
        Route::get('/service', [ServiceController::class,'index'])->name('front.service');
        // Route::get('/single-service', 'App/Http/Controllers/ServiceController@show')->name('front.show.service');
        Route::get('/single-service', [ServiceController::class,'show'])->name('front.show.service');
        Route::get('/testimonial', 'App/Http/Controllers/TestimonialController@index')->name('front.testimonial');
        Route::get('/single-testimonial', 'App/Http/Controllers/TestimonialController@show')->name('front.show.testimonial');
        Route::get('/process', 'App/Http/Controllers/ProcessController@index')->name('front.process');
        Route::get('/single-process', 'App/Http/Controllers/ProcessController@show')->name('front.show.process');
        Route::get('/single-faq', 'App/Http/Controllers/FaqController@show')->name('front.show.faq');
        Route::get('/portfolio', 'App/Http/Controllers/PortfolioController@index')->name('front.portfolio');
        Route::get('/video', 'App/Http/Controllers/VideoController@index')->name('front.video');
        // Route::get('/about', 'App/Http/Controllers/AboutController@index')->name('front.about');
        Route::get('/about', [AboutController::class,'index'])->name('front.about');
        // Route::post('/contact', 'App/Http/Controllers/ContactController@store')->name('front.contact.post');
        Route::post('/contact', [ContactController::class,'store'])->name('front.contact.post');

    }
);


