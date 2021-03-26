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


Route::get('/','HomeController@index');
// Route::get('abc','TestController@index');
Route::get('gioithieu','GioiThieuController@index');

Route::get('lienhe','LienHeController@index');

Route::get('tintuc','TinTucController@index');
Route::get('tintuc/{slug}','TinTucController@getidnews');

Route::get('thuctapsinh','ThucTapSinhController@index');
Route::get('thuctapsinh/{slug}','ThucTapSinhController@getidnews');

Route::get('kysu','KySuController@index');
Route::get('kysu/{slug}','KySuController@getidnews');
Route::get('dieuduong','DieuDuongController@index');
Route::get('dieuduong/{slug}','DieuDuongController@getidnews');
Route::get('dacdinh','DacDinhController@index');
Route::get('dacdinh/{slug}','DacDinhController@getidnews');

Route::get('hoidap','HoiDapController@index');

Route::get('donhang/{id}','DonhangdetailController@getiddonhang');
Route::get('vieclam','ViecLamController@index');
Route::get('vieclam/fetch_data', 'ViecLamController@fetch_data');

Route::get('/students', 'StudentController@index');

// Route::get('/students/{id}', 'StudentController@show');

Route::get('/search/name', 'StudentController@searchByName');


// Route::get('/{id}', 'HomeController@show');

Route::get('/search/name', 'HomeController@searchByName');

//lienhe
Route::group(['prefix' => 'lienhe'], function() {
    Route::get('','LienHeController@index');
    Route::post('store','LienHeController@store');
});
//tuvan
Route::post('/store', 'HomeController@store');

//upload
Route::post('/uploadh', 'DonhangdetailController@uploadh');

//giayphep
Route::get('giayphep','GiayPhepController@index');
//hinhanh
Route::get('hinhanh','HinhAnhController@index');
Route::get('hinhanh/{id}','HinhAnhController@getidhinhanh');

//language
Route::get('getlocale/{id}', 'HomeController@getLocale');

Route::get('/sodotochuc','SoDoToChucController@index');
Route::get('/gioithieucongty','GioiThieuCongTyController@index');
//magazine
// Route::get('magazine/{id}', 'HomeController@magazine');
