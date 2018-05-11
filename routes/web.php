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
//Resgistered user's console

//***Auth::routes();
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
//***
Route::get('/', function () {
    return view('welcome');
})->name('main.page');


Route::get('/alldishes', 'HomeController@index')->name('alldishes');
Route::put ('/dishes/update/{dish}', 'DishController@update')->name('dish.update');
Route::get('/alldishes', 'DishController@index')->name('alldishes.page');
Route::get('/dishes/{dish}','DishController@show')->name('singledish.page');

Route::post('/','ReservationController@store')->name('reservation.page');


//Admin console

Route::group(['middleware'=>'auth','prefix'=>'admin'],function() {
    Route::get('/', 'AdminController@index');
    Route::get('/dishes', 'DishController@admin')->name('admin.dishes');
    Route::get('/dishes/create','DishController@create')->name('createdish.page');
    Route::get('/dishes/{dish}/edit', 'DishController@edit')->name('dish.edit');
    Route::delete('/dishes/{dish}','DishController@delete')->name('dish.delete');
    Route::put ('/dishes/update/{dish}', 'DishController@update')->name('dish.update');
    Route::post('/dishes','DishController@store')->name('dishes.store');

    Route::get('/mains', 'MainController@index')->name('admin.mains');
    Route::get('/mains/create', 'MainController@create')->name('createmain.page');
    Route::post('/mains','MainController@store')->name('mains.store');
    Route::get('/mains/{main}/edit', 'MainController@edit')->name('mains.edit');
    Route::put ('/mains/update/{main}', 'MainController@update')->name('main.update');
    Route::delete('/mains/{main}','MainController@delete')->name('mains.delete');
    Route::get('/reservations','ReservationController@index')->name('clientsreservation.page');
    Route::delete('/reservations/{reservation}','ReservationController@delete')->name('reservations.delete');
    Route::get('/reservations/{reservation}/edit', 'ReservationController@edit')->name('reservations.edit');
    Route::put ('/reservations/update/{reservation}', 'ReservationController@update')->name('reservation.update');


});
