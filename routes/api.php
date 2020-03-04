<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::group(['prefix'=>'v1','namespace'=>'Api'],function(){
    Route::group(['prefix'=>'Genral','namespace'=>'Genral'],function(){
        Route::get('cities','GenralController@city');
        Route::post('icities','GenralController@icity');
        Route::post('check_data','GenralController@check_data');
        Route::get('blood','GenralController@blood_type');
        Route::post('iblood','GenralController@iblood_type');
        Route::get('admicar','GenralController@admin_car');
        Route::get('carmodal','GenralController@car_modal');
        Route::get('destinion','GenralController@destinion');
        Route::get('destinion_school','GenralController@destinion_school');

    });
    Route::group(['prefix'=>'client','namespace'=>'Client'],function(){
        Route::post('register','AuthController@register');
        Route::post('login','AuthController@login');
        Route::post('code','AuthController@code_mobile');
        Route::post('check_token','AuthController@check_token');

     Route::group(['middleware' => 'auth:client' ], function () {
        Route::post('client_profile','MainController@client_profile');
        Route::post('drive_profile','MainController@drive_profile');
        Route::post('kid_profile','MainController@kid_profile');
        Route::post('car_profile','MainController@car_profile');
        Route::post('statue_driver','MainController@driver_statues');
        Route::post('count_payments','MainController@count_payments');
        Route::post('search','MainController@search');
        Route::post('payments','MainController@payments');


        });
    });


});
