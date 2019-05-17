<?php
Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']], function(){
	Route::get('dashboard','DashboardController@index')->name('dashboard');
	Route::resource('package', 'PackageController');
	Route::resource('category', 'CategoryController');
	Route::resource('verifier', 'VerifierController');
	Route::resource('verifiedlisting', 'VerifiedListingController');
	Route::resource('order', 'OrderController');
	Route::resource('invoice', 'InvoiceController');
});

Route::group(['as'=>'verifier.','prefix'=>'verifier','namespace'=>'Verifier','middleware'=>['auth','verifier']], function(){
	Route::get('dashboard','DashboardController@index')->name('dashboard');
	Route::resource('category', 'CategoryController');
	Route::resource('verifylisting', 'VerifyListingController');
});

Route::resource('/listing', 'ListingController');
Route::resource('/latest', 'LatestController');