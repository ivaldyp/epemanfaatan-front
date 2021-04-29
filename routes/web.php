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

Route::get('/', 'LandingController@index');
Route::get('/index2', function () {
    return view('index2');
});
Route::get('/tes2', function () {
    return view('pages.tes');
});





Route::get('/cekkode', 'PublicController@cekkode');
Route::post('/cekkode/tampil', 'PublicController@tampilkode');

Route::get('/peta', 'PublicController@peta');
Route::get('/peta/cari', 'PublicController@petacari');

Route::group(['prefix' => 'data'], function () {
	Route::get('/aset', 'DataController@aset');
	Route::get('/cari', 'DataController@cari');
});

Route::get('/faq', 'OthersController@faq');