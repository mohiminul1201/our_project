<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/users', function () {
    return view('auth.login');
});




Route::get('/user', function () {
    return view('website.pages.index');
});
Route::get('/purchase', 'InventoryController@purchase');
Route::get('/sales', 'InventoryController@sales');
Route::get('/inventory', 'InventoryController@inventory'
);
Route::get('/customer','InventoryController@customer');

Route::get('/supplier', 'InventoryController@supplier');


			// store
Route::get('store/purchase','StoreController@purchase' );
Route::get('store/sales', 'StoreController@sales');
Route::get('store/inventory', 'StoreController@inventory');


Route::get('store/customer','StoreController@customer');
Route::post('Customer_add','StoreController@add');


Route::get('store/supplier', 'StoreController@supplier');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
