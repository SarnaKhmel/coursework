<?php

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'UserController@showAllInfo');



// Admin store
Route::get('/admin', 'AdminController@showAdminMenu');
Route::get('/adminAdvertisementCustomer', 'AdminController@showAdminAdvertisementCustomer');
Route::get('/adminAdvertisementShop', 'AdminController@showAdminAdvertisementShop');
Route::get('/adminQuestion', 'AdminController@adminQuestion');
Route::get('/adminUsers', 'AdminController@adminUsers');
Route::get('/adminCreate', 'AdminController@adminCreate');

// User store
Route::get('/user', 'UserController@showUser');
Route::get('/create', 'UserController@showCreate');
Route::any('/createNewUserProduct', ['as' => 'product-save', 'uses' => 'UserController@createNewUserProduct']);
Route::get('/userAdv', 'UserController@showUserAdv');
Route::any('/deleteUserAdv/{id}', ['as' => 'delete-prod', 'uses' => 'UserController@removeUserAdv']);
//Route::get('/edit', 'UserController@edit');
Route::any('/edit/{id}', ['as'=> 'edit-prod', 'uses' => 'UserController@editUserAdv']);
Route::any('/updateUserProduct', ['as' => 'product-update', 'uses' => 'UserController@updateUserAdv']);

// Other store

Route::get('/404','OtherController@show404');
Route::get('/about', 'OtherController@showAbout');
Route::get('/question','OtherController@showAbout');


Route::get('/test', function(){
    return view ('test');
});