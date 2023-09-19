<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\MessageController;
// use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\ProcessController;
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

        Route::get('/admin', function () {
            return redirect()->route('admin.login-view');
        });


        Auth::routes();

        Route::get('/admin/login', [App\Http\Controllers\Auth\LoginController::class, 'showAdminLoginForm'])->name('admin.login-view');
        Route::post('/admin/login', [App\Http\Controllers\Auth\LoginController::class, 'adminLogin'])->name('admin.login');

        Route::get('/admin/register', [App\Http\Controllers\Auth\RegisterController::class, 'showAdminRegisterForm'])->name('admin.register-view');
        Route::post('/admin/register', [App\Http\Controllers\Auth\RegisterController::class, 'createAdmin'])->name('admin.register');



        Route::group(['middleware' => ['auth:admin']], function () {

            Route::get('/dashboard', function () {
                return view('dashboard');
            })->name('dashboard');
        
            Route::resource('roles', RoleController::class);
            // Route::resource('home',HomeController::class);
            Route::resource('faqs', FaqController::class);
            // Route::resource('message',MessageController::class);
            Route::resource('services', ServiceController::class);
            Route::resource('testimonials', TestimonialController::class);
            Route::resource('processes', ProcessController::class);
            Route::resource('sliders', SliderController::class);
            Route::resource('pages', PageController::class);
            // Route::resource('about',AboutController::class);
            Route::resource('portfolios', PortfolioController::class);
            Route::resource('counters', CounterController::class);
            Route::resource('videos', VideoController::class);
            Route::resource('tests', ImageController::class);
        
            Route::resource('roles', RoleController::class);
            Route::resource('users', UserController::class);
            Route::resource('admins', AdminController::class);
            Route::resource('products', ProductController::class);
            Route::resource('messages', MessageController::class);
        
        
            Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
            Route::get('/admin/dashboard', function () {
                return view('dashboard');
            });

            Route::put('/setting', 'App\Http\Controllers\Admin\SettingController@setting')->name('setting');
            Route::get('/setting/edit', 'App\Http\Controllers\Admin\SettingController@editSetting')->name('edit.setting');
        
            Route::put('/profile', [App\Http\Controllers\Admin\ProfileController::class, 'update'])->name('update.profile');
            Route::get('/profile', [App\Http\Controllers\Admin\ProfileController::class, 'edit'])->name('edit.profile');
        });
    }
);


