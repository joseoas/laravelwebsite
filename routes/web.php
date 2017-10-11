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

Route::group(['namespace'=>'Frontend'],function(){
	Route::get('/', function () {
	    return view('frontend.welcome');
	});
});


Route::group(['middleware' => 'auth'], function () {
		  Route::group(['namespace'=>'Backend'],function(){
		  		  	/*
			|--------------------------------------------------------------------------
			| ISAPRE
			|--------------------------------------------------------------------------
			*/
		  	Route::get('/home', 'DashboardController@index')->name('home');
		  	Route::get('/isapres','IsapreController@index')->name('isapres.index');
		  	Route::get('/isapre/create','IsapreController@IsapreCreateGet')->name('isapres.create');
		  	Route::post('/isapre/add','IsapreController@IsapreAddPost')->name('isapres.add');
		  	Route::get('/isapres/edit/{id}','IsapreController@IsapreEditGet')->name('isapres.edit');
		  	Route::Post('/isapres/update/{id}','IsapreController@IsapreUpdatePost')->name('isapres.update');
		  	Route::delete('/isapres/destroy/{id}','IsapreController@IsapreDestroyPost')->name('isapres.destroy');

		  	/*
			|--------------------------------------------------------------------------
			| VENDEDORES
			|--------------------------------------------------------------------------
			*/
			Route::get('/sellers','SellerController@SellerIndex')->name('sellers.index');
			Route::get('/sellers/add','SellerController@SellerAddGet')->name('sellers.add');
			Route::post('/sellers/input','SellerController@SellerAddPost')->name('sellers.input');
			route::get('/sellers/edit/{id}','SellerController@SellerEditGet')->name('sellers.edit');
			route::post('/sellers/update/{id}','SellerController@SellerUpdate')->name('sellers.update');
			Route::delete('/sellers/destroy/{id}','SellerController@SellerDestroy')->name('sellers.destroy');

			/*
			|--------------------------------------------------------------------------
			| VENDEDORES
			|--------------------------------------------------------------------------
			*/

			Route::get('/emails','EmailController@EmailIndex')->name('emails.index');
			Route::post('emails/add','EmailController@EmailAddPost')->name('emails.add');
		});
 });
