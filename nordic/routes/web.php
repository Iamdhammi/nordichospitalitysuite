<?php
use App\Http\Controllers\MainController;

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

Route::match(['get', 'post'] , '/', 'MainController@home');
Route::get('/about', 'MainController@about');
Route::get('/gallery', 'MainController@gallery');
Route::match(['get', 'post'],'/contact', 'MainController@contact');
Route::get('/rooms', 'MainController@Rooms');
Route::get('/rooms/deluxe', 'MainController@deluxe');
Route::get('/rooms/deluxebalcony', 'MainController@deluxeBalcony');
Route::get('/rooms/nordicsuite', 'MainController@nordicSuite');
Route::get('/rooms/nordicsuitebalcony', 'MainController@nordicSuiteBalcony');
Route::get('/rooms/standard', 'MainController@standard');
Route::get('/terms', 'MainController@terms');
Route::match(['get', 'post'], '/dreservation', 'MainController@dreservation');
Route::match(['get', 'post'], '/dbreservation', 'MainController@dbreservation');
Route::match(['get', 'post'], '/nsreservation', 'MainController@nsreservation');
Route::match(['get', 'post'], '/nsbreservation', 'MainController@nsbreservation');
Route::match(['get', 'post'], '/sreservation', 'MainController@sreservation');
Route::match(['get', 'post'],'/invoice', 'MainController@invoice');
Route::match(['get', 'post'], '/news', 'MainController@news');
// Route::get('/pdf', 'MainController@pdf');
Route::get('/receipt', 'MainController@receipt');
Route::get('/search', 'MainController@search');
Route::match(['get', 'post'],'/searchresult', 'MainController@searchresult');
Route::get('/sendreceipt','MainController@sendreceipt');

// Route::get('/pdf','MainController@export_pdf');
// Route::get('/invoicepdf','MainController@invoice_pdf');


Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/home', 'HomeController@adminHome')->name('home');
Route::match(['get', 'post'],'/admin/editroom', 'HomeController@editrooms');
Route::match(['get', 'post'],'/admin/editprice', 'HomeController@editprice');
Route::match(['get', 'post'],'/admin/transactions', 'HomeController@transactions');
Route::match(['get', 'post'],'/admin/rooms', 'HomeController@rooms');

