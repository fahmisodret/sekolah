<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('logout', 'Auth\LoginController@logout');
Auth::routes();
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});
// Route::get('/home', 'HomeController@index')->name('dashboard');

Route::group(['middleware' => ['auth', 'admin', 'operator']], function () {
});

Route::group(['middleware' => ['auth', 'admin']], function () {
	Route::group(['prefix' => 'admin', 'as' => 'admin'], function () {
		Route::get('/', 'AdminController@index')->name('');
		Route::group(['prefix' => 'config', 'as' => '.config'], function () {
			Route::get('/', 'ConfigController@index')->name('.index');
			Route::get('/edit/{id}', 'ConfigController@edit')->name('.edit');
			Route::post('/update/{id}', 'ConfigController@update')->name('.update');
		});
		Route::group(['prefix' => 'user', 'as' => '.user'], function () {
			Route::get('/', 'UserController@index')->name('.index');
			Route::get('/verif/{id}', 'UserController@verif')->name('.verif');
			Route::get('/edit/{id}', 'UserController@edit')->name('.edit');
			Route::post('/update/{id}', 'UserController@update')->name('.update');
			Route::get('/destroy/{id}', 'UserController@destroy')->name('.destroy');
		});
		Route::group(['prefix' => 'produk', 'as' => '.produk'], function () {
			Route::get('/', 'ProdukController@index')->name('.index');
			Route::get('/create', 'ProdukController@create')->name('.create');
			Route::post('/store', 'ProdukController@store')->name('.store');
			Route::get('/edit/{id}', 'ProdukController@edit')->name('.edit');
			Route::post('/update/{id}', 'ProdukController@update')->name('.update');
			Route::get('/destroy/{id}', 'ProdukController@destroy')->name('.destroy');
		});
		Route::group(['prefix' => 'order', 'as' => '.order'], function () {
			Route::get('/', 'OrderController@index')->name('.index');
			Route::get('/edit/{id}', 'OrderController@edit')->name('.edit');
			Route::post('/update/{id}', 'OrderController@update')->name('.update');
			Route::get('/destroy/{id}', 'OrderController@destroy')->name('.destroy');
		});
	});
});

Route::get('/', 'FrontController@index')->name('home');
Route::get('/order/{code}', 'FrontController@order')->name('order');
Route::post('/order/done/{code}', 'FrontController@done')->name('done');
