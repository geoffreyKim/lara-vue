<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;

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

Route::get('{any}', function () {
    return view('welcome');
})->where('any', '.*');

//Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('country-state-city','CountryStateCityController@index');

// Route::post('get-states-by-country','CountryStateCityController@getState');

// Route::post('get-cities-by-state','CountryStateCityController@getCity');
// Route::get('get_countries', [CountryStateController::class, 'getCountries','getCounty',,'getConstituency','getWard']);
// Route::post('get_states', [CountryStateController::class, 'getStates']);

