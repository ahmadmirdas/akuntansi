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

Route::get('/', "General\DashboardController@index")->name('~/');

Route::group(['prefix' => "transaksi"], function() {
	Route::get('/', [
		'uses' 	=> "General\TransactionController@index",
		'as'	=> "transaction"
	]);
	Route::get('/tambah-data', [
		'uses' 	=> "General\TransactionController@create",
		'as'	=> "transaction.add"
	]);
	Route::get('/simpan-data', [
		'uses' 	=> "General\TransactionController@store",
		'as'	=> "transaction.store"
	]);
});