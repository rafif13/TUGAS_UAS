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

Route::get('/', function () {
    return view('index');
});

Route::group(['prefix' => 'product'], function() {
    Route::get('/', 'ProductController@index');
    Route::post('/', 'ProductController@save');
    Route::get('/new', 'ProductController@create');
    Route::get('/{id}', 'ProductController@edit');
    Route::put('/{id}', 'ProductController@update');
    Route::delete('/{id}', 'ProductController@destroy');
});

// Route::group(['prefix' => 'product'], function() {
//     Route::get('/', 'ProductController@index'); 
//     Route::get('/new', 'ProductController@create');
//     Route::get('/', 'ProductController@save');
// });



//  Route::group(['prefix' => 'customer'], function() {
//     Route::get('/', 'CustomerController@index');
//     Route::get('/new', 'CustomerController@create');
//     Route::post('/', 'CustomerController@save');
//     Route::get('/{id}', 'CustomerController@edit');
//     Route::put('/{id}', 'CustomerController@update');
//     Route::delete('/{id}', 'CustomerController@destroy');
// });

Route::group(['prefix' => 'customer'], function() {
    Route::get('/', 'CustomerController@index');
    Route::get('/new', 'CustomerController@create');
    Route::post('/', 'CustomerController@save');
    Route::get('/{id}', 'CustomerController@edit');
    Route::put('/{id}', 'CustomerController@update');
    Route::delete('/{id}', 'CustomerController@destroy'); 
});

Route ::group (['prefix' => 'invoice' ], function() {
Route::get('/', 'InvoiceController@index') ->name('invoice.index');    
Route::get('/new', 'InvoiceController@create') ->name('invoice.create'); 
Route::post('/', 'InvoiceController@save') ->name('invoice.store'); 
Route::get('/{id}', 'InvoiceController@edit') ->name('invoice.edit');
Route::put('/{id}', 'InvoiceController@update') ->name('invoice.update'); 
Route::delete('/{id}', 'InvoiceController@deleteProduct')->name('invoice.delete_product');


});


Route::group(['prefix' => 'meja'], function() {
    Route::get('/', 'MejaController@index');
    Route::get('/new', 'MejaController@create');
    Route::post('/', 'MejaController@save');
    
});







Route ::group (['prefix' => 'invoice' ], function() {
    Route::delete('/{id}/print', 'InvoiceController@generateInvoice')->name('invoice.print');
});




Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
