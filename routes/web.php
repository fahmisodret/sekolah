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
Route::get('/', 'FrontController@index')->name('home');

Route::get('admin', 'Admin\AdminController@index');
Route::resource('admin/roles', 'Admin\RolesController');
Route::resource('admin/permissions', 'Admin\PermissionsController');
Route::resource('admin/users', 'Admin\UsersController');
Route::resource('admin/pages', 'Admin\PagesController');
Route::resource('admin/activitylogs', 'Admin\ActivityLogsController')->only([
    'index', 'show', 'destroy'
]);
Route::resource('admin/settings', 'Admin\SettingsController');
Route::get('admin/generator', 'Admin\ProcessController@getGenerator');
Route::post('admin/generator', 'Admin\ProcessController@postGenerator');
Route::get('admin/frontgenerator', 'Admin\ProcessController@FrontGenerator');
Route::post('admin/frontgenerator', 'Admin\ProcessController@postFrontGenerator');

Route::resource('admin/menu', 'Admin\MenuController');
Route::resource('admin/front/menu', 'Admin\FrontMenuController');

Route::get('front/visi-dan-misi', function(){return view('front/pages/visi-dan-misi/index');});
Route::get('front/uncategorized', function(){return view('front/pages/uncategorized/index');});
Route::get('front/alumni', function(){return view('front/pages/alumni/index');});
Route::get('front/guru-dan-tenaga-kependidikan', function(){return view('front/pages/guru-dan-tenaga-kependidikan/index');});
Route::get('front/peserta-didik', function(){return view('front/pages/peserta-didik/index');});
Route::get('front/pendaftaran-alumni', function(){return view('front/pages/pendaftaran-alumni/index');});
Route::get('front/formulir-p-p-d-b', function(){return view('front/pages/formulir-p-p-d-b/index');});
Route::get('front/hasil-seleksi', function(){return view('front/pages/hasil-seleksi/index');});
Route::get('front/cetak-formulir', function(){return view('front/pages/cetak-formulir/index');});
Route::get('front/download-formulir', function(){return view('front/pages/download-formulir/index');});
Route::get('front/hubungi-kami', function(){return view('front/pages/hubungi-kami/index');});
Route::get('front/foto', function(){return view('front/pages/foto/index');});
Route::get('front/video', function(){return view('front/pages/video/index');});
