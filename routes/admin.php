<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\MessageController;
// use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\NewsletterController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\ProcessController;
// use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ComplainController;
use App\Http\Controllers\MetaController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\CounterController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\Admin\TaskController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VaccancyController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteProductProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
        'name' => 'admin'
    ],
    function () {

        Route::group(['prefix' => 'dashboard'], function () {
            Auth::routes();
            // cancel login and register for front temporarly
            Route::get('/login', function () {
                return redirect()->route('admin.login-view');
            });

            Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showAdminLoginForm'])->name('admin.login-view');
            Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'adminLogin'])->name('admin.login')->middleware('guest:admin');
            Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showAdminRegisterForm'])->name('admin.register-view');
            Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'createAdmin'])->name('admin.register');
            Route::group(['middleware' => ['auth:admin']], function () {

                Route::get('/', function () {
                    return view('dashboard');
                })->name('dashboard');

            Route::resource('roles', RoleController::class);
            // Route::resource('home',HomeController::class);
            Route::resource('faqs', FaqController::class);
            // Route::resource('message',MessageController::class);
            Route::resource('services', ServiceController::class);
            // Route::resource('newsletter',NewsletterController::class);
            Route::resource('testimonials', TestimonialController::class);
            Route::resource('categories', CategoryController::class);
            Route::resource('processes', ProcessController::class);
            Route::resource('partners', PartnerController::class);
            Route::resource('teams', TeamController::class);
            Route::resource('products', ProductController::class);
            Route::resource('pages', PageController::class);
            Route::resource('partners', PartnerController::class);
            // Route::resource('about',AboutController::class);
            Route::resource('portfolios', PortfolioController::class);
            Route::resource('counters', CounterController::class);
            Route::resource('contacts', ContactController::class);
            Route::resource('videos', VideoController::class);
            Route::resource('tests', ImageController::class);
            Route::resource('roles', RoleController::class);
            Route::resource('users', UserController::class);
            Route::resource('projects', ProjectController::class);
            Route::resource('tasks', TaskController::class);
            Route::resource('admins', AdminController::class);
            Route::resource('messages', MessageController::class);
            Route::resource('complains', ComplainController::class);
            Route::resource('vaccancies',VaccancyController::class);


            Route::get('/reply-message/{id}', [App\Http\Controllers\Admin\MessageController::class, 'reply'])->name('messages.reply');
            Route::get('/finished/tasks', [App\Http\Controllers\Admin\TaskController::class, 'index'])->name('tasks.finished');
            Route::post('/reply-email/{id}/reply', [App\Http\Controllers\Admin\MessageController::class, 'emailReply'])->name('messages.emailReply');
            Route::post('/tasks/changEmployees', [App\Http\Controllers\Admin\TaskController::class, 'taskChangeEmployee'])->name('tasks.changeEmployee');

            Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
            Route::resource('newsletters', NewsletterController::class);

            Route::get('/reply-newsletter', [App\Http\Controllers\Admin\NewsletterController::class, 'reply'])->name('newsletters.reply');
            Route::post('/reply-email/reply', [App\Http\Controllers\Admin\NewsletterController::class, 'emailReply'])->name('newsletters.emailReply');
            Route::get('/admin/dashboard', function () {
                return view('dashboard');
            });

            Route::put('/setting', 'App\Http\Controllers\Admin\SettingController@setting')->name('setting');
            Route::get('/setting/edit', 'App\Http\Controllers\Admin\SettingController@editSetting')->name('edit.setting');

            Route::put('/profile', [App\Http\Controllers\Admin\ProfileController::class, 'update'])->name('update.profile');
            Route::get('/profile', [App\Http\Controllers\Admin\ProfileController::class, 'edit'])->name('edit.profile');
        });
    });
}
);
