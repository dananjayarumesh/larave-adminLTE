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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();
// Route::get('/register', function () {
//     return redirect()->route('login');
// });
Route::get('/home', function () {
    return redirect()->route('dashboard');
});

Route::get('/', 'HomeController@index')->name('dashboard');
Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::group(['prefix' => 'dashboard'], function() {

	Route::get('/profile','ProfileController@index')->name('user.profile');
	Route::get('/profile/edit','ProfileController@edit')->name('user.profile.edit');
	Route::patch('/profile/edit','ProfileController@update')->name('user.profile.update');
	
	Route::get('/profile/psw/change','ProfileController@change_psw')->name('user.profile.password.change');
	Route::patch('/profile/psw/change','ProfileController@update_psw')->name('user.profile..update');

	Route::get('/profile/_ajax/image','ProfileController@profile_image')->name('user.profile.image');
	Route::post('/profile/_ajax/image','ProfileController@profile_image')->name('user.profile.image.upload');

	Route::get('/staff/_ajax', 'UserController@_ajaxData')->name('staff._ajax');
	Route::get('/staff/{id}/delete','UserController@destroy')->name('staff.delete');
	Route::resource('/staff', 'UserController');

});