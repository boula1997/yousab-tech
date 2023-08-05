<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactController;
// use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\Admin\ServiceController;
// use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\MetaController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\CounterController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\Admin\UserController;
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















Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {



        Route::get('/', function () {
            return redirect()->route('admin.login-view');
        });

        Route::put('/setting', 'App\Http\Controllers\Admin\SettingController@setting')->name('setting');
        Route::get('/setting/edit', 'App\Http\Controllers\Admin\SettingController@editSetting')->name('edit.setting');

        // Route::get('/', 'App\Http\Controllers\SiteController@home')->name('front.home');
        Route::get('/blog-page', 'App\Http\Controllers\SiteController@blogs')->name('front.blog');
        Route::get('/contact', 'App\Http\Controllers\SiteController@contact')->name('front.contact');
        Route::get('/service', 'App\Http\Controllers\SiteController@services')->name('front.service');
        Route::get('/single-service', 'App\Http\Controllers\SiteController@single_service')->name('front.show.service');
        Route::get('/single-blog', 'App\Http\Controllers\SiteController@single_blog')->name('front.show.blog');
        Route::get('/portfolio', 'App\Http\Controllers\SiteController@portfolios')->name('front.portfolio');
        Route::get('/video', 'App\Http\Controllers\SiteController@videos')->name('front.video');
        Route::get('/about', 'App\Http\Controllers\SiteController@about')->name('front.about');
        Route::post('/contact', 'App\Http\Controllers\SiteController@contact_post')->name('front.contact.post');

    }
);


