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






Route::get('/e_admin_l/login','AdminController@login')->name('login');      //后台登录页

Route::get('/admin/logout','AdminController@logout');       //后台登出

Route::post('/admin/doLogin','AdminController@doLogin');        //后台登录

Route::get('/admin/index','AdminController@index');       //后台首页
