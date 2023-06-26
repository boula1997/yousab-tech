<?php

use App\Http\Controllers\Admin\BlogController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/admin/login',[App\Http\Controllers\Auth\LoginController::class,'showAdminLoginForm'])->name('admin.login-view');
Route::post('/admin/login',[App\Http\Controllers\Auth\LoginController::class,'adminLogin'])->name('admin.login');

Route::get('/admin/register',[App\Http\Controllers\Auth\RegisterController::class,'showAdminRegisterForm'])->name('admin.register-view');
Route::post('/admin/register',[App\Http\Controllers\Auth\RegisterController::class,'createAdmin'])->name('admin.register');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/dashboard',function(){
    return view('dashboard');
})->middleware('auth:admin');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Route::resource('home',HomeController::class);
Route::resource('blogs',BlogController::class)->middleware(['auth']);
// Route::resource('contact',ContactController::class)->middleware(['auth']);
Route::resource('services',ServiceController::class)->middleware(['auth']);
Route::resource('sliders',SliderController::class)->middleware(['auth']);
Route::resource('pages',PageController::class)->middleware(['auth']);
// Route::resource('about',AboutController::class)->middleware(['auth']);
Route::resource('portfolios',PortfolioController::class)->middleware(['auth']);
Route::resource('counters',CounterController::class)->middleware(['auth']);
Route::resource('videos',VideoController::class)->middleware(['auth']);
Route::resource('tests',ImageController::class)->middleware(['auth']);
Route::put('/setting','App\Http\Controllers\Admin\SettingController@setting')->name('setting');
Route::get('/setting/edit','App\Http\Controllers\Admin\SettingController@editSetting')->name('edit.setting');

Route::get('/','App\Http\Controllers\SiteController@home')->name('front.home');
Route::get('/blog-page','App\Http\Controllers\SiteController@blogs')->name('front.blog');
Route::get('/contacts','App\Http\Controllers\SiteController@contact')->name('front.contact');
Route::get('/service','App\Http\Controllers\SiteController@services')->name('front.service');
Route::get('/single-service','App\Http\Controllers\SiteController@single_service')->name('front.show.service');
Route::get('/single-blog','App\Http\Controllers\SiteController@single_blog')->name('front.show.blog');
Route::get('/portfolio','App\Http\Controllers\SiteController@portfolios')->name('front.portfolio');
Route::get('/video','App\Http\Controllers\SiteController@videos')->name('front.video');
Route::get('/about','App\Http\Controllers\SiteController@about')->name('front.about');
Route::post('/contact','App\Http\Controllers\SiteController@contact_post')->name('front.contact.post');


Route::get('routes', function () {
    $routeCollection = Route::getRoutes();
    
    echo "<table style='width:100%'>";
    echo "<tr>";
    echo "<td width='10%'><h4>HTTP Method</h4></td>";
    echo "<td width='10%'><h4>Route</h4></td>";
    echo "<td width='10%'><h4>Name</h4></td>";
    echo "<td width='70%'><h4>Corresponding Action</h4></td>";
    echo "</tr>";       
    foreach ($routeCollection as $value) {
        echo "<tr>";
        echo "<td>" . $value->methods()[0] . "</td>";
        echo "<td>" . $value->uri() . "</td>";
        echo "<td>" . $value->getName() . "</td>";
        echo "<td>" . $value->getActionName() . "</td>";
        echo "</tr>";
    }
    echo "</table>";
});


