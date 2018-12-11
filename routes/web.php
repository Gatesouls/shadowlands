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

Auth::routes();

//Main

Route::get('/', 'HomeController@index')->name('home');

Route::get('/about', 'PagesController@getAboutPage');

Route::get('/admin', 'PagesController@getAdminPage');

//Admin Tools

Route::get('admin/create-category', 'PagesController@getCreateCategoryPage');

Route::get('admin/edit-category', 'AdminToolsController@editCategory');

Route::get('admin/delete-category', 'PagesController@getDeleteCategoryPage');


Route::post('admin/create-category/create', 'AdminToolsController@createCategory');
