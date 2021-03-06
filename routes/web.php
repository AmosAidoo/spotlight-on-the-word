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

Route::get('/', 'PagesController@homepage');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::get('/resources/{category}', 'ArticlesController@postsByCategory');
Route::get('/resources/{category}/{id}', 'ArticlesController@showPost');
Route::get('contact-us', 'ContactUsController@contactUs');
Route::post('contact-us',[
'as'=>'contactus.store',
'uses'=>'ContactUsController@contactUsPost'
]);



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
