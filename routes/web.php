<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'IndexController@index')->name('index');

Route::get('/razrabotka-sajtov', function () {
    return view('razrabotka-sajtov');
});


Route::get('/news', 'NewsController@index')->name('news');

Route::get('/news/{slug}', 'NewsController@news')->name('news');


Route::get('/shares', 'StockController@index')->name('stock');
Route::get('/shares/{slug}', 'SharesController@share')->name('shares');




Route::get('/sendemail', 'SendEmailController@index');

Route::post('/sendemail/send', 'SendEmailController@send');



Route::get('/izdeliya-iz-metalla/{slug}', 'MetallController@metall')->name('metall');


Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware' => ['auth']], function (){
    Route::get('/', 'DashboardController@dashboard')->name('admin.dashboard');
    Route::resource('/stock', 'StockController', ['as'=>'admin']);
    Route::resource('/event', 'EventController', ['as'=>'admin']);
    Route::resource('/work', 'WorkController', ['as'=>'admin']);

    Route::get('/store', 'StoreController@store')->name('admin.store');
    Route::resource('/category', 'CategoryController', ['as'=>'admin']);
    Route::resource('/product', 'ProductController', ['as'=>'admin']);
});



//Route::get('/works', 'WorksController@index')->name('works');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
