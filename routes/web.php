<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SettingController;
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

Route::resource('services', ServiceController::class);
Route::resource('blogs', BlogController::class);
Route::resource('settings', SettingController::class);
Route::resource('home', HomeController::class);
Route::resource('portfolio', GalleryController::class);
Route::resource('contact', ContactController::class);
Route::resource('about', AboutController::class);


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

// Route::get('/',[HomeController::class, 'index'])->name('home');
// Route::get('/about',[AboutController::class, 'index'])->name('about');
// Route::get('/services',[ServiceController::class, 'index'])->name('service');
// Route::get('/service/{id}',[ServiceController::class, 'show'])->name('service-details');
// Route::get('/portfolios',[GalleryController::class, 'index'])->name('portfolio');
// Route::get('/contact',[ContactController::class, 'index'])->name('contact');
// Route::post('/contact_form',[ContactController::class, 'contact_post'])->name('direct_contact_post');