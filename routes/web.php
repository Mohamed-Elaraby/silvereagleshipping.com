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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', 'HomeController@index')->name('index');
Route::get('/overView', 'HomeController@overView')->name('overView');
Route::get('/whatWeDo', 'HomeController@whatWeDo')->name('whatWeDo');
Route::get('/contactUs', 'HomeController@contactUs')->name('contactUs');
Route::post('/sendMail', 'HomeController@sendMail')->name('sendMail');
Route::get('sub/provisionAdnBonded', 'HomeController@provisionAdnBonded')->name('sub.provisionAdnBonded');
Route::get('sub/technicalStores', 'HomeController@technicalStores')->name('sub.technicalStores');
Route::get('sub/logisticServices', 'HomeController@logisticServices')->name('sub.logisticServices');
