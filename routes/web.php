<?php

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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');
Route::post('/InquerySubmit', 'InqueryController@InquerySubmit')->name('InquerySubmit');




Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function () {


    Route::get('dashboard', 'DashboardController@dashboard');
    Route::resource('blogs', 'BlogController');
    Route::resource('portfolio', 'PortfolioController');
    Route::resource('inquery', 'InqueryController');
    Route::resource('faq', 'FaqController');

});
