<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\BlogController;
use App\Http\Controllers\API\ServiceController;
use App\Http\Controllers\API\SettingController;
use App\Http\Controllers\API\PageController;
use App\Http\Controllers\API\CounterController;
use App\Http\Controllers\API\PortfolioController;
use App\Http\Controllers\API\SliderController;
use App\Http\Controllers\API\ContactController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('blogs', 'BlogController@index');
Route::get('blogs/{id}', 'App\Http\Controllers\API\BlogController@show');
Route::get('services', 'ServiceController@index');
Route::get('services/{id}', 'App\Http\Controllers\API\ServiceController@show');
Route::get('sliders', 'SliderController@index');
Route::get('sliders/{id}', 'App\Http\Controllers\API\SliderController@show');
Route::get('counters', 'CounterController@index');
Route::get('counter/{id}', 'App\Http\Controllers\API\CounterController@show');
Route::get('settings', 'SettingController@index');
Route::get('setting/{id}', 'App\Http\Controllers\API\SettingController@show');
Route::get('portfolios', 'PortfolioController@index');
Route::get('portfolio/{id}', 'App\Http\Controllers\API\PortfolioController@show');
Route::get('pages', 'PageController@index');
Route::get('page/{id}', 'App\Http\Controllers\API\PageController@show');
Route::post('store/contact', 'App\Http\Controllers\API\CContactController@store');
