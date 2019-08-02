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

Route::get('/', 'MainController@home');
Route::get('/about', 'MainController@about');
Route::get('/gallery', 'MainController@gallery');
Route::get('/contact', 'MainController@contact');
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
Route::get('/invoice', 'MainController@invoice');