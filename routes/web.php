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

// route bawaan default laravel
Route::get('/', function () {
	// return view('/layout/app');
	return view(' /pages/overview');

});

// route blog
Route::get('/overview', function () {
	return view('/pages/overview');
});
Route::get('/purchase', function () {
	return view('/pages/Purchase/purchase');
});
Route::get('/product', function () {
	return view('/pages/Product/product');
});
Route::get('/listpurchase', function () {
	return view('/pages/Purchase/purchaselist');
});
// Route::get('/blog/kontak', 'BlogController@kontak');
