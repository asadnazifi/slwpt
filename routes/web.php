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

Route::get('/', 'Frontend\Homecontroller@index')->name('home');
Route::get('/admin', 'Admin\UsersController@login')->name('login');
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){
    //admin login


    //nav_meno
    Route::get('/navs','NavsController@index')->name('admin.navs.list');
    Route::get('/navs/create','NavsController@created')->name('admin.navs.created');
    Route::post('/navs/create','NavsController@store')->name('admin.navs.created');
    Route::get('/navs/plus','NavsController@apind')->name('admin.navs.plus');
    Route::get('/navs/apend/{id_nav}','NavsController@plus')->name('admin.navs.apend');
    Route::post('/navs/apend/{id_nav}','NavsController@apends')->name('admin.navs.apend');

    Route::get('/navs/delete/{nav_id}','NavsController@delete')->name('admin.navs.delete');
    Route::get('/navs/edit/{nav_id}','NavsController@edit')->name('admin.navs.edit');
    Route::post('/navs/edit/{nav_id}','NavsController@update')->name('admin.navs.update');



    //user route
    Route::get('/users','UsersController@index')->name('admin.users.list');
    Route::get('/users/create','UsersController@create')->name('admin.users.create');
    Route::post('/users/create','UsersController@store')->name('admin.users.create');
    Route::get('/users/delete/{user_id}','UsersController@delete')->name('admin.users.delete');
    Route::get('/users/edit/{user_id}','UsersController@edit')->name('admin.users.edit');
    Route::post('/users/edit/{user_id}','UsersController@update')->name('admin.users.update');



    //files route
    Route::get('/files','FilesController@index')->name('admin.files.list');
    Route::get('/files/create','FilesController@create')->name('admin.files.create');
    Route::post('/files/create','FilesController@store')->name('admin.files.store');
    Route::get('/files/create/{file_id}','FilesController@delete')->name('admin.files.delete');
    Route::get('/files/edit/{file_id}','FilesController@edit')->name('admin.files.edit');
    Route::post('/files/edit/{file_id}','FilesController@update')->name('admin.files.update');



     //plans route
     Route::get('/plans','PlansController@index')->name('admin.plans.list');
     Route::get('/plans/create','PlansController@create')->name('admin.plans.create');
     Route::post('/plans/create','PlansController@store')->name('admin.plans.store');
     Route::get('/plans/create/{plan_id}','PlansController@delete')->name('admin.plans.delete');
     Route::get('/plans/edit/{plan_id}','PlansController@edit')->name('admin.plans.edit');
     Route::post('/plans/edit/{plan_id}','PlansController@update')->name('admin.plans.update');



     //packages route
     Route::get('/packages','PackagesController@index')->name('admin.packages.list');
     Route::get('/packages/create','PackagesController@create')->name('admin.packages.create');
     Route::get('/packages/file/{package_id}','PackagesController@file')->name('admin.packages.file');
     Route::post('/packages/file/{package_id}','PackagesController@synfile')->name('admin.packages.file');
     Route::post('/packages/create','PackagesController@store')->name('admin.packages.store');
     Route::get('/packages/create/{package_id}','PackagesController@delete')->name('admin.packages.delete');
     Route::get('/packages/edit/{package_id}','PackagesController@edit')->name('admin.packages.edit');
     Route::post('/packages/edit/{package_id}','PackagesController@update')->name('admin.packages.update');

     //payment route
     Route::get('/payments','PaymentsController@index')->name('admin.payments.list');
     Route::get('/payments/create/{payment_id}','PaymentsController@delete')->name('admin.payments.delete');

});
