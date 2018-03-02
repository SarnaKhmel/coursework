<?php

Route::get('/changeLang/{lang}', ['as' => 'change-lang', 'uses' => 'SiteSettingsController@changeLang']);

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ],
    function()
    {

        Auth::routes();
        Route::get('/', function () {
            return view('welcome');
        });

        // User store
        Route::get('/user', 'UserController@showUser')->name('user');
        Route::post('/updateUserInfo', ['as' => 'user-update', 'uses' => 'UserController@updateUserInfo']);

//Massages & mail
        Route::post('/send', ['as' => 'send-message', 'uses'=>"MailController@sendMessageAdv"]);

//Product store
        Route::get('/userAdv', 'ProductController@showUserAdv')->name('userAdv');
        Route::any('/deleteUserAdv/{id}', ['as' => 'delete-prod', 'uses' => 'ProductController@removeUserAdv']);
        Route::get('/edit/{id}', ['as'=> 'edit-prod', 'uses' => 'ProductController@editUserAdv']);
        Route::post('/updateUserProduct', ['as' => 'product-update', 'uses' => 'ProductController@updateUserAdv']);

        Route::any('/createNewUserProduct', ['as' => 'product-save', 'uses' => 'ProductController@createNewUserProduct']);
        Route::get('/create', 'ProductController@showCreate')->name('create');

        Route::get('/home', 'ProductController@showAllInfo')->name('home');
        Route::get('/revise/{id}', ['as'=>'revise-prod', 'uses'=>'ProductController@reviseAvd']);
//Route::get('/adv', 'ProductController@showAdv')->name('adv');
        Route::get('/edit/{id}', ['as'=> 'edit-prod', 'uses' => 'ProductController@editUserAdv']);

        Route::get('/upload', 'UploadController@uploadForm');
        Route::post('/upload', 'UploadController@uploadSubmit');

//Question
        Route::get('/question','OtherController@showQuestion')->name('faq');
        Route::post('/back-write',[ 'as' =>'back-write', 'uses'=>'OtherController@BackWrite']);

// Other store
        Route::get('/404','OtherController@show404');
        Route::get('/about', 'OtherController@showAbout')->name('about');

        Route::get('/howtosell','OtherController@showHowSell')->name('sell');
        Route::get('/howtobay','OtherController@showHowBay')->name('bay');


//Telegram
        Route::get('/TelegramHome', 'TelegramController@getHome');
        Route::get('get-updates',   'TelegramController@getUpdates');
        Route::get('send',  'TelegramController@getSendMessage');
        Route::post('send', 'TelegramController@postSendMessage');

// Admin store
        Route::get('/admin', 'AdminController@showAdminMenu')->name('adminMenu');
        Route::get('/adminAdvertisementCustomer', 'AdminController@showAdminAdvertisementCustomer')->name('adminUserAdv');
        Route::get('/adminAdvertisementShop', 'AdminController@showAdminAdvertisementShop')->name('adminShopAdv');
        Route::get('/adminQuestion', 'AdminController@showAdminQuestion')->name('adminQuestions');
        Route::get('/adminUsers', 'AdminController@adminUsers')->name('adminUsers');
        Route::get('/adminCreate', 'AdminController@showAdminCreate')->name('adminCreate');

});


