<?php

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');



// Admin store
Route::get('/admin', 'AdminController@showAdminMenu');
Route::get('/adminAdvertisementCustomer', 'AdminController@showAdminAdvertisementCustomer');
Route::get('/adminAdvertisementShop', 'AdminController@showAdminAdvertisementShop');
Route::get('/adminQuestion', 'AdminController@adminQuestion');
Route::get('/adminUsers', 'AdminController@adminUsers');
Route::get('/adminCreate', 'AdminController@adminCreate');

// User store
Route::get('/user', 'UserController@showUser');
//Route::any('/returnUserInfo/{id}',['as'=>'return-info', 'uses'=>'userController@returnUserInformation']);

Route::get('/create', 'UserController@showCreate');


// Other store

Route::get('/404','OtherController@show404');
Route::get('/about', 'OtherController@showAbout');
Route::get('/question','OtherController@showAbout');


Route::get('/test', function(){
    return view ('test');
});