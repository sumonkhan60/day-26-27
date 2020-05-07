<?php

//use Illuminate\Support\Facades\Route;

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

Route::get('/', [
        'uses' => 'NewShopController@index',
        'as'   => '/'
    ]);

Route::get('/category-product', [
        'uses' => 'NewShopController@categoryProduct',
        'as'   => 'category-product'
    ]);

Route::get('/contact-us', [
        'uses' => 'NewShopController@contactUs',
        'as'   => 'contact-us'
]);

Route::get('/login', [
        'uses' => 'NewShopController@login',
        'as'   => 'login'
]);

Route::get('/create-account', [
        'uses' => 'NewShopController@createAccount',
        'as'   => 'create-account'
]);

Route::get('/check-out', [
        'uses' => 'NewShopController@checkOut',
        'as'   => 'check-out'
]);

Route::get('/short-codes', [
        'uses' => 'NewShopController@shortCodes',
        'as'   => 'short-codes'
]);

Route::get('/category-product1', [
        'uses' => 'NewShopController@categoryProduct1',
        'as'   => 'category-product1'
]);

Route::get('/single', [
        'uses' => 'NewShopController@single',
        'as'   => 'single'
]);



