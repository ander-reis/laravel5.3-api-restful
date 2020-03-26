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
Route::group(['middleware' => ['cors', 'auth:api']], function (){
    Route::get('/user', function (Request $request) {
        return $request->user();
    })->middleware('auth:api');
    //localhost:8000/api/banks
    Route::resource('/banks', 'Api\BanksController');
    Route::resource('/accounts', 'Api\AccountsController');
});

//Route::resource('/banks', 'Api\BanksController');
//Route::resource('/accounts', 'Api\AccountsController');
