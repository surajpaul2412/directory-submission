<?php
// Route::get('/', function () {
//     return view('landing.home');
// });

Route::get('/', 'LandingController@index');

Route::get('/home', 'LandingController@index')->name('home');

Auth::routes();


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
	Route::resource('verifiedlisting', 'VerifiedListingController');
});


Route::resource('/listing', 'ListingController');
Route::resource('/latest', 'LatestController');
Route::resource('/homecategory', 'HomeCategoryController');