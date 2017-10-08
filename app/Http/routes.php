<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::any('/wechat', 'WechatController@serve');

Route::group(['middleware' => 'wechat.oauth'], function () {
    Route::any('/','indexController@index');      //投票
    Route::any('/index','indexController@index');      //投票
});

Route::post('/vote','indexController@voteCompany');//投票的api
//
Route::get('/getVoteCount', 'indexController@getAllCompanyCount');
//
Route::get('/getAllCount', 'indexController@getAllVoteCount');

