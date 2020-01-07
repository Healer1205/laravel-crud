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
    return view('auth/login');
});

Route::get('/logout', function () {
	$cookie = \Cookie::forget('myCookie');
	return view('auth/login')->withCookie($cookie);
});

Route::get('/register', function() {
	Artisan::call('cache:clear');
	return view('auth/register');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/select', 'HomeController@select');

Route::get('/result', 'HomeController@result');

Route::get('/profile', 'UserController@profile');
Route::post('/update_profile', 'UserController@updateprofile');

// Route::get('/addpart', 'PartController@index');
Route::resource('/part', 'PartController');
Route::get('/selectbrand', 'HomeController@selectbrand');

Route::get('/mypartlist', 'MypartlistController@index');

Route::get('/mysales', 'MysaleController@index');

Route::get('/settings', 'SettingController@index');

Route::post('/sales', 'MysaleController@sales');

Route::post('/message', 'MessageController@save_msg');

Route::get('/mail', 'MailController@index');
Route::get('/newmail', 'NewmailController@index');