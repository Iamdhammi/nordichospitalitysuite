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
Route::get('/dreservation', 'MainController@dreservation');
Route::get('/dbreservation', 'MainController@dbreservation');
Route::get('/nsreservation', 'MainController@nsreservation');
Route::get('/nsbreservation', 'MainController@nsbreservation');
Route::get('/sreservation', 'MainController@sreservation');