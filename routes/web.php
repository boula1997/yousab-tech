<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\MetaController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ImageController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Route::resource('home',HomeController::class);
Route::resource('blogs',BlogController::class);
Route::resource('contact',ContactController::class);
Route::resource('services',ServiceController::class);
Route::resource('sliders',SliderController::class);
Route::resource('pages',PageController::class);
Route::resource('about',AboutController::class);
Route::resource('portfolios',PortfolioController::class);
Route::resource('tests',ImageController::class);
Route::put('/setting','App\Http\Controllers\Admin\SettingController@setting')->name('setting');
Route::get('/setting/edit','App\Http\Controllers\Admin\SettingController@editSetting')->name('edit.setting');

Route::get('/','App\Http\Controllers\SiteController@home')->name('front.home');
Route::get('/blog','App\Http\Controllers\SiteController@blogs')->name('front.blog');
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


require __DIR__.'/auth.php';
