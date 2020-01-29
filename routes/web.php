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

Route::group(['middleware'=>'auth'],function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('cities','CitiesController');
    Route::resource('cars','CarController');
    Route::resource('modal','ModalCarController');
    Route::resource('des','DestinionController');
    Route::resource('driver','DriverController');
    
    Route::get('active/{id}' , 'DriverController@active');
    Route::get('disactive/{id}' , 'DriverController@disactive');

    Route::get('change-password', 'ChangePasswordController@index');
    Route::post('change-password', 'ChangePasswordController@store')->name('change.password');

});